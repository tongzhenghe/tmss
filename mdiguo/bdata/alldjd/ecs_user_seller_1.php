<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_user_seller`;");
E_C("CREATE TABLE `ecs_user_seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '??id',
  `is_check` tinyint(1) NOT NULL DEFAULT '0' COMMENT '????,0????1?????2?????',
  `checkout_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '????0??1??2???3?',
  `use_fee` decimal(10,0) NOT NULL COMMENT '?????',
  `deposit` decimal(10,0) NOT NULL COMMENT '?????',
  `fencheng` float NOT NULL COMMENT '??????????',
  `remark` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '???????',
  `add_time` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '????????',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='????????'");
E_D("replace into `ecs_user_seller` values('2','14','1','0','5000','5000','5','','1432241784');");

require("../../inc/footer.php");
?>