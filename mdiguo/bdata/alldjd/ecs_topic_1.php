<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','夏新优惠大酬宾','<p>夏新产品优惠开始了</p>','1241078400','1435564800','O:8:\"stdClass\":1:{s:13:\"测试分类1\";a:8:{i:0;s:11:\"夏新N7|17\";i:1;s:70:\"洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权正品）|69\";i:2;s:92:\"欧莱雅（LOREAL）男士火山岩控油清痘洁面膏 买一赠一装（100ml+50ml）|70\";i:3;s:131:\"妮维雅 男士净油精华亮肤洁面炭泥 150ml+150ml （提亮肤色 控油美白洗面奶 深层洁面 温和去角质）|71\";i:4;s:35:\"DHC蝶翠诗橄榄卸妆油200ml|72\";i:5;s:66:\"欧莱雅（LOREAL）男士 控油炭爽抗黑头洁面膏100ml|73\";i:6;s:61:\"Neutrogena露得清深层净化洗面乳两支套装100g*2|74\";i:7;s:73:\"欧莱雅（LOREAL）男士劲能深层净化洁面膏（100ml+50ml）|75\";}}','','','','','','','','');");

require("../../inc/footer.php");
?>