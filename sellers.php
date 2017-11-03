<?php

/**
 * ECSHOP 供应商列表
 * ============================================================================
 * ecshop 模板堂 
 * @author: Leah 
 * @since: 2013/10/12
 */
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');

include_once(ROOT_PATH . '/includes/cls_image.php');

$image = new cls_image($_CFG['bgcolor']);
if ((DEBUG_MODE & 2) != 2) {
    $smarty->caching = true;
}

$act = !isset($_REQUEST['act']) ? 'sellers_info' : $_REQUEST['act'];

$smarty->assign('categories',         get_categories_tree());  // 分类树

$position = assign_ur_here(0, $_LANG['user_center']);

$smarty->assign('page_title', '用户中心_商家入驻'); // 页面标题
$smarty->assign('ur_here',    $position['ur_here']);
$smarty->assign('lang', $_LANG);

assign_template();
/**
 * 商家入驻申请页面
 */
if($act == 'sellers_info') {

    check_user();

    /* 取出注册扩展字段 */
    $sf_sql = 'SELECT * FROM ' . $ecs->table('seller_fields') . ' WHERE display = 1 ORDER BY dis_order';
    $seller_fields_list = $db->getAll($sf_sql);
	//取出会员注册的信息
	$se_sql='SELECT reg_field_id,content FROM ' . $ecs->table('seller_extend_info') . ' WHERE user_id = '.$_SESSION['user_id'];
	$seller_extend_info=$db->getAll($se_sql);

	if($seller_extend_info)
	{
		$action='seller_edit';	
	}
	else
	{
		$action='sellers_info';
	}
	
	foreach($seller_fields_list as $key=>$val)
	{
		if(!empty($val['select_options'])&&$val['type']=='select')
		{
			$arr=explode("\n",$val['select_options']);
			
			foreach($arr as $key2=>$val2){
			  if(!$val2)
			  {
				  unset($arr[$key2]);
			  }
			  $arr[$key2]=trim($val2);
			}
		
			$seller_fields_list[$key]['select_options']=$arr;
		}
		
		if($seller_extend_info)
		{
			foreach($seller_extend_info as $val3)
			{
				if($val['id']==$val3['reg_field_id'])
				{
					$seller_fields_list[$key]['content']=trim($val3['content']);
				}		
			}
		}
	}
	
	//获取入驻商家审核状态信息

	$sql="select is_check,st.id as store_id,us.id as seller_id from ".$ecs->table('user_seller')." as us left join ".$ecs->table('seller_shopinfo')." as st on us.id=st.seller_id where us.user_id='".$_SESSION['user_id']."'";
	$seller_info=$db->getRow($sql);
	$smarty->assign('seller',$seller_info);
	
	$smarty->assign('seller',$seller_info);
	
    $smarty->assign('seller_fields_list', $seller_fields_list);
    
	$smarty->assign('action',$action);
    $smarty->assign('act', 'apply');
    $smarty->display('seller_apply.dwt');
}
/**
 * 提交商家申请信息
 */ 
elseif ($act == 'act_apply') {
	
    check_user();
	$seller_info=$_POST['seller_info'];
	
    //上传资料数据
    if ($_FILES) {
		foreach($_FILES as $key=>$val)
		{
			if ($val['size']>0) {
				
				if (!$image->check_img_type($val['type'])) {
					show_message('商品图片格式不正确');
				}
				$ext=explode('.',$val['name']);
				
            	$seller_info[$key] = $image->upload_image($val, 'seller_'.$_SESSION['user_id'],'reg_'.$key.'.'.$ext[1]);
        	}
			
		}
    }
	
    /* 把新注册供货商的扩展信息插入数据库 */
    $sql = 'SELECT id,is_need FROM ' . $ecs->table('seller_fields') . ' WHERE display = 1 ORDER BY dis_order';   //读出所有自定义扩展字段的id
    $fields_arr = $db->getAll($sql);

    foreach ($fields_arr AS $val) {
		if($val['is_need']&&empty($seller_info[$val['id']]))
		{
			show_message("请将必填项填写完整，否则无法完成申请！", '', 'sellers.php');
		}
		else
		{
			if (!empty($seller_info[$val['id']])) {
				$temp_field_content = strlen($seller_info[$val['id']]) > 200 ? mb_substr($seller_info[$val['id']], 0, 199) : $seller_info[$val['id']];
				$extend_field_str .= " ('" . $_SESSION['user_id'] . "', '" . $val['id'] . "', '" . trim(compile_str($temp_field_content)) . "'),";
       		}	
		}
    	
    }
    $extend_field_str = substr($extend_field_str, 0, -1);
    if ($extend_field_str) {      //插入注册扩展数据
        $sql = 'INSERT INTO ' . $ecs->table('seller_extend_info') . ' (`user_id`, `reg_field_id`, `content`) VALUES' . $extend_field_str;
        if($db->query($sql))
		{
			$sql="select count(id) from ".$ecs->table('user_seller')." where user_id='".$_SESSION['user_id']."'";
			$count=$db->getOne($sql);
			if($count>0)
			{
				show_message("您已经提交过申请，如有问题请联系网站客服", '', 'sellers.php');
			}
			else
			{
				$us_sql="insert into ".$ecs->table('user_seller')." (user_id,is_check,add_time) values (".$_SESSION['user_id'].",0,".gmtime().")";
				if($db->query($us_sql))
				{
					show_message("申请已提交，请耐心等待后台管理员审核", '', 'sellers.php');	
				}	
			}
		}
		else
		{
			show_message("数据提交失败，请稍后再试", '', 'sellers.php');	
		}
    }
    else
	{
		show_message("请耐心填写申请信息", '', 'sellers.php');		
	}
}
elseif($act == 'update')
{
		check_user();
		
		$seller_info=$_POST['seller_info'];

		//上传资料数据
		if ($_FILES) {
			foreach($_FILES as $key=>$val)
			{
				if ($val['size']>0) {
					
					if (!$image->check_img_type($val['type'])) {
						show_message('商品图片格式不正确');
					}
					$ext=explode('.',$val['name']);
					
					$seller_info[$key] = $image->upload_image($val, 'seller_'.$_SESSION['user_id'],'reg_'.$key.'.'.$ext[1]);
				}
				
			}
		}
		
		//更新商家入驻申请信息
 		$sql = 'SELECT id,is_need,type FROM ' . $ecs->table('seller_fields') . ' WHERE display = 1 ORDER BY dis_order';   		        //读出所有扩展字段的id
        $fields_arr = $db->getAll($sql);

        foreach ($fields_arr AS $val)       //循环更新扩展用户信息
        {
			if($val['is_need']&&$val['type']!='file'&&empty($seller_info[$val['id']]))
			{
				show_message("请将必填项填写完整！", '', 'sellers.php');
			}
            if(isset($seller_info[$val['id']]))
            {
                $temp_field_content = strlen($seller_info[$val['id']]) > 200 ? mb_substr($seller_info[$val['id']], 0, 199) : $seller_info[$val['id']];

                $sql = 'SELECT * FROM ' . $ecs->table('seller_extend_info') . "  WHERE reg_field_id = '$val[id]' AND user_id = '".$_SESSION['user_id']."'";

                if ($db->getRow($sql))
                {
                    $sql = 'UPDATE ' . $ecs->table('seller_extend_info') . " SET content = '".trim(compile_str($temp_field_content))."' WHERE reg_field_id = '$val[id]' AND user_id = '".$_SESSION['user_id']."'";
                }
                else
                {
                    $sql = 'INSERT INTO '. $ecs->table('seller_extend_info') . " (`user_id`, `reg_field_id`, `content`) VALUES ('".$_SESSION['user_id']."', '$val[id]', '".trim(compile_str($temp_field_content))."')";
                }
                $db->query($sql);
            }
        }
		$us_sql="update ".$ecs->table('user_seller')." set is_check=0,add_time=".gmtime()." where user_id='".$_SESSION['user_id']."'";
		$db->query($us_sql);
		show_message('申请信息修改成功,等待管理员审核','', 'sellers.php');
}
function check_user()
{
	//判断供货商注册设置
    if(!$_CFG['seller_reg']){
        if( !$_SESSION['user_id'] ){
             show_message('申请供货商必须登陆会员账户', '登陆', 'user.php');
        } 
    }	
}
?>