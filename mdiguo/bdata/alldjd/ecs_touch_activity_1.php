<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_activity`;");
E_C("CREATE TABLE `ecs_touch_activity` (
  `act_id` int(10) NOT NULL,
  `act_banner` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_activity` values('1','http://d8.yihaodianimg.com/N00/M08/9A/E0/CgMBmVPPNHqAXRx1AACfU7I8J8857100.jpg');");
E_D("replace into `ecs_touch_activity` values('2','http://img13.360buyimg.com/cms/jfs/t184/306/2459217274/143660/f83440cc/53d20980N337e37e1.jpg!q35.jpg');");
E_D("replace into `ecs_touch_activity` values('3','http://img10.360buyimg.com/cms/jfs/t157/153/2494576813/117819/654b2854/53d20fe1N246c1e4a.jpg!q35.jpg');");
E_D("replace into `ecs_touch_activity` values('4','http://img11.360buyimg.com/cms/jfs/t145/259/2655815990/39930/9c6e8426/53d772c7N26e261e4.jpg!q35.jpg');");
E_D("replace into `ecs_touch_activity` values('5','data/attached/banner_image/ea725b8e67518d05c5cd80e5fed8d04f.jpg');");

require("../../inc/footer.php");
?>