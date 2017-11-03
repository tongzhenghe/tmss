<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','1','0','2','0','1','1406762036');");
E_D("replace into `ecs_order_action` values('2','1','admin','5','5','2','0','','1406762040');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','1','2','1','','1406762046');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','0','2','0','1','1406763629');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','5','2','0','','1406763634');");
E_D("replace into `ecs_order_action` values('6','2','admin','1','1','2','1','','1406763639');");
E_D("replace into `ecs_order_action` values('7','3','admin','1','0','2','0','1','1407369185');");
E_D("replace into `ecs_order_action` values('8','3','admin','5','5','2','0','','1407369190');");
E_D("replace into `ecs_order_action` values('9','3','admin','1','1','2','1','','1407369195');");
E_D("replace into `ecs_order_action` values('10','5','admin','1','0','2','0','1','1407979997');");
E_D("replace into `ecs_order_action` values('11','5','admin','5','5','2','0','','1407980003');");
E_D("replace into `ecs_order_action` values('12','5','admin','1','1','2','1','','1407980010');");
E_D("replace into `ecs_order_action` values('13','6','admin','1','0','2','0','1','1408038990');");
E_D("replace into `ecs_order_action` values('14','6','admin','5','5','2','0','','1408038996');");
E_D("replace into `ecs_order_action` values('15','6','admin','1','1','2','1','','1408039002');");
E_D("replace into `ecs_order_action` values('16','6','admin','5','5','2','1','','1408317454');");
E_D("replace into `ecs_order_action` values('17','6','admin','1','1','2','1','','1408317460');");
E_D("replace into `ecs_order_action` values('18','5','admin','5','5','2','1','','1408317465');");
E_D("replace into `ecs_order_action` values('19','5','admin','1','1','2','1','','1408317469');");
E_D("replace into `ecs_order_action` values('20','3','admin','5','5','2','1','','1408390265');");
E_D("replace into `ecs_order_action` values('21','3','admin','1','1','2','1','','1408390270');");
E_D("replace into `ecs_order_action` values('22','1','admin','5','5','2','1','','1408390275');");
E_D("replace into `ecs_order_action` values('23','1','admin','1','1','2','1','','1408390277');");
E_D("replace into `ecs_order_action` values('24','2','admin','5','5','2','1','','1408390308');");
E_D("replace into `ecs_order_action` values('25','2','admin','1','1','2','1','','1408390312');");
E_D("replace into `ecs_order_action` values('26','16','admin','1','3','2','0','','1429651111');");
E_D("replace into `ecs_order_action` values('27','18','admin','1','0','2','0','1','1430244084');");
E_D("replace into `ecs_order_action` values('28','18','admin','1','3','2','0','','1430244089');");
E_D("replace into `ecs_order_action` values('29','18','admin','5','5','2','0','','1430244098');");
E_D("replace into `ecs_order_action` values('30','18','admin','1','1','2','1','','1430244106');");

require("../../inc/footer.php");
?>