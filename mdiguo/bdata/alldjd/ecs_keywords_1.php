<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2014-05-15','ecshop','棉色织格子花边舒适女式长袖衬衫','1');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','衣','55');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','1','26');");
E_D("replace into `ecs_keywords` values('2014-06-12','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','天空','1');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','D48','2');");
E_D("replace into `ecs_keywords` values('2014-08-08','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-09','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','1','40');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','的（Midea）','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','FS406C','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','4L','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','电脑版电饭煲','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','防晒隔离','1');");
E_D("replace into `ecs_keywords` values('2014-08-14','ecshop','1','6');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','1','5');");
E_D("replace into `ecs_keywords` values('2014-08-20','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2015-04-21','ecshop','dsadsa','1');");
E_D("replace into `ecs_keywords` values('2015-04-24','ecshop','dsada','1');");
E_D("replace into `ecs_keywords` values('2015-04-24','ecshop','1','2');");
E_D("replace into `ecs_keywords` values('2015-04-24','ecshop','办公文具','2');");
E_D("replace into `ecs_keywords` values('2015-04-24','ecshop','夏装1折','1');");

require("../../inc/footer.php");
?>