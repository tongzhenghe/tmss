<?php

/**
 * ECSHOP 管理中心入驻商家店铺橱窗管理
 * ============================================================================
 * * 版权所有 2005-2012 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wang $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

$exc = new exchange($ecs->table("seller_shopwindow"), $db, 'id', 'win_name');
//获取店铺模板
$sql="select seller_theme from ".$ecs->table('seller_shopinfo')." where seller_id='".$_SESSION['seller_id']."'";
$seller_theme=$db->getOne($sql);
/*------------------------------------------------------ */
//-- 店铺橱窗列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('ur_here','店铺橱窗列表');
    $smarty->assign('action_link',  array('text' => '添加店铺橱窗', 'href' => 'seller_window.php?act=add'));
    $smarty->assign('full_page',    1);

    $win_list = get_seller_window($seller_theme);

    $smarty->assign('win_list', $win_list);

    assign_query_info();
    $smarty->display('seller_window_list.htm');
}

/*------------------------------------------------------ */
//-- 添加橱窗
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'add')
{
	
	/* 创建 百度编辑器 wang 商家入驻 */
    create_ueditor_editor('win_custom',$seller_win['win_custom']);
	
    $smarty->assign('ur_here', '添加店铺橱窗');
    $smarty->assign('action_link', array('text' => '店铺橱窗列表', 'href' => 'seller_window.php?act=list'));
    $smarty->assign('form_action', 'insert');

    assign_query_info();

    $smarty->display('seller_window_info.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
	//检查名称是否重复
    $sql = 'SELECT COUNT(*) FROM ' .$ecs->table('seller_shopwindow'). " WHERE win_name = '$_POST[winname]' and seller_id='$_SESSION[seller_id]' and seller_theme='$seller_theme'";
    $number=$db->getOne($sql);
    if ($number>0)
    {
        sys_msg(sprintf('橱窗名称 %s 已经存在！', stripslashes($_POST['winname'])), 1);
    }
	
	$is_show = isset($_REQUEST['isshow']) ? intval($_REQUEST['isshow']) : 0;
	
	$win_name=!empty($_POST['winname'])?stripslashes($_POST['winname']):'';
	
	$win_img_link=!empty($_POST['winimglink'])?stripslashes($_POST['winimglink']):'#';
	
	$win_order=isset($_POST['winorder'])?intval($_POST['winorder']):0;
	
	$win_type = isset($_REQUEST['wintype']) ? intval($_REQUEST['wintype']) : 0;
	
	$win_color = isset($_REQUEST['wincolor']) ? stripslashes($_REQUEST['wincolor']) :'';
	
	$preg = "/<script[\s\S]*?<\/script>/i";
	
	$win_custom = isset($_REQUEST['win_custom']) ? preg_replace($preg,"",stripslashes($_REQUEST['win_custom'])) :'';
	

     /*处理图片*/
	///* 允许上传的文件类型 */
//    $allow_file_types = '|GIF|JPG|PNG|BMP|';
//	
//	if($_FILES['winimg'])
//	{
//		$file=$_FILES['winimg'];
//		 /* 判断用户是否选择了文件 */
//        if ((isset($file['error']) && $file['error'] == 0) || (!isset($file['error']) && $file['tmp_name'] != 'none'))
//        {
//            /* 检查上传的文件类型是否合法 */
//            if (!check_file_type($file['tmp_name'], $file['name'], $allow_file_types))
//            {
//                sys_msg(sprintf($_LANG['msg_invalid_file'], $file['name']));
//            }
//            else
//            {
//				
//                $ext = array_pop(explode('.',$file['name']));
//				$file_dir ='../seller_imgs/seller_win_img/seller_'.$_SESSION['seller_id'];
//				if(!is_dir($file_dir))
//				{
//					mkdir($file_dir);	
//				}
//				$file_name=$file_dir."/win_".gmtime().'.'.$ext;
//                /* 判断是否上传成功 */
//                if (move_upload_file($file['tmp_name'], $file_name))
//                {
//                    $win_img=$file_name;
//                }
//                else
//                {
//                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_dir));
//                }
//            }
//        }	
//	}

    /*插入数据*/
	if($win_name)
	{	
		 $sql = "INSERT INTO ".$ecs->table('seller_shopwindow')."(win_type,win_order,win_name, is_show, win_color, win_img,win_img_link,seller_id,win_custom,seller_theme) ".
           "VALUES ('$win_type', '$win_order', '$win_name', '$is_show', '$win_color', '$win_img','$win_img_link','".$_SESSION['seller_id']."','$win_custom','$seller_theme')";
		$db->query($sql);
		$wind_id=$db->insert_id();
		admin_log($_POST['winname'],'add','seller_shopwindow');
	
		/* 清除缓存 */
		clear_cache_files();
	
		$link[0]['text'] = '继续添加';
		$link[0]['href'] = 'seller_window.php?act=add';
	
		$link[1]['text'] = '返回列表';
		$link[1]['href'] = 'seller_window.php?act=list';
		
		$link[2]['text'] = '添加橱窗商品';
		$link[2]['href'] = 'seller_window.php?act=add_win_goods&id='.$wind_id;
	
		sys_msg('橱窗添加成功', 0, $link);
	}
	else
	{
		$link[0]['text'] = '继续添加';
		$link[0]['href'] = 'seller_window.php?act=add';
	
		sys_msg('橱窗添加失败', 0, $link);
	}
   
}

/*------------------------------------------------------ */
//-- 编辑橱窗
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    /* 权限判断 */
	
    //admin_priv('brand_manage');
	
    $sql = "SELECT * FROM " .$ecs->table('seller_shopwindow'). " WHERE id='$_REQUEST[id]' and seller_id='".$_SESSION['seller_id']."'";
    $seller_win = $db->GetRow($sql);
	
	/* 创建 百度编辑器 wang 商家入驻 */
    create_ueditor_editor('win_custom',$seller_win['win_custom']);

    $smarty->assign('ur_here', '店铺橱窗编辑');
    $smarty->assign('action_link', array('text' => '店铺橱窗列表', 'href' => 'seller_window.php?act=list'));
    $smarty->assign('seller_win',       $seller_win);
    $smarty->assign('form_action', 'update');

    assign_query_info();
    $smarty->display('seller_window_info.htm');
}
elseif ($_REQUEST['act'] == 'update')
{
    //admin_priv('brand_manage');
	
    $is_show = isset($_REQUEST['isshow']) ? intval($_REQUEST['isshow']) : 0;
	
	$win_name=!empty($_POST['winname'])?stripslashes($_POST['winname']):'';
	
	$win_img_link=!empty($_POST['winimglink'])?stripslashes($_POST['winimglink']):'#';
	
	$win_order=isset($_POST['winorder'])?intval($_POST['winorder']):0;
	
	$win_type = isset($_REQUEST['wintype']) ? intval($_REQUEST['wintype']) : 0;
	
	$win_color = isset($_REQUEST['wincolor']) ? stripslashes($_REQUEST['wincolor']) :'';
	
	//正则去掉js代码
	$preg = "/<script[\s\S]*?<\/script>/i";
	
	$win_custom = isset($_REQUEST['win_custom']) ? preg_replace($preg,"",stripslashes($_REQUEST['win_custom'])) :'';

	
    /*处理图片*/
	/* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|';
	
	if($_FILES['winimg'])
	{
		$file=$_FILES['winimg'];
		 /* 判断用户是否选择了文件 */
        if ((isset($file['error']) && $file['error'] == 0) || (!isset($file['error']) && $file['tmp_name'] != 'none'))
        {
            /* 检查上传的文件类型是否合法 */
            if (!check_file_type($file['tmp_name'], $file['name'], $allow_file_types))
            {
                sys_msg(sprintf($_LANG['msg_invalid_file'], $file['name']));
            }
            else
            {
				
                $ext = array_pop(explode('.',$file['name']));
				$file_dir ='../seller_imgs/seller_win_img/seller_'.$_SESSION['seller_id'];
				if(!is_dir($file_dir))
				{
					mkdir($file_dir);	
				}
				$file_name=$file_dir."/win_".gmtime().'.'.$ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $win_img=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_dir));
                }
            }
        }	
	}
	
    $param = "win_type='$win_type',win_order='$win_order', is_show='$is_show',win_color='$win_color',win_img_link='$win_img_link',win_custom='$win_custom',seller_theme='$seller_theme' ";
    if (!empty($win_img))
    {
        //有图片上传
        $param .= " ,win_img = '$win_img' ";
    }
	
	$is_only = $exc->is_only('win_name', $_POST['winname']);

    if ($is_only)
    {
        $param .= " ,win_name = '$win_name'";
    }

    if ($exc->edit($param,  $_POST['id']))
    {
        /* 清除缓存 */
        clear_cache_files();

        admin_log($_POST['winname'], 'edit', 'seller_shopwindow');

        $link[0]['text'] ='返回列表';
        $link[0]['href'] = 'seller_window.php?act=list';
        sys_msg('店铺橱窗编辑成功', 0, $link);
    }
    else
    {
        die($db->error());
    }
}

/*------------------------------------------------------ */
//-- 编辑橱窗名称
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_win_name')
{
    $id     = intval($_POST['id']);
    $name   = json_str_iconv(trim($_POST['val']));
	
    /* 检查名称是否重复 */
	$sql = 'SELECT COUNT(*) FROM ' .$ecs->table('seller_shopwindow'). " WHERE win_name = '$name' and seller_id='$_SESSION[seller_id]'";

    $number=$db->getOne($sql);
    if ($number>0)
    {
        make_json_error(sprintf('橱窗 %s 已存在', $name));
    }
    else
    {
        if ($exc->edit("win_name = '$name'", $id))
        {
            admin_log($name,'edit','seller_shopwindow');
            make_json_result(stripslashes($name));
        }
        else
        {
            make_json_result(sprintf('%s 编辑失败', $name));
        }
    }
}
/*------------------------------------------------------ */
//-- 编辑排序序号
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_sort_order')
{
    $id     = intval($_POST['id']);
    $order  = intval($_POST['val']);
    $name   = $exc->get_name($id);

    if ($exc->edit("win_order = '$order'", $id))
    {
        make_json_result($order);
    }
    else
    {
        make_json_error(sprintf('%s 编辑失败', $name));
    }
}

/*------------------------------------------------------ */
//-- 切换是否显示
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_show')
{

    $id     = intval($_POST['id']);
    $val    = intval($_POST['val']);

    $exc->edit("is_show='$val'", $id);

    make_json_result($val);
}
/*------------------------------------------------------ */
//-- 删除橱窗
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{

    $id = intval($_GET['id']);

    /* 删除该橱窗的图标 */
    $sql = "SELECT win_img FROM " .$ecs->table('seller_shopwindow'). " WHERE id = '$id' and seller_id='".$_SESSION['seller_id']."'";
    $win_img = $db->getOne($sql);
    if (!empty($win_img))
    {
        //@unlink(ROOT_PATH . DATA_DIR .$nav_img);
		@unlink($win_img);
    }

    $exc->drop($id);


    $url = 'seller_window.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $win_list = get_seller_window($seller_theme);
    $smarty->assign('win_list', $win_list);

    make_json_result($smarty->fetch('seller_window_list.htm'), '');
}
elseif($_REQUEST['act'] == 'add_win_goods')
{
	
	$id=!empty($_REQUEST['id'])?intval($_REQUEST['id']):0;
	
	$win_goods=get_win_goods($id);
	
	if($win_goods=='no_cc')
	{
		sys_msg('非法数据禁止访问');	
	}
	else
	{
		$win_info=get_win_info($id);
		
		$smarty->assign('win_info',$win_info);
		
		$smarty->assign('ur_here', '添加橱窗商品');
		$smarty->assign('cat_list', cat_list());
		$smarty->assign('brand_list', get_brand_list());
		
		$smarty->assign('goods_count',count($win_goods));
		$smarty->assign('win_goods',$win_goods);

		$smarty->assign('data_format', $data_format_array);
		//$smarty->assign('goods_fields', $goods_fields);
		
		assign_query_info();
		$smarty->display('add_win_goods.htm');
	}
}
elseif($_REQUEST['act'] == 'update_win_goods')
{
	$id=!empty($_POST['win_id'])?intval($_POST['win_id']):0;

	$link[0]['text'] ='继续添加';
    $link[0]['href'] = 'seller_window.php?act=add_win_goods&id='.$id;	
	$link[1]['text'] ='返回列表';
    $link[1]['href'] = 'seller_window.php?act=list';
	sys_msg('编辑橱窗商品成功', 0, $link);
}
/*------------------------------------------------------ */
//-- 把商品加入商品柜
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert_win_goods')
{
    include_once(ROOT_PATH . 'includes/cls_json.php');
    $json = new JSON;

    //check_authz_json('goods_manage');

    $linked_array   = $json->decode($_GET['add_ids']);
    $linked_window   = $json->decode($_GET['JSON']);
    $id       = $linked_window[0];
	$win_goods=$GLOBALS['db']->getOne("select win_goods from ".$GLOBALS['ecs']->table('seller_shopwindow')." where id='$id'");
    foreach ($linked_array AS $val)
    {
		if(!strstr($win_goods,$val)&&!empty($val))
		{
			$win_goods.=!empty($win_goods)?','.$val:$val;	
		}
    }
	
	$sql="update ".$GLOBALS['ecs']->table('seller_shopwindow') ." set win_goods='$win_goods' where id='$id'";
	$GLOBALS['db']->query($sql);
	
    $win_goods   = get_win_goods($id);
    $options        = array();

    foreach ($win_goods AS $val)
    {
        $options[] = array('value'  => $val['goods_id'],
                        'text'      => $val['goods_name'],
                        'data'      => '');
    }

    clear_cache_files();
    make_json_result($options);
}

/*------------------------------------------------------ */
//-- 删除关联商品
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'drop_win_goods')
{
    include_once(ROOT_PATH . 'includes/cls_json.php');
    $json = new JSON;

    //check_authz_json('goods_manage');

    $drop_goods     = $json->decode($_GET['drop_ids']);
	
    $linked_window   = $json->decode($_GET['JSON']);
    $id       = $linked_window[0];
	
	$win_goods=$GLOBALS['db']->getOne("select win_goods from ".$GLOBALS['ecs']->table('seller_shopwindow')." where id='$id'");
	$win_goods_arr=explode(',',$win_goods);
	
	foreach ($drop_goods AS $val)
    {
		if(strstr($win_goods,$val)&&!empty($val))
		{
			$key = array_search($val, $win_goods_arr);
			if ($key !== false)
			{
				array_splice($win_goods_arr, $key, 1);
			}
		}
    }
	$new_win_goods='';
	foreach ($win_goods_arr AS $val)
    {
		if(!strstr($new_win_goods,$val)&&!empty($val))
		{
			$new_win_goods.=!empty($new_win_goods)?','.$val:$val;	
		}
    }
	
	$sql="update ".$GLOBALS['ecs']->table('seller_shopwindow') ." set win_goods='$new_win_goods' where id='$id'";
	$GLOBALS['db']->query($sql);
	
    $win_goods   = get_win_goods($id);
    $options        = array();

    foreach ($win_goods AS $val)
    {
        $options[] = array(
                        'value' => $val['goods_id'],
                        'text'  => $val['goods_name'],
                        'data'  => '');
    }

    clear_cache_files();
    make_json_result($options);
}

/**
 * 获取橱窗列表
 *
 * @access  public
 * @return  array
 */
function get_seller_window($seller_theme)
{

        $sql = "SELECT * FROM ".$GLOBALS['ecs']->table('seller_shopwindow') .' WHERE seller_id = \''.$_SESSION['seller_id'].'\' and seller_theme = \''.$seller_theme.'\'';

        $win_list= $GLOBALS['db']->getAll($sql);
		
		foreach($win_list as $key=>$val)
		{
			$win_list[$key]['win_type_name']=$val['win_type']>0?'商品柜':'自定义内容';
		}
		
		return $win_list;
}

//获取某橱窗信息
function get_win_info($id)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_shopwindow')." where id='$id' and seller_id='".$_SESSION['seller_id']."'";
	
	return $GLOBALS['db']->getRow($sql);
}

//获取橱窗商品
function get_win_goods($id)
{
	$sql="select id,win_goods from ".$GLOBALS['ecs']->table('seller_shopwindow')." where id='$id' and seller_id='".$_SESSION['seller_id']."'";
	
	$win_info=$GLOBALS['db']->getRow($sql);

	if($win_info['id']>0)
	{
		$goods_ids=$win_info['win_goods'];
		$goods=array();
		if($goods_ids)
		{
				$sql="select goods_id,goods_name from ".$GLOBALS['ecs']->table('goods')." where seller_id='".$_SESSION['seller_id']."' and goods_id in ($goods_ids)";
				$goods = $GLOBALS['db']->getAll($sql);
		}
		return $goods;
	}
	else
	{
		return 'no_cc';
	}
}

?>
