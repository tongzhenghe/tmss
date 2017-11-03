<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `img_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','10','1','1.5 P（约12-23㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('2','9','1','1P（约8-14㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('3','6','1','2P（约21-34㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('4','3','1','2.5P（约27-42㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('5','9','2','超长质保','','0');");
E_D("replace into `ecs_goods_attr` values('6','9','2','强力除湿','','0');");
E_D("replace into `ecs_goods_attr` values('7','6','2','WIFI操控','','0');");
E_D("replace into `ecs_goods_attr` values('8','6','2','电辅加热','','0');");
E_D("replace into `ecs_goods_attr` values('9','5','1','3P（约32-50㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('10','5','2','超静音','','0');");
E_D("replace into `ecs_goods_attr` values('11','5','2','圆柱型柜机','','0');");
E_D("replace into `ecs_goods_attr` values('12','4','1','1.5 P（约12-23㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('13','4','2','祛PM2.5','','0');");
E_D("replace into `ecs_goods_attr` values('14','4','2','除甲醛','','0');");
E_D("replace into `ecs_goods_attr` values('15','2','3','32英寸智能','0','0');");
E_D("replace into `ecs_goods_attr` values('16','2','3','40英寸智能','800','0');");
E_D("replace into `ecs_goods_attr` values('17','2','3','50英寸智能','1500','0');");
E_D("replace into `ecs_goods_attr` values('18','2','4','智能电视','0','0');");
E_D("replace into `ecs_goods_attr` values('19','2','5','全高清（1920.1080）','0','0');");
E_D("replace into `ecs_goods_attr` values('20','2','6','LED电视','0','0');");
E_D("replace into `ecs_goods_attr` values('21','2','7','客厅电视','0','0');");
E_D("replace into `ecs_goods_attr` values('24','2','4','普通电视','0','0');");
E_D("replace into `ecs_goods_attr` values('25','2','4','网络电视','0','0');");
E_D("replace into `ecs_goods_attr` values('26','2','8','黑色','','107');");

require("../../inc/footer.php");
?>