<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_favourable_activity`;");
E_C("CREATE TABLE `ecs_favourable_activity` (
  `act_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `user_rank` varchar(255) NOT NULL,
  `act_range` tinyint(3) unsigned NOT NULL,
  `act_range_ext` varchar(255) NOT NULL,
  `min_amount` decimal(10,2) unsigned NOT NULL,
  `max_amount` decimal(10,2) unsigned NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `act_type_ext` decimal(10,2) unsigned NOT NULL,
  `gift` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_favourable_activity` values('1','5.1诺基亚优惠活动','1241107200','1253030400','1,2','2','1','500.00','5000.00','2','95.00','a:0:{}','50');");
E_D("replace into `ecs_favourable_activity` values('2','测试优惠活动1','1400140800','1432022400','0,1,2,3','3','6','0.00','0.00','0','0.00','a:1:{i:0;a:3:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:47:\"[VT]印花T恤 SWEET SMILE(女款) 玛瑙红色\";s:5:\"price\";s:1:\"0\";}}','50');");
E_D("replace into `ecs_favourable_activity` values('3','满1000.0元减免149.0元','1407312000','1407657600','0,1,2,3','3','2','0.00','0.00','1','149.00','a:0:{}','50');");
E_D("replace into `ecs_favourable_activity` values('4','满2000.0元送剃须刀','1407312000','1407657600','0,1,2,3','3','2','0.00','0.00','0','0.00','a:1:{i:0;a:3:{s:2:\"id\";s:2:\"11\";s:4:\"name\";s:65:\"雷瓦（Riwa）RB-807S 两用陶瓷卷发棒 卷发器/直发器\";s:5:\"price\";s:1:\"0\";}}','50');");
E_D("replace into `ecs_favourable_activity` values('5','店铺周年庆活动，全场八折起！','1428998400','1434268800','1,2,3','3','2','0.00','0.00','2','80.00','a:0:{}','50');");

require("../../inc/footer.php");
?>