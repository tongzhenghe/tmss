<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wechat_extend`;");
E_C("CREATE TABLE `ecs_wechat_extend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '功能名称',
  `keywords` varchar(20) DEFAULT NULL,
  `command` varchar(255) DEFAULT NULL COMMENT '扩展词',
  `config` text COMMENT '配置信息',
  `type` varchar(20) DEFAULT NULL,
  `enable` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否安装，1为已安装，0未安装',
  `author` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `wechat_id` int(10) unsigned NOT NULL COMMENT '公众号id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>