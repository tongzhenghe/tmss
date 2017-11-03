<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `seller_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','12','ecshop@ecshop.com','ecshop','很好，我很喜欢','5','1242107120','0.0.0.0','1','0','1','0');");
E_D("replace into `ecs_comment` values('2','0','22','ecshop@ecshop.com','ecshop','这个我不是很适合我','5','1242107295','0.0.0.0','1','0','1','0');");
E_D("replace into `ecs_comment` values('3','0','6','222@qq.com','','测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1测试评论1','5','1399422809','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('4','0','6','33@qq.com','','测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2测试评论2','4','1399422822','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('5','0','6','66@qq.com','','测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3测试评论3','3','1399422837','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('6','0','6','66@qq.com','','测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5测试评论5','4','1399422865','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('7','0','5','222@qq.com','','全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价1全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价1全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价1全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价1','4','1399423798','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('8','0','5','55@qq.com','','全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价2','4','1399423813','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('9','0','5','666@qq.com','','全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价3','3','1399423825','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('10','0','5','878@qq.com','','全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4全棉色织格子花边舒适女式长袖衬衫蕾丝深灰格的测试评价4','5','1399423840','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('11','0','5','','admin','回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1回复测试1','0','1401229980','127.0.0.1','0','10','0','0');");
E_D("replace into `ecs_comment` values('12','0','5','','admin','测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2测试回复2','0','1401237569','127.0.0.1','0','9','0','0');");
E_D("replace into `ecs_comment` values('13','0','6','','admin','测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1测试回复1','0','1401237763','127.0.0.1','0','3','0','0');");
E_D("replace into `ecs_comment` values('14','0','2','497110669@qq.com','','深深深','1','1407519220','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('15','0','2','','admin','111','0','1407520344','127.0.0.1','0','14','0','0');");
E_D("replace into `ecs_comment` values('16','0','2','333@qq.com','','11113V','5','1407520370','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('17','0','107','333@qq.com','','111','5','1407879375','127.0.0.1','0','0','0','0');");
E_D("replace into `ecs_comment` values('18','0','24','222@qq.com','','ssssssssssss','5','1407880692','127.0.0.1','1','0','0','0');");
E_D("replace into `ecs_comment` values('19','0','106','1111@123.com','','1111','5','1407886923','192.168.1.10','1','0','0','0');");
E_D("replace into `ecs_comment` values('20','0','106','','admin','222','0','1407886943','192.168.1.10','0','19','0','0');");

require("../../inc/footer.php");
?>