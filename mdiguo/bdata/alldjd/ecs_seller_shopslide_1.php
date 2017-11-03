<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopslide`;");
E_C("CREATE TABLE `ecs_seller_shopslide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??id',
  `seller_id` int(11) NOT NULL DEFAULT '0' COMMENT '????id',
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `img_link` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '?????',
  `img_desc` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `img_order` smallint(6) NOT NULL DEFAULT '0' COMMENT '??',
  `slide_type` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'roll' COMMENT '??????''roll'',''shade'',???''roll''',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '????',
  `seller_theme` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_seller_shopslide` values('1','2','/seller_themes/store_tpl_16/slide_imgs/banner_1.jpg\r\n','','','0','roll','1','store_tpl_16');");
E_D("replace into `ecs_seller_shopslide` values('2','2','/seller_themes/store_tpl_16/slide_imgs/banner_2.jpg','','','0','roll','1','store_tpl_16');");
E_D("replace into `ecs_seller_shopslide` values('3','2','/seller_themes/store_tpl_12/slide_imgs/banner_1.jpg\r\n','','','0','roll','1','store_tpl_12');");
E_D("replace into `ecs_seller_shopslide` values('4','2','/seller_themes/store_tpl_12/slide_imgs/banner_2.jpg\r\n','','','0','roll','1','store_tpl_12');");
E_D("replace into `ecs_seller_shopslide` values('5','2','/seller_themes/store_tpl_12/slide_imgs/banner_3.jpg','','','0','roll','1','store_tpl_12');");
E_D("replace into `ecs_seller_shopslide` values('6','0','/seller_themes/store_tpl_8/slide_imgs/banner_1.jpg','','','0','roll','1','store_tpl_8');");
E_D("replace into `ecs_seller_shopslide` values('7','0','/seller_themes/store_tpl_10/slide_imgs/banner_1.jpg\r\n','','','0','roll','1','store_tpl_10');");
E_D("replace into `ecs_seller_shopslide` values('8','0','/seller_themes/store_tpl_10/slide_imgs/banner_2.jpg','','','0','roll','1','store_tpl_10');");
E_D("replace into `ecs_seller_shopslide` values('9','0','/seller_themes/store_tpl_1/slide_imgs/banner_1.jpg\r\n','','','0','roll','1','store_tpl_1');");
E_D("replace into `ecs_seller_shopslide` values('10','0','/seller_themes/store_tpl_1/slide_imgs/banner_2.jpg\r\n','','','0','roll','1','store_tpl_1');");
E_D("replace into `ecs_seller_shopslide` values('11','0','/seller_themes/store_tpl_1/slide_imgs/banner_3.jpg','','','0','roll','1','store_tpl_1');");

require("../../inc/footer.php");
?>