<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_order_id` int(11) NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `mobile_pay` int(1) unsigned NOT NULL DEFAULT '0',
  `seller_id` int(11) NOT NULL DEFAULT '0' COMMENT '入驻商家ID',
  `mobile_order` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('1','0','2014073113030','0','5','1','2','11','1','5','64','620','12','','33333','','444444@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','2199.00','15.00','0.00','0.00','0.00','0.00','2214.00','0.00','0','0.00','0.00','0.00','0','本站','1406762023','1406762036','1406762036','1408390277','0','0','0','5555','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('2','0','2014073126550','6','5','1','2','q111','1','4','55','540','22','','333','','admin123@qq.com','','','','5','申通快递','2','银行汇款/转帐','','','','','','','','488.00','15.00','0.00','0.00','0.00','0.00','503.00','0.00','0','0.00','0.00','0.00','0','管理员添加','1406763595','1406763625','1406763629','1408390312','0','0','0','444444','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('3','0','2014080751421','6','5','1','2','q111','1','4','55','540','22','','333','','admin123@qq.com','','','','5','申通快递','2','银行汇款/转帐','','','','','','','','8082.00','15.00','0.00','0.00','0.00','0.00','8097.00','0.00','0','0.00','0.00','0.00','0','管理员添加','1407369121','1407369180','1407369185','1408390270','0','0','0','3333','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('4','0','2014081459214','6','3','0','0','','0','0','0','0','','','','','','','','','0','','0','','','','','','','','','4998.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','4998.00','0','管理员添加','1407979809','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('5','0','2014081499923','0','5','1','2','1','1','5','66','633','2','','3','','44@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','88234.00','15.00','0.00','0.00','0.00','0.00','88249.00','0.00','0','0.00','0.00','0.00','0','本站','1407979978','1407979997','1407979997','1408317469','0','0','0','2222','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('6','0','2014081591904','6','5','1','2','q111','1','4','55','540','22','','333','','admin123@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','26473.70','15.00','0.00','0.00','0.00','0.00','26488.70','0.00','0','0.00','0.00','0.00','0','本站','1408038969','1408038990','1408038990','1408317460','0','0','0','1111111','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('7','0','2015042068991','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','2607.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','2170.70','0','本站','1429465302','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','439.80','0','0','0');");
E_D("replace into `ecs_order_info` values('8','0','2015042045814','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','128.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','131.50','0','本站','1429467710','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('9','0','2015042019304','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','4398.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3521.90','0','本站','1429468766','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','879.60','0','0','0');");
E_D("replace into `ecs_order_info` values('10','0','2015042061666','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','2199.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1762.70','0','本站','1429468807','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','439.80','0','0','0');");
E_D("replace into `ecs_order_info` values('11','0','2015042070450','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','1199.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1202.50','0','本站','1429469036','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('12','0','2015042099480','0','0','0','0','11','1','5','64','620','222','','333','','444@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','1799.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1814.00','0','本站','1429469197','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('13','0','2015042008079','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','0','','等待所有商品备齐后再发','','','','','','','2199.00','3.50','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1762.70','0','本站','1429469682','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','439.80','0','0','0');");
E_D("replace into `ecs_order_info` values('14','0','2015042093013','12','0','0','0','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','5','申通快递','5','快钱人民币网关','等待所有商品备齐后再发','','','','','','','1799.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1814.00','0','本站','1429469736','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('15','0','2015042062748','12','1','0','2','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','高档包装','精品贺卡','','','','2199.00','15.00','0.00','0.00','0.00','0.00','0.00','1774.20','0','0.00','0.00','0.00','0','本站','1429470414','1429470414','1429470414','0','4','3','0','','','0','','','0','','0.00','0','0','439.80','0','0','0');");
E_D("replace into `ecs_order_info` values('16','0','2015042234613','12','1','3','2','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','1999.00','15.00','0.00','0.00','0.00','0.00','0.00','2014.00','0','0.00','0.00','0.00','0','本站','1429650843','1429650843','1429650843','0','0','0','0','','group_buy','10','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('17','0','2015042307523','12','1','0','2','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','2199.00','15.00','0.00','0.00','0.00','0.00','0.00','1774.20','0','0.00','0.00','0.00','0','本站','1429743057','1429743057','1429743057','0','0','0','0','','','0','','','0','','0.00','0','0','439.80','0','0','0');");
E_D("replace into `ecs_order_info` values('18','0','2015042925814','12','5','1','2','小松','1','25','321','2709','中山北路2911号中关村科技大厦2402室','','15221019886','','123456@qq.com','','','','6','邮局平邮','5','快钱人民币网关','等待所有商品备齐后再发','','','','','','','5898.00','3.50','0.00','0.00','0.00','0.00','4721.90','0.00','0','0.00','0.00','0.00','0','本站','1430244056','1430244084','1430244084','1430244106','0','0','0','','','0','','','0','','0.00','0','0','1179.60','0','0','0');");
E_D("replace into `ecs_order_info` values('19','20','2015052278053','14','0','0','0','测试','1','25','321','2709','测试','454545','4','545','xiaocong@qq.com','5','4','','6','邮局平邮','4','网银在线','等待所有商品备齐后再发','','','','','','','274.00','3.50','0.00','2.80','0.00','0.00','0.00','0.00','0','0.00','0.00','280.30','0','本站','1432241519','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");
E_D("replace into `ecs_order_info` values('20','0','2015052294667','0','0','0','0','测试','0','0','0','0','测试','','4','545','','','','','0','','0','','','','','','','','','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','280.30','0','','0','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00','0','0','0');");

require("../../inc/footer.php");
?>