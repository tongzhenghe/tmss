<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','32','163','','100');");
E_D("replace into `ecs_products` values('2','24','167','','100');");
E_D("replace into `ecs_products` values('3','23','175','','100');");
E_D("replace into `ecs_products` values('4','21','188','','20');");
E_D("replace into `ecs_products` values('5','20','194','','13');");
E_D("replace into `ecs_products` values('6','17','201','','1');");
E_D("replace into `ecs_products` values('7','14','213','','4');");
E_D("replace into `ecs_products` values('8','13','217','','8');");
E_D("replace into `ecs_products` values('9','10','239','','6');");
E_D("replace into `ecs_products` values('10','10','240','','12');");
E_D("replace into `ecs_products` values('11','9','227','','12');");
E_D("replace into `ecs_products` values('12','9','226','','3');");
E_D("replace into `ecs_products` values('13','8','231','','17');");
E_D("replace into `ecs_products` values('14','1','237','','1');");
E_D("replace into `ecs_products` values('15','6','45|46','ECS000006g_p15','10000');");
E_D("replace into `ecs_products` values('16','6','44|47','ECS000006g_p16','10000');");
E_D("replace into `ecs_products` values('17','6','44|46','ECS000006g_p17','10000');");
E_D("replace into `ecs_products` values('18','6','43|47','ECS000006g_p18','10000');");
E_D("replace into `ecs_products` values('19','6','45|47','ECS000006g_p19','10000');");
E_D("replace into `ecs_products` values('20','6','43|46','ECS000006g_p20','9996');");
E_D("replace into `ecs_products` values('21','39','49|50','ECS000039g_p21','10000');");
E_D("replace into `ecs_products` values('22','39','48|51','ECS000039g_p22','10000');");
E_D("replace into `ecs_products` values('23','39','48|52','ECS000039g_p23','10000');");
E_D("replace into `ecs_products` values('24','39','49|51','ECS000039g_p24','10000');");
E_D("replace into `ecs_products` values('25','39','49|52','ECS000039g_p25','10000');");
E_D("replace into `ecs_products` values('26','39','48|50','ECS000039g_p26','10000');");
E_D("replace into `ecs_products` values('33','2','15|24|26','ECS000002g_p33','10000');");
E_D("replace into `ecs_products` values('34','2','15|25|26','ECS000002g_p34','10000');");
E_D("replace into `ecs_products` values('35','2','16|18|26','ECS000002g_p35','10000');");
E_D("replace into `ecs_products` values('36','2','16|24|26','ECS000002g_p36','10000');");
E_D("replace into `ecs_products` values('37','2','16|25|26','ECS000002g_p37','10000');");
E_D("replace into `ecs_products` values('38','2','17|18|26','ECS000002g_p38','10000');");
E_D("replace into `ecs_products` values('39','2','17|24|26','ECS000002g_p39','9999');");
E_D("replace into `ecs_products` values('40','2','17|25|26','ECS000002g_p40','10000');");
E_D("replace into `ecs_products` values('41','2','15|18|26','ECS000002g_p41','9999');");

require("../../inc/footer.php");
?>