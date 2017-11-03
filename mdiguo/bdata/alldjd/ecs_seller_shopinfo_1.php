<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopinfo`;");
E_C("CREATE TABLE `ecs_seller_shopinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '??id',
  `seller_id` int(11) NOT NULL COMMENT '????id',
  `shop_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `shop_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `shop_keyword` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '?????',
  `country` int(10) NOT NULL COMMENT '????',
  `province` int(10) NOT NULL COMMENT '????',
  `city` int(10) NOT NULL COMMENT '????',
  `shop_address` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `kf_qq` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '??qq',
  `kf_ww` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `kf_tel` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `shop_logo` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '??logo',
  `street_logo` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '????logo',
  `street_spjpg` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '???????',
  `notice` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `shop_header` text CHARACTER SET utf8 COMMENT '????',
  `shop_color` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '??????',
  `shop_style` tinyint(1) NOT NULL DEFAULT '1' COMMENT '????1??????????0??????????',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '????0??,1??',
  `apply` tinyint(1) NOT NULL DEFAULT '0' COMMENT '??????????0??1?',
  `is_street` tinyint(1) NOT NULL DEFAULT '0' COMMENT '?????????0??1?',
  `remark` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '?????????',
  `street_cate` int(11) NOT NULL,
  `street_tags` varchar(10) CHARACTER SET utf8 NOT NULL,
  `street_order` tinyint(4) NOT NULL COMMENT '?????????',
  `two_code` tinyint(1) NOT NULL DEFAULT '0' COMMENT '?????',
  `two_code_logo` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT '???logo',
  `seller_theme` varchar(50) CHARACTER SET utf8 NOT NULL,
  `store_style` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shop_name` (`shop_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='???????'");
E_D("replace into `ecs_seller_shopinfo` values('1','2','??????','??','??','1','25','321','??????','212121','2121221','212121','../seller_imgs/seller_logo/seller_logo2.gif','../seller_imgs/street_logo/street_logo2.jpg','../seller_imgs/street_spjpg/street_spjpg2.jpg','',NULL,NULL,'0','1','1','1','','1','1','0','0','','store_tpl_12','');");

require("../../inc/footer.php");
?>