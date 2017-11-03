<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `parent_log_id` int(11) NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','0','503.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','0','8097.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','0','4998.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','0','35.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','0','2198.10','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','0','638.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','0','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','0','3810.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','0','253.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','0','975.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','0','17054.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','20','0','1401.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','21','0','327.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','22','0','124.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','1','0','2214.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','2','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','3','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','4','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','5','0','88249.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','6','0','26488.70','0','0');");
E_D("replace into `ecs_pay_log` values('28','7','0','2170.70','0','0');");
E_D("replace into `ecs_pay_log` values('29','8','0','131.50','0','0');");
E_D("replace into `ecs_pay_log` values('30','9','0','3521.90','0','0');");
E_D("replace into `ecs_pay_log` values('31','10','0','1762.70','0','0');");
E_D("replace into `ecs_pay_log` values('32','11','0','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('33','12','0','1814.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','13','0','1762.70','0','0');");
E_D("replace into `ecs_pay_log` values('35','14','0','1814.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','15','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('37','16','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('38','17','0','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('39','18','0','4721.90','0','0');");
E_D("replace into `ecs_pay_log` values('40','19','41','280.30','0','0');");
E_D("replace into `ecs_pay_log` values('41','20','0','280.30','0','0');");

require("../../inc/footer.php");
?>