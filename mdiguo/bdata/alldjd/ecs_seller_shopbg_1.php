<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopbg`;");
E_C("CREATE TABLE `ecs_seller_shopbg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgimg` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `bgrepeat` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'no-repeat' COMMENT '??????',
  `bgcolor` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `show_img` tinyint(1) NOT NULL DEFAULT '0' COMMENT '????????',
  `is_custom` int(1) NOT NULL DEFAULT '0' COMMENT '????????????',
  `seller_id` int(11) NOT NULL DEFAULT '0' COMMENT '??id',
  `seller_theme` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '??',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1");

require("../../inc/footer.php");
?>