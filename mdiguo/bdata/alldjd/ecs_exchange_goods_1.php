<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_exchange_goods`;");
E_C("CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_exchange_goods` values('24','17000','1','1');");
E_D("replace into `ecs_exchange_goods` values('19','80000','1','1');");
E_D("replace into `ecs_exchange_goods` values('15','20000','1','1');");
E_D("replace into `ecs_exchange_goods` values('17','16000','1','1');");
E_D("replace into `ecs_exchange_goods` values('16','17000','1','1');");
E_D("replace into `ecs_exchange_goods` values('6','1900','1','0');");
E_D("replace into `ecs_exchange_goods` values('2','10000','1','0');");

require("../../inc/footer.php");
?>