<?php

define('IN_ECS',true);

require(dirname(__FILE__) .'/includes/init.php');
require_once(ROOT_PATH .'/'.ADMIN_PATH .'/includes/lib_goods.php');
require_once(ROOT_PATH .'/'.ADMIN_PATH .'/includes/lib_photoinfo.php');
include_once(ROOT_PATH . '/includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

if ($_REQUEST['act'] == 'photoinfo'){
	$goods_id = intval($_REQUEST['goods_id']);
	$sql = "SELECT * FROM ".$ecs->table('goods') ." WHERE goods_id = '$goods_id'";
	$goods = $db->getRow($sql);
	$smarty->assign('goods',$goods);
	$smarty->assign('goods_id',$goods_id);
	
	$smarty->display('photoinfo.htm');	
}elseif ($_REQUEST['act'] == 'photoinfo_preview'){
	
	$taoUrl = isset($_REQUEST['taoUrl']) ? trim($_REQUEST['taoUrl']) : '';
	$goods_name = isset($_REQUEST['goods_name']) ? trim($_REQUEST['goods_name']) : '';
	$goods_id = isset($_REQUEST['goods_id']) ? trim($_REQUEST['goods_id']) : '';
	
	if(empty($taoUrl)){
		$link[] = array('href'=>'goods.php?act=list','text'=>"商品列表");
		sys_msg("淘宝商品URL不能为空",1,$link);
	}
	
	$file_contents = get_file_get_contents($taoUrl);
	$file_contents['goods_name']=$goods_name;
	//var_dump($file_contents);
	$num=count($file_contents['photo']);
	
	$smarty->assign('data',$file_contents);
	$smarty->assign('num',$num);
	$smarty->assign('goods_id',$goods_id);
	$smarty->display('photoinfo_preview.htm');
	
}
elseif ($_REQUEST['act'] == 'photoinfo_batch_import'){
	
	$ids 		= isset($_POST['checkboxes']) ?$_POST['checkboxes'] : array();
	$goods_id 	= isset($_POST['goods_id']) ?$_POST['goods_id'] : 0;
	$photo_url	= isset($_POST['photo_url']) ?$_POST['photo_url'] : array();
	$img_desc	= isset($_POST['img_desc']) ?$_POST['img_desc'] : array();
	$goods_desc	= isset($_POST['goods_desc']) ?$_POST['goods_desc'] : array();

	if(count($ids) > 0){
		foreach($ids as $id){
			//生产缩略图
			$goods_thumb[$id] = $image->make_thumb( $photo_url[$id], $GLOBALS['_CFG']['thumb_width'],  $GLOBALS['_CFG']['thumb_height']);
			if ($goods_thumb === false){
				sys_msg($image->error_msg(), 1, array(), false);
			}
			//插入相册
			$sql = "INSERT INTO ".$ecs->table('goods_gallery') ."(goods_id, img_url, img_desc, thumb_url, img_original) VALUES "."('".$goods_id."', '".$photo_url[$id]."', '".$img_desc[$id]."', '".$goods_thumb[$id]."', '".$photo_url[$id]."')";
			$db->query($sql);
		}
		//修改商品描述
		$sql='UPDATE '.$ecs->table('goods').' SET goods_desc = "'.$goods_desc.'" WHERE goods_id = '.$goods_id;
		$db->query($sql);
		$success_failure = "添加成功";
	}else{
		$success_failure = "失败";
	}
	
	$link[] = array('href'=>'goods.php?act=list','text'=>"商品列表");
	sys_msg($success_failure,1,$link);;
}
?>