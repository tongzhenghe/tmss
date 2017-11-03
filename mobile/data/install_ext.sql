-- 增加字段
ALTER TABLE `ecs_order_info` ADD COLUMN `mobile_order` int(1) UNSIGNED NOT NULL DEFAULT 0,ADD COLUMN `mobile_pay` int(1) UNSIGNED NOT NULL DEFAULT 0 AFTER `discount`;
-- 修改PC端url
UPDATE `ecs_touch_shop_config` SET `value` = '/' where `code`='shop_url';
-- 删除touch_shop_config表
delete from ecs_touch_shop_config where code in ('shop_info', 'display', 'basic', 'goods', 'sms', 'shop_name', 'shop_title', 'shop_desc', 'shop_keywords', 'shop_logo', 'shop_reg_closed', 'shop_url','show_asynclist', 'no_picture', 'stats_code', 'register_points', 'search_keywords', 'top_number', 'history_number', 'comments_number', 'bought_goods', 'article_number', 'goods_name_length', 'goods_name_length', 'page_size', 'sort_order_type', 'sort_order_method', 'show_order_type', 'attr_related_number', 'related_goods_number', 'article_page_size', 'show_goodssn', 'show_brand', 'show_goodsweight', 'show_goodsnumber', 'show_addtime', 'goodsattr_style', 'show_marketprice', 'sms_ecmoban_user', 'sms_ecmoban_password', 'sms_shop_mobile', 'sms_order_placed', 'sms_order_payed', 'sms_signin','user_notice','template','stylename');
-- 设置模板主题
UPDATE `ecs_touch_shop_config` SET `value` = 'default' where `code`='template';
-- 设置logo目录
UPDATE `ecs_touch_shop_config` SET `value` = './themes/{$template}/images/' where `code`='shop_logo';
-- 设置模板主题
UPDATE `ecs_touch_shop_config` SET `value` = './data/common/images/' where `code`='no_picture';