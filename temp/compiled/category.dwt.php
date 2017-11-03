<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link href="themes/jingdong2015/css/css1.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_category.js')); ?>
<?php if ($this->_var['cat_id'] == 50 || $this->_var['cat_id'] == 51): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<DIV id="regist" class="w">
    <div class="mc">
        <h1 align="center"><font size="">汤姆叔叔下单专区</font></h1>&nbsp;
        <form action="category.php?act=do" method="post" name="formUser" enctype="multipart/form-data">
           <table align="center" cellpadding="10" >
                <tr>
                    <td><font size='5'>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</font></td>
                    <td><input name='username' type="text" size='40'/></td>
                </tr>
                <tr>
                    <td><font size='5'>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</font></td>
                    <td><input name='phone' type="text" size='40'></td>
                </tr>
                <tr>
                    <td><font size='5'>详&nbsp;&nbsp;细&nbsp;&nbsp;地&nbsp;&nbsp;址:</font></td>
                    <td><input name='addr' type='text' size='40'/></td>
                </tr>
                <tr>
                    <td><font size='5'>商&nbsp;&nbsp;品&nbsp;&nbsp;名&nbsp;&nbsp;称:</font></td>
                    <td><input name="goodsinfo" type="text" size='40'/></td>
                </tr>
                <tr>
                    <td><font size='5'>商品正面图片:</font></td>
                    <td><input name="image1" type="file"/></td>
                </tr>
                <tr>
                    <td><font size='5'>商品侧面图片:</font></td>
                    <td><input name='image2' type='file'/></td>
                </tr>
                <tr>
                    <td><font size='5'>商品背面图片:</font></td>
                    <td><input name='image3' type='file'/></td>
                </tr>
                <tr>
                    <td><font size='5'>商品内部图片:</font></td>
                    <td><input name='image4' type='file'/></td>
                </tr>
                <tr>
                    <td><font size='5'>维&nbsp;&nbsp;修&nbsp;&nbsp;内&nbsp;&nbsp;容:</font></td>
                    <td><textarea name='contents' cols='41.5' rows='5'></textarea></td>
                </tr>
                <tr>
                     <td><font size='5'>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</font></td>
                     <td><textarea name='remark' cols='41.5' rows='5'></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align='center'><input type='submit' value="立即下单"/></td>
                </tr>
           </table>
        </form>
    </div>
</DIV>
<?php else: ?>
<div class="w main">
	<div class="blank10"></div>
	<?php if ($this->_var['hot_goods']): ?>
	<div class="CatehotSales">
    	
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

      
<?php $this->assign('articles',$this->_var['articles_11']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_11']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>


	</div>
    <?php endif; ?>
    
    
    <?php if ($this->_var['brands_old']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <div id="select" class="m">
    	<div class="mt">
        	<h1><?php echo $this->_var['cat_info']['cat_name']; ?> <strong>&nbsp;<?php echo $this->_var['lang']['goods_filter']; ?></strong></h1>
            <?php if ($this->_var['brands_old']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
            <div class="selectorSet">
                <?php if ($this->_var['brands_old']['1']): ?>
                <?php $_from = $this->_var['brands_old']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?>
                <?php if ($this->_var['brand']['selected'] && $this->_var['key'] > 0): ?>
                <a href="<?php echo $this->_var['brands_old']['0']['url']; ?>"><?php echo $this->_var['lang']['brand']; ?>：<strong><?php echo $this->_var['brand']['brand_name']; ?></strong><b></b></a>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endif; ?> 
                
                <?php if (( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0): ?>
                <a href="<?php echo $this->_var['price_grade']['0']['url']; ?>"><?php echo $this->_var['lang']['price']; ?>：<strong><?php echo $this->_var['price_min']; ?>&nbsp;-&nbsp;<?php echo $this->_var['price_max']; ?></strong><b></b></a>
                <?php endif; ?>
                
                <?php if ($this->_var['filter_attr_sum'] > 0): ?>
                <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_41422900_1456734850');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_41422900_1456734850']):
?>
                <?php $_from = $this->_var['filter_attr_0_41422900_1456734850']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['attr']):
?>
                <?php if ($this->_var['attr']['selected'] && $this->_var['key'] > 0): ?>
                <a href="<?php echo $this->_var['attr']['del_url']; ?>"><?php echo htmlspecialchars($this->_var['filter_attr_0_41422900_1456734850']['filter_attr_name']); ?>：<strong><?php echo $this->_var['attr']['attr_value']; ?></strong><b></b></a>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="stExt">共 <?php echo $this->_var['pager']['record_count']; ?> 个商品</div>
        </div>
        <div class="mc attrs">
        	<div class="attrsBox"> 
                <?php if (! $this->_var['brand_id']): ?>
                <?php if ($this->_var['brands_old']['1']): ?>
                <div class="prop-attrs">
                	<div class="attr">
                    	<div class="a-key"><font><?php echo $this->_var['lang']['brand']; ?></font>：</div>
                        <div class="a-values">
                        	<div class="v-fold">
                            	<ul class="f-list">
                                    <?php $_from = $this->_var['brands_old']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?> 
                                    <li><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
                
                <?php if (( ( $this->_var['price_max'] > $this->_var['price_min'] ) && $this->_var['price_max'] > 0 ) && $this->_var['price_max']): ?>
                <?php else: ?>
                <?php if ($this->_var['price_grade']['1']): ?>
                <div class="prop-attrs">
                	<div class="attr">
                    	<div class="a-key"><font><?php echo $this->_var['lang']['price']; ?></font>：</div>
                        <div class="a-values">
                        	<div class="v-fold">
                            	<ul class="f-list">
                                    <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?> 
                                    <li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?> 
                <?php endif; ?>
                
                <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_41479300_1456734850');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_41479300_1456734850']):
?>
                <?php if (! $this->_var['filter_attr_0_41479300_1456734850']['selected']): ?>
                <div class="prop-attrs">
                	<div class="attr">
                    	<div class="a-key"><font><?php echo htmlspecialchars($this->_var['filter_attr_0_41479300_1456734850']['filter_attr_name']); ?></font>：</div>
                        <div class="a-values">
                        	<div class="v-fold">
                            	<ul class="f-list">
                                	<?php $_from = $this->_var['filter_attr_0_41479300_1456734850']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?> 
                                    <li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            <div id="moreProp" class="mb">
            	<div class="attr-extra">
                	<div>更多选项<b></b></div>
                </div>
            </div>
            <div id="lessProp" class="mb hide">
            	<div class="attr-extra open">
                	<div>收起<b></b></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    
    <div class="right-extra">
		<?php echo $this->fetch('library/goods_list.lbi'); ?>
        <?php echo $this->fetch('library/pages.lbi'); ?>
        <div class="blank20"></div>
        <div class="blank20"></div>
    </div>
    <div class="left">
    	<div id="sortlist_cat" class="m hide">
        	<div class="mt"><h2><?php echo $this->_var['cat']['name']; ?></h2></div>
            <div class="mc"> 
            	<?php $_from = $this->_var['categories_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_left'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_left']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_left']['iteration']++;
?>
                <div class="item  <?php if ($this->_var['cat']['status'] == 1): ?>current<?php endif; ?>">
                	<h3><b></b><?php echo $this->_var['cat']['name']; ?></h3>
                    <ul>
                    	<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                        <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo $this->_var['child']['name']; ?></a></li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
        </div>
        <div id="ad_left" class="m m0 hide"></div>
        <?php echo $this->fetch('library/recommend_promotion.lbi'); ?>
        
        
        <div id="finalbuy" class="hide m m0"></div>
        <?php echo $this->fetch('library/top10.lbi'); ?> 
        
        <div id="alsobuy" class="hide m m0"></div>
        <div id="da211x261-1" class="m"></div>
    </div>
    <span class="clr"></span>
    <div class="J_goods_best"><?php echo $this->fetch('library/recommend_best.lbi'); ?></div>
    <div class="mayLike"><?php echo $this->fetch('library/browse_related.lbi'); ?></div>
    <div class="recentView"><?php echo $this->fetch('library/history.lbi'); ?></div>
</div>

<?php endif; ?>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer1.lbi'); ?>
<script>
	function panduan(){
		var width=$(window).width();
		if( width > 1248 && width < 1410 ){
			$("body").removeClass().addClass("resp01");
			$("#maybe-like .mc").slide({mainCell:"#guess-scroll ul",effect:"leftLoop",delayTime:0,vis:6,scroll:6});
		}else if( width > 1411 ){
			$("body").removeClass().addClass("resp02");
			$("#maybe-like .mc").slide({mainCell:"#guess-scroll ul",effect:"leftLoop",delayTime:0,vis:7,scroll:7});
		}else{
			$("body").removeClass();
			$("#maybe-like .mc").slide({mainCell:"#guess-scroll ul",effect:"leftLoop",delayTime:0,vis:4,scroll:4});
		}
		
	}
	panduan();
</script>
<style>
#top-banner{display:none;}
.resp01 .w{width:1210px;}
.resp01 .PageHeader #search-2013{width:510px; padding-right:126px;}
.resp01 .PageHeader #search-2013 .text{width:416px;}
.resp01 .CatehotSales #market{width:175px}
.resp01 .CatehotSales #hotsale .mc dl{margin-left: 0; margin-right: 13px;}
.resp01 #select .prop-attrs .v-fold .f-list li{margin-right:50px;}
.resp01 .right-extra{width:990px;}
.resp01 #plist.ordinary-prebuy ul{margin-left:-10px;}
.resp01 #plist.ordinary-prebuy ul li{margin-left:10px;}
.resp01 .J_goods_best .j_skulist ul{padding-left:26px;}
.resp01 .J_goods_best .j_skulist li{padding:0 26px 20px 0;}
.resp01 .recentView #recent-view-track .mc ul{margin:0 0 0 -20px;}
.resp01 .recentView #recent-view-track .mc ul li{margin:0 0 0 33.5px;}
.resp01 #service-2013 dl{width:252px;}
.resp01 #service-2013 dl.fore5{width:160px;}

.resp02 .w{width:1390px;}
.resp02 .PageHeader #search-2013{width:690px; padding-right:126px;}
.resp02 .PageHeader #search-2013 .text{width:596px;}
.resp02 .CatehotSales #market{width:220px}
.resp02 .CatehotSales #market .mc{padding:15px 20px 0 0;}
.resp02 .CatehotSales #hotsale .mc dl{margin-left: 15px; margin-right: 25px;}
.resp02 #select .prop-attrs .v-fold .f-list li{margin-right:50px;}
.resp02 .right-extra{width:1170px;}
.resp02 #plist.ordinary-prebuy ul{margin:0;}
.resp02 #plist.ordinary-prebuy ul li{width:234px; margin:10px 0 0 0;}
.resp02 .J_goods_best .j_skulist ul{padding-left:56px;}
.resp02 .J_goods_best .j_skulist li{padding:0 56px 20px 0;}
.resp02 .recentView #recent-view-track .mc ul{margin:0 0 0 -20px;}
.resp02 .recentView #recent-view-track .mc ul li{margin:0 0 0 50px;}
.resp02 #service-2013 dl{width:292px;}
.resp02 #service-2013 dl.fore5{width:160px;}
</style>
</body>
</html>