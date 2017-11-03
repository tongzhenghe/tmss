<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad`;");
E_C("CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(255) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad` values('5','2','0','首页特卖广告_2','','data/attached/images/f64bf8c1485b69412a0c9c2d1701eca2.jpg','1415174400','1512460800','','','','3','1');");
E_D("replace into `ecs_touch_ad` values('6','2','0','首页特卖广告_3','','data/attached/images/3d997deda47308119ec1fcbc73081049.jpg','1415347200','1512806400','','','','3','1');");
E_D("replace into `ecs_touch_ad` values('4','2','0','首页特卖广告_1','#','data/attached/images/bfbe2b2d5b6213fa0bbc808d9bac378f.jpg','1414915200','1512806400','','','','2','1');");
E_D("replace into `ecs_touch_ad` values('7','2','0','首页特卖广告_4','','data/attached/images/21b07aca2478eab51f3b8b510eb6899e.jpg','1415347200','1512806400','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('8','1','0','1','','data/attached/images/5ea22c7e9c0bc8714a967917279255b2.jpg','1415520000','1512806400','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('9','1','0','2','','data/attached/images/e2014312bead9d26bff79edc0be3b271.jpg','1415433600','1512720000','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('10','3','0','首页新品特卖广告_1','','data/attached/images/a2ee85e1d83efe0796f35d8fe97e1d79.jpg','1415520000','1512806400','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('11','3','0','首页新品特卖广告_2','','data/attached/images/8c6ada728bc321578fc068e2120079f3.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('12','3','0','首页新品特卖广告_3','','data/attached/images/cbbd7c56f99ffcbf48995b0f818745b1.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('13','3','0','首页新品特卖广告_4','','data/attached/images/15e034bdbea78995c9c8230ee9d4ab98.jpg','1415606400','1512892800','','','','1','1');");
E_D("replace into `ecs_touch_ad` values('14','3','0','首页新品特卖广告_5','','data/attached/images/d833523e045f15aa87774b38f7ca3267.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('15','3','0','首页新品特卖广告_6','','data/attached/images/78d4aa72d22ceef81dfdaac6af0403c2.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('16','3','0','首页新品特卖广告_7','','data/attached/images/de8f6edcfb974799e1d52646a0aa3b6c.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('17','3','0','首页新品特卖广告_8','','data/attached/images/dffdf8a37b01d7e4a9a28e831d7d499a.jpg','1415520000','1512806400','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('18','3','0','首页新品特卖广告_9','','data/attached/images/b4ca329bac7a4a93e4fd3088f7bc08d3.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('19','3','0','首页新品特卖广告_10','','data/attached/images/72e49480825b3d6b9b848daf987b9326.jpg','1415606400','1512892800','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('20','4','0','测试1','http://ecmoban.com','data/attached/images/5ea22c7e9c0bc8714a967917279255b2.jpg','1418745600','1419955200','','151222@qq.com','12365985698','2','1');");

require("../../inc/footer.php");
?>