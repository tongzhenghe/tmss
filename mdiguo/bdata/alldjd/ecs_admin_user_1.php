<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  `seller_id` int(11) NOT NULL DEFAULT '0' COMMENT '入驻商家ID',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1','admin','','2b9a70d085b10cd8c61378f5c45ee189','1978','1398244330','1445972349','127.0.0.1','all','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','0',NULL,NULL,'0');");
E_D("replace into `ecs_admin_user` values('2','bjgonghuo1','bj@163.com','d0c015b6eb9a280f318a4c0510581e7e',NULL,'1245044099','0','','','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','1','',NULL,'0');");
E_D("replace into `ecs_admin_user` values('3','shhaigonghuo1','shanghai@163.com','4146fecce77907d264f6bd873f4ea27b',NULL,'1245044202','0','','','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit','','0','2','',NULL,'0');");
E_D("replace into `ecs_admin_user` values('4','xiaocong','xiaocong@qq.com','85de51928a11919d1ddc76f2615af739','1542','1432241828','1432242035','127.0.0.1','goods_manage,remove_back,goods_auto,picture_batch,goods_export,goods_batch,order_os_edit,order_ps_edit,order_ss_edit,order_view,order_view_finished,sale_order_stats,booking,delivery_view,back_view,sale_order_stats','商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list','','0','0',NULL,NULL,'2');");

require("../../inc/footer.php");
?>