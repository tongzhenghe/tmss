<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['script_name'] == "category"): ?>
<div id="hotsale">
	<div class="mt">热卖推荐</div>
    <div class="mc list-h"> 
    	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <dl>
        	<dt><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img height="100" width="100" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"></a></dt>
            <dd>
            	<div class="p-name">
                	<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?><font color="#ff6600"></font></a>
                    <font color="#ff6600"><a target="blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></font>
                </div>
                <div class="p-price">本店价：<strong> <?php if ($this->_var['goods']['promote_price'] != ""): ?> <?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?> <?php echo $this->_var['goods']['shop_price']; ?> <?php endif; ?></strong></div>
                <div class="btns"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">立即抢购</a></div>
            </dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
</div>
<?php endif; ?> 
<?php endif; ?> 
