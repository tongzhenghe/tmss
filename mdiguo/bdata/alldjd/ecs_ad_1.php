<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
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
) ENGINE=MyISAM AUTO_INCREMENT=226 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('2','2','0','首页幻灯片下方广告1','','1427927814438603486.jpg','1427875200','1534838400','','','','0','1');");
E_D("replace into `ecs_ad` values('3','2','0','首页幻灯片下方广告2','','1427927822448629232.jpg','1406016000','1566374400','','','','0','1');");
E_D("replace into `ecs_ad` values('4','2','0','首页幻灯片下方广告3','','1427927835973250095.jpg','1406016000','1566374400','','','','0','1');");
E_D("replace into `ecs_ad` values('5','2','0','首页幻灯片下方广告4','','1427927843229141419.jpg','1406016000','1534838400','','','','0','1');");
E_D("replace into `ecs_ad` values('6','2','0','首页幻灯片下方广告5','','1427927855310580327.jpg','1406016000','1534838400','','','','0','1');");
E_D("replace into `ecs_ad` values('7','2','0','首页幻灯片下方广告6','','1427927867667284995.jpg','1406016000','1537516800','','','','0','1');");
E_D("replace into `ecs_ad` values('8','2','0','首页幻灯片下方广告7','','1427927883916062044.jpg','1406016000','1534838400','','','','1','1');");
E_D("replace into `ecs_ad` values('9','2','0','首页幻灯片下方广告8','','1427995872579315443.jpg','1406016000','1534838400','','','','0','1');");
E_D("replace into `ecs_ad` values('110','7','0','生活橱窗下方通栏广告位（宽）','','1427996706715209626.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('11','3','0','活动广告（宽）','','1429816350429918553.jpg','1406102400','1534924800','','','','0','1');");
E_D("replace into `ecs_ad` values('12','4','0','特色1','#','1427935911994603165.jpg','1406102400','1534924800','品牌街','','','1','1');");
E_D("replace into `ecs_ad` values('13','4','0','特色2','','1427935937336333816.jpg','1406102400','1566460800','京东预售','','','0','1');");
E_D("replace into `ecs_ad` values('14','4','0','特色3','','1427935955634033231.jpg','1406102400','1534924800','好东西','','','0','1');");
E_D("replace into `ecs_ad` values('15','4','0','特色4','','1427935974381130330.jpg','1406102400','1598083200','玩逼格','','','0','1');");
E_D("replace into `ecs_ad` values('16','4','0','特色5','','1427935995975327922.jpg','1406102400','1566460800','京东首发','','','0','1');");
E_D("replace into `ecs_ad` values('17','4','0','特色6','','1427936018827334595.jpg','1406102400','1534924800','优惠券','','','0','1');");
E_D("replace into `ecs_ad` values('18','4','0','特色7','','1427936035813832631.jpg','1406102400','1534924800','星剧星品','','','0','1');");
E_D("replace into `ecs_ad` values('19','4','0','特色8','','1427936060538249550.jpg','1406102400','1534924800','定期送','','','0','1');");
E_D("replace into `ecs_ad` values('20','6','0','活动广告（窄）','','1406164198827930394.jpg','1406102400','1598083200','','','','0','1');");
E_D("replace into `ecs_ad` values('212','36','0','图书、音像、数字商品左侧导航广告1','','1429742448744557498.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('213','36','0','图书、音像、数字商品左侧导航广告2','','1429742459707244051.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('214','36','0','家用电器左侧导航广告1','','1429742573446791919.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('215','36','0','家用电器左侧导航广告2','','1429742582953129916.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('216','36','0','手机、数码、京东通信左侧导航广告1','','1429742603118947776.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('217','36','0','手机、数码、京东通信左侧导航广告2','','1429742612102765569.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('218','36','0','电脑、办公左侧导航广告1','','1429742631210533680.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('219','36','0','电脑、办公左侧导航广告2','','1429742640796658243.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('200','23','0','生活电器分类右侧幻灯片广告1','','1429739140903047069.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('201','23','0','生活电器分类右侧幻灯片广告2','','1429739151968584612.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('202','23','0','生活电器分类右侧幻灯片广告3','','1429739161798952615.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('203','22','0','个护健康分类左侧广告','','1429739226987449023.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('204','23','0','个护健康分类右侧幻灯片广告1','','1429739241267556086.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('205','23','0','个护健康分类右侧幻灯片广告2','','1429739250987794846.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('206','23','0','个护健康分类右侧幻灯片广告3','','1429739259371045005.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('207','35','0','家用电器顶级分类页幻灯片广告1','','1429739604028528637.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('208','35','0','家用电器顶级分类页幻灯片广告2','','1429739616242928570.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('209','35','0','家用电器顶级分类页幻灯片广告3','','1429739625290830400.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('210','35','0','家用电器顶级分类页幻灯片广告4','','1429739635202283219.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('211','35','0','家用电器顶级分类页幻灯片广告5','','1429739644874351542.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('151','15','0','电脑、办公分类下商品右侧小广告1','','1429728231366514956.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('152','15','0','电脑、办公分类下商品右侧小广告2','','1429728254073189104.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('153','15','0','电脑、办公分类下商品右侧小广告3','','1429728267306952394.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('154','15','0','电脑、办公分类下商品右侧小广告4','','1429728278867576760.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('155','16','0','电脑、办公分类下商品右广告1','','1429728328074525964.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('150','17','0','电脑、办公分类下商品右侧幻灯片广告4','','1429728157337379273.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('149','17','0','电脑、办公分类下商品右侧幻灯片广告3','','1429728145624108767.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('148','17','0','电脑、办公分类下商品右侧幻灯片广告2','','1429728133868055568.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('147','17','0','电脑、办公分类下商品右侧幻灯片广告1','','1429728123496333874.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('222','36','0','家居、家具、家装、厨具左侧导航广告1','','1429742782301954745.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('223','36','0','家居、家具、家装、厨具左侧导航广告2','','1429742791496173659.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('224','36','0','服饰内衣、珠宝首饰左侧导航广告1','','1429742807292696875.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('225','36','0','服饰内衣、珠宝首饰左侧导航广告2','','1429742815088769585.jpg','1429689600','1526976000','','','','0','1');");
E_D("replace into `ecs_ad` values('196','23','0','厨房电器分类右侧幻灯片广告1','','1429737932336221415.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('197','23','0','厨房电器分类右侧幻灯片广告2','','1429737944954012099.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('198','23','0','厨房电器分类右侧幻灯片广告3','','1429737954351334159.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('199','22','0','生活电器分类左侧广告','','1429739126495174062.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('112','15','0','家用电器分类下商品右侧小广告2','','1429727725507008511.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('111','15','0','家用电器分类下商品右侧小广告1','','1429727715917267087.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('102','14','0','家用电器分类下商品左广告','','1429723141004755715.jpg','1407916800','1536739200','','','','4','1');");
E_D("replace into `ecs_ad` values('103','14','0','电脑、办公分类下商品左广告','','1429728014070313378.jpg','1407916800','1568275200','','','','0','1');");
E_D("replace into `ecs_ad` values('104','14','0','服饰内衣、珠宝首饰分类下商品左广告','','1429729413820554255.jpg','1407916800','1536739200','','','','0','1');");
E_D("replace into `ecs_ad` values('105','14','0','个护化妆分类下商品左广告','','1407979544685008229.jpg','1407916800','1536739200','','','','0','1');");
E_D("replace into `ecs_ad` values('106','14','0','家居、家具、家装、厨具分类下商品左广告','','1429730708720322562.jpg','1407916800','1536739200','','','','0','1');");
E_D("replace into `ecs_ad` values('107','14','0','母婴、玩具乐器分类下商品左广告','','1429734904994078627.jpg','1407916800','1536739200','','','','0','1');");
E_D("replace into `ecs_ad` values('108','14','0','营养保健分类下商品左广告','','1407979760080639244.jpg','1407916800','1536739200','','','','0','1');");
E_D("replace into `ecs_ad` values('109','14','0','图书、音像、数字商品分类下商品左广告','','1407979672230626512.jpg','1407916800','1539331200','','','','0','1');");
E_D("replace into `ecs_ad` values('113','15','0','家用电器分类下商品右侧小广告3','','1429727737905299309.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('114','15','0','家用电器分类下商品右侧小广告4','','1429727748131471132.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('115','16','0','家用电器分类下商品右广告1','','1429727823264003322.jpg','1427961600','1554192000','','','','1','1');");
E_D("replace into `ecs_ad` values('116','16','0','家用电器分类下商品右广告2','','1429727831212199545.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('117','16','0','家用电器分类下商品右广告3','','1429727840718882624.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('118','16','0','家用电器分类下商品右广告4','','1429727851423297224.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('119','17','0','家用电器分类下商品右侧幻灯片广告1','','1429723180645215405.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('120','17','0','家用电器分类下商品右侧幻灯片广告2','','1429723202481295752.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('121','17','0','家用电器分类下商品右侧幻灯片广告3','','1429723211983486728.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('122','17','0','家用电器分类下商品右侧幻灯片广告4','','1429723223861644420.jpg','1427961600','1554192000','','','','0','1');");
E_D("replace into `ecs_ad` values('123','12','0','顶部横幅广告（宽）','','1428447485013036623.jpg','1428393600','1523088000','','','','0','1');");
E_D("replace into `ecs_ad` values('124','13','0','顶部横幅广告（窄）','','1428447678703564485.jpg','1428393600','1523088000','','','','1','1');");
E_D("replace into `ecs_ad` values('125','18','0','首页疯狂秒杀下广告1','','1428626091541192405.jpg','1428566400','1523260800','','','','0','1');");
E_D("replace into `ecs_ad` values('126','18','0','首页疯狂秒杀下广告2','','1428626112173167832.jpg','1428566400','1523260800','','','','0','1');");
E_D("replace into `ecs_ad` values('127','18','0','首页疯狂秒杀下广告3','','1428626124234424499.jpg','1428566400','1523260800','','','','0','1');");
E_D("replace into `ecs_ad` values('128','22','0','大 家 电分类左侧广告','','1428878336401636586.jpg','1428825600','1523520000','','','','0','1');");
E_D("replace into `ecs_ad` values('129','23','0','大 家 电分类右侧幻灯片广告1','','1428884028995814023.jpg','1428825600','1523520000','','','','0','1');");
E_D("replace into `ecs_ad` values('130','23','0','大 家 电分类右侧幻灯片广告2','','1428884039892435324.jpg','1428825600','1523520000','','','','0','1');");
E_D("replace into `ecs_ad` values('131','23','0','大 家 电分类右侧幻灯片广告3','','1428884058784939759.jpg','1428825600','1523520000','','','','0','1');");
E_D("replace into `ecs_ad` values('195','22','0','厨房电器分类左侧广告','','1429737824206735380.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('132','24','0','登录页广告','','1429488889525102898.jpg','1429430400','1555660800','','','','2','1');");
E_D("replace into `ecs_ad` values('133','25','0','团购列表幻灯片广告一','','1429637649636950969.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('134','26','0','团购列表幻灯片广告二','','1429637663065064701.jpg','1429603200','1555833600','','','','0','1');");
E_D("replace into `ecs_ad` values('135','27','0','团购列表幻灯片广告三','','1429637679312971466.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('136','28','0','团购列表幻灯片广告四','','1429637695982614394.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('137','29','0','团购列表幻灯片广告五','','1429637712685491764.jpg','1429603200','1555833600','','','','0','1');");
E_D("replace into `ecs_ad` values('138','30','0','团购列表幻灯片下广告1','','1429639725037411592.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('139','30','0','团购列表幻灯片下广告2','','1429639737280842178.jpg','1429603200','1555833600','','','','0','1');");
E_D("replace into `ecs_ad` values('140','30','0','团购列表幻灯片下广告3','','1429639749300186342.jpg','1429603200','1555833600','','','','0','1');");
E_D("replace into `ecs_ad` values('141','31','0','团购列表幻灯片右侧广告1','','1429641331860286688.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('142','31','0','团购列表幻灯片右侧广告2','','1429641342931244488.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('143','31','0','团购列表幻灯片右侧广告3','','1429641352077109808.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('144','32','0','团购列表底部广告','','1429645496287687772.jpg','1429603200','1555833600','','','','0','1');");
E_D("replace into `ecs_ad` values('145','33','0','团购详情右侧广告','','1429657568591002170.jpg','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('146','34','0','团购详情底部广告','','1429657591777668708.png','1429603200','1524297600','','','','0','1');");
E_D("replace into `ecs_ad` values('156','16','0','电脑、办公分类下商品右广告2','','1429728343252494573.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('157','16','0','电脑、办公分类下商品右广告3','','1429728361515475882.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('158','16','0','电脑、办公分类下商品右广告4','','1429728373763986875.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('159','17','0','服饰内衣、珠宝首饰分类下商品右侧幻灯片广告1','','1429729450761511582.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('160','17','0','服饰内衣、珠宝首饰分类下商品右侧幻灯片广告2','','1429729463265033064.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('161','17','0','服饰内衣、珠宝首饰分类下商品右侧幻灯片广告3','','1429729474250957433.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('162','17','0','服饰内衣、珠宝首饰分类下商品右侧幻灯片广告4','','1429729485020245339.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('163','15','0','服饰内衣、珠宝首饰分类下商品右侧小广告1','','1429729589524361312.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('164','15','0','服饰内衣、珠宝首饰分类下商品右侧小广告2','','1429729599763420980.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('165','15','0','服饰内衣、珠宝首饰分类下商品右侧小广告3','','1429729608085926542.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('166','15','0','服饰内衣、珠宝首饰分类下商品右侧小广告4','','1429729617212375549.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('167','16','0','服饰内衣、珠宝首饰分类下商品右广告1','','1429729647063729606.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('168','16','0','服饰内衣、珠宝首饰分类下商品右广告2','','1429729658285258847.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('169','16','0','服饰内衣、珠宝首饰分类下商品右广告3','','1429729669866962851.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('170','16','0','服饰内衣、珠宝首饰分类下商品右广告4','','1429729680135550018.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('171','17','0','家居、家具、家装、厨具分类下商品右侧幻灯片广告1','','1429730723000142836.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('172','17','0','家居、家具、家装、厨具分类下商品右侧幻灯片广告2','','1429730732822416242.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('173','17','0','家居、家具、家装、厨具分类下商品右侧幻灯片广告3','','1429730746620952569.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('174','17','0','家居、家具、家装、厨具分类下商品右侧幻灯片广告4','','1429730758420613334.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('175','15','0','家居、家具、家装、厨具分类下商品右侧小广告1','','1429730786050541563.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('176','15','0','家居、家具、家装、厨具分类下商品右侧小广告2','','1429730797056732224.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('177','15','0','家居、家具、家装、厨具分类下商品右侧小广告3','','1429730813927060201.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('178','15','0','家居、家具、家装、厨具分类下商品右侧小广告4','','1429730824922157770.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('179','16','0','家居、家具、家装、厨具分类下商品右广告1','','1429730919519116904.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('180','16','0','家居、家具、家装、厨具分类下商品右广告2','','1429730936238036660.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('181','16','0','家居、家具、家装、厨具分类下商品右广告3','','1429730947943741771.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('182','16','0','家居、家具、家装、厨具分类下商品右广告4','','1429730959168230545.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('183','17','0','母婴、玩具乐器分类下商品右侧幻灯片广告1','','1429734957232689128.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('184','17','0','母婴、玩具乐器分类下商品右侧幻灯片广告2','','1429734967104551974.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('185','17','0','母婴、玩具乐器分类下商品右侧幻灯片广告3','','1429734988062488351.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('186','17','0','母婴、玩具乐器分类下商品右侧幻灯片广告4','','1429735000926943937.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('187','15','0','母婴、玩具乐器分类下商品右侧小广告1','','1429735019692761183.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('188','15','0','母婴、玩具乐器分类下商品右侧小广告2','','1429735029451094238.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('189','15','0','母婴、玩具乐器分类下商品右侧小广告3','','1429735042698063024.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('190','15','0','母婴、玩具乐器分类下商品右侧小广告4','','1429735053413724993.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('191','16','0','母婴、玩具乐器分类下商品右广告1','','1429735083707132583.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('192','16','0','母婴、玩具乐器分类下商品右广告2','','1429735093326304393.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('193','16','0','母婴、玩具乐器分类下商品右广告3','','1429735105606834421.jpg','1429689600','1524384000','','','','0','1');");
E_D("replace into `ecs_ad` values('194','16','0','母婴、玩具乐器分类下商品右广告4','','1429735117699581578.jpg','1429689600','1524384000','','','','0','1');");

require("../../inc/footer.php");
?>