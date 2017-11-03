<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  `seller_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20090615054961769','2009061585887','15','2009061585884','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245044964','2','1','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20090615055104671','2009061585887','15','20090615','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045061','1','1','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20090615055780744','2009061585887','15','123232','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045443','0','1','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20090615060281017','2009061525429','16','2009061525121','1245045672','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045723','2','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20090615064331475','2009061503335','17','00906150333512','1245047978','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245048189','0','1','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20140724105855761','2014072193304','22','0999','1405891658','5','申通快递','0','admin','22','233','1','6','81','754','','55@qq.com','','444','','','','等待所有商品备齐后再发','0.00','15.00','1406141894','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20140724105865105','2014070752549','21','666','1404680437','7','运费到付','6','admin','q111','22','1','4','55','540','','admin123@qq.com','','333','','','','等待所有商品备齐后再发','0.00','0.00','1406141913','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20140724105820896','2014060932408','20','55','1402273996','5','申通快递','6','admin','q111','22','1','4','55','540','','admin123@qq.com','','333','','','','等待所有商品备齐后再发','0.00','15.00','1406141930','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20140724105997657','2009051264945','11','111','1242144250','3','城际快递','0','admin','林小姐','中关村海兴大厦','1','2','52','500','','linzi@116.com','','135474510','','','','','0.00','10.00','1406141975','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20140724105903154','2009051210718','9','333','1242143732','5','申通快递','3','admin','叶先生','通州区旗舰凯旋小区','1','2','52','510','','text@ecshop.com','','13588104710','','','','等待所有商品备齐后再发','0.00','15.00','1406141992','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('11','20140724110052048','2009051299732','8','222','1242143444','5','申通快递','3','admin','叶先生','通州区旗舰凯旋小区','1','2','52','510','','text@ecshop.com','','13588104710','','','','等待所有商品备齐后再发','0.00','15.00','1406142013','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('12','20140731151466480','2014073113030','1','5555','1406762023','5','申通快递','0','admin','11','12','1','5','64','620','','444444@qq.com','','33333','','','','等待所有商品备齐后再发','0.00','15.00','1406762040','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('13','20140731154083813','2014073126550','2','444444','1406763595','5','申通快递','6','admin','q111','22','1','4','55','540','','admin123@qq.com','','333','','','','','0.00','15.00','1406763634','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('14','20140807155359214','2014080751421','3','3333','1407369121','5','申通快递','6','admin','q111','22','1','4','55','540','','admin123@qq.com','','333','','','','','0.00','15.00','1407369190','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('15','20140814173369846','2014081499923','5','2222','1407979978','5','申通快递','0','admin','1','2','1','5','66','633','','44@qq.com','','3','','','','等待所有商品备齐后再发','0.00','15.00','1407980002','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('16','20140815095683888','2014081591904','6','1111111','1408038969','5','申通快递','6','admin','q111','22','1','4','55','540','','admin123@qq.com','','333','','','','等待所有商品备齐后再发','0.00','15.00','1408038995','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('17','20150429100118716','2015042925814','18','','1430244056','6','邮局平邮','12','admin','小松','中山北路2911号中关村科技大厦2402室','1','25','321','2709','','123456@qq.com','','15221019886','','','','等待所有商品备齐后再发','0.00','3.50','1430244097','0','0','0','0');");

require("../../inc/footer.php");
?>