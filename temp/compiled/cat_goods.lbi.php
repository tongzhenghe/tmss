<div class="w catGoodsBox catGoodsSlide">
	<div class="mt">
    	<h2><i></i><span></span><font><?php echo $this->_var['goods_cat']['name']; ?></font></h2>
        <div class="hd_box">
        	<ul>
            	<li><a href="javascript:;">热门<i></i></a></li>
            	<?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_level2');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_level2']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php if ($this->_foreach['foo']['iteration'] < 9): ?>
            	<li><a href="javascript:;"><?php echo $this->_var['goods_level2']['name']; ?><i></i></a></li>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <div class="mc">
    	<div class="side">
        	<div class="banner"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><i></i></div>
            <div class="themes Category">
            	<ul>
                    <?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_33093100_1456729591');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_33093100_1456729591']):
        $this->_foreach['foo']['iteration']++;
?>
                    <?php if ($this->_foreach['foo']['iteration'] < 7): ?>
                    <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?>"><a href="<?php echo $this->_var['cat_0_33093100_1456729591']['url']; ?>"><i></i><span><?php echo $this->_var['cat_0_33093100_1456729591']['name']; ?></span></a></li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="words">
            	<ul>
                	<?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_33107500_1456729591');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_33107500_1456729591']):
        $this->_foreach['foo']['iteration']++;
?>
                	<?php if ($this->_foreach['foo']['iteration'] % 2 == 1): ?>
                	<li>
                    <?php endif; ?>
                    	<?php $_from = $this->_var['cat_0_33107500_1456729591']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_c');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['cat_c']):
        $this->_foreach['foo2']['iteration']++;
?>
                        <?php if ($this->_foreach['foo2']['iteration'] < 5): ?>
                        <span><a href="<?php echo $this->_var['cat_c']['url']; ?>" target="_blank" title="<?php echo $this->_var['cat_c']['name']; ?>"><?php echo $this->_var['cat_c']['name']; ?></a></span>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php if ($this->_foreach['foo']['iteration'] % 2 == 0 || ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
        <div class="bd_box">
        	<div class="bdBox bdBox01">
            	<div class="mainInner">
                	<ul class="mainBody">
                    	<li class="fore1"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧小广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li class="fore2"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧小广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    </ul>
                    <ul class="mainExtra">
                    	<li class="fore1"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧小广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li class="fore2"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧小广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        <li class="fore3"><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                    </ul>
                </div>
                <div class="bdSlider">
                	<div class="hd_Slider">
                    	<ul>
                        	<li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd_Slider">
                    	<ul>
                        	<li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧幻灯片广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                            <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧幻灯片广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                            <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧幻灯片广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                            <li><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品右侧幻灯片广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
                        </ul>
                    </div>
                    <a class="bdSliderQh prev_bd" href="javascript:void(0)"><</a>
                    <a class="bdSliderQh next_bd" href="javascript:void(0)">></a>
                </div>
            </div>
        	<?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_level2');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_level2']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php if ($this->_foreach['foo']['iteration'] < 9): ?>
        	<div class="bdBox bdBoxPro">
            	<ul>
                	<?php $_from = $this->_var['goods_level2']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?>
                	<li>
                    	<div class="pImg"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img width="100" height="100" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
                        <div class="pName"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></div>
                        <div class="pPrice"><?php if ($this->_var['goods']['promote_price'] > 0): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>
    <div class="cat_brands">
    	<ul>
        	<?php $_from = $this->_var['goods_cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands_0_33223200_1456729591');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brands_0_33223200_1456729591']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php if ($this->_foreach['foo']['iteration'] < 11): ?>
        	<li class="fore<?php echo $this->_foreach['foo']['iteration']; ?>"><a target="_blank" href="<?php echo $this->_var['brands_0_33223200_1456729591']['url']; ?>"><?php if ($this->_var['brands_0_33223200_1456729591']['logo'] != "data/brandlogo/"): ?><img height="40" width="100" src="<?php echo $this->_var['brands_0_33223200_1456729591']['logo']; ?>"><?php else: ?><?php echo $this->_var['brands_0_33223200_1456729591']['brand_name']; ?><?php endif; ?></a></li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>