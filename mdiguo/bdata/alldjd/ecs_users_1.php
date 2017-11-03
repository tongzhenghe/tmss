<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('1','','ecshop@ecshop.com','ecshop','554fcae493e564ee0dc75bdf2ebf94ca','','','0','1960-03-03','0.00','0.00','98388','15390','1','0','1245048540','0000-00-00 00:00:00','0.0.0.0','11','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('2','','vip@ecshop.com','vip','232059cb5361a9336ccf1b8c2ba7657a','','','0','1949-01-01','0.00','0.00','0','0','0','0','0','0000-00-00 00:00:00','','0','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('3','','text@ecshop.com','text','1cb251ec0d568de6a929b520c4aed8d1','','','0','1949-01-01','0.00','0.00','2623','2623','2','0','1242973574','0000-00-00 00:00:00','0.0.0.0','2','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('5','','zuanshi@ecshop.com','zuanshi','815a71fb334412e7ba4595741c5a111d','','','0','1949-01-01','0.00','10000.00','0','0','0','0','0','0000-00-00 00:00:00','','0','3','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('6','','admin123@qq.com','admin9041','79e4fb1ec5cb478cf37721d4fbcf4014','','','0','0000-00-00','0.00','0.00','10036756','36756','3','1401218841','1408038957','0000-00-00 00:00:00','127.0.0.1','29','0','0','2330','0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('7','','zhouhuan@ecmoban.com','admin90412','0192023a7bbd73250516f069df18b500','','','0','0000-00-00','0.00','0.00','0','0','0','1403116746','1403116746','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('8','','444@qq.com','admin123','03b6f64520b9d63e915b0a489e86532b','','','0','0000-00-00','0.00','0.00','0','0','4','1407698971','1407889387','0000-00-00 00:00:00','127.0.0.1','25','0','0','6380','0','0','0','','111@live.cn','11','222','33','44','0','0.00','old_address','55');");
E_D("replace into `ecs_users` values('9','','admin1234@qq.com','admin1234','0192023a7bbd73250516f069df18b500','','','0','0000-00-00','0.00','0.00','0','0','0','1407699009','1407699009','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','admin123@live.cn','11111','22','23','34','0','0.00','old_address','5555');");
E_D("replace into `ecs_users` values('10','','111@123.com','1234567','fcea920f7412b5da7be0cf42b8c93759','','','0','0000-00-00','0.00','0.00','0','0','0','1407888445','1407888445','0000-00-00 00:00:00','192.168.1.10','1','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('11','','1111@123.com','12345678','25d55ad283aa400af464c76d713c07ad','','','0','0000-00-00','0.00','0.00','0','0','0','1408317120','1408317120','0000-00-00 00:00:00','192.168.1.10','1','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('12','','123456@qq.com','ecmoban','b14f7bbb7071906cc656cea62bf7e484','','','0','0000-00-00','4436.60','9999.00','15897','15897','5','1428970981','1430271687','0000-00-00 00:00:00','127.0.0.1','40','0','0','182','0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('13','','123123@qq.com','xiaosong','4297f44b13955235245b2497399d7a93','','','0','0000-00-00','0.00','0.00','0','0','0','1430155001','1430155001','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL);");
E_D("replace into `ecs_users` values('14','','xiaocong@qq.com','xiaocong','85de51928a11919d1ddc76f2615af739','','','0','0000-00-00','0.00','0.00','0','0','6','1432240386','1432241106','0000-00-00 00:00:00','127.0.0.1','2','0','0','1542','0','0','0','','xiaocong@qq.com','454545','','','','0','0.00',NULL,NULL);");

require("../../inc/footer.php");
?>