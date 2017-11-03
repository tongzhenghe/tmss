<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="themes/jingdong2015/css/categpry_top_color.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body id="bg<?php echo $this->_var['category']; ?>" class="backGround">
<?php echo $this->fetch('library/page_header_catetop.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_category.js')); ?>

<div class="w">
	<div class="left catTop_Left">
    	<div id="sortlist" class="m">
        	<div class="mc">
            	<?php $_from = $this->_var['categories_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php if ($this->_foreach['foo']['iteration'] < 9): ?>
                <div class="item fore<?php echo $this->_foreach['foo']['iteration']; ?>">
                	<h3><span><i></i></span><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></h3>
                    <div class="con">
                    	<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['foo2']['iteration']++;
?>
                        <?php if ($this->_foreach['foo2']['iteration'] < 7): ?>
                        <a href="<?php echo $this->_var['childer']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        <span class="clr"></span>
                    </div>
                </div>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
        </div>
    </div>
    <div class="middle catTop_Middle">
    	<div class="catTop_MiddleBox">
            <div class="slide" id="slide">
                <ul class="slide-items">
                    <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                </ul>
                <div class="slide-controls">
                	<div class="slideControlsBox">
                    	<ul>
                        	<span>1</span><span>2</span><span>3</span><span>4</span><span>5</span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="catTop_BargainBox">
        	<div id="bargain" class="m catTop_Bargain"> 
                <?php $_from = $this->_var['cat_best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_child']):
        $this->_foreach['foo']['iteration']++;
?> 
                <?php if ($this->_foreach['foo']['iteration'] < 5): ?>
                <div class="fore<?php echo $this->_foreach['foo']['iteration']; ?><?php if ($this->_foreach['foo']['iteration'] == 1): ?> curr<?php endif; ?> cat-tab-item">
                    <div class="mt"><h2><?php echo $this->_var['goods_child']['cat_name']; ?></h2><span><i></i></span></div>
                    <div class="mc">
                        <ul>
                            <?php $_from = $this->_var['goods_child']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?> 
                            <?php if ($this->_foreach['foo2']['iteration'] < 6): ?>
                            <li class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
                            	<div class="p-name"><a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                                <div class="p-price"><strong><?php if ($this->_var['goods']['promote_price'] != ''): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong> </div>
                                <div class="p-img"><a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"> <img width="140" height="140" alt="<?php echo $this->_var['goods']['name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"> </a> </div>
                            </li>
                            <?php endif; ?> 
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
        </div>
    </div>
    <div class="clr"></div>
</div>

<div class="w">
	<div class="showCase">
    	<div class="mt">疯狂秒杀</div>
        <div class="mc">
        	
<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>

        </div>
    </div>
    <div class="blank20"></div>
</div>

<div class="w">
	<div class="banner-ad-list">
<?php $this->assign('ads_id','18'); ?><?php $this->assign('ads_num','3'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</div>
	<div class="blank20"></div>
</div>

<div class="w">
	<div class="brand_flagship">
    	<div class="mt"><h2>品牌旗舰店</h2></div>
        <div class="mc">
        	<ul>
            	<?php $_from = $this->_var['brands1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php if (($this->_foreach['foo']['iteration'] - 1) < 16): ?>
                <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?>"><a target="_blank" href="<?php echo $this->_var['brand']['url']; ?>" title="<?php echo $this->_var['brand']['brand_name']; ?>"><?php if ($this->_var['brand']['brand_logo']): ?><img width="90" height="28" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>"><?php else: ?><?php echo $this->_var['brand']['brand_name']; ?><?php endif; ?></a></li>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <div class="blank20"></div>
</div>

<div class="w">
	<div id="floorList">
    	<div class="mt"><h2>品质生活</h2></div>
        <div class="mc" data-widget="tabs">
        	<?php $_from = $this->_var['on_top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top_goods_0_64543300_1506656486');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['top_goods_0_64543300_1506656486']):
        $this->_foreach['foo']['iteration']++;
?>
        	<?php $_from = $this->_var['top_goods_0_64543300_1506656486']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?>
            <?php if ($this->_foreach['foo2']['iteration'] == 1): ?>
            <div class="oaFloor">
            	<div class="catalogue fl" title="<?php echo $this->_var['top_goods_0_64543300_1506656486']['cat_name']; ?>"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_64543300_1506656486']['cat_name'],
  'type' => '分类左侧广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><h3><?php echo $this->_var['top_goods_0_64543300_1506656486']['cat_name']; ?></h3></div>
                <div class="con fr">
                	<div class="c-top">
                    	<div class="fSlide slideBox">
                        	<div class="bd">
                            	<ul>
                                	<li><a href=""><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_64543300_1506656486']['cat_name'],
  'type' => '分类右侧幻灯片广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></li>
                                    <li><a href=""><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_64543300_1506656486']['cat_name'],
  'type' => '分类右侧幻灯片广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></li>
                                     <li><a href=""><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['top_goods_0_64543300_1506656486']['cat_name'],
  'type' => '分类右侧幻灯片广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></li>
                               </ul>
                            </div>
                            <div class="hd">
                            	<div class="hdBox"><ul><li></li><li></li><li></li></ul></div>
                            </div>
                        </div>
                        <div class="f_l showAd">
                        	<ul>
                            	<?php $_from = $this->_var['top_goods_0_64543300_1506656486']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
                                <?php if ($this->_foreach['foo']['iteration'] > 1 && $this->_foreach['foo']['iteration'] < 4): ?>
                            	<li><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>">
                                	<div class="g_name"><?php echo $this->_var['goods']['name']; ?></div>
                                    <div class="g_price"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
                                    <div class="g_pic"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></div>
                                </a></li>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="f_l showAd showAd2">
                        	<ul>
                                <?php $_from = $this->_var['top_goods_0_64543300_1506656486']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
                                <?php if ($this->_foreach['foo']['iteration'] < 2): ?>
                            	<li><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>">
                                	<div class="g_name"><?php echo $this->_var['goods']['name']; ?></div>
                                    <div class="g_price"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
                                    <div class="g_pic"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></div>
                                </a></li>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="f_l showAd">
                        	<ul>
                                <?php $_from = $this->_var['top_goods_0_64543300_1506656486']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
                                <?php if ($this->_foreach['foo']['iteration'] > 3 && $this->_foreach['foo']['iteration'] < 6): ?>
                            	<li><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>">
                                	<div class="g_name"><?php echo $this->_var['goods']['name']; ?></div>
                                    <div class="g_price"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
                                    <div class="g_pic"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></div>
                                </a></li>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="c-bottom  picScrollLeft">
                        <div class="bd">
                            <ul>
                                <?php $_from = $this->_var['top_goods_0_64543300_1506656486']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
                                <?php if ($this->_foreach['foo']['iteration'] > 5 && $this->_foreach['foo']['iteration'] < 12): ?>
                                <li>
                                    <div class="p_img"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" width="100" height="100" /></a></div>
                                    <div class="p_name"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                                    <div class="g_price"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <a class="oaFloorSub prev" href="javascript:;"></a>
                        <a class="oaFloorSub next" href="javascript:;"></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <div class="blank10"></div>
        </div>
    </div>
    <div class="clr"></div>
</div>

<div class="w" style="display:none;">
  <div id="single-choice" class="m">
    <div class="mt">
      <h2>精品晒单</h2>
    </div>
    <div class="mc">
      <div id="prev2" class="btns disabled" style="display: none; "></div>
      <div id="next2" class="btns disabled" style="display: none; "></div>
      <div class="con">
        <ul>
            <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
           <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
              <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
            <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
          <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="sidepanel">
	<div class="foll">
    	<ul>
        	<li><a href="javascript:;"><span>1F</span>&nbsp;服务促销</a></li>
            <li><a href="javascript:;"><span>2F</span>&nbsp;疯狂秒杀</a></li>
            <li><a href="javascript:;"><span>3F</span>&nbsp;品质生活</a></li>
            <li class="down"><a href="javascript:;"><i></i></a></li>
        </ul>
    </div>
</div>

<div class="catTop_copyRight">
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script>
$(function(){
	$(".oaFloor").each(function(i){
		i++;
		$(this).attr("id","lf_f"+(i));
	});
	var length=$(".oaFloor").length;
	if( length > 4 ){
		$(".oaFloor").eq(3).nextAll().remove();
	};
	//
	var sidePanel=$("#sidepanel"),F1=0,F2=$(".showCase").offset().top,F4=$("#floorList").offset().top;//获取楼层位置
	sidePanel.find("li").eq(0).click(function(){
		$(document).scrollTop(F1);
	});
	sidePanel.find("li").eq(1).click(function(){
		$(document).scrollTop(F2);
	});
	sidePanel.find("li").eq(2).click(function(){
		$(document).scrollTop(F4);
	});
	sidePanel.find("li").eq(3).click(function(){
		$(document).scrollTop(F1);
	});
})
</script>
</div>
</body>
</html>