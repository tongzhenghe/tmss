<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('15','分类下商品右侧小广告位','219','117','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('2','首页幻灯片下方广告位','250','164','','{foreach from=\$ads item=ad name=foo}\r\n<li class=\"item fore{\$smarty.foreach.foo.iteration}\"> \r\n{\$ad}\r\n</li>\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('3','活动广告位（宽）','308','139','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('4','生活橱窗广告位','301','170','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('6','活动广告位（窄）','208','139','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('7','生活橱窗下方通栏广告位（宽）','1210','125','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('35','顶级分类页顶部幻灯片广告位','1000','370','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('36','左侧导航广告位','168','134','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('12','顶部横幅广告位（宽）','1210','70','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('13','顶部横幅广告位（窄）','990','70','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('14','分类下商品左广告位','330','475','','<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=\$ads item=ad}\r\n<tr><td>{\$ad}</td></tr>\r\n{/foreach}\r\n</table>');");
E_D("replace into `ecs_ad_position` values('16','分类下商品右广告位','219','236','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('17','分类下商品右侧幻灯片广告位','439','236','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('18','首页疯狂秒杀下广告位','390','100','','<ul>\r\n{foreach from=\$ads item=ad}\r\n<li>{\$ad}</li>\r\n{/foreach}\r\n</ul>');");
E_D("replace into `ecs_ad_position` values('19','首页精品大厅广告位一','1210','398','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('20','首页精品大厅广告位二','1210','398','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('21','首页精品大厅广告位三','1210','398','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('22','顶级分类楼层左侧广告位','210','540','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('23','顶级分类楼层右侧幻灯片广告位','400','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('24','登录页广告位','990','475','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('25','团购列表幻灯片广告位一','750','300','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('26','团购列表幻灯片广告位二','750','300','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('27','团购列表幻灯片广告位三','750','300','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('28','团购列表幻灯片广告位四','750','300','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('29','团购列表幻灯片广告位五','750','300','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('30','团购列表幻灯片下广告位','250','162','','{foreach from=\$ads item=ad}\r\n<li>{\$ad}<i></i></li>\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('31','团购列表幻灯片右侧广告位','250','154','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('32','团购列表底部广告位','990','115','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('33','团购详情右侧广告位','280','115','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('34','团购详情底部广告位','990','115','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");

require("../../inc/footer.php");
?>