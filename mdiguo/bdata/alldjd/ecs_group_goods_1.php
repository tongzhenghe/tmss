<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配件分组',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('107','40','2380.00','1','1');");
E_D("replace into `ecs_group_goods` values('107','39','148.00','1','1');");
E_D("replace into `ecs_group_goods` values('107','42','179.00','1','2');");
E_D("replace into `ecs_group_goods` values('107','31','459.00','1','3');");
E_D("replace into `ecs_group_goods` values('2','7','408.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','110','1599.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','18','49.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','23','249.00','1','2');");
E_D("replace into `ecs_group_goods` values('2','27','1549.00','1','2');");
E_D("replace into `ecs_group_goods` values('2','109','1199.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','1','1299.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','108','1399.00','1','1');");
E_D("replace into `ecs_group_goods` values('2','13','29.00','1','1');");

require("../../inc/footer.php");
?>