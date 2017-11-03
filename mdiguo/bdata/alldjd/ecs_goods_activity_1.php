<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','','1','3','0','科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','1407744000','1502784000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:1500;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('2','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','','1','10','0','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','1407744000','1502784000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:2;s:5:\"price\";d:1000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('3','测试拍卖活动1','','2','5','0','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','1407744000','1534320000','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:2000;s:9:\"amplitude\";d:0;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('4','测试夺宝奇兵','测试夺宝奇兵测试夺宝奇兵测试夺宝奇兵测试夺宝奇兵','0','15','0','松下（Panasonic） EH-SQ10-W405 冷敷美容器','1407777840','1566177840','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('5','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','','1','5','0','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','1429603200','1461225600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:999;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('6','香山（CAMRY） EB9005L 圆形电子秤 体重秤 透明玻璃','','1','20','0','香山（CAMRY） EB9005L 圆形电子秤 体重秤 透明玻璃','1429603200','1458547200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:49;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('7','力博得（Lebond）ilife家庭系列升级版 I3声波电动牙刷（和谐蓝）','','1','16','0','力博得（Lebond）ilife家庭系列升级版 I3声波电动牙刷（和谐蓝）','1429603200','1456041600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:499;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('9','海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','','1','6','0','海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','1429603200','1461225600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:399;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('10','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','','1','2','0','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','1429603200','1461225600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:1999;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('11','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','','1','1','0','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','1429603200','1461225600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:1699;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('12','志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','','1','4','0','志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','1429603200','1461225600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:1989;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");

require("../../inc/footer.php");
?>