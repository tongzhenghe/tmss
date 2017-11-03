<?php if ($this->_var['bought_goods']): ?>
<div>
  <div id="buy-buy" class="m m2 related-buy" style="display: block; ">
    <div class="mt">
      <h2>购买了该商品的用户还购买了</h2>
    </div>
    <div class="mc">
      <ul>
        <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
        <li class="fore<?php echo $this->_foreach['bought_goods']['iteration']; ?>">
          <div class="p-img"> <a target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img height="100" width="100" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" class="loading-style2"></a> </div>
          <div class="p-name"> <a target="_blank" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a> </div>
          <div class="p-price"> <strong class="J-p-718196"><?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?> 
            <?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['bought_goods_data']['shop_price']; ?> 
            <?php endif; ?></strong> </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>