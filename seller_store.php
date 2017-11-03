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
require(dirname(__FILE__) . '/includes/lib_seller_store.php');
//生产二维码类库
require(dirname(__FILE__) . '/includes/phpqrcode/phpqrcode.php');

$act = !isset($_REQUEST['act']) ? 'info' : $_REQUEST['act'];
assign_template();
/**
 * 商家店铺页面
 */
if($act == 'info') {
	
	//商家店铺二维码
	if($_CFG['store_two_code'])
    {
        $logo = !empty($store['two_code_logo']) ? str_replace('../','',$store['two_code_logo']) : 'seller_imgs/seller_code_logo/code_logo.gif';

        $size = '100x100';
        $data = trim($_CFG['two_code_links']) . "/mobile/index.php?m=default&c=sellerstore&a=index&sid=".$store['id'];
        $errorCorrectionLevel = 'M'; // 纠错级别：L、M、Q、H
		$matrixPointSize = 3; // 点的大小：1到10
		$filename = 'seller_imgs/seller_code/code_'.$store['id'].'.png';
			
		QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize);
		  
		$QR = imagecreatefrompng($filename);//Warning: imagecreatefrompng() [function.imagecreatefrompng]: Unable to find the wrapper "https" - did you forget to enable it when you configured PHP? =
		//$QR = imagecreatefrompng('./chart.png');//外面那QR图
		if($logo !== FALSE){
			 $logo = imagecreatefromstring(file_get_contents($logo));
			  
			 $QR_width = imagesx($QR);
			 $QR_height = imagesy($QR);
				   
			 $logo_width = imagesx($logo);
			 $logo_height = imagesy($logo);
					  
			 // Scale logo to fit in the QR Code
			 $logo_qr_width = $QR_width/5;
			 $scale = $logo_width/$logo_qr_width;
			 $logo_qr_height = $logo_height/$scale;
			 $from_width = ($QR_width-$logo_qr_width)/2;
			 //echo $from_width;exit;
			 imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
				
        }
      	
        imagepng($QR, $filename);
        imagedestroy($QR);
        $smarty->assign('code_img_url', $filename);
    }
	$smarty->assign('store_two_code',$_CFG['store_two_code']);//店铺二维码
	$smarty->assign('store',$store);
	$smarty->assign('header_content',get_store_header($store['seller_id'],$store['seller_theme']));
	$smarty->assign('store_bg',get_store_bg($store['seller_id'],$store['seller_theme']));
	$smarty->assign('store_slide',get_store_slide($store['seller_id'],$store['seller_theme']));
	$smarty->assign('store_windows',get_store_window($store['seller_id'],$store['seller_theme']));
	$smarty->assign('store_nav',get_store_nav($store['seller_id']));
	$smarty->assign('store_cate',get_store_cat(0,$store['seller_id'],$store_id));
	//店铺热销排行
	$top_goods=get_seller_top10($store['seller_id']);
	$smarty->assign('top_goods',$top_goods);
    $smarty->display($store['seller_theme'].'/seller_store.dwt');
}

?>