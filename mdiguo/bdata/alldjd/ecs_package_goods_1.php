<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_package_goods`;");
E_C("CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_package_goods` values('5','6','0','1','1');");
E_D("replace into `ecs_package_goods` values('5','5','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','4','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','7','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','32','0','1','1');");
E_D("replace into `ecs_package_goods` values('5','31','0','1','1');");

require("../../inc/footer.php");
?>