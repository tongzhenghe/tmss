<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','13','0',NULL,'诺基亚5320 XpressMusic','诺基亚','ECS000013','1','','0','3',NULL);");
E_D("replace into `ecs_delivery_goods` values('2','1','14','0',NULL,'诺基亚5800XM','诺基亚','ECS000014','1','','0','1',NULL);");
E_D("replace into `ecs_delivery_goods` values('3','2','24','0',NULL,'P806','联想','ECS000024','1','','0','3',NULL);");
E_D("replace into `ecs_delivery_goods` values('4','2','9','0',NULL,'诺基亚E66','诺基亚','ECS000009','1','','0','1',NULL);");
E_D("replace into `ecs_delivery_goods` values('5','3','24','0',NULL,'P806','联想','ECS000024','1','','0','1',NULL);");
E_D("replace into `ecs_delivery_goods` values('6','3','8','0',NULL,'飞利浦9@9v','飞利浦','ECS000008','1','','0','3',NULL);");
E_D("replace into `ecs_delivery_goods` values('7','4','12','0',NULL,'摩托罗拉A810','摩托罗拉','ECS000012','1','','0','2',NULL);");
E_D("replace into `ecs_delivery_goods` values('8','5','24','0',NULL,'P806','联想','ECS000024','1','','0','1',NULL);");
E_D("replace into `ecs_delivery_goods` values('9','6','6','20','ECS000006g_p20','全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','','ECS000006','1',NULL,'0','1','颜色:红黑格子[10] \n尺码:M \n');");
E_D("replace into `ecs_delivery_goods` values('10','7','6','20','ECS000006g_p20','全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','','ECS000006','1',NULL,'0','3','颜色:红黑格子[10] \n尺码:M \n');");
E_D("replace into `ecs_delivery_goods` values('11','8','6','0','','全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','','ECS000006','1',NULL,'0','14','颜色:红黑格子 \n尺码:M \n');");
E_D("replace into `ecs_delivery_goods` values('12','9','23','0','','诺基亚N96','','ECS000023','1',NULL,'0','1','附加配件: 原装电池 [+100]');");
E_D("replace into `ecs_delivery_goods` values('13','10','24','0','','P806','','ECS000024','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('14','11','20','0','','三星BC01','','ECS000020','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('15','11','8','0','','飞利浦9@9v','','ECS000008','1',NULL,'0','1','颜色:黑 \n');");
E_D("replace into `ecs_delivery_goods` values('16','12','2','0','','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','统帅','ECS000002','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('17','13','107','0','','康宝(Canbo) ZTP80A-25(H) 立式 消毒柜','康宝','ECS000107','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('18','14','2','0','','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','统帅','ECS000002','1',NULL,'0','1','32英寸智能');");
E_D("replace into `ecs_delivery_goods` values('19','14','1','0','','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','创维','ECS000000','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('20','14','11','0','','飞利浦（PHILIPS） HQ909/15 电动剃须刀','飞利浦','ECS000011','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('21','14','26','0','','利仁（Liven）LRT-310A 电饼铛 香槟金','利仁','ECS000026','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('22','14','26','0','','利仁（Liven）LRT-310A 电饼铛 香槟金','利仁','ECS000026','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('23','14','10','0','','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','美的','ECS000010','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('24','14','17','0','','雷瓦（RIWA） RC-643A 专业静音1800W大功率恒温负离子电吹风吹风机','雷瓦','ECS000017','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('25','14','16','0','','力博得（Lebond）ilife家庭系列升级版 I3声波电动牙刷（和谐蓝）','力博得','ECS000016','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('26','15','104','0','','机器学习系统设计 ','惠氏','ECS000104','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('27','15','103','0','','数据化管理：洞悉零售及电子商务运营 ','雷瓦','ECS000103','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('28','15','107','0','','康宝(Canbo) ZTP80A-25(H) 立式 消毒柜','康宝','ECS000107','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('29','15','106','0','','Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） ','德尔玛','ECS000106','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('30','15','105','0','','JavaScript框架设计 ','美的','ECS000105','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('31','15','25','0','','美的（Midea） EM7KCGW3-NR 微波炉 微电脑 平板 薄膜按键','美的','ECS000025','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('32','15','5','0','','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','海尔','ECS000005','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('33','15','102','0','','算法谜题 ','惠人','ECS000102','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('34','15','101','0','','WebKit技术内幕 ','德龙','ECS000101','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('35','15','100','0','','算法竞赛入门经典（第2版） ','春花','ECS000100','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('36','15','96','0','','GNC 健安喜 葡萄籽精华胶囊 100粒（美国原装进口）','健安喜','ECS000096','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('37','15','95','0','','养生堂 红六月焕白亲情特供装 90粒维生素C+160粒维生素E+60粒维生素C+多种维生素矿物质片25片','养生堂','ECS000095','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('38','15','93','0','','养生堂天然维生素E.C祛斑焕白套装（维生素C90片+维生素E160粒）（赠养生堂5片面膜）','养生堂','ECS000093','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('39','15','89','0','','Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克*6罐','可瑞康','ECS000089','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('40','15','90','0','','雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900克 购雅培亲体新品，Mini Pad、万元大奖等你赢！点此查看！','雅培','ECS000090','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('41','15','91','0','','惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁幼儿适用) 900克','惠氏','ECS000091','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('42','15','92','0','','太太静心助眠口服液15ml*60支','太太','ECS000092','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('43','15','88','0','','Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克','可瑞康','ECS000088','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('44','15','86','0','','美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3岁幼儿适用） 1200克','美赞臣','ECS000086','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('45','15','84','0','','美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克','美素力','ECS000084','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('46','15','83','0','','九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床','九洲鹿','ECS000083','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('47','15','82','0','','么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1.8米床','么小毛家纺','ECS000082','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('48','15','81','0','','爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米','爱斯基摩人','ECS000081','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('49','15','80','0','','绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 1.5-1.8米床适用','九洲鹿','ECS000080','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('50','15','79','0','','九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 1.5米床','九洲鹿','ECS000079','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('51','15','78','0','','巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 1.8m床四件套','巧布万棉家纺','ECS000078','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('52','15','77','0','','富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1.8m(6英尺)床','富安娜家纺','ECS000077','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('53','15','76','0','','胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床','洗颜专科','ECS000076','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('54','15','75','0','','欧莱雅（LOREAL）男士劲能深层净化洁面膏（100ml+50ml）','洗颜专科','ECS000075','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('55','15','74','0','','Neutrogena露得清深层净化洗面乳两支套装100g*2','洗颜专科','ECS000074','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('56','15','73','0','','欧莱雅（LOREAL）男士 控油炭爽抗黑头洁面膏100ml','洗颜专科','ECS000073','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('57','15','71','0','','妮维雅 男士净油精华亮肤洁面炭泥 150ml+150ml （提亮肤色 控油美白洗面奶 深层洁面 温和去角质）','洗颜专科','ECS000071','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('58','15','70','0','','欧莱雅（LOREAL）男士火山岩控油清痘洁面膏 买一赠一装（100ml+50ml）','洗颜专科','ECS000070','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('59','15','69','0','','洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权正品）','洗颜专科','ECS000069','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('60','15','68','0','','莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M','莱雪曼','ECS000068','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('61','15','67','0','','誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M','誉彩','ECS000067','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('62','15','63','0','','丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M','HARMARYCIAGA','ECS000063','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('63','15','64','0','','俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖打底连衣裙 白色 M','俏妮妃','ECS000064','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('64','15','65','0','','琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M','琼瑛','ECS000065','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('65','15','66','0','','时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D8618 白配大红 M','时竟','ECS000066','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('66','15','62','0','','HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ109 水蓝 M','HARMARYCIAGA','ECS000062','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('67','15','61','0','','刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 M','刊菲','ECS000061','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('68','15','60','0','','联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 500G DVD刻录 Dos）白色','惠普','ECS000060','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('69','15','59','0','','微软（Microsoft） Surface2 64G（Tegra 4四核 2G内存 64G硬盘 1080P高清屏 USB3.0）','微软','ECS000059','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('70','15','58','0','','机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色','机械革命','ECS000058','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('71','15','57','0','','华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)','华硕','ECS000057','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('72','15','56','0','','惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）','惠普','ECS000056','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('73','15','55','0','','宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色','宏碁','ECS000055','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('74','15','54','0','','雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710HQ 4G 500G GTX850M 2G DDR5 背光键盘 全高清屏）黑','雷神','ECS000054','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('75','15','53','0','','联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G 1T 2G独显 摄像头 DVD刻 Win8）','联想','ECS000053','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('76','15','52','0','','海燕（HAIYAN） ZD-BV4 阻燃 塑铜线100米 双色','海燕','ECS000052','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('77','15','51','0','','公牛（BULL) GN-110 3米 插座','飞利浦','ECS000051','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('78','15','41','0','','德尔玛（Deerma） DEM-F300 超声波加湿器（深蓝）','德尔玛','ECS000041','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('79','15','43','0','','春花（CHUNHUA ） JC621-160J 旋风锥尘杯 真空吸尘器（黑色）','春花','ECS000043','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('80','15','46','0','','美的（midea）单热型饮水机 MYR718S-X','科沃斯','ECS000046','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('81','15','49','0','','飞利浦（PHILIPS） CORD118大屏幕，免电池工作 来电显示电话机 黑色','飞利浦','ECS000049','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('82','15','40','0','','Coway AP-1009CH 空气净化器 除甲醛臭氧净化机pm2.5 韩国进口','Coway','ECS000040','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('83','15','39','0','','小熊（Bear) ZDQ-2191 多功能双层煎烙煮蛋器 14个蛋 （橙黄色）','九阳','ECS000039','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('84','15','37','0','','宝工（Pro''skit) SS-989H 2合1SMD吹焊台 700W 热风焊接两用','宝工','ECS000037','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('85','15','34','0','','贝乐卫浴（ballee) G17-4 毛巾架浴巾架多功能套装','华帝','ECS000034','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('86','15','33','0','','佳德（GORLDE）99173T 304不锈钢拉丝面双槽水槽套餐','佳德','ECS000033','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('87','15','31','0','','TCL 浴霸NH-21Y4A/01 风暖灯暖照明换气四合一','雷士照明','ECS000031','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('88','15','30','0','','雷士照明（NVC） NUD1895-3 餐吊吸顶灯(不带光源)','雷士照明','ECS000030','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('89','15','28','0','','意大利德龙(DeLonghi) ESAM2200 EX:1 全自动咖啡机（银色）','德龙','ECS000028','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('90','15','23','0','','美的(midea) W12PCS505E 电压力锅 5L多功能电脑版','美的','ECS000023','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('91','15','26','0','','利仁（Liven）LRT-310A 电饼铛 香槟金','利仁','ECS000026','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('92','15','27','0','','松下（Panasonic） SD-PM105 面包机','松下','ECS000027','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('93','15','22','0','','美的（Midea ）17S18K2c+ 电水壶(不锈钢色)','美的','ECS000022','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('94','15','17','0','','雷瓦（RIWA） RC-643A 专业静音1800W大功率恒温负离子电吹风吹风机','雷瓦','ECS000017','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('95','15','18','0','','华盛昌（CEM）DT-8806S 红外线人体测温仪 体温计（精致版）','华盛昌','ECS000018','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('96','15','19','0','','九安/Andon 家用全自动智能 上臂式 电子血压计 血压仪 血压计KD-5910','华盛昌','ECS000019','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('97','15','21','0','','韩国惠人（HUROM） HU-400WN-PLUS 原汁机 “小红2014全新升级版”','惠人','ECS000021','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('98','15','16','0','','力博得（Lebond）ilife家庭系列升级版 I3声波电动牙刷（和谐蓝）','力博得','ECS000016','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('99','15','15','0','','松下（Panasonic） EH-SQ10-W405 冷敷美容器','松下','ECS000015','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('100','15','14','0','','松下（Panasonic） EH-SA31QP405 温冷美容护肤套装 深层清洁补水 瞬间紧致肌肤','松下','ECS000014','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('101','15','13','0','','雷瓦（Riwa）RB-807S 两用陶瓷卷发棒 卷发器/直发器','雷瓦','ECS000013','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('102','15','12','0','','GESS 德国GESS682 电动深层防水洁面仪 洗脸美容仪家用毛孔清洁器去黑头仪 清新绿','GESS','ECS000012','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('103','15','11','0','','飞利浦（PHILIPS） HQ909/15 电动剃须刀','飞利浦','ECS000011','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('104','15','10','0','','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','美的','ECS000010','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('105','15','9','0','','海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','海信','ECS000009','1',NULL,'0','1','产品特色:超长质保 \n');");
E_D("replace into `ecs_delivery_goods` values('106','15','6','0','','海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','海信','ECS000006','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('107','15','6','0','','海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','海信','ECS000006','1',NULL,'0','1','产品特色:WIFI操控 \n');");
E_D("replace into `ecs_delivery_goods` values('108','15','5','0','','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','海尔','ECS000005','1',NULL,'0','1','产品特色:超静音 \n');");
E_D("replace into `ecs_delivery_goods` values('109','15','4','0','','志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','志高','ECS000004','1',NULL,'0','1','产品特色:祛PM2.5 \n');");
E_D("replace into `ecs_delivery_goods` values('110','16','140','0','','山崎(ASAKI)4.8伏家用充电式电动起子螺丝刀小电钻(带磁性)/充电电池电动工具','山崎','ECS000140','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('111','16','139','0','','新款BOSCH博世TSR 1080-2-LI锂电钻充电手电钻多功能家用电动螺丝刀起子 TSR1080-2-Li单电 一电一冲','博世','ECS000139','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('112','16','138','0','','老A（LAOA) 电动工具双速12V锂电池充电钻/手电钻/电起子/电动螺丝刀/充电批','老A','ECS000138','1',NULL,'0','2','');");
E_D("replace into `ecs_delivery_goods` values('113','16','137','0','','宝工（Pro''skit） PT-5501I 可调速软轴电磨组','宝工','ECS000137','1',NULL,'0','5','');");
E_D("replace into `ecs_delivery_goods` values('114','16','136','0','','博世(Bosch)GSB600RE set 13毫米冲击钻套装','博世','ECS000136','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('115','16','135','0','','飞科（FLYCO）FS358全身水洗充电式三刀头电动剃须刀（银色）','飞科','ECS000135','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('116','16','134','0','','飞科（FLYCO）FS711充电式双刀头电动剃须刀（黑色）','飞科','ECS000134','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('117','16','133','0','','飞利浦(Philips) RQ311 电动剃须刀','飞利浦','ECS000133','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('118','16','132','0','','飞利浦（PHILIPS） PQ182/16 电动剃须刀','奔腾','ECS000132','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('119','16','131','0','','飞利浦（Philips）RQ310 锐锋系列电动剃须刀','奔腾','ECS000131','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('120','16','130','0','','奔腾（POVOS） LN5152 电压力锅 5L','奔腾','ECS000130','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('121','16','129','0','','美的（Midea） W13PCS503E 易拆洗一手开系列 5L电压力锅','美的','ECS000129','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('122','16','128','0','','九阳（Joyoung） 5升电脑板电压力锅JYY-50YL1','九阳','ECS000128','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('123','16','127','0','','九阳（Joyoung） 5升电脑板电压力锅JYY-50YL1','九阳','ECS000127','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('124','16','126','0','','美的(midea) W12PCS505E 电压力锅 5L多功能电脑版','艾美特','ECS000126','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('125','16','125','0','','艾美特(Airmate) FTW36T2-A 电风扇/塔扇','艾美特','ECS000125','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('126','16','124','0','','艾美特(Airmate) FSW27T2-5 电风扇/落地扇','艾美特','ECS000124','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('127','16','123','0','','艾美特(Airmate) FT42R 电风扇/遥控塔扇','艾美特','ECS000123','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('128','16','122','0','','艾美特(Airmate) FSW65R-5 电风扇/遥控落地扇','艾美特','ECS000122','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('129','16','121','0','','艾美特(Airmate) FSW52R 电风扇/遥控落地扇','艾美特','ECS000121','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('130','16','120','0','','华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜','美的','ECS000120','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('131','16','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('132','16','118','0','','康宝(Canbo) ZTP108E-11E 嵌入式 消毒柜','康宝','ECS000118','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('133','16','117','0','','美的(Midea) MXV-ZLP80K03 立式 消毒柜','美的','ECS000117','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('134','16','116','0','','康宝(Canbo) ZTP80A-3 立式 消毒柜','康宝','ECS000116','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('135','16','115','0','','志高(Chigo)JC-270L 压缩机恒温红酒柜 底层自由摆放/8月新款8层100瓶','志高','ECS000115','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('136','16','114','0','','维诺卡夫(Vinocave) CWC-350AJP 压缩机恒温红酒柜 配挂杯架+展示层架','维诺夫卡','ECS000114','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('137','16','113','0','','维诺卡夫(Vinocave) CWC-200A 压缩机恒温红酒柜 配挂杯架+展示层架','维诺夫卡','ECS000113','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('138','16','112','0','','维诺卡夫(Vinocave) SC-28AJPM电子恒温红酒柜','维诺夫卡','ECS000112','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('139','16','111','0','','维诺卡夫(Vinocave)冰吧冰柜SC-28AJP电子恒温红酒柜','维诺夫卡','ECS000111','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('140','16','110','0','','康佳（KONKA） LED32E330C 32英寸 窄边高清液晶电视（银色）','康佳','ECS000110','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('141','16','109','0','','长虹（CHANGHONG）LED42B2080n 42英寸极窄边网络LED液晶电视（黑色）','创维','ECS000109','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('142','16','108','0','','长虹（CHANGHONG） LED42538E 42英寸 超窄边LED液晶电视(黑色)','','ECS000108','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('143','16','107','0','','康宝(Canbo) ZTP80A-25(H) 立式 消毒柜','康宝','ECS000107','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('144','17','2','39','ECS000002g_p39','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','统帅','ECS000002','1',NULL,'0','1','尺寸:50英寸智能[1500] \n功能:普通电视 \n可选颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('145','17','2','41','ECS000002g_p41','海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','统帅','ECS000002','1',NULL,'0','1','尺寸:32英寸智能 \n功能:智能电视 \n可选颜色:黑色 \n');");

require("../../inc/footer.php");
?>