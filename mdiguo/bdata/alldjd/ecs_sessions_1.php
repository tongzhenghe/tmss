<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('925afdc969a16073bc06b6e59659f169','1446000499','0','0','127.0.0.1','0','0','1.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('f3eda032f77c4a277846d1601023db5e','1446000085','0','0','127.0.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"M2ExZmEzMzdiZQ==\";}');");
E_D("replace into `ecs_sessions` values('84d17419565f7a8a76339faabe6f19a2','1446001218','0','0','127.0.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"MGZhYTRmZmM2Ng==\";}');");
E_D("replace into `ecs_sessions` values('0687c0c03e66b6cfa8738b441a5d3069','1446001243','0','1','127.0.0.1','0','0','0.00','0','a:5:{s:9:\"seller_id\";s:1:\"0\";s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1445972351;s:12:\"suppliers_id\";s:1:\"0\";}');");

require("../../inc/footer.php");
?>