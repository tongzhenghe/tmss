<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_category`;");
E_C("CREATE TABLE `ecs_seller_category` (
  `seller_cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_on_top` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cat_img` varchar(100) NOT NULL COMMENT '分类图片',
  `seller_id` int(11) NOT NULL COMMENT '入驻商家id',
  `is_text` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示文字还是图片默认显示文字文字',
  PRIMARY KEY (`seller_cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=319 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_category` values('318','模板','','','0','50','','','0','','1','0','','0','0','','2','1');");

require("../../inc/footer.php");
?>