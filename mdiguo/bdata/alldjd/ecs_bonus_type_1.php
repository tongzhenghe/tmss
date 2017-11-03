<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bonus_type`;");
E_C("CREATE TABLE `ecs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_bonus_type` values('1','用户红包','2.00','0','0.00','0.00','1242057600','1244736000','1242057600','1250006400','500.00');");
E_D("replace into `ecs_bonus_type` values('2','商品红包','10.00','1','0.00','0.00','1241971200','1250352000','1242057600','1250006400','500.00');");
E_D("replace into `ecs_bonus_type` values('3','订单红包','20.00','2','1500.00','0.00','1242057600','1309363200','1242057600','1257955200','800.00');");
E_D("replace into `ecs_bonus_type` values('4','线下红包','5.00','3','0.00','0.00','1242057600','1244736000','1242057600','1255449600','360.00');");

require("../../inc/footer.php");
?>