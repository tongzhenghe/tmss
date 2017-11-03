<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopheader`;");
E_C("CREATE TABLE `ecs_seller_shopheader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 NOT NULL,
  `seller_theme` varchar(100) CHARACTER SET utf8 NOT NULL,
  `seller_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_seller_shopheader` values('40','?<style>.store_dh{background:#fffe99;}\r\n.seller_logo{ width:990px; margin:0 auto;}</style>\r\n<div class=\"seller_logo\">\r\n    <img src=\"/seller_themes/store_tpl_16/custom_images/logo.jpg\" usemap=\"#headerMap\" border=\"0\"/><map name=\"headerMap\" id=\"headerMap\"><area shape=\"rect\" coords=\"4,4,201,111\" href=\"#\"/>\r\n    <area shape=\"rect\" coords=\"560,67,678,115\" href=\"#\"/>\r\n    <area shape=\"rect\" coords=\"683,70,814,118\" href=\"#\"/>\r\n    <area shape=\"rect\" coords=\"820,69,914,117\" href=\"#\"/></map>\r\n</div>','store_tpl_16','2');");
E_D("replace into `ecs_seller_shopheader` values('41','?<style>.store_dh{ background:url(/seller_themes/store_tpl_12/custom_images/header_bg.gif) repeat-x;}\r\n.user_dz{margin-bottom:0; width:990px; height:120px;}\r\n.user_dz .dz {height: 120px;position: relative;overflow: hidden;}\r\n.user_dz .dz .seller_logo{ background:url(/seller_themes/store_tpl_12/custom_images/logo.jpg) no-repeat; width:990px; height:120px;} \r\n.user_dz .dz .ycgn{position: absolute;right: 0px;bottom: 0px;width:180px; height:120px; }\r\n.user_dz .dz .ycgn a{ display:block;width:180px; height:120px;}</style>\r\n<div class=\"user_dz\">\r\n<div class=\"dz\">\r\n<div class=\"seller_logo\">\r\n<a href=\"#\" target=\"_blank\" style=\"height:120px;width:600px;display:block; float:left;\"></a>\r\n</div>\r\n<div class=\"ycgn\">\r\n<a href=\"#\"></a>\r\n</div>\r\n</div>\r\n</div>','store_tpl_12','2');");
E_D("replace into `ecs_seller_shopheader` values('42','?<div class=\"layout\">\r\n<div class=\"layout-one w990\">\r\n<div class=\"fn-clear\">\r\n<div class=\"mc\">\r\n<div class=\"j-module\">\r\n<div class=\"userDefinedArea\">\r\n<img src=\"/seller_themes/store_tpl_8/custom_images/logo.jpg\"/>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>','store_tpl_8','0');");
E_D("replace into `ecs_seller_shopheader` values('43','?<style>.user_top{ width:990px; height:100px; margin:0 auto; position:relative;}.user_top .jBanner{ float:left;}\r\n.user_top .headercc { position: absolute;right: 80px;top: 30px;width: 66px;height: 66px;display: block;}\r\n.user_top .headerlink { position: absolute;right: 0;top: 20px;width: 80px;height: 80px;display: block;}</style>\r\n<div class=\"user_top\">\r\n<div class=\"jBanner\">\r\n<a href=\"#\" target=\"_blank\"><img src=\"/seller_themes/store_tpl_10/custom_images/logo.jpg\"/></a>\r\n</div>\r\n<div class=\"headercc\">\r\n<a href=\"#\"><img src=\"/seller_themes/store_tpl_10/custom_images/csh.png\"/></a>\r\n</div>\r\n<div class=\"headerlink\">\r\n<a href=\"#\"><img src=\"/seller_themes/store_tpl_10/custom_images/ewma_bg.png\"/></a>\r\n</div>\r\n</div>','store_tpl_10','0');");
E_D("replace into `ecs_seller_shopheader` values('44','?<style>\r\n.banner_left{ width:300px; height:118px; float:left; margin-right:22px;}\r\n.banner_con{ width:350px; height:118px; float:left; text-align:center;}\r\n.banner_right{ width:300px; height:118px; float:left; margin-left:22px;}\r\n.texted{ position:absolute; bottom:0; width:200px; background:url(/seller_themes/store_tpl_1/custom_images/gunbolaba.gif) 0 2px no-repeat; padding-left:20px;}\r\n.texted span{ font-size:12px; font-family: \"Microsoft YaHei\";}\r\n.banner_right img{ position:absolute; bottom:0; right:0;}\r\n</style>\r\n<div style=\" width:1000px; margin:0 auto;position: relative;overflow: hidden;\">\r\n<div class=\"banner_left\">\r\n<div class=\"texted\">\r\n??????199?10??299?20?<span style=\"color:red;\">??????????</span>\r\n</div>\r\n</div>\r\n<div class=\"banner_con\">\r\n<a href=\"#\"><img title=\"logo.jpg\" src=\"/seller_themes/store_tpl_1/custom_images/14092821732790.jpg\"/></a>\r\n</div>\r\n<div class=\"banner_right\">\r\n<a href=\"#\"><img title=\"sc.jpg\" src=\"/seller_themes/store_tpl_1/custom_images/14092821916931.jpg\"/></a>\r\n</div>\r\n</div>','store_tpl_1','0');");

require("../../inc/footer.php");
?>