<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_action`;");
E_C("CREATE TABLE `ecs_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `action_code` varchar(20) NOT NULL DEFAULT '',
  `relevance` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_action` values('1','0','goods','');");
E_D("replace into `ecs_admin_action` values('2','0','cms_manage','');");
E_D("replace into `ecs_admin_action` values('3','0','users_manage','');");
E_D("replace into `ecs_admin_action` values('4','0','priv_manage','');");
E_D("replace into `ecs_admin_action` values('5','0','sys_manage','');");
E_D("replace into `ecs_admin_action` values('6','0','order_manage','');");
E_D("replace into `ecs_admin_action` values('7','0','promotion','');");
E_D("replace into `ecs_admin_action` values('8','0','email','');");
E_D("replace into `ecs_admin_action` values('9','0','templates_manage','');");
E_D("replace into `ecs_admin_action` values('10','0','db_manage','');");
E_D("replace into `ecs_admin_action` values('11','0','sms_manage','');");
E_D("replace into `ecs_admin_action` values('21','1','goods_manage','');");
E_D("replace into `ecs_admin_action` values('22','1','remove_back','');");
E_D("replace into `ecs_admin_action` values('23','1','cat_manage','');");
E_D("replace into `ecs_admin_action` values('24','1','cat_drop','cat_manage');");
E_D("replace into `ecs_admin_action` values('25','1','attr_manage','');");
E_D("replace into `ecs_admin_action` values('26','1','brand_manage','');");
E_D("replace into `ecs_admin_action` values('27','1','comment_priv','');");
E_D("replace into `ecs_admin_action` values('84','1','tag_manage','');");
E_D("replace into `ecs_admin_action` values('30','2','article_cat','');");
E_D("replace into `ecs_admin_action` values('31','2','article_manage','');");
E_D("replace into `ecs_admin_action` values('32','2','shopinfo_manage','');");
E_D("replace into `ecs_admin_action` values('33','2','shophelp_manage','');");
E_D("replace into `ecs_admin_action` values('34','2','vote_priv','');");
E_D("replace into `ecs_admin_action` values('35','7','topic_manage','');");
E_D("replace into `ecs_admin_action` values('74','4','template_manage','');");
E_D("replace into `ecs_admin_action` values('73','3','feedback_priv','');");
E_D("replace into `ecs_admin_action` values('38','3','integrate_users','');");
E_D("replace into `ecs_admin_action` values('39','3','sync_users','integrate_users');");
E_D("replace into `ecs_admin_action` values('40','3','users_manage','');");
E_D("replace into `ecs_admin_action` values('41','3','users_drop','users_manage');");
E_D("replace into `ecs_admin_action` values('42','3','user_rank','');");
E_D("replace into `ecs_admin_action` values('85','3','surplus_manage','account_manage');");
E_D("replace into `ecs_admin_action` values('43','4','admin_manage','');");
E_D("replace into `ecs_admin_action` values('44','4','admin_drop','admin_manage');");
E_D("replace into `ecs_admin_action` values('45','4','allot_priv','admin_manage');");
E_D("replace into `ecs_admin_action` values('46','4','logs_manage','');");
E_D("replace into `ecs_admin_action` values('47','4','logs_drop','logs_manage');");
E_D("replace into `ecs_admin_action` values('48','5','shop_config','');");
E_D("replace into `ecs_admin_action` values('49','5','ship_manage','');");
E_D("replace into `ecs_admin_action` values('50','5','payment','');");
E_D("replace into `ecs_admin_action` values('51','5','shiparea_manage','');");
E_D("replace into `ecs_admin_action` values('52','5','area_manage','');");
E_D("replace into `ecs_admin_action` values('53','6','order_os_edit','');");
E_D("replace into `ecs_admin_action` values('54','6','order_ps_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('55','6','order_ss_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('56','6','order_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('57','6','order_view','');");
E_D("replace into `ecs_admin_action` values('58','6','order_view_finished','');");
E_D("replace into `ecs_admin_action` values('59','6','repay_manage','');");
E_D("replace into `ecs_admin_action` values('60','6','booking','');");
E_D("replace into `ecs_admin_action` values('61','6','sale_order_stats','');");
E_D("replace into `ecs_admin_action` values('62','6','client_flow_stats','');");
E_D("replace into `ecs_admin_action` values('78','7','snatch_manage','');");
E_D("replace into `ecs_admin_action` values('83','7','ad_manage','');");
E_D("replace into `ecs_admin_action` values('80','7','gift_manage','');");
E_D("replace into `ecs_admin_action` values('81','7','card_manage','');");
E_D("replace into `ecs_admin_action` values('70','1','goods_type','');");
E_D("replace into `ecs_admin_action` values('82','7','pack','');");
E_D("replace into `ecs_admin_action` values('79','7','bonus_manage','');");
E_D("replace into `ecs_admin_action` values('75','5','friendlink','');");
E_D("replace into `ecs_admin_action` values('76','5','db_backup','');");
E_D("replace into `ecs_admin_action` values('77','5','db_renew','db_backup');");
E_D("replace into `ecs_admin_action` values('86','4','agency_manage','');");
E_D("replace into `ecs_admin_action` values('87','3','account_manage','');");
E_D("replace into `ecs_admin_action` values('88','5','flash_manage','');");
E_D("replace into `ecs_admin_action` values('89','5','navigator','');");
E_D("replace into `ecs_admin_action` values('90','7','auction','');");
E_D("replace into `ecs_admin_action` values('91','7','group_by','');");
E_D("replace into `ecs_admin_action` values('92','7','favourable','');");
E_D("replace into `ecs_admin_action` values('93','7','whole_sale','');");
E_D("replace into `ecs_admin_action` values('94','1','goods_auto','');");
E_D("replace into `ecs_admin_action` values('95','2','article_auto','');");
E_D("replace into `ecs_admin_action` values('96','5','cron','');");
E_D("replace into `ecs_admin_action` values('97','5','affiliate','');");
E_D("replace into `ecs_admin_action` values('98','5','affiliate_ck','');");
E_D("replace into `ecs_admin_action` values('99','8','attention_list','');");
E_D("replace into `ecs_admin_action` values('100','8','email_list','');");
E_D("replace into `ecs_admin_action` values('101','8','magazine_list','');");
E_D("replace into `ecs_admin_action` values('102','8','view_sendlist','');");
E_D("replace into `ecs_admin_action` values('103','1','virualcard','');");
E_D("replace into `ecs_admin_action` values('104','7','package_manage','');");
E_D("replace into `ecs_admin_action` values('105','1','picture_batch','');");
E_D("replace into `ecs_admin_action` values('106','1','goods_export','');");
E_D("replace into `ecs_admin_action` values('107','1','goods_batch','');");
E_D("replace into `ecs_admin_action` values('108','1','gen_goods_script','');");
E_D("replace into `ecs_admin_action` values('109','5','sitemap','');");
E_D("replace into `ecs_admin_action` values('110','5','file_priv','');");
E_D("replace into `ecs_admin_action` values('111','5','file_check','');");
E_D("replace into `ecs_admin_action` values('112','9','template_select','');");
E_D("replace into `ecs_admin_action` values('113','9','template_setup','');");
E_D("replace into `ecs_admin_action` values('114','9','library_manage','');");
E_D("replace into `ecs_admin_action` values('115','9','lang_edit','');");
E_D("replace into `ecs_admin_action` values('116','9','backup_setting','');");
E_D("replace into `ecs_admin_action` values('117','9','mail_template','');");
E_D("replace into `ecs_admin_action` values('118','10','db_backup','');");
E_D("replace into `ecs_admin_action` values('119','10','db_renew','');");
E_D("replace into `ecs_admin_action` values('120','10','db_optimize','');");
E_D("replace into `ecs_admin_action` values('121','10','sql_query','');");
E_D("replace into `ecs_admin_action` values('122','10','convert','');");
E_D("replace into `ecs_admin_action` values('124','11','sms_send','');");
E_D("replace into `ecs_admin_action` values('128','7','exchange_goods','');");
E_D("replace into `ecs_admin_action` values('129','6','delivery_view','');");
E_D("replace into `ecs_admin_action` values('130','6','back_view','');");
E_D("replace into `ecs_admin_action` values('131','5','reg_fields','');");
E_D("replace into `ecs_admin_action` values('132','5','shop_authorized','');");
E_D("replace into `ecs_admin_action` values('133','5','webcollect_manage','');");
E_D("replace into `ecs_admin_action` values('134','4','suppliers_manage','');");
E_D("replace into `ecs_admin_action` values('135','4','role_manage','');");
E_D("replace into `ecs_admin_action` values('136','0','seller_manage','');");
E_D("replace into `ecs_admin_action` values('137','136','seller_fields','');");
E_D("replace into `ecs_admin_action` values('138','136','seller_list','');");
E_D("replace into `ecs_admin_action` values('139','136','seller_yj_manage','');");
E_D("replace into `ecs_admin_action` values('140','140','store_cate_manage','');");
E_D("replace into `ecs_admin_action` values('141','140','store_manege','');");
E_D("replace into `ecs_admin_action` values('142','140','street_tags_manege','');");

require("../../inc/footer.php");
?>