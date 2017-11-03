<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_show_img` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `seller_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('1','1','商品匹数','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('2','1','产品特色','0','2','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('3','2','尺寸','0','1','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('4','2','功能','0','1','','0','0','1','0','0','0');");
E_D("replace into `ecs_attribute` values('5','2','分辨率','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('6','2','品类','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('7','2','居室场景','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('8','2','可选颜色','0','1','','0','0','0','0','1','0');");

require("../../inc/footer.php");
?>