<?php if ($this->_var['goodsList']): ?>
<div class="w guessLike" id="guessLike">
	<div class="mt hd"><h2>猜你喜欢</h2><a class="indexAd_qh next" href="javascript:void(0)">换一批</a></div>
    <div class="spacer"><i></i></div>
    <div class="mc bd">
    <?php $_from = $this->_var['goodsList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_59162600_1456729591');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_59162600_1456729591']):
        $this->_foreach['foo']['iteration']++;
?>
    	<?php if ($this->_foreach['foo']['iteration'] % 6 == 1 || $this->_foreach['foo']['iteration'] == 1): ?>
        <ul>
		<?php endif; ?>
        	<li>
            	<div class="pPic"><a href="<?php echo $this->_var['goods_0_59162600_1456729591']['url']; ?>" title=""><img src="<?php echo $this->_var['goods_0_59162600_1456729591']['thumb']; ?>" height="130" width="130"/></a></div>
                <div class="pInfo">
                	<div class="pName"><a href="" title=""><?php echo $this->_var['goods_0_59162600_1456729591']['short_name']; ?></a></div>
                    <div class="pPrice"><?php echo $this->_var['goods_0_59162600_1456729591']['shop_price']; ?></div>
                </div>
            </li>
     
        <?php if ($this->_foreach['foo']['iteration'] % 6 == 0): ?>
        </ul>
         <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
    </div>
</div> 
<?php endif; ?> 
