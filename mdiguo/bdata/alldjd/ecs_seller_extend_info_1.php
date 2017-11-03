<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_extend_info`;");
E_C("CREATE TABLE `ecs_seller_extend_info` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reg_field_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_extend_info` values('54','14','21','模板堂测试');");
E_D("replace into `ecs_seller_extend_info` values('55','14','22','商创网络');");
E_D("replace into `ecs_seller_extend_info` values('56','14','23','上海');");
E_D("replace into `ecs_seller_extend_info` values('57','14','24','小王');");
E_D("replace into `ecs_seller_extend_info` values('58','14','25','40000021758');");
E_D("replace into `ecs_seller_extend_info` values('59','14','26','622266454545421221 上海工商');");
E_D("replace into `ecs_seller_extend_info` values('60','14','27','data/seller_14/reg_27.jpg');");
E_D("replace into `ecs_seller_extend_info` values('61','14','28','data/seller_14/reg_28.jpg');");

require("../../inc/footer.php");
?>