<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('index','左边区域','/library/vote_list.lbi','8','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/email_list.lbi','9','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/order_query.lbi','6','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/cart.lbi','0','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/promotion_info.lbi','3','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/auction.lbi','4','0','3','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/group_buy.lbi','5','0','3','0','default','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_hot.lbi','2','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_new.lbi','1','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','右边主区域','/library/recommend_best.lbi','0','0','10','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/invoice_query.lbi','7','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/top10.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','左边区域','/library/category_tree.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','11','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/category_tree.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/recommend_best.lbi','0','0','5','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/goods_list.lbi','1','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','右边区域','/library/pages.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/cart.lbi','0','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/price_grade.lbi','3','0','0','0','default','');");
E_D("replace into `ecs_template` values('category','左边区域','/library/filter_attr.lbi','2','0','0','0','default','');");
E_D("replace into `ecs_template` values('category_top','促销商品区域','/library/recommend_promotion.lbi','0','0','4','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/recommend_hot.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/recommend_new.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/recommend_best.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','5','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category','热卖推荐区域','/library/recommend_hot.lbi','0','0','4','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','生活橱窗下方通栏广告区域（宽）','/library/ad_position.lbi','0','7','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('index','首页幻灯片下方广告区域','/library/ad_position.lbi','0','2','9','4','jingdong2015','');");
E_D("replace into `ecs_template` values('index','活动区域（窄）','/library/ad_position.lbi','0','6','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('index','活动区域（宽）','/library/ad_position.lbi','0','3','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','订单查询区域','/library/order_query.lbi','0','0','0','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','投票区域','/library/vote_list.lbi','0','0','0','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','0','2','10','1','jingdong2015','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','1','4','10','1','jingdong2015','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','2','6','10','1','jingdong2015','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','3','5','10','1','jingdong2015','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','4','11','10','1','jingdong2015','');");
E_D("replace into `ecs_template` values('index','新闻快报文章区域','/library/cat_articles.lbi','0','12','8','3','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','7','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('index','发货单区域','/library/invoice_query.lbi','0','0','0','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/group_buy.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/auction.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','','/library/brands.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('category_top','首页疯狂秒杀下广告位','/library/ad_position.lbi','0','18','3','4','jingdong2015','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表底部广告位','/library/ad_position.lbi','0','32','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('group_buy_list','团购列表幻灯片右侧广告位','/library/ad_position.lbi','0','31','3','4','jingdong2015','');");
E_D("replace into `ecs_template` values('group_buy_goods','','/library/recommend_hot.lbi','0','0','3','0','jingdong2015','');");
E_D("replace into `ecs_template` values('group_buy_goods','团购详细右侧广告位','/library/ad_position.lbi','0','33','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('group_buy_goods','团购详细底部广告位','/library/ad_position.lbi','0','34','1','4','jingdong2015','');");
E_D("replace into `ecs_template` values('category','促销活动文章区域','/library/cat_articles.lbi','0','11','5','3','jingdong2015','');");

require("../../inc/footer.php");
?>