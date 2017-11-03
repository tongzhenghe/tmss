<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad_position`;");
E_C("CREATE TABLE `ecs_touch_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad_position` values('1','首页Banner广告位','360','168','','<ul>\r\n{foreach from=\$ads item=ad}\r\n  <li>{\$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');");
E_D("replace into `ecs_touch_ad_position` values('2','首页特卖广告位','320','140','','&lt;ul&gt;\r\n{foreach from=\$ads item=ad}\r\n&lt;li&gt;{\$ad}&lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');");
E_D("replace into `ecs_touch_ad_position` values('3','首页新品特卖广告位','640','260','首页新品特卖广告位','&lt;ul&gt;\r\n{foreach from=\$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\\\&quot;pic\\\\&quot;&gt;{\$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\\\&quot;shop_info\\\\&quot;&gt;\r\n            &lt;p&gt;{\$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\\\&quot;brand_time\\\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {\$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');");
E_D("replace into `ecs_touch_ad_position` values('4','商品详情页','300','160','商品详情页广告位','&lt;ul&gt;\r\n{foreach from=\$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\\\&quot;pic\\\\&quot;&gt;{\$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\\\&quot;shop_info\\\\&quot;&gt;\r\n            &lt;p&gt;{\$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\\\&quot;brand_time\\\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {\$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');");

require("../../inc/footer.php");
?>