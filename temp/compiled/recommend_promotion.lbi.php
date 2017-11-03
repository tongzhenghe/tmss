<?php if ($this->_var['promotion_goods']): ?>
<?php if ($this->_var['script_name'] == 'category_top'): ?>
<ul>
	<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
        <?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 6): ?>
    <li>
    	<div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a></div>
        <div class="p-bg"></div>
        <div class="p-text">
        	<h2><?php echo htmlspecialchars($this->_var['goods']['name']); ?></h2>
            <p class="price"><?php echo $this->_var['goods']['promote_price']; ?></p>
            <div class="clock endtime" value="<?php echo $this->_var['goods']['end_date']; ?>"></div>
            <div class="btn"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">加入购物车</a></div>
        </div>
    </li>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

<?php elseif ($this->_var['script_name'] == "category"): ?>
<div class="j_box">
  <div class="j_logo">推广商品</div>
  <div class="j_boxcontent">
    <div class="j_skulist" id="cont">
      <div class="j_skulist_inner">
        <ul class="clearfix" id="list1">
          <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
          <li>
            <div class="p_img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="190" height="190"></a></div>
            <div class="p_name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
            <div class="p_price"> 
              <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
              <span class="tag_content"><?php echo $this->_var['goods']['promote_price']; ?></span> 
              <?php else: ?> 
              <span class="tag_content"><?php echo $this->_var['goods']['shop_price']; ?></span> 
              <?php endif; ?> 
            </div>
            <div class="clr"></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="clr"> </div>
</div>
 <div class="blank10"></div>

<?php else: ?>

<div id="sales" class="f_l clearfix">
      <h1><a href="search.php?intro=promotion"><img src="themes/jingdong2015/images/more.gif" /></a></h1>
       <div class="clearfix goodBox">
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
         <?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 3): ?>
           <div class="goodList">
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/></a><br />
					 <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></p>
           <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['goods']['promote_price']; ?></font>
           </div>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
      </div>
      <?php endif; ?>
<?php endif; ?>