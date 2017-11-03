<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_tag`;");
E_C("CREATE TABLE `ecs_tag` (
  `tag_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tag_words` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tag_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_tag` values('1','0','13','音乐手机');");
E_D("replace into `ecs_tag` values('2','0','14','音乐手机');");
E_D("replace into `ecs_tag` values('3','0','23','音乐手机');");
E_D("replace into `ecs_tag` values('4','0','23','智能手机');");
E_D("replace into `ecs_tag` values('5','0','14','智能手机');");
E_D("replace into `ecs_tag` values('6','0','22','智能手机');");
E_D("replace into `ecs_tag` values('7','0','31','音乐手机');");

require("../../inc/footer.php");
?>