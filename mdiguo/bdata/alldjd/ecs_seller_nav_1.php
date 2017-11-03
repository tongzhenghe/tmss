<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_nav`;");
E_C("CREATE TABLE `ecs_seller_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `nav_link` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `nav_order` smallint(5) NOT NULL DEFAULT '0' COMMENT '????',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '????',
  `is_blank` tinyint(1) NOT NULL DEFAULT '0' COMMENT '???????',
  `nav_img` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `is_text` tinyint(2) NOT NULL DEFAULT '1' COMMENT '??????????????',
  `seller_id` int(11) NOT NULL,
  `s_cid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='?????????'");

require("../../inc/footer.php");
?>