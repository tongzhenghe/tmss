<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_config`;");
E_C("CREATE TABLE `ecs_shop_config` (
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
) ENGINE=MyISAM AUTO_INCREMENT=905 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_config` values('1','0','shop_info','group','','','','1');");
E_D("replace into `ecs_shop_config` values('2','0','basic','group','','','','1');");
E_D("replace into `ecs_shop_config` values('3','0','display','group','','','','1');");
E_D("replace into `ecs_shop_config` values('4','0','shopping_flow','group','','','','1');");
E_D("replace into `ecs_shop_config` values('5','0','smtp','group','','','','1');");
E_D("replace into `ecs_shop_config` values('6','0','hidden','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('7','0','goods','group','','','','1');");
E_D("replace into `ecs_shop_config` values('8','0','sms','group','','','','1');");
E_D("replace into `ecs_shop_config` values('9','0','wap','group','','','','1');");
E_D("replace into `ecs_shop_config` values('101','1','shop_name','text','','','京东网上商城-lfmartian淘宝店铺','1');");
E_D("replace into `ecs_shop_config` values('102','1','shop_title','text','','','京东网上商城-lfmartian淘宝店铺','1');");
E_D("replace into `ecs_shop_config` values('103','1','shop_desc','text','','','京东网上商城-lfmartian淘宝店铺','1');");
E_D("replace into `ecs_shop_config` values('104','1','shop_keywords','text','','','网上购物,网上商城,手机,笔记本,电脑,MP3,CD,VCD,DV,相机,数码,配件,手表,存储卡,京东商城','1');");
E_D("replace into `ecs_shop_config` values('105','1','shop_country','manual','','','1','1');");
E_D("replace into `ecs_shop_config` values('106','1','shop_province','manual','','','2','1');");
E_D("replace into `ecs_shop_config` values('107','1','shop_city','manual','','','52','1');");
E_D("replace into `ecs_shop_config` values('108','1','shop_address','text','','','','1');");
E_D("replace into `ecs_shop_config` values('109','1','qq','text','','','455201007','1');");
E_D("replace into `ecs_shop_config` values('110','1','ww','text','','','lfmartian','1');");
E_D("replace into `ecs_shop_config` values('111','1','skype','text','','','','1');");
E_D("replace into `ecs_shop_config` values('112','1','ym','text','','','','1');");
E_D("replace into `ecs_shop_config` values('113','1','msn','text','','','','1');");
E_D("replace into `ecs_shop_config` values('114','1','service_email','text','','','','1');");
E_D("replace into `ecs_shop_config` values('115','1','service_phone','text','','','','1');");
E_D("replace into `ecs_shop_config` values('116','1','shop_closed','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('117','1','close_comment','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('118','1','shop_logo','file','','../themes/{\$template}/images/','','1');");
E_D("replace into `ecs_shop_config` values('119','1','licensed','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('120','1','user_notice','textarea','','','用户中心公告！','1');");
E_D("replace into `ecs_shop_config` values('121','1','shop_notice','textarea','','','欢迎光临手机网,我们的宗旨：诚信经营、服务客户！\r\n<MARQUEE onmouseover=this.stop() onmouseout=this.start() \r\nscrollAmount=3><U><FONT color=red>\r\n<P>咨询电话010-10124444  010-21252454 8465544</P></FONT></U></MARQUEE>','1');");
E_D("replace into `ecs_shop_config` values('122','1','shop_reg_closed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('201','2','lang','manual','','','zh_cn','1');");
E_D("replace into `ecs_shop_config` values('202','2','icp_number','text','','','京ICP证070359号','1');");
E_D("replace into `ecs_shop_config` values('203','2','icp_file','file','','../cert/','','1');");
E_D("replace into `ecs_shop_config` values('204','2','watermark','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('205','2','watermark_place','select','0,1,2,3,4,5','','1','1');");
E_D("replace into `ecs_shop_config` values('206','2','watermark_alpha','text','','','65','1');");
E_D("replace into `ecs_shop_config` values('207','2','use_storage','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('208','2','market_price_rate','text','','','1.2','1');");
E_D("replace into `ecs_shop_config` values('209','2','rewrite','select','0,1,2','','0','1');");
E_D("replace into `ecs_shop_config` values('210','2','integral_name','text','','','积分','1');");
E_D("replace into `ecs_shop_config` values('211','2','integral_scale','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('212','2','integral_percent','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('213','2','sn_prefix','text','','','ECS','1');");
E_D("replace into `ecs_shop_config` values('214','2','comment_check','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('215','2','no_picture','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('218','2','stats_code','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('219','2','cache_time','text','','','3600','1');");
E_D("replace into `ecs_shop_config` values('220','2','register_points','text','','','0','1');");
E_D("replace into `ecs_shop_config` values('221','2','enable_gzip','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('222','2','top10_time','select','0,1,2,3,4','','0','1');");
E_D("replace into `ecs_shop_config` values('223','2','timezone','options','-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12','','8','1');");
E_D("replace into `ecs_shop_config` values('224','2','upload_size_limit','options','-1,0,64,128,256,512,1024,2048,4096','','64','1');");
E_D("replace into `ecs_shop_config` values('226','2','cron_method','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('227','2','comment_factor','select','0,1,2,3','','0','1');");
E_D("replace into `ecs_shop_config` values('228','2','enable_order_check','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('229','2','default_storage','text','','','10000','1');");
E_D("replace into `ecs_shop_config` values('230','2','bgcolor','text','','','#FFFFFF','1');");
E_D("replace into `ecs_shop_config` values('231','2','visit_stats','select','on,off','','off','1');");
E_D("replace into `ecs_shop_config` values('232','2','send_mail_on','select','on,off','','off','1');");
E_D("replace into `ecs_shop_config` values('233','2','auto_generate_gallery','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('234','2','retain_original_img','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('235','2','member_email_validate','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('236','2','message_board','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('239','2','certificate_id','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('240','2','token','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('241','2','certi','hidden','','','http://service.shopex.cn/openapi/api.php','1');");
E_D("replace into `ecs_shop_config` values('242','2','send_verify_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('243','2','ent_id','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('244','2','ent_ac','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('245','2','ent_sign','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('246','2','ent_email','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('301','3','date_format','hidden','','','Y-m-d','1');");
E_D("replace into `ecs_shop_config` values('302','3','time_format','text','','','Y-m-d H:i:s','1');");
E_D("replace into `ecs_shop_config` values('303','3','currency_format','text','','','￥%s','1');");
E_D("replace into `ecs_shop_config` values('304','3','thumb_width','text','','','220','1');");
E_D("replace into `ecs_shop_config` values('305','3','thumb_height','text','','','220','1');");
E_D("replace into `ecs_shop_config` values('306','3','image_width','text','','','400','1');");
E_D("replace into `ecs_shop_config` values('307','3','image_height','text','','','400','1');");
E_D("replace into `ecs_shop_config` values('312','3','top_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('313','3','history_number','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('314','3','comments_number','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('315','3','bought_goods','text','','','3','1');");
E_D("replace into `ecs_shop_config` values('316','3','article_number','text','','','4','1');");
E_D("replace into `ecs_shop_config` values('317','3','goods_name_length','text','','','40','1');");
E_D("replace into `ecs_shop_config` values('318','3','price_format','select','0,1,2,3,4,5','','5','1');");
E_D("replace into `ecs_shop_config` values('319','3','page_size','text','','','20','1');");
E_D("replace into `ecs_shop_config` values('320','3','sort_order_type','select','0,1,2','','0','1');");
E_D("replace into `ecs_shop_config` values('321','3','sort_order_method','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('322','3','show_order_type','select','0,1,2','','1','1');");
E_D("replace into `ecs_shop_config` values('323','3','attr_related_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('324','3','goods_gallery_number','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('325','3','article_title_length','text','','','16','1');");
E_D("replace into `ecs_shop_config` values('326','3','name_of_region_1','text','','','国家','1');");
E_D("replace into `ecs_shop_config` values('327','3','name_of_region_2','text','','','省','1');");
E_D("replace into `ecs_shop_config` values('328','3','name_of_region_3','text','','','市','1');");
E_D("replace into `ecs_shop_config` values('329','3','name_of_region_4','text','','','区','1');");
E_D("replace into `ecs_shop_config` values('330','3','search_keywords','text','','','户外出游,办公文具,家电裸价,防晒隔离,夏装1折,小牛3,童书满减,理财','0');");
E_D("replace into `ecs_shop_config` values('332','3','related_goods_number','text','','','4','1');");
E_D("replace into `ecs_shop_config` values('333','3','help_open','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('334','3','article_page_size','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('335','3','page_style','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('336','3','recommend_order','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('337','3','index_ad','hidden','','','sys','1');");
E_D("replace into `ecs_shop_config` values('401','4','can_invoice','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('402','4','use_integral','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('403','4','use_bonus','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('404','4','use_surplus','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('405','4','use_how_oos','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('406','4','send_confirm_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('407','4','send_ship_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('408','4','send_cancel_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('409','4','send_invalid_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('410','4','order_pay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('411','4','order_unpay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('412','4','order_ship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('413','4','order_receive_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('414','4','order_unship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('415','4','order_return_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('416','4','order_invalid_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('417','4','order_cancel_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('418','4','invoice_content','textarea','','','明细\r\n办公用品\r\n电脑配件\r\n耗材','1');");
E_D("replace into `ecs_shop_config` values('419','4','anonymous_buy','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('420','4','min_goods_amount','text','','','0','1');");
E_D("replace into `ecs_shop_config` values('421','4','one_step_buy','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('422','4','invoice_type','manual','','','a:2:{s:4:\"type\";a:3:{i:0;s:12:\"普通发票\";i:1;s:12:\"电子发票\";i:2;s:0:\"\";}s:4:\"rate\";a:3:{i:0;d:1;i:1;d:1.5;i:2;d:0;}}','1');");
E_D("replace into `ecs_shop_config` values('423','4','stock_dec_time','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('424','4','cart_confirm','options','1,2,3,4','','4','0');");
E_D("replace into `ecs_shop_config` values('425','4','send_service_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('426','4','show_goods_in_cart','select','1,2,3','','3','1');");
E_D("replace into `ecs_shop_config` values('427','4','show_attr_in_cart','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('501','5','smtp_host','text','','','smtp.163.com','1');");
E_D("replace into `ecs_shop_config` values('502','5','smtp_port','text','','','25','1');");
E_D("replace into `ecs_shop_config` values('503','5','smtp_user','text','','','ecmoban1@163.com','1');");
E_D("replace into `ecs_shop_config` values('504','5','smtp_pass','password','','','admin123','1');");
E_D("replace into `ecs_shop_config` values('505','5','smtp_mail','text','','','ecmoban1@163.com','1');");
E_D("replace into `ecs_shop_config` values('506','5','mail_charset','select','UTF8,GB2312,BIG5','','GB2312','1');");
E_D("replace into `ecs_shop_config` values('507','5','mail_service','select','0,1','','1','0');");
E_D("replace into `ecs_shop_config` values('508','5','smtp_ssl','select','0,1','','0','0');");
E_D("replace into `ecs_shop_config` values('601','6','integrate_code','hidden','','','ecshop','1');");
E_D("replace into `ecs_shop_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('603','6','hash_code','hidden','','','499d1f1cbd0e575c3b6f1cfcca61f9c3','1');");
E_D("replace into `ecs_shop_config` values('604','6','template','hidden','','','jingdong2015','1');");
E_D("replace into `ecs_shop_config` values('605','6','install_date','hidden','','','1398244332','1');");
E_D("replace into `ecs_shop_config` values('606','6','ecs_version','hidden','','','v2.7.3','1');");
E_D("replace into `ecs_shop_config` values('607','6','sms_user_name','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('608','6','sms_password','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('609','6','sms_auth_str','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('610','6','sms_domain','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('611','6','sms_count','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('612','6','sms_total_money','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('613','6','sms_balance','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('614','6','sms_last_request','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}','1');");
E_D("replace into `ecs_shop_config` values('617','6','captcha','hidden','','','39','1');");
E_D("replace into `ecs_shop_config` values('618','6','captcha_width','hidden','','','100','1');");
E_D("replace into `ecs_shop_config` values('619','6','captcha_height','hidden','','','20','1');");
E_D("replace into `ecs_shop_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `ecs_shop_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `ecs_shop_config` values('622','6','flash_theme','hidden','','','default','1');");
E_D("replace into `ecs_shop_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('701','7','show_goodssn','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('702','7','show_brand','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('703','7','show_goodsweight','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('704','7','show_goodsnumber','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('705','7','show_addtime','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('706','7','goodsattr_style','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('707','7','show_marketprice','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('801','8','sms_shop_mobile','text','','','','1');");
E_D("replace into `ecs_shop_config` values('802','8','sms_order_placed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('803','8','sms_order_payed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('804','8','sms_order_shipped','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('901','9','wap_config','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('902','9','wap_logo','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('903','2','message_check','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('904','3','store_two_code','select','1,0','','0','1');");

require("../../inc/footer.php");
?>