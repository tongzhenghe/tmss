<?php
/**
 * ECSHOP 控制台首页
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: index.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);



require(dirname(__FILE__) . '/includes/init.php');

//获取店铺模板
$sql="select seller_theme from ".$ecs->table('seller_shopinfo')." where seller_id='".$_SESSION['seller_id']."'";
$seller_theme=$db->getOne($sql);


if ($_REQUEST['act'] == 'first')
{

    //获取入驻商家店铺信息 wang 商家入驻
	$sql="select * from ".$ecs->table('seller_shopbg')." where seller_id='".$_SESSION['seller_id']."' and seller_theme='$seller_theme'";
	$seller_shopbg=$db->getRow($sql);
	$action='add';
	if($seller_shopbg)
	{
		$seller_shopbg['bgimg']='../'.$seller_shopbg['bgimg'];
		$action='update';	
	}
	
	$smarty->assign('shop_bg',$seller_shopbg);
	
	$smarty->assign('data_op',$action);
    assign_query_info();

    $smarty->assign('ur_here','设置店铺背景');
    $smarty->display('seller_shopbg.htm');
}

/*------------------------------------------------------ */
//-- 开店向导第二步
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'second')
{
    $bgrepeat = empty($_POST['bgrepeat']) ? 'no-repeat' : trim($_POST['bgrepeat']);
    $bgcolor = empty($_POST['bgcolor']) ? '' : trim($_POST['bgcolor']);
	$show_img = empty($_POST['show_img']) ? '0' : intval($_POST['show_img']);
	$is_custom = empty($_POST['is_custom']) ? '0' : intval($_POST['is_custom']);
	$data_op = empty($_POST['data_op']) ? '' : trim($_POST['data_op']);
	$shop_bg=array(
		'seller_id'=>$_SESSION['seller_id'],
		'seller_theme'=>$seller_theme,
		'bgrepeat'=>$bgrepeat,
		'bgcolor'=>$bgcolor,
		'show_img'=>$show_img,
		'is_custom'=>$is_custom
	);
	/* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|';
	//上传店铺logo
	if($_FILES['bgimg'])
	{
		$file=$_FILES['bgimg'];
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
                $file_name ='../seller_imgs/seller_bg_img/seller_bg_'.$seller_theme.'_'.$_SESSION['seller_id'].'.'. $ext;
                /* 判断是否上传成功 */
                if(move_upload_file($file['tmp_name'], $file_name))
                {
                    $shop_bg['bgimg']=str_replace('../','',$file_name);
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}

	if($data_op=='add')
	{
		$db->autoExecute($ecs->table('seller_shopbg'),$shop_bg);
		$lnk[] = array('text' => '返回首页','href'=>'index.php?act=main');
		sys_msg('编辑店铺背景成功', 0, $lnk);	
	}
	else
	{
		
		$db->autoExecute($ecs->table('seller_shopbg'),$shop_bg,'update',"seller_id='".$_SESSION['seller_id']."' and seller_theme='$seller_theme'");
		$lnk[] = array('text' => '返回首页','href'=>'index.php?act=main');
		sys_msg('跟新店铺背景成功', 0, $lnk);
	}
}

?>
