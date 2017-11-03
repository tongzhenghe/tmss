<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_nav`;");
E_C("CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','index.php?c=category&amp;a=top_all','themes/weipinhui/images/nav/nav_0.png','middle');");
E_D("replace into `ecs_touch_nav` values('2','','0','个人中心','1','0','0','index.php?m=default&amp;c=user','themes/weipinhui/images/nav/nav_1.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','购物车','1','0','0','index.php?m=default&amp;c=flow&amp;a=cart','themes/weipinhui/images/nav/nav_2.png','middle');");
E_D("replace into `ecs_touch_nav` values('4','','0','最新团购','1','0','0','index.php?m=default&amp;c=groupbuy','themes/weipinhui/images/nav/nav_3.png','middle');");

require("../../inc/footer.php");
?>