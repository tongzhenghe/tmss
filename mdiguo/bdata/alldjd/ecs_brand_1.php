<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','创维','1408388661280162950.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('2','统帅','1408388666819567839.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('3','志高','1408388672554358389.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('4','科龙','1408388684265799995.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('5','海尔','1408388690499800497.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('6','海信','1408388695099889406.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('7','赛忆','1408388701900679009.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('8','美的','1408388707352962838.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('9','飞利浦','1408388712994021778.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('10','GESS','1408388718360024044.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('11','雷瓦','1408388724151793747.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('12','松下','1408388731946030201.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('13','力博得','1408388737190527333.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('14','华盛昌','1408388743502127596.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('15','香山','1408388750931256592.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('16','惠人','1408388757754426015.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('17','利仁','1408388764380000521.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('18','德龙','1408388769268713985.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('19','雷士照明','1408388776466056113.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('20','佳德','1408388781280380119.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('21','华帝','1408388787219162737.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('22','博深','1408388792532331469.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('23','史丹利','1408388798539179139.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('24','宝工','1408388804300088359.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('25','九阳','1408388809703051734.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('26','Coway','1408388816346280508.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('27','德尔玛','1408388822765587489.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('28','艾美特','1408388827131597608.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('29','春花','1408388834144170833.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('30','科沃斯','1408388841053871044.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('31','美菱','1408388850881493453.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('32','海燕','1408388856645179024.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('33','联想','1408388860169094248.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('34','雷神','1408388867536060524.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('35','宏碁','1408388873290611085.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('36','微软','1408388884893878072.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('37','机械革命','1408388892253249002.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('38','华硕','1408388897063788352.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('39','惠普','1408388904367521114.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('40','刊菲','1408388912842195129.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('41','HARMARYCIAGA','1408388917023098895.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('42','俏妮妃','1408388927970168396.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('43','琼瑛','1408388934924405061.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('44','时竟','1408388941128040572.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('45','誉彩','1408388948874779333.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('46','莱雪曼','1408388959674000474.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('47','洗颜专科','1408388968061368049.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('48','富安娜家纺','1408388977236154439.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('49','巧布万棉家纺','1408388984062114039.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('50','九洲鹿','1408388992835276757.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('51','爱斯基摩人','1408389003705467870.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('52','么小毛家纺','1408389011381507906.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('53','雅培','1408389020467816163.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('54','美素力','1408389028549234249.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('55','美赞臣','1408389036032699536.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('56','雀巢','1408389045513441324.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('57','可瑞康','1408389052474444489.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('58','惠氏','1408389066427584551.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('59','纽诺迪克','1408389072317069867.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('60','太太','1408389079817514576.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('61','养生堂','1408389088273428177.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('62','健安喜','1408389094494256102.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('63','东阿阿胶','1408389099241315294.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('64','康宝','1408389123539332672.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('65','康佳','1408389129807210291.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('66','维诺夫卡','1408389135311019767.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('67','奔腾','1408389143148210575.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('68','飞科','1408389150819938429.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('69','博世','1408389156477230125.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('70','老A','1408389162960941945.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('71','山崎','1408389168988509340.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('72','索尼','','','','50','1');");
E_D("replace into `ecs_brand` values('73','海尔电脑','1408400371994766756.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('74','清华同方','1408400377137441291.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('75','美旅','1408400628618339077.jpg','','http://','50','1');");
E_D("replace into `ecs_brand` values('76','ELLE','1408400611316891423.jpg','','http://','50','1');");

require("../../inc/footer.php");
?>