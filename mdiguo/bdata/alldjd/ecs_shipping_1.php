<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping`;");
E_C("CREATE TABLE `ecs_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(20) NOT NULL DEFAULT '',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `shipping_desc` varchar(255) NOT NULL DEFAULT '',
  `insure` varchar(10) NOT NULL DEFAULT '0',
  `support_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) DEFAULT NULL,
  `config_lable` text,
  `print_model` tinyint(1) DEFAULT '0',
  `shipping_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping` values('1','post_express','邮政快递包裹','邮政快递包裹的描述内容。','1%','0','1','',NULL,NULL,'0','0');");
E_D("replace into `ecs_shipping` values('2','yto','圆通速递','上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务','0','1','1','',NULL,NULL,'0','0');");
E_D("replace into `ecs_shipping` values('4','flat','市内快递','固定运费的配送方式内容','0','1','1','',NULL,NULL,'0','0');");
E_D("replace into `ecs_shipping` values('5','sto_express','申通快递','江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元','0','0','1','',NULL,NULL,'0','0');");
E_D("replace into `ecs_shipping` values('6','post_mail','邮局平邮','邮局平邮的描述内容。','0','0','1','',NULL,NULL,'0','0');");
E_D("replace into `ecs_shipping` values('7','fpd','运费到付','所购商品到达即付运费','0','0','1','',NULL,NULL,'0','0');");

require("../../inc/footer.php");
?>