<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_store_category`;");
E_C("CREATE TABLE `ecs_store_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '????',
  `cate_order` smallint(6) NOT NULL DEFAULT '0' COMMENT '????',
  `is_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '????',
  `is_recom` tinyint(4) NOT NULL DEFAULT '0' COMMENT '???????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_store_category` values('1','???','0','1','1');");
E_D("replace into `ecs_store_category` values('2','???','0','1','1');");

require("../../inc/footer.php");
?>