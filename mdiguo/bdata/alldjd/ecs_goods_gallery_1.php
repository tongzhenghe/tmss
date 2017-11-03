<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','1','images/201407/goods_img/1_P_1406490380336.jpg','','images/201407/thumb_img/1_thumb_P_1406490380575.jpg','images/201407/source_img/1_P_1406490380795.jpg');");
E_D("replace into `ecs_goods_gallery` values('2','2','images/201407/goods_img/2_P_1406490449477.jpg','','images/201407/thumb_img/2_thumb_P_1406490449325.jpg','images/201407/source_img/2_P_1406490449737.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','3','images/201407/goods_img/3_P_1406490512595.jpg','','images/201407/thumb_img/3_thumb_P_1406490512985.jpg','images/201407/source_img/3_P_1406490512796.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','4','images/201407/goods_img/4_P_1406490572361.jpg','','images/201407/thumb_img/4_thumb_P_1406490572028.jpg','images/201407/source_img/4_P_1406490572476.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','5','images/201407/goods_img/5_P_1406490659233.jpg','','images/201407/thumb_img/5_thumb_P_1406490659905.jpg','images/201407/source_img/5_P_1406490659262.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','6','images/201407/goods_img/6_P_1406490721326.jpg','','images/201407/thumb_img/6_thumb_P_1406490721379.jpg','images/201407/source_img/6_P_1406490721495.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','7','images/201407/goods_img/7_P_1406490933778.jpg','','images/201407/thumb_img/7_thumb_P_1406490933447.jpg','images/201407/source_img/7_P_1406490933278.jpg');");
E_D("replace into `ecs_goods_gallery` values('8','8','images/201407/goods_img/8_P_1406491010240.jpg','','images/201407/thumb_img/8_thumb_P_1406491010930.jpg','images/201407/source_img/8_P_1406491010392.jpg');");
E_D("replace into `ecs_goods_gallery` values('9','9','images/201407/goods_img/9_P_1406491053727.jpg','','images/201407/thumb_img/9_thumb_P_1406491053594.jpg','images/201407/source_img/9_P_1406491053311.jpg');");
E_D("replace into `ecs_goods_gallery` values('10','10','images/201407/goods_img/10_P_1406491106519.jpg','','images/201407/thumb_img/10_thumb_P_1406491106009.jpg','images/201407/source_img/10_P_1406491106161.jpg');");
E_D("replace into `ecs_goods_gallery` values('11','11','images/201407/goods_img/11_P_1406491292245.jpg','','images/201407/thumb_img/11_thumb_P_1406491292576.jpg','images/201407/source_img/11_P_1406491292256.jpg');");
E_D("replace into `ecs_goods_gallery` values('12','12','images/201407/goods_img/12_P_1406496321431.jpg','','images/201407/thumb_img/12_thumb_P_1406496321949.jpg','images/201407/source_img/12_P_1406496321197.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','13','images/201407/goods_img/13_P_1406496383377.jpg','','images/201407/thumb_img/13_thumb_P_1406496383142.jpg','images/201407/source_img/13_P_1406496383965.jpg');");
E_D("replace into `ecs_goods_gallery` values('14','14','images/201407/goods_img/14_P_1406496440684.jpg','','images/201407/thumb_img/14_thumb_P_1406496440591.jpg','images/201407/source_img/14_P_1406496440695.jpg');");
E_D("replace into `ecs_goods_gallery` values('15','15','images/201407/goods_img/15_P_1406496491496.jpg','','images/201407/thumb_img/15_thumb_P_1406496491302.jpg','images/201407/source_img/15_P_1406496491925.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','16','images/201407/goods_img/16_P_1406496556947.jpg','','images/201407/thumb_img/16_thumb_P_1406496556818.jpg','images/201407/source_img/16_P_1406496556071.jpg');");
E_D("replace into `ecs_goods_gallery` values('17','17','images/201407/goods_img/17_P_1406496601873.jpg','','images/201407/thumb_img/17_thumb_P_1406496601456.jpg','images/201407/source_img/17_P_1406496601782.jpg');");
E_D("replace into `ecs_goods_gallery` values('18','18','images/201407/goods_img/18_P_1406496660883.jpg','','images/201407/thumb_img/18_thumb_P_1406496660656.jpg','images/201407/source_img/18_P_1406496660917.jpg');");
E_D("replace into `ecs_goods_gallery` values('19','19','images/201407/goods_img/19_P_1406496704323.jpg','','images/201407/thumb_img/19_thumb_P_1406496704606.jpg','images/201407/source_img/19_P_1406496704865.jpg');");
E_D("replace into `ecs_goods_gallery` values('20','20','images/201407/goods_img/20_P_1406496819238.jpg','','images/201407/thumb_img/20_thumb_P_1406496819187.jpg','images/201407/source_img/20_P_1406496819344.jpg');");
E_D("replace into `ecs_goods_gallery` values('21','21','images/201407/goods_img/21_P_1406496923168.jpg','','images/201407/thumb_img/21_thumb_P_1406496923667.jpg','images/201407/source_img/21_P_1406496923004.jpg');");
E_D("replace into `ecs_goods_gallery` values('22','22','images/201407/goods_img/22_P_1406496982047.jpg','','images/201407/thumb_img/22_thumb_P_1406496982015.jpg','images/201407/source_img/22_P_1406496982005.jpg');");
E_D("replace into `ecs_goods_gallery` values('23','23','images/201407/goods_img/23_P_1406497060675.jpg','','images/201407/thumb_img/23_thumb_P_1406497060558.jpg','images/201407/source_img/23_P_1406497060056.jpg');");
E_D("replace into `ecs_goods_gallery` values('24','24','images/201407/goods_img/24_P_1406497130350.jpg','','images/201407/thumb_img/24_thumb_P_1406497130077.jpg','images/201407/source_img/24_P_1406497130212.jpg');");
E_D("replace into `ecs_goods_gallery` values('25','25','images/201407/goods_img/25_P_1406497202966.jpg','','images/201407/thumb_img/25_thumb_P_1406497202498.jpg','images/201407/source_img/25_P_1406497202504.jpg');");
E_D("replace into `ecs_goods_gallery` values('26','26','images/201407/goods_img/26_P_1406497331034.jpg','','images/201407/thumb_img/26_thumb_P_1406497331303.jpg','images/201407/source_img/26_P_1406497331611.jpg');");
E_D("replace into `ecs_goods_gallery` values('27','27','images/201407/goods_img/27_P_1406497395852.jpg','','images/201407/thumb_img/27_thumb_P_1406497395799.jpg','images/201407/source_img/27_P_1406497395592.jpg');");
E_D("replace into `ecs_goods_gallery` values('28','28','images/201407/goods_img/28_P_1406497460552.jpg','','images/201407/thumb_img/28_thumb_P_1406497460427.jpg','images/201407/source_img/28_P_1406497460813.jpg');");
E_D("replace into `ecs_goods_gallery` values('29','29','images/201407/goods_img/29_P_1406498350166.jpg','','images/201407/thumb_img/29_thumb_P_1406498350769.jpg','images/201407/source_img/29_P_1406498350203.jpg');");
E_D("replace into `ecs_goods_gallery` values('30','30','images/201407/goods_img/30_P_1406498470129.jpg','','images/201407/thumb_img/30_thumb_P_1406498470100.jpg','images/201407/source_img/30_P_1406498470182.jpg');");
E_D("replace into `ecs_goods_gallery` values('31','31','images/201407/goods_img/31_P_1406498550069.jpg','','images/201407/thumb_img/31_thumb_P_1406498550465.jpg','images/201407/source_img/31_P_1406498550616.jpg');");
E_D("replace into `ecs_goods_gallery` values('32','32','images/201407/goods_img/32_P_1406498608673.jpg','','images/201407/thumb_img/32_thumb_P_1406498608864.jpg','images/201407/source_img/32_P_1406498608967.jpg');");
E_D("replace into `ecs_goods_gallery` values('33','33','images/201407/goods_img/33_P_1406498664888.jpg','','images/201407/thumb_img/33_thumb_P_1406498664969.jpg','images/201407/source_img/33_P_1406498664610.jpg');");
E_D("replace into `ecs_goods_gallery` values('34','34','images/201407/goods_img/34_P_1406498733527.jpg','','images/201407/thumb_img/34_thumb_P_1406498733544.jpg','images/201407/source_img/34_P_1406498733247.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','35','images/201407/goods_img/35_P_1406499137234.jpg','','images/201407/thumb_img/35_thumb_P_1406499137818.jpg','images/201407/source_img/35_P_1406499137183.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','36','images/201407/goods_img/36_P_1406499228496.jpg','','images/201407/thumb_img/36_thumb_P_1406499228786.jpg','images/201407/source_img/36_P_1406499228102.jpg');");
E_D("replace into `ecs_goods_gallery` values('37','37','images/201407/goods_img/37_P_1406499266639.jpg','','images/201407/thumb_img/37_thumb_P_1406499266231.jpg','images/201407/source_img/37_P_1406499266582.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','38','images/201407/goods_img/38_P_1406499360193.jpg','','images/201407/thumb_img/38_thumb_P_1406499360010.jpg','images/201407/source_img/38_P_1406499360145.jpg');");
E_D("replace into `ecs_goods_gallery` values('39','39','images/201407/goods_img/39_P_1406499391129.jpg','','images/201407/thumb_img/39_thumb_P_1406499391032.jpg','images/201407/source_img/39_P_1406499391938.jpg');");
E_D("replace into `ecs_goods_gallery` values('40','40','images/201407/goods_img/40_P_1406499458551.jpg','','images/201407/thumb_img/40_thumb_P_1406499458389.jpg','images/201407/source_img/40_P_1406499458081.jpg');");
E_D("replace into `ecs_goods_gallery` values('41','41','images/201407/goods_img/41_P_1406499507763.jpg','','images/201407/thumb_img/41_thumb_P_1406499507190.jpg','images/201407/source_img/41_P_1406499507029.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','42','images/201407/goods_img/42_P_1406499686189.jpg','','images/201407/thumb_img/42_thumb_P_1406499686141.jpg','images/201407/source_img/42_P_1406499686267.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','43','images/201407/goods_img/43_P_1406499764674.jpg','','images/201407/thumb_img/43_thumb_P_1406499764179.jpg','images/201407/source_img/43_P_1406499764124.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','45','images/201407/goods_img/45_P_1406499940522.jpg','','images/201407/thumb_img/45_thumb_P_1406499940397.jpg','images/201407/source_img/45_P_1406499940494.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','46','images/201407/goods_img/46_P_1406500062979.jpg','','images/201407/thumb_img/46_thumb_P_1406500062120.jpg','images/201407/source_img/46_P_1406500062452.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','47','images/201407/goods_img/47_P_1406500120724.jpg','','images/201407/thumb_img/47_thumb_P_1406500120136.jpg','images/201407/source_img/47_P_1406500120431.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','48','images/201407/goods_img/48_P_1406500169657.jpg','','images/201407/thumb_img/48_thumb_P_1406500169748.jpg','images/201407/source_img/48_P_1406500169073.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','49','images/201407/goods_img/49_P_1406500221628.jpg','','images/201407/thumb_img/49_thumb_P_1406500221515.jpg','images/201407/source_img/49_P_1406500221379.jpg');");
E_D("replace into `ecs_goods_gallery` values('49','50','images/201407/goods_img/50_P_1406500264730.jpg','','images/201407/thumb_img/50_thumb_P_1406500264353.jpg','images/201407/source_img/50_P_1406500264723.jpg');");
E_D("replace into `ecs_goods_gallery` values('50','51','images/201407/goods_img/51_P_1406500301941.jpg','','images/201407/thumb_img/51_thumb_P_1406500301858.jpg','images/201407/source_img/51_P_1406500301949.jpg');");
E_D("replace into `ecs_goods_gallery` values('51','44','images/201407/goods_img/44_P_1406500347356.jpg','','images/201407/thumb_img/44_thumb_P_1406500347904.jpg','images/201407/source_img/44_P_1406500347473.jpg');");
E_D("replace into `ecs_goods_gallery` values('52','52','images/201407/goods_img/52_P_1406500407918.jpg','','images/201407/thumb_img/52_thumb_P_1406500408639.jpg','images/201407/source_img/52_P_1406500407255.jpg');");
E_D("replace into `ecs_goods_gallery` values('53','53','images/201407/goods_img/53_P_1406501874645.jpg','','images/201407/thumb_img/53_thumb_P_1406501874894.jpg','images/201407/source_img/53_P_1406501874370.jpg');");
E_D("replace into `ecs_goods_gallery` values('54','54','images/201407/goods_img/54_P_1406501940388.jpg','','images/201407/thumb_img/54_thumb_P_1406501940491.jpg','images/201407/source_img/54_P_1406501940752.jpg');");
E_D("replace into `ecs_goods_gallery` values('55','56','images/201407/goods_img/56_P_1406502138102.jpg','','images/201407/thumb_img/56_thumb_P_1406502138005.jpg','images/201407/source_img/56_P_1406502138368.jpg');");
E_D("replace into `ecs_goods_gallery` values('56','57','images/201407/goods_img/57_P_1406502251490.jpg','','images/201407/thumb_img/57_thumb_P_1406502251731.jpg','images/201407/source_img/57_P_1406502251801.jpg');");
E_D("replace into `ecs_goods_gallery` values('57','58','images/201407/goods_img/58_P_1406502297223.jpg','','images/201407/thumb_img/58_thumb_P_1406502297273.jpg','images/201407/source_img/58_P_1406502297853.jpg');");
E_D("replace into `ecs_goods_gallery` values('58','59','images/201407/goods_img/59_P_1406502346711.jpg','','images/201407/thumb_img/59_thumb_P_1406502346096.jpg','images/201407/source_img/59_P_1406502346931.jpg');");
E_D("replace into `ecs_goods_gallery` values('59','60','images/201407/goods_img/60_P_1406502424016.jpg','','images/201407/thumb_img/60_thumb_P_1406502424305.jpg','images/201407/source_img/60_P_1406502424559.jpg');");
E_D("replace into `ecs_goods_gallery` values('60','55','images/201407/goods_img/55_P_1406502466232.jpg','','images/201407/thumb_img/55_thumb_P_1406502466712.jpg','images/201407/source_img/55_P_1406502466054.jpg');");
E_D("replace into `ecs_goods_gallery` values('61','61','images/201407/goods_img/61_P_1406502691815.jpg','','images/201407/thumb_img/61_thumb_P_1406502691626.jpg','images/201407/source_img/61_P_1406502691042.jpg');");
E_D("replace into `ecs_goods_gallery` values('62','62','images/201407/goods_img/62_P_1406502731407.jpg','','images/201407/thumb_img/62_thumb_P_1406502731435.jpg','images/201407/source_img/62_P_1406502731381.jpg');");
E_D("replace into `ecs_goods_gallery` values('63','63','images/201407/goods_img/63_P_1406502822582.jpg','','images/201407/thumb_img/63_thumb_P_1406502822367.jpg','images/201407/source_img/63_P_1406502822581.jpg');");
E_D("replace into `ecs_goods_gallery` values('64','64','images/201407/goods_img/64_P_1406502869892.jpg','','images/201407/thumb_img/64_thumb_P_1406502869963.jpg','images/201407/source_img/64_P_1406502869161.jpg');");
E_D("replace into `ecs_goods_gallery` values('65','65','images/201407/goods_img/65_P_1406502906725.jpg','','images/201407/thumb_img/65_thumb_P_1406502906302.jpg','images/201407/source_img/65_P_1406502906611.jpg');");
E_D("replace into `ecs_goods_gallery` values('66','66','images/201407/goods_img/66_P_1406502944929.jpg','','images/201407/thumb_img/66_thumb_P_1406502944814.jpg','images/201407/source_img/66_P_1406502944405.jpg');");
E_D("replace into `ecs_goods_gallery` values('67','67','images/201407/goods_img/67_P_1406502995679.jpg','','images/201407/thumb_img/67_thumb_P_1406502995422.jpg','images/201407/source_img/67_P_1406502995038.jpg');");
E_D("replace into `ecs_goods_gallery` values('68','68','images/201407/goods_img/68_P_1406503025840.jpg','','images/201407/thumb_img/68_thumb_P_1406503025557.jpg','images/201407/source_img/68_P_1406503025394.jpg');");
E_D("replace into `ecs_goods_gallery` values('69','69','images/201407/goods_img/69_P_1406503184117.jpg','','images/201407/thumb_img/69_thumb_P_1406503184630.jpg','images/201407/source_img/69_P_1406503184747.jpg');");
E_D("replace into `ecs_goods_gallery` values('70','70','images/201407/goods_img/70_P_1406503216416.jpg','','images/201407/thumb_img/70_thumb_P_1406503216863.jpg','images/201407/source_img/70_P_1406503216338.jpg');");
E_D("replace into `ecs_goods_gallery` values('71','71','images/201407/goods_img/71_P_1406503239489.jpg','','images/201407/thumb_img/71_thumb_P_1406503239188.jpg','images/201407/source_img/71_P_1406503239169.jpg');");
E_D("replace into `ecs_goods_gallery` values('72','72','images/201407/goods_img/72_P_1406503279247.jpg','','images/201407/thumb_img/72_thumb_P_1406503279863.jpg','images/201407/source_img/72_P_1406503279203.jpg');");
E_D("replace into `ecs_goods_gallery` values('73','73','images/201407/goods_img/73_P_1406503302205.jpg','','images/201407/thumb_img/73_thumb_P_1406503302052.jpg','images/201407/source_img/73_P_1406503302692.jpg');");
E_D("replace into `ecs_goods_gallery` values('74','74','images/201407/goods_img/74_P_1406503337076.jpg','','images/201407/thumb_img/74_thumb_P_1406503337657.jpg','images/201407/source_img/74_P_1406503337536.jpg');");
E_D("replace into `ecs_goods_gallery` values('75','75','images/201407/goods_img/75_P_1406503362900.jpg','','images/201407/thumb_img/75_thumb_P_1406503362621.jpg','images/201407/source_img/75_P_1406503362854.jpg');");
E_D("replace into `ecs_goods_gallery` values('76','76','images/201407/goods_img/76_P_1406503516852.jpg','','images/201407/thumb_img/76_thumb_P_1406503516087.jpg','images/201407/source_img/76_P_1406503516546.jpg');");
E_D("replace into `ecs_goods_gallery` values('77','77','images/201407/goods_img/77_P_1406503551020.jpg','','images/201407/thumb_img/77_thumb_P_1406503551243.jpg','images/201407/source_img/77_P_1406503551301.jpg');");
E_D("replace into `ecs_goods_gallery` values('78','78','images/201407/goods_img/78_P_1406503592376.jpg','','images/201407/thumb_img/78_thumb_P_1406503592696.jpg','images/201407/source_img/78_P_1406503592692.jpg');");
E_D("replace into `ecs_goods_gallery` values('79','79','images/201407/goods_img/79_P_1406503627702.jpg','','images/201407/thumb_img/79_thumb_P_1406503627843.jpg','images/201407/source_img/79_P_1406503627079.jpg');");
E_D("replace into `ecs_goods_gallery` values('80','80','images/201407/goods_img/80_P_1406503667891.jpg','','images/201407/thumb_img/80_thumb_P_1406503667773.jpg','images/201407/source_img/80_P_1406503667772.jpg');");
E_D("replace into `ecs_goods_gallery` values('81','81','images/201407/goods_img/81_P_1406503698330.jpg','','images/201407/thumb_img/81_thumb_P_1406503698557.jpg','images/201407/source_img/81_P_1406503698459.jpg');");
E_D("replace into `ecs_goods_gallery` values('82','82','images/201407/goods_img/82_P_1406503733395.jpg','','images/201407/thumb_img/82_thumb_P_1406503733031.jpg','images/201407/source_img/82_P_1406503733993.jpg');");
E_D("replace into `ecs_goods_gallery` values('83','83','images/201407/goods_img/83_P_1406503766376.jpg','','images/201407/thumb_img/83_thumb_P_1406503766927.jpg','images/201407/source_img/83_P_1406503766100.jpg');");
E_D("replace into `ecs_goods_gallery` values('84','85','images/201407/goods_img/85_P_1406503933337.jpg','','images/201407/thumb_img/85_thumb_P_1406503933161.jpg','images/201407/source_img/85_P_1406503933489.jpg');");
E_D("replace into `ecs_goods_gallery` values('85','86','images/201407/goods_img/86_P_1406504012940.jpg','','images/201407/thumb_img/86_thumb_P_1406504012134.jpg','images/201407/source_img/86_P_1406504012978.jpg');");
E_D("replace into `ecs_goods_gallery` values('86','87','images/201407/goods_img/87_P_1406504046382.jpg','','images/201407/thumb_img/87_thumb_P_1406504046790.jpg','images/201407/source_img/87_P_1406504046512.jpg');");
E_D("replace into `ecs_goods_gallery` values('87','88','images/201407/goods_img/88_P_1406504077156.jpg','','images/201407/thumb_img/88_thumb_P_1406504077531.jpg','images/201407/source_img/88_P_1406504077503.jpg');");
E_D("replace into `ecs_goods_gallery` values('88','89','images/201407/goods_img/89_P_1406504107192.jpg','','images/201407/thumb_img/89_thumb_P_1406504107642.jpg','images/201407/source_img/89_P_1406504107016.jpg');");
E_D("replace into `ecs_goods_gallery` values('89','90','images/201407/goods_img/90_P_1406504148543.jpg','','images/201407/thumb_img/90_thumb_P_1406504148910.jpg','images/201407/source_img/90_P_1406504148905.jpg');");
E_D("replace into `ecs_goods_gallery` values('90','91','images/201407/goods_img/91_P_1406504177379.jpg','','images/201407/thumb_img/91_thumb_P_1406504177018.jpg','images/201407/source_img/91_P_1406504177457.jpg');");
E_D("replace into `ecs_goods_gallery` values('91','92','images/201407/goods_img/92_P_1406506137808.jpg','','images/201407/thumb_img/92_thumb_P_1406506137851.jpg','images/201407/source_img/92_P_1406506137400.jpg');");
E_D("replace into `ecs_goods_gallery` values('92','93','images/201407/goods_img/93_P_1406506178519.jpg','','images/201407/thumb_img/93_thumb_P_1406506178180.jpg','images/201407/source_img/93_P_1406506178496.jpg');");
E_D("replace into `ecs_goods_gallery` values('93','94','images/201407/goods_img/94_P_1406506263014.jpg','','images/201407/thumb_img/94_thumb_P_1406506263453.jpg','images/201407/source_img/94_P_1406506263956.jpg');");
E_D("replace into `ecs_goods_gallery` values('94','95','images/201407/goods_img/95_P_1406506314534.jpg','','images/201407/thumb_img/95_thumb_P_1406506314261.jpg','images/201407/source_img/95_P_1406506314775.jpg');");
E_D("replace into `ecs_goods_gallery` values('95','96','images/201407/goods_img/96_P_1406506353699.jpg','','images/201407/thumb_img/96_thumb_P_1406506353738.jpg','images/201407/source_img/96_P_1406506353378.jpg');");
E_D("replace into `ecs_goods_gallery` values('96','97','images/201407/goods_img/97_P_1406506387233.jpg','','images/201407/thumb_img/97_thumb_P_1406506387854.jpg','images/201407/source_img/97_P_1406506387546.jpg');");
E_D("replace into `ecs_goods_gallery` values('97','98','images/201407/goods_img/98_P_1406506427948.jpg','','images/201407/thumb_img/98_thumb_P_1406506427317.jpg','images/201407/source_img/98_P_1406506427671.jpg');");
E_D("replace into `ecs_goods_gallery` values('98','99','images/201407/goods_img/99_P_1406506629798.jpg','','images/201407/thumb_img/99_thumb_P_1406506629280.jpg','images/201407/source_img/99_P_1406506629611.jpg');");
E_D("replace into `ecs_goods_gallery` values('99','100','images/201407/goods_img/100_P_1406506666851.jpg','','images/201407/thumb_img/100_thumb_P_1406506666768.jpg','images/201407/source_img/100_P_1406506666194.jpg');");
E_D("replace into `ecs_goods_gallery` values('100','101','images/201407/goods_img/101_P_1406506724752.jpg','','images/201407/thumb_img/101_thumb_P_1406506724307.jpg','images/201407/source_img/101_P_1406506724455.jpg');");
E_D("replace into `ecs_goods_gallery` values('101','102','images/201407/goods_img/102_P_1406506756829.jpg','','images/201407/thumb_img/102_thumb_P_1406506756946.jpg','images/201407/source_img/102_P_1406506756471.jpg');");
E_D("replace into `ecs_goods_gallery` values('102','103','images/201407/goods_img/103_P_1406506781091.jpg','','images/201407/thumb_img/103_thumb_P_1406506781505.jpg','images/201407/source_img/103_P_1406506781430.jpg');");
E_D("replace into `ecs_goods_gallery` values('103','104','images/201407/goods_img/104_P_1406506814881.jpg','','images/201407/thumb_img/104_thumb_P_1406506814909.jpg','images/201407/source_img/104_P_1406506814611.jpg');");
E_D("replace into `ecs_goods_gallery` values('104','105','images/201407/goods_img/105_P_1406506846876.jpg','','images/201407/thumb_img/105_thumb_P_1406506846002.jpg','images/201407/source_img/105_P_1406506846111.jpg');");
E_D("replace into `ecs_goods_gallery` values('105','106','images/201407/goods_img/106_P_1406506885029.jpg','','images/201407/thumb_img/106_thumb_P_1406506885016.jpg','images/201407/source_img/106_P_1406506885546.jpg');");
E_D("replace into `ecs_goods_gallery` values('106','107','images/201407/goods_img/107_P_1406763568882.jpg','','images/201407/thumb_img/107_thumb_P_1406763568463.jpg','images/201407/source_img/107_P_1406763568694.jpg');");
E_D("replace into `ecs_goods_gallery` values('107','2','images/201408/goods_img/2_P_1407366894513.jpg','','images/201408/thumb_img/2_thumb_P_1407366894006.jpg','images/201408/source_img/2_P_1407366894511.jpg');");
E_D("replace into `ecs_goods_gallery` values('108','2','images/201408/goods_img/2_P_1407366894399.jpg','','images/201408/thumb_img/2_thumb_P_1407366894644.jpg','images/201408/source_img/2_P_1407366894638.jpg');");
E_D("replace into `ecs_goods_gallery` values('109','2','images/201408/goods_img/2_P_1407366894408.jpg','','images/201408/thumb_img/2_thumb_P_1407366894563.jpg','images/201408/source_img/2_P_1407366894863.jpg');");
E_D("replace into `ecs_goods_gallery` values('110','2','images/201408/goods_img/2_P_1407366894796.jpg','','images/201408/thumb_img/2_thumb_P_1407366894525.jpg','images/201408/source_img/2_P_1407366894997.jpg');");
E_D("replace into `ecs_goods_gallery` values('111','2','images/201408/goods_img/2_P_1407366894276.jpg','','images/201408/thumb_img/2_thumb_P_1407366894290.jpg','images/201408/source_img/2_P_1407366894096.jpg');");
E_D("replace into `ecs_goods_gallery` values('112','109','images/201408/goods_img/109_P_1408035560123.jpg','','images/201408/thumb_img/109_thumb_P_1408035560871.jpg','images/201408/source_img/109_P_1408035560035.jpg');");
E_D("replace into `ecs_goods_gallery` values('113','109','images/201408/goods_img/109_P_1408035732269.jpg','','images/201408/thumb_img/109_thumb_P_1408035732963.jpg','images/201408/source_img/109_P_1408035732632.jpg');");
E_D("replace into `ecs_goods_gallery` values('114','110','images/201408/goods_img/110_P_1408035782461.jpg','','images/201408/thumb_img/110_thumb_P_1408035782798.jpg','images/201408/source_img/110_P_1408035782977.jpg');");
E_D("replace into `ecs_goods_gallery` values('115','111','images/201408/goods_img/111_P_1408035901206.jpg','','images/201408/thumb_img/111_thumb_P_1408035901260.jpg','images/201408/source_img/111_P_1408035901348.jpg');");
E_D("replace into `ecs_goods_gallery` values('116','112','images/201408/goods_img/112_P_1408035931660.jpg','','images/201408/thumb_img/112_thumb_P_1408035931583.jpg','images/201408/source_img/112_P_1408035931882.jpg');");
E_D("replace into `ecs_goods_gallery` values('117','113','images/201408/goods_img/113_P_1408035966001.jpg','','images/201408/thumb_img/113_thumb_P_1408035966654.jpg','images/201408/source_img/113_P_1408035966635.jpg');");
E_D("replace into `ecs_goods_gallery` values('118','114','images/201408/goods_img/114_P_1408035994284.jpg','','images/201408/thumb_img/114_thumb_P_1408035994365.jpg','images/201408/source_img/114_P_1408035994688.jpg');");
E_D("replace into `ecs_goods_gallery` values('119','115','images/201408/goods_img/115_P_1408036037940.jpg','','images/201408/thumb_img/115_thumb_P_1408036037165.jpg','images/201408/source_img/115_P_1408036037697.jpg');");
E_D("replace into `ecs_goods_gallery` values('120','116','images/201408/goods_img/116_P_1408036091203.jpg','','images/201408/thumb_img/116_thumb_P_1408036091024.jpg','images/201408/source_img/116_P_1408036091555.jpg');");
E_D("replace into `ecs_goods_gallery` values('121','117','images/201408/goods_img/117_P_1408036206053.jpg','','images/201408/thumb_img/117_thumb_P_1408036206791.jpg','images/201408/source_img/117_P_1408036206342.jpg');");
E_D("replace into `ecs_goods_gallery` values('122','118','images/201408/goods_img/118_P_1408036256565.jpg','','images/201408/thumb_img/118_thumb_P_1408036256087.jpg','images/201408/source_img/118_P_1408036256971.jpg');");
E_D("replace into `ecs_goods_gallery` values('123','119','images/201408/goods_img/119_P_1408036951359.jpg','','images/201408/thumb_img/119_thumb_P_1408036951064.jpg','images/201408/source_img/119_P_1408036951057.jpg');");
E_D("replace into `ecs_goods_gallery` values('124','120','images/201408/goods_img/120_P_1408036989226.jpg','','images/201408/thumb_img/120_thumb_P_1408036989500.jpg','images/201408/source_img/120_P_1408036989505.jpg');");
E_D("replace into `ecs_goods_gallery` values('125','121','images/201408/goods_img/121_P_1408037492071.jpg','','images/201408/thumb_img/121_thumb_P_1408037492490.jpg','images/201408/source_img/121_P_1408037492763.jpg');");
E_D("replace into `ecs_goods_gallery` values('126','122','images/201408/goods_img/122_P_1408037526602.jpg','','images/201408/thumb_img/122_thumb_P_1408037526551.jpg','images/201408/source_img/122_P_1408037526210.jpg');");
E_D("replace into `ecs_goods_gallery` values('127','123','images/201408/goods_img/123_P_1408037702696.jpg','','images/201408/thumb_img/123_thumb_P_1408037702109.jpg','images/201408/source_img/123_P_1408037702460.jpg');");
E_D("replace into `ecs_goods_gallery` values('128','124','images/201408/goods_img/124_P_1408037748376.jpg','','images/201408/thumb_img/124_thumb_P_1408037748665.jpg','images/201408/source_img/124_P_1408037748439.jpg');");
E_D("replace into `ecs_goods_gallery` values('129','125','images/201408/goods_img/125_P_1408037781327.jpg','','images/201408/thumb_img/125_thumb_P_1408037781116.jpg','images/201408/source_img/125_P_1408037781848.jpg');");
E_D("replace into `ecs_goods_gallery` values('130','126','images/201408/goods_img/126_P_1408037827124.jpg','','images/201408/thumb_img/126_thumb_P_1408037827221.jpg','images/201408/source_img/126_P_1408037827615.jpg');");
E_D("replace into `ecs_goods_gallery` values('131','127','images/201408/goods_img/127_P_1408037863088.jpg','','images/201408/thumb_img/127_thumb_P_1408037863139.jpg','images/201408/source_img/127_P_1408037863193.jpg');");
E_D("replace into `ecs_goods_gallery` values('132','128','images/201408/goods_img/128_P_1408037886202.jpg','','images/201408/thumb_img/128_thumb_P_1408037886004.jpg','images/201408/source_img/128_P_1408037886048.jpg');");
E_D("replace into `ecs_goods_gallery` values('133','129','images/201408/goods_img/129_P_1408037931534.jpg','','images/201408/thumb_img/129_thumb_P_1408037931220.jpg','images/201408/source_img/129_P_1408037931667.jpg');");
E_D("replace into `ecs_goods_gallery` values('134','130','images/201408/goods_img/130_P_1408038003317.jpg','','images/201408/thumb_img/130_thumb_P_1408038003933.jpg','images/201408/source_img/130_P_1408038003236.jpg');");
E_D("replace into `ecs_goods_gallery` values('135','131','images/201408/goods_img/131_P_1408038199297.jpg','','images/201408/thumb_img/131_thumb_P_1408038199789.jpg','images/201408/source_img/131_P_1408038199222.jpg');");
E_D("replace into `ecs_goods_gallery` values('136','132','images/201408/goods_img/132_P_1408038228169.jpg','','images/201408/thumb_img/132_thumb_P_1408038228024.jpg','images/201408/source_img/132_P_1408038228548.jpg');");
E_D("replace into `ecs_goods_gallery` values('137','133','images/201408/goods_img/133_P_1408038271072.jpg','','images/201408/thumb_img/133_thumb_P_1408038271242.jpg','images/201408/source_img/133_P_1408038271201.jpg');");
E_D("replace into `ecs_goods_gallery` values('138','134','images/201408/goods_img/134_P_1408038301650.jpg','','images/201408/thumb_img/134_thumb_P_1408038301220.jpg','images/201408/source_img/134_P_1408038301615.jpg');");
E_D("replace into `ecs_goods_gallery` values('139','135','images/201408/goods_img/135_P_1408038332716.jpg','','images/201408/thumb_img/135_thumb_P_1408038332622.jpg','images/201408/source_img/135_P_1408038331243.jpg');");
E_D("replace into `ecs_goods_gallery` values('140','136','images/201408/goods_img/136_P_1408038460232.jpg','','images/201408/thumb_img/136_thumb_P_1408038460490.jpg','images/201408/source_img/136_P_1408038460822.jpg');");
E_D("replace into `ecs_goods_gallery` values('141','137','images/201408/goods_img/137_P_1408038494410.jpg','','images/201408/thumb_img/137_thumb_P_1408038494813.jpg','images/201408/source_img/137_P_1408038494403.jpg');");
E_D("replace into `ecs_goods_gallery` values('142','138','images/201408/goods_img/138_P_1408038526851.jpg','','images/201408/thumb_img/138_thumb_P_1408038526702.jpg','images/201408/source_img/138_P_1408038526228.jpg');");
E_D("replace into `ecs_goods_gallery` values('143','139','images/201408/goods_img/139_P_1408038567427.jpg','','images/201408/thumb_img/139_thumb_P_1408038567360.jpg','images/201408/source_img/139_P_1408038567341.jpg');");
E_D("replace into `ecs_goods_gallery` values('144','140','images/201408/goods_img/140_P_1408038607579.jpg','','images/201408/thumb_img/140_thumb_P_1408038607042.jpg','images/201408/source_img/140_P_1408038607789.jpg');");
E_D("replace into `ecs_goods_gallery` values('145','108','images/201408/goods_img/108_P_1408039499042.jpg','','images/201408/thumb_img/108_thumb_P_1408039499015.jpg','images/201408/source_img/108_P_1408039499871.jpg');");
E_D("replace into `ecs_goods_gallery` values('146','141','images/201408/goods_img/141_P_1408400311325.jpg','','images/201408/thumb_img/141_thumb_P_1408400311091.jpg','images/201408/source_img/141_P_1408400311144.jpg');");
E_D("replace into `ecs_goods_gallery` values('147','142','images/201408/goods_img/142_P_1408400346249.jpg','','images/201408/thumb_img/142_thumb_P_1408400346822.jpg','images/201408/source_img/142_P_1408400346759.jpg');");
E_D("replace into `ecs_goods_gallery` values('148','143','images/201408/goods_img/143_P_1408400527024.jpg','','images/201408/thumb_img/143_thumb_P_1408400527753.jpg','images/201408/source_img/143_P_1408400527954.jpg');");
E_D("replace into `ecs_goods_gallery` values('149','144','images/201408/goods_img/144_P_1408400573845.jpg','','images/201408/thumb_img/144_thumb_P_1408400573796.jpg','images/201408/source_img/144_P_1408400573723.jpg');");
E_D("replace into `ecs_goods_gallery` values('150','145','images/201505/goods_img/145_P_1432242330925.jpg','','images/201505/thumb_img/145_thumb_P_1432242330343.jpg','images/201505/source_img/145_P_1432242330833.jpg');");

require("../../inc/footer.php");
?>