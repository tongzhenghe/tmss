--
-- 表的结构 `ecs_touch_activity`
--

DROP TABLE IF EXISTS `ecs_touch_activity`;

CREATE TABLE IF NOT EXISTS `ecs_touch_activity` (
  `act_id` int(10) NOT NULL,
  `act_banner` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ecs_touch_activity`
--

INSERT INTO `ecs_touch_activity` (`act_id`, `act_banner`) VALUES
(1, 'http://d8.yihaodianimg.com/N00/M08/9A/E0/CgMBmVPPNHqAXRx1AACfU7I8J8857100.jpg'),
(2, 'http://img13.360buyimg.com/cms/jfs/t184/306/2459217274/143660/f83440cc/53d20980N337e37e1.jpg!q35.jpg'),
(3, 'http://img10.360buyimg.com/cms/jfs/t157/153/2494576813/117819/654b2854/53d20fe1N246c1e4a.jpg!q35.jpg'),
(4, 'http://img11.360buyimg.com/cms/jfs/t145/259/2655815990/39930/9c6e8426/53d772c7N26e261e4.jpg!q35.jpg'),
(5, 'data/attached/banner_image/ea725b8e67518d05c5cd80e5fed8d04f.jpg');

--
-- 表的结构 `ecs_touch_topic`
--
DROP TABLE IF EXISTS `ecs_touch_topic`;

CREATE TABLE IF NOT EXISTS `ecs_touch_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_ad`
--

DROP TABLE IF EXISTS `ecs_touch_ad`;

CREATE TABLE IF NOT EXISTS `ecs_touch_ad` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ecs_touch_ad`
--

INSERT INTO `ecs_touch_ad` VALUES ('5', '2', '0', '首页特卖广告_2', '', 'data/attached/ad_img/f64bf8c1485b69412a0c9c2d1701eca2.jpg', '1415174400', '1512460800', '', '', '', '3', '1');
INSERT INTO `ecs_touch_ad` VALUES ('6', '2', '0', '首页特卖广告_3', '', 'data/attached/ad_img/3d997deda47308119ec1fcbc73081049.jpg', '1415347200', '1512806400', '', '', '', '3', '1');
INSERT INTO `ecs_touch_ad` VALUES ('4', '2', '0', '首页特卖广告_1', '#', 'data/attached/ad_img/bfbe2b2d5b6213fa0bbc808d9bac378f.jpg', '1414915200', '1512806400', '', '', '', '2', '1');
INSERT INTO `ecs_touch_ad` VALUES ('7', '2', '0', '首页特卖广告_4', '', 'data/attached/ad_img/21b07aca2478eab51f3b8b510eb6899e.jpg', '1415347200', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('8', '1', '0', '1', '', 'data/attached/ad_img/5ea22c7e9c0bc8714a967917279255b2.jpg', '1415520000', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('9', '1', '0', '2', '', 'data/attached/ad_img/e2014312bead9d26bff79edc0be3b271.jpg', '1415433600', '1512720000', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('10', '3', '0', '首页新品特卖广告_1', '', 'data/attached/ad_img/a2ee85e1d83efe0796f35d8fe97e1d79.jpg', '1415520000', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('11', '3', '0', '首页新品特卖广告_2', '', 'data/attached/ad_img/8c6ada728bc321578fc068e2120079f3.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('12', '3', '0', '首页新品特卖广告_3', '', 'data/attached/ad_img/cbbd7c56f99ffcbf48995b0f818745b1.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('13', '3', '0', '首页新品特卖广告_4', '', 'data/attached/ad_img/15e034bdbea78995c9c8230ee9d4ab98.jpg', '1415606400', '1512892800', '', '', '', '1', '1');
INSERT INTO `ecs_touch_ad` VALUES ('14', '3', '0', '首页新品特卖广告_5', '', 'data/attached/ad_img/d833523e045f15aa87774b38f7ca3267.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('15', '3', '0', '首页新品特卖广告_6', '', 'data/attached/ad_img/78d4aa72d22ceef81dfdaac6af0403c2.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('16', '3', '0', '首页新品特卖广告_7', '', 'data/attached/ad_img/de8f6edcfb974799e1d52646a0aa3b6c.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('17', '3', '0', '首页新品特卖广告_8', '', 'data/attached/ad_img/dffdf8a37b01d7e4a9a28e831d7d499a.jpg', '1415520000', '1512806400', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('18', '3', '0', '首页新品特卖广告_9', '', 'data/attached/ad_img/b4ca329bac7a4a93e4fd3088f7bc08d3.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('19', '3', '0', '首页新品特卖广告_10', '', 'data/attached/ad_img/72e49480825b3d6b9b848daf987b9326.jpg', '1415606400', '1512892800', '', '', '', '0', '1');
INSERT INTO `ecs_touch_ad` VALUES ('20', '4', '0', '测试1', 'http://ecmoban.com', 'data/attached/ad_img/5ea22c7e9c0bc8714a967917279255b2.jpg', '1418745600', '1419955200', '', '151222@qq.com', '12365985698', '2', '1');

--
-- 表的结构 `ecs_touch_ad_position`
--

DROP TABLE IF EXISTS `ecs_touch_ad_position`;

CREATE TABLE IF NOT EXISTS `ecs_touch_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

--
-- 转存表中的数据 `ecs_touch_ad_position`
--

INSERT INTO `ecs_touch_ad_position` VALUES ('1', '首页Banner广告位', '360', '168', '', '<ul>\r\n{foreach from=$ads item=ad}\r\n  <li>{$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');
INSERT INTO `ecs_touch_ad_position` VALUES ('2', '首页特卖广告位', '320', '140', '', '&lt;ul&gt;\r\n{foreach from=$ads item=ad}\r\n&lt;li&gt;{$ad}&lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');
INSERT INTO `ecs_touch_ad_position` VALUES ('3', '首页新品特卖广告位', '640', '260', '首页新品特卖广告位', '&lt;ul&gt;\r\n{foreach from=$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\&quot;pic\\&quot;&gt;{$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\&quot;shop_info\\&quot;&gt;\r\n            &lt;p&gt;{$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\&quot;brand_time\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');
INSERT INTO `ecs_touch_ad_position` VALUES ('4', '商品详情页', '300', '160', '商品详情页广告位', '&lt;ul&gt;\r\n{foreach from=$ads_array item=ad}\r\n      &lt;li&gt;\r\n       &lt;div class=\\&quot;pic\\&quot;&gt;{$ad.ad_img}&lt;/div&gt;\r\n       &lt;div class=\\&quot;shop_info\\&quot;&gt;\r\n            &lt;p&gt;{$ad.ad_name}&lt;/p&gt;\r\n            &lt;div class=\\&quot;brand_time\\&quot;&gt;&lt;span&gt;&lt;/span&gt;仅剩 {$ad.time}天&lt;/div&gt;\r\n         &lt;/div&gt;\r\n         &lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');


--
-- 表的结构 `ecs_touch_adsense`
--
DROP TABLE IF EXISTS `ecs_touch_adsense`;

CREATE TABLE IF NOT EXISTS `ecs_touch_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_article_cat`
--
DROP TABLE IF EXISTS `ecs_touch_article_cat`;

CREATE TABLE IF NOT EXISTS `ecs_touch_article_cat` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_article`
--
DROP TABLE IF EXISTS `ecs_touch_article`;

CREATE TABLE IF NOT EXISTS `ecs_touch_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO `ecs_touch_article` (`article_id`, `cat_id`, `title`, `content`, `author`, `author_email`, `keywords`, `is_open`, `add_time`, `file_url`, `open_type`) VALUES(6, -1, '用户协议', '', '', '', '', 1, UNIX_TIMESTAMP(), '', 0);

--
-- 表的结构 `ecs_touch_brand`
--

DROP TABLE IF EXISTS `ecs_touch_brand`;

CREATE TABLE IF NOT EXISTS `ecs_touch_brand` (
  `brand_id` int(8) NOT NULL,
  `brand_banner` varchar(255) NOT NULL COMMENT '广告位',
  `brand_content` text NOT NULL COMMENT '详情'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_category`
--

DROP TABLE IF EXISTS `ecs_touch_category`;

CREATE TABLE IF NOT EXISTS `ecs_touch_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned DEFAULT NULL COMMENT '外键',
  `cat_image` varchar(255) DEFAULT NULL COMMENT '分类ICO图标',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_feedback`
--

DROP TABLE IF EXISTS `ecs_touch_feedback`;

CREATE TABLE IF NOT EXISTS `ecs_touch_feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `msg_id` mediumint(8) unsigned NOT NULL,
  `msg_read` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ecs_touch_goods`
--
DROP TABLE IF EXISTS `ecs_touch_goods`;

CREATE TABLE IF NOT EXISTS `ecs_touch_goods` (
  `goods_id` int(10) unsigned default NULL COMMENT '外键',
  `sales_volume` int(10) unsigned default NULL COMMENT '销量统计',
  UNIQUE KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_goods_activity`
--

DROP TABLE IF EXISTS `ecs_touch_goods_activity`;

CREATE TABLE IF NOT EXISTS `ecs_touch_goods_activity` (
  `act_id` int(10) DEFAULT NULL,
  `act_banner` varchar(255) DEFAULT NULL,
  `sales_count` int(10) DEFAULT NULL,
  `click_num` int(10) NOT NULL DEFAULT '0',
  `cur_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 表的结构 `ecs_touch_nav`
--

DROP TABLE IF EXISTS `ecs_touch_nav`;

CREATE TABLE IF NOT EXISTS `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ecs_touch_nav`
--

INSERT INTO `ecs_touch_nav` VALUES ('1', '', '0', '全部分类', '1', '0', '0', 'index.php?c=category&amp;a=top_all', 'data/attached/nav/c78d6a6b9b1ef0f58760c1c26fcd1ed3.png', 'middle');
INSERT INTO `ecs_touch_nav` VALUES ('2', '', '0', '个人中心', '1', '0', '0', 'index.php?m=default&amp;c=user', 'data/attached/nav/b86be6278f2b182aba402ec1901f6c8d.png', 'middle');
INSERT INTO `ecs_touch_nav` VALUES ('3', '', '0', '购物车', '1', '0', '0', 'index.php?m=default&amp;c=flow&amp;a=cart', 'data/attached/nav/ed82d0762bdc9373c8e0d05be75c2afa.png', 'middle');
INSERT INTO `ecs_touch_nav` VALUES ('4', '', '0', '最新团购', '1', '0', '0', 'index.php?m=default&amp;c=groupbuy', 'data/attached/nav/4faf3d782e509fd0cc455d15b8be6a25.png', 'middle');

--
-- 表的结构 `ecs_touch_payment`
--

DROP TABLE IF EXISTS `ecs_touch_payment`;

CREATE TABLE IF NOT EXISTS `ecs_touch_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('1', 'balance', '余额支付', '0', '使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。', '0', 'a:0:{}', '1', '0', '1');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('2', 'bank', '银行汇款/转帐', '0', '银行名称\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。', '0', 'a:0:{}', '1', '0', '0');
INSERT INTO `ecs_touch_payment` ( `pay_id`, `pay_code`, `pay_name`, `pay_fee`, `pay_desc`, `pay_order`, `pay_config`, `enabled`, `is_cod`, `is_online` ) VALUES  ('3', 'cod', '货到付款', '0', '开通城市：×××\n货到付款区域：×××', '0', 'a:0:{}', '1', '1', '0');

--
-- 表的结构 `ecs_touch_shop_config`
--

DROP TABLE IF EXISTS `ecs_touch_shop_config`;

CREATE TABLE IF NOT EXISTS `ecs_touch_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ecs_touch_shop_config`
--

INSERT INTO `ecs_touch_shop_config` SELECT * FROM `ecs_shop_config`;

INSERT INTO `ecs_touch_shop_config` (parent_id, code, type, store_range, store_dir, value, sort_order)VALUES (1, 'shop_url', 'text', '', '', '', 1);

INSERT INTO `ecs_touch_shop_config` (parent_id, code, type, store_range, store_dir, value, sort_order)VALUES (1, 'show_asynclist', 'select', '1,0', '', '0', 1);
-- ----------------------------
-- 增加短信接口配置项
-- ----------------------------
DELETE FROM ecs_touch_shop_config where code = 'sms_ecmoban_user';
DELETE FROM ecs_touch_shop_config where code = 'sms_ecmoban_password';
DELETE FROM ecs_touch_shop_config where code = 'sms_signin';
INSERT INTO `ecs_touch_shop_config` (parent_id, code, type, store_range, store_dir, value, sort_order)VALUES (8, 'sms_ecmoban_user', 'text', '', '', '', 0);
INSERT INTO `ecs_touch_shop_config` (parent_id, code, type, store_range, store_dir, value, sort_order)VALUES (8, 'sms_ecmoban_password', 'password', '', '', '', 0);
INSERT INTO `ecs_touch_shop_config` (parent_id, code, type, store_range, store_dir, value, sort_order)VALUES (8, 'sms_signin', 'select', '1,0', '', '0', 1);

--
-- 表的结构 `ecs_touch_user`
--

DROP TABLE IF EXISTS `ecs_touch_auth`;

CREATE TABLE IF NOT EXISTS `ecs_touch_auth` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `auth_config` varchar(255) NOT NULL,
  `from` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='登录插件';

--
-- 表的结构 `ecs_touch_user_info`
--

DROP TABLE IF EXISTS `ecs_touch_user_info`;

CREATE TABLE IF NOT EXISTS `ecs_touch_user_info` (
  `user_id` int(10) NOT NULL,
  `aite_id` varchar(200) NOT NULL COMMENT '标识'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户信息';


