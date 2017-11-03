<?php if ($this->_var['cart_list']): ?>
<dl>
  <dt class="ld"><s></s><i></i><span class="shopping"><span id="shopping-amount"><?php echo $this->_var['number']; ?></span></span><a href="./flow.php" id="settleup-url">去购物车结算</a> <b></b> </dt>
  <dd>
    <div id="settleup-content">
      <div class="smt">
        <h4 class="fl">最新加入的商品</h4>
      </div>
      <div class="smc">
        <ul id="mcart-sigle">
        </ul>
        <ul id="mcart-gift">
        </ul>
        <ul id="mcart-mj">
          <?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_35743200_1456729591');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_35743200_1456729591']):
?>
          <li>
            <div class="p-img fl"><a href="<?php echo $this->_var['goods_0_35743200_1456729591']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_35743200_1456729591']['thumb']; ?>" width="50" height="50" alt=""></a></div>
            <div class="p-name fl"><span></span><a href="<?php echo $this->_var['goods_0_35743200_1456729591']['url']; ?>" title="<?php echo $this->_var['goods_0_35743200_1456729591']['name']; ?>" target="_blank"><?php echo $this->_var['goods_0_35743200_1456729591']['short_name']; ?></a></div>
            <div class="p-detail fr ar"> <span class="p-price"><strong><?php echo $this->_var['goods_0_35743200_1456729591']['shop_price']; ?></strong>×<?php echo $this->_var['goods_0_35743200_1456729591']['goods_number']; ?></span> <br>
              <a class="delete" href="javascript:deleteCartGoods(<?php echo $this->_var['goods_0_35743200_1456729591']['rec_id']; ?>);">删除</a> </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="smb ar">共<b><?php echo $this->_var['number']; ?></b>件商品　共计<strong><?php echo $this->_var['amount']; ?></strong><br>
        <a href="./flow.php" title="去购物车结算" id="btn-payforgoods">去购物车结算</a></div>
    </div>
  </dd>
</dl>
<?php else: ?>
<dl class="">
  <dt class="ld"><s></s><i></i><span class="shopping"><span id="shopping-amount">0</span></span><a href="./flow.php" id="settleup-url">我的购物车</a> <b>></b> </dt>
  <dd>
    <div class="prompt">
      <div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>
    </div>
  </dd>
</dl>
<?php endif; ?> 

<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}
</script> 