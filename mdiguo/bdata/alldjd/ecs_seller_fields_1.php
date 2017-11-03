<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_fields`;");
E_C("CREATE TABLE `ecs_seller_fields` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `type` varchar(20) NOT NULL COMMENT '表单类型',
  `is_need` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `select_options` text NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_fields` values('21','商家名称','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('22','公司名称','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('23','公司详细地址','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('24','联系人','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('25','手机号码','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('26','银行账号','0','1','textarea','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('27','营业执照','0','1','file','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('28','身份证照片','0','1','file','1','','0','0');");

require("../../inc/footer.php");
?>