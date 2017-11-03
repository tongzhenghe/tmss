    <div id="filter">
      <div class="cls"></div>
      <div class="fore1">
        <dl class="order">
          <dd  <?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">销量<b></b></a></dd>
          <dd <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">价格<b></b></a></dd>
          
          
          <dd <?php if ($this->_var['pager']['sort'] == 'comments_number'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=comments_number&order=<?php if ($this->_var['pager']['sort'] == 'comments_number' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"  class="<?php if ($this->_var['pager']['sort'] == 'comments_number'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">评论数<b></b></a></dd>
          
          
          <dd <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">上架时间<b></b></a></dd>
          
          
        </dl>
        <div class="pagin pagin-m"><span class="text">  <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
      <i><?php echo $this->_var['key']; ?></i>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?>
      </span>
      <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev"><</a><?php else: ?><span class="prev-disabled"><</span><?php endif; ?>
      
      <?php if ($this->_var['pager']['page_next']): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next">></a><?php else: ?><span class="next-disabled">></span><?php endif; ?>
      
      
      </div>
        <span class="clr"></span></div>
      
    </div>
    <div id="plist" class="m plist-n7a ordinary-prebuy">
      <ul class="list-h">
       <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <?php if ($this->_var['goods']['goods_id']): ?>
        <li>
          <div class="lh-wrap">
            <div class="p-img"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img width="220" height="220" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"></a>
            <?php if ($this->_var['goods']['is_new'] == 1 || $this->_var['goods']['is_best'] == 1 || $this->_var['goods']['is_hot'] == 1 || $this->_var['goods']['org_promote_price'] > 0): ?>
            <?php if ($this->_var['goods']['is_new'] == 1): ?>
              <div class="picon pi1"></div>
              <?php elseif ($this->_var['goods']['is_hot'] == 1): ?>
              <div class="picon pi2"></div>
              <?php elseif ($this->_var['goods']['is_best'] == 1): ?>
                <div class="picon pi8"></div>
               <?php elseif ($this->_var['goods']['org_promote_price'] > 0): ?>
               <div class="picon pi3"></div>
              <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="p-price"><strong> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong><span id="p647948"></span></div>
            <div class="p-name"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><p><?php echo $this->_var['goods']['goods_name']; ?></p><p class="promoWords"><?php echo $this->_var['goods']['goods_brief']; ?></p></a></div>
            <div class="extra"><span class="evaluate">已有<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['comments_number']; ?></a>人评价</span></div>
            <div class="stocklist" style="display:none;"><span class="st33">上海有货</span></div>
            <div class="btns">
            	<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-buy"><span></span>加入购物车</a>
                <a id="coll647948" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="btn-coll"><span></span>关注</a>
                <a id="comp_<?php echo $this->_var['goods']['goods_id']; ?>" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="btn-compare btn-compare-s"><span></span>对比</a>
            </div>
            </div>
        </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
      </ul>
      <div class="blank0"></div>
    </div>
    
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>