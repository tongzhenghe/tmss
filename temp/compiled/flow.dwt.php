<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_flow.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_flow.js')); ?> 
<?php if ($this->_var['step'] == "cart"): ?> 
 

  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
<div class="w cart flowBox">
	<div class="cart-hd"><h2>全部商品<span id="selectedCount"><?php echo $this->_var['total']['goods_count']; ?></span></h2></div>
    <div id="show">
    	<div class="cart-inner">
        	<div class="cart-thead clearfix">
            	<div class="column t-checkbox form">
                	<input id="toggle-checkboxes" type="checkbox" checked="">
                    <label for="toggle-checkboxes">全选</label>
                </div>
                <div class="column t-goods"><?php echo $this->_var['lang']['goods_name']; ?></div>
                <div class="column t-price"><?php echo $this->_var['lang']['shop_prices']; ?></div>
                <div class="column t-quantity"><?php echo $this->_var['lang']['number']; ?></div>
                <div class="column t-price"><?php echo $this->_var['lang']['subtotal']; ?></div>
                <div class="column t-action"><?php echo $this->_var['lang']['handle']; ?></div>
            </div>
            <div id="product-list" class="cart-tbody"> 
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?>
                <div class="item item_selected fore<?php echo $this->_foreach['foo']['iteration']; ?>">
                    <div class="item_form clearfix">
                        <div class="cell p-checkbox">
                            <input class="checkbox" type="checkbox" name="checkItem" checked="">
                            <input type="hidden" name="rec_id" value="<?php echo $this->_var['goods']['rec_id']; ?>" />
                        </div>
                        <div class="cell p-goods">
                            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                            <div class="p-img"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"></a></div>
                            <div class="p-name">
                                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?>
                                    <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                                    <span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                                    <?php endif; ?>
                                    <?php if ($this->_var['goods']['is_gift'] > 0): ?>
                                    <span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                                    <?php endif; ?>
                                </a>
                                <span class="promise411" id="promise411_1094457453"></span>
                            </div>
                            <div class="p-attr"><?php echo $this->_var['goods']['goods_attr']; ?></div>
                            <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                            <div class="p-name"><a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000; display:inline;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a></div>
                            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                            <?php else: ?>
                            <?php echo $this->_var['goods']['goods_name']; ?>
                        <?php endif; ?>
                    </div>
                    <div class="cell p-price"><span class="price"><?php echo $this->_var['goods']['goods_price']; ?></span></div>
                    <div class="cell p-quantity">
                        <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                        <div class="quantity-form">
                            <a href="javascript:void(0);" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" class="decrement">-</a>
                            <input type="text" class="quantity-text" value="<?php echo $this->_var['goods']['goods_number']; ?>" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" onchange="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,0);">
                            <a href="javascript:void(0);" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);" class="increment">+</a>
                        </div>
                        <?php else: ?> 
                        <?php echo $this->_var['goods']['goods_number']; ?>
                        <?php endif; ?> 
                    </div>
                    <div class="cell p-sum"><span class="price" id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></span></div>
                    <div class="cell p-remove">
                        <a class="cart-remove" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';">删除</a><br />
                        <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                        <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; "><?php echo $this->_var['lang']['drop_to_collect']; ?></a> 
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
        <div class="blank20"></div>
        <div class="cart-toolbar clearfix">
            <div class="operation"><a href="javascript:void(0);" id="remove-batch">删除选中的商品</a></div>
            <div class="toolbar-right">
                <div class="normal">
                    <div class="comm-right">
                        <div class="btn-area"><a class="checkout" href="flow.php?step=checkout" id="toSettlement">去结算<b></b></a></div>
                        <div class="price-sum">
                            <div>
                                <span class="txt">总计（不含运费）：</span>
                                <span class="price sumPrice"><em id="totalSkuPrice"><?php echo $this->_var['total']['goods_price']; ?></em></span>
                                <br />
                                <span class="txt">节省：</span>
                                <span class="price totalRePrice" id="totalRePrice">- <?php echo $this->_var['total']['saving']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blank20"></div>
    </div>
  <?php if ($_SESSION['user_id'] > 0): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
  <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script> 
  <?php endif; ?> 
</div>
<?php if ($this->_var['collection_goods']): ?>

<div id="c-tabs" class="w">
	<div class="m plist2">
    	<div class="cm fore1 curr" id="recommend-products">
        	<div class="cmt"><h3><i></i><?php echo $this->_var['lang']['label_collection']; ?></h3></div>
            <div class="cmc flow_collection" id="some-buy" >
            	<div class="bd">
                	<ul class="clearfix">
                    	<?php $_from = $this->_var['collection_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                        <li>
                        	<div class="p-img"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img width="130" height="130" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a></div>
                            <div class="p-name"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                            <div class="p-price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></div>
                            <div class="p-btn" sty><a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn"><span class="btn-icon"></span><span class="btn-text">加入购物车</span></a></div>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <div id="recommend-left" class="prev"></div>
                <div id="recommend-rigth" class="next"></div>
            </div>
        </div>
    </div>
</div>
<div class="blank20"></div>
<?php endif; ?> 
<?php if ($this->_var['fittings_list']): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
<div id="c-tabs" class="w">
	<div class="m plist2">
    	<div class="cm fore1 curr" id="recommend-products">
        	<div class="cmt"><h3><i></i><?php echo $this->_var['lang']['goods_fittings']; ?></h3></div>
            <div class="cmc flow_fittings" id="some-buy" >
            	<form action="flow.php" method="post">
                	<div class="bd">
                    	<ul class="clearfix">
                        	<?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>
                            <li>
                            	<div class="p-img"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>"><img width="130" height="130" src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['fittings']['name']); ?>"></a></div>
                                <div class="p-name"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a></div>
                                <div class="p-price"><strong><?php echo $this->_var['fittings']['fittings_price']; ?></strong></div>
                                <div class="p-btn"><a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)" class="btn"><span class="btn-icon"></span><span class="btn-text">加入购物车</span></a></div>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                    </div>
                    <div id="recommend-left" class="prev"></div>
                    <div id="recommend-rigth" class="next"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="blank20"></div>
<?php endif; ?> 
  
<?php if ($this->_var['favourable_list']): ?>
<div id="c-tabs" class="w">
  <div class="m plist2">
    <div class="cm fore1 curr" id="recommend-products">
    		<div class="cmt">
        <h3><i></i><?php echo $this->_var['lang']['label_favourable']; ?></h3>
      </div>
       <div class="cmc flow_fittings" id="some-buy" style="padding:10px 5px;"> <?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
        <form action="flow.php" method="post">
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_name']; ?></td>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['favourable']['act_name']; ?></strong></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_period']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['start_time']; ?> --- <?php echo $this->_var['favourable']['end_time']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_range']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['far_ext'][$this->_var['favourable']['act_range']]; ?><br />
              <?php echo $this->_var['favourable']['act_range_desc']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_amount']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['formated_min_amount']; ?> --- <?php echo $this->_var['favourable']['formated_max_amount']; ?></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_type']; ?></td>
              <td bgcolor="#ffffff">
                <span class="STYLE1"><?php echo $this->_var['favourable']['act_type_desc']; ?></span>
                <?php if ($this->_var['favourable']['act_type'] == 0): ?>
                <?php $_from = $this->_var['favourable']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?><br />
                  <input type="checkbox" value="<?php echo $this->_var['gift']['id']; ?>" name="gift[]" />
                  <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" class="f6"><?php echo $this->_var['gift']['name']; ?></a> [<?php echo $this->_var['gift']['formated_price']; ?>]
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>          </td>
            </tr>
            <?php if ($this->_var['favourable']['available']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff">&nbsp;</td>
              <td align="center" bgcolor="#ffffff"><input type="image" src="themes/jingdong2015/images/bnt_cat.gif" alt="Add to cart"  border="0" /></td>
            </tr>
            <?php endif; ?>
          </table>
          <input type="hidden" name="act_id" value="<?php echo $this->_var['favourable']['act_id']; ?>" />
          <input type="hidden" name="step" value="add_favourable" />
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
        </div>
  </div>
</div>
<?php endif; ?>

<?php endif; ?>

<div class="flow_warp w"> 
  
  <?php if ($this->_var['step'] == "consignee"): ?> 
   
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?> 
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script> 
  
  <div class="flowBox_cart">
    <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h6>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport_jquery.js')); ?>
    <div class="flowBox_in"> 
      <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
      <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
      </form>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      
    </div>
    <img style="float:left" src="themes/jingdong2015/images/flow_bottom.gif"> </div>
  <?php endif; ?> 
  
<?php if ($this->_var['step'] == "checkout"): ?>
<div class="flowCheckoutBox">
    <div class="flowBox_cart">
        <div id="content">
            <div class="mt"><h2>确认订单信息页面</h2></div>
            <div class="mc">
                <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
                    <div class="checkout-steps">
                        <h3><?php echo $this->_var['lang']['consignee_info']; ?></h3>
                        <div class="extra-r"><a href="flow.php?step=consignee" class="f6"><?php echo $this->_var['lang']['modify']; ?>收货地址</a></div>
                    </div>
                    <div class="step-cont">
                        <div id="consignee-addr">
                            <div class="consignee-cont">
                                <ul>
                                    <li>
                                        <div class="consignee-item"><span><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?> <?php echo $this->_var['region_info']['province']; ?></span><b></b></div>
                                        <div class="addr-detail"><span class="addr-name"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></span><span class="addr-info"><?php echo $this->_var['region_info']['province']; ?> <?php echo $this->_var['region_info']['city']; ?> <?php echo $this->_var['region_info']['district']; ?> <?php echo htmlspecialchars($this->_var['consignee']['address']); ?></span><span class="addr-tel"><?php echo $this->_var['consignee']['tel']; ?></span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
                    <div class="checkout-steps">
                        <h3><?php echo $this->_var['lang']['payment_method']; ?></h3>
                    </div>
                    <div class="step-cont">
                        <div class="payment-list">
                            <div class="list-cont">
                                <ul>
                                	<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['foo']['iteration']++;
?> 
                                    <li>
                                        <div class="payment-item hoverInput">
                                        	<label for="payment_<?php echo $this->_foreach['foo']['iteration']; ?>"><b></b><?php echo $this->_var['payment']['pay_name']; ?></label>
                                            <input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" id="payment_<?php echo $this->_foreach['foo']['iteration']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/>
                                            <div class="text"><span><i></i></span><?php echo $this->_var['lang']['pay_fee']; ?>：<?php echo $this->_var['payment']['format_pay_fee']; ?></div>
                                        </div>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                                <div class="blank0"></div>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
                    <?php endif; ?>
                    <div class="checkout-steps">
                        <h3>送货清单</h3>
                        <?php if ($this->_var['allow_edit_cart']): ?><div class="extra-r"><a href="flow.php" class="f6">返回<?php echo $this->_var['lang']['modify']; ?>购物车</a></div><?php endif; ?>
                    </div>
                    <div class="step-cont">
                        <div class="shopping-list ABTest">
                        	<div class="goods-list">
                            	<?php $_from = $this->_var['seller_cart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cart');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cart']):
        $this->_foreach['foo']['iteration']++;
?>
                                <div class="goods-item fore<?php echo $this->_foreach['foo']['iteration']; ?>">
                                	<div class="sjTit">
                                		<?php if ($this->_var['cart']['seller']): ?><a href="seller_store.php?sid=<?php echo $this->_var['cart']['seller']['id']; ?>"><?php echo $this->_var['cart']['seller']['shop_name']; ?></a><?php else: ?>网站自营<?php endif; ?>
                                        
                                    </div>
                                    <?php $_from = $this->_var['cart']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['too'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['too']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['too']['iteration']++;
?>
                                    <div class="goods-item fore<?php echo $this->_foreach['too']['iteration']; ?>">
                                        <div class="p-img"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="80" height="80"/></a></div>
                                        <div class="goods-msg">
                                            <div class="p-name">
                                                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                                                <div class="hd-nr">
                                                    <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                                                    <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                                        <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                                        <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </div>
                                                </div>
                                                <?php else: ?>
                                                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                                                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                                                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                                                <?php elseif ($this->_var['goods']['is_gift']): ?>
                                                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
                                            </div>
                                            <div class="p-attr"><?php echo $this->_var['goods']['goods_attr']; ?></div>
                                            <div class="p-price"><strong><?php echo $this->_var['goods']['formated_goods_price']; ?></strong><span>x<?php echo $this->_var['goods']['goods_number']; ?></span></div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <div class="postscriptBox">
                                	<span id="postscriptText"><?php echo $this->_var['lang']['order_postscript']; ?></span>
                                    <input name="postscript" id="postscript" class="coupon-text" type="text" value="<?php echo htmlspecialchars($this->_var['order']['postscript']); ?>" />
                                </div>
                            </div>
                            <div class="dis-modes">
                            	<?php if ($this->_var['total']['real_goods_count'] != 0): ?>
                            	<div class="mode-item">
                                	<h4><?php echo $this->_var['lang']['shipping_method']; ?></h4>
                                    <div class="mode-tab-nav">
                                    	<ul>
                                        	<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['shipping']):
        $this->_foreach['foo']['iteration']++;
?>
                                        	<li>
                                            	<div class="hoverInput bigitem_shipment_item">
                                                    <label for="shipping_list_<?php echo $this->_foreach['foo']['iteration']; ?>"><b></b><?php echo $this->_var['shipping']['shipping_name']; ?></label>
                                                    <input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" id="shipping_list_<?php echo $this->_foreach['foo']['iteration']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" />
                                                    <div class="text"><span><i></i></span><?php echo $this->_var['lang']['fee']; ?>：<?php echo $this->_var['shipping']['format_shipping_fee']; ?>　<?php echo $this->_var['lang']['free_money']; ?>：<?php echo $this->_var['shipping']['free_money']; ?></div>
                                                </div>
                                            </li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <ul style="position:absolute; bottom:10px; width:auto;">
                                        	<li><input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?> style="vertical-align:text-top; margin:0 5px 0 0; width:13px; height:13px;" /><?php echo $this->_var['lang']['need_insure']; ?></label></li>
                                        </ul>
                                        <div class="blank0"></div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->_var['pack_list'] || $this->_var['card_list']): ?>
                    <div class="checkout-steps">
                        <h3>其它信息</h3>
                    </div>
                    <div class="step-cont">
                        <div class="PackGreeting">
                        	<?php if ($this->_var['pack_list']): ?>
                        	<div class="PackBox">
                            	<h4><?php echo $this->_var['lang']['goods_package']; ?></h4>
                            	<ul>
                                	<li>
                                    	<div class="hoverInput packList_item">
                                        	<label for="pack_01"><b></b><?php echo $this->_var['lang']['no_pack']; ?></label>
                                        	<input type="radio" name="pack" value="0" id="pack_01" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" />
                                        </div>
                                    </li>
                                    <div class="blank0"></div>
                                    <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['pack']):
        $this->_foreach['foo']['iteration']++;
?>
                                    <li>
                                    	<div class="hoverInput packList_item">
                                        	<label for="pack_<?php echo $this->_foreach['foo']['iteration']; ?>"><b></b><?php echo $this->_var['pack']['pack_name']; ?></label>
                                        	<input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" id="pack_<?php echo $this->_foreach['foo']['iteration']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" />
                                            <div class="text"><span><i></i></span><?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['pack']['format_pack_fee']; ?>　<?php echo $this->_var['lang']['free_money']; ?>：<?php echo $this->_var['pack']['format_free_money']; ?></div>
                                        </div>
                                        <?php if ($this->_var['pack']['pack_img']): ?><a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="viewClick"><?php echo $this->_var['lang']['view']; ?></a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <div class="blank0"></div>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_var['card_list']): ?>
                            <div class="GreetingBox">
                            	<h4><?php echo $this->_var['lang']['goods_card']; ?></h4>
                                <ul>
                                	<li>
                                    	<div class="hoverInput greetingList_item">
                                        	<label for="card_01"><b></b><?php echo $this->_var['lang']['no_card']; ?></label>
                                        	<input type="radio" name="card" value="0" id="card_01" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" />
                                        </div>
                                    </li>
                                    <div class="blank0"></div>
                                    <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['foo']['iteration']++;
?>
                                    <li>
                                    	<div class="hoverInput greetingList_item">
                                        	<label for="card_<?php echo $this->_foreach['foo']['iteration']; ?>"><b></b><?php echo $this->_var['card']['card_name']; ?></label>
                                        	<input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" id="card_<?php echo $this->_foreach['foo']['iteration']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  />
                                            <div class="text"><span><i></i></span><?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['card']['format_card_fee']; ?>　<?php echo $this->_var['lang']['free_money']; ?>：<?php echo $this->_var['card']['format_free_money']; ?></div>
                                        </div>
                                        <?php if ($this->_var['card']['card_img']): ?><a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="viewClick"><?php echo $this->_var['lang']['view']; ?></a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <div class="blank0"></div>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <div class="blank10"></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="step-cont">
                    	<div class="orderSummary"><?php echo $this->fetch('library/order_total.lbi'); ?></div>
                    </div>
                    <div class="step-cont">
                    	<div class="orderCoupon">
                        	<?php if ($this->_var['allow_use_surplus']): ?>
                        	<div class="itme">
                        		<h3><a href="javascript:;"><span><b></b></span><?php echo $this->_var['lang']['use_surplus']; ?></a></h3>
                            	<div class="itmeCon">
                                	<div class="form">
                                    	<input name="surplus" type="text" class="itxt" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
                                        <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_var['allow_use_integral']): ?>
                            <div class="itme">
                            	<h3><a href="javascript:;"><span><b></b></span><?php echo $this->_var['lang']['use_integral']; ?></a></h3>
                                <div class="itmeCon">
                                	<div class="form">
                                    	<input name="integral" type="text" class="itxt" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
                                        <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_var['allow_use_bonus']): ?>
                            <div class="itme">
                            	<h3><a href="javascript:;"><span><b></b></span><?php echo $this->_var['lang']['use_bonus']; ?></a></h3>
                                <div class="itmeCon">
                                	<div class="form">
                                    	<select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" class="iselect">
                                        	<option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                                            <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                                            <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                                        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </select>
                                        <?php echo $this->_var['lang']['input_bonus_no']; ?>
                                        <input name="bonus_sn" type="text" class="itxt" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                                        <input name="validate_bonus" type="button" class="btn_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_var['inv_content_list']): ?>
                            <div class="itme">
                            	<h3><a href="javascript:;"><span><b></b></span><?php echo $this->_var['lang']['invoice']; ?></a></h3>
                                <div class="itmeCon">
                                	<div class="form">
                                    	<input name="need_inv" type="checkbox" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> class="icheckbox" />
                                        <?php if ($this->_var['inv_type_list']): ?> 
                                        <?php echo $this->_var['lang']['invoice_type']; ?> 
                                        <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" class="iselect">
                                        <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
                                        </select>
                                        <?php endif; ?>
                                        <?php echo $this->_var['lang']['invoice_title']; ?>
                                        <input name="inv_payee" type="text"  class="itxt" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                                        <?php echo $this->_var['lang']['invoice_content']; ?>
                                        <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" class="iselect">
                                        <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        	<?php endif; ?>
                            <?php if ($this->_var['how_oos_list']): ?>
                            <div class="itme">
                            	<h3><a href="javascript:;"><span><b></b></span><?php echo $this->_var['lang']['booking_process']; ?>:</strong></a></h3>
                                <div class="itmeCon">
                                	<div class="form how_oos_list">
                                    	<?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                                        <label><input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" class="icheckbox" /><?php echo $this->_var['how_oos_name']; ?></label>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="step-cont">
                    	<div class="trade-foot">
                        	<div id="checkout-floatbar" class="group">
                            	<div class="checkout-buttons">
                                	<input type="submit" class="checkout-submit" />
                                    <input type="hidden" name="step" value="done" />
                                    <span class="total"><?php echo $this->_var['lang']['total_fee']; ?>：<strong><?php echo $this->_var['total']['amount_formated']; ?></strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="consignee-foot">
                        	<p>寄送至：<?php echo $this->_var['region_info']['province']; ?> <?php echo $this->_var['region_info']['city']; ?> <?php echo $this->_var['region_info']['district']; ?> <?php echo htmlspecialchars($this->_var['consignee']['address']); ?></p>
                            <p>收货人：<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?> <?php echo $this->_var['consignee']['tel']; ?></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
.flowCheckoutBox .shopping-list.ABTest .goods-list{margin-top:-10px;}
.sjTit{line-height:30px; margin-top:10px; background:#f2f2f2; padding-left:10px;}
.flowCheckoutBox .shopping-list.ABTest .goods-item{padding:0;}
.flowCheckoutBox .shopping-list.ABTest .goods-item .goods-item{padding:10px; border-style:dashed; margin-left:0;}
</style>
<script>
	var payment=$(".hoverInput");
	payment.each(function(){
		if($(this).find("input").is(":checked")){
			$(this).addClass("cur")
		}
	});
	payment.click(function(){
		if($(this).find("input").is(":checked")){
			$(this).addClass("cur").parent("li").siblings("li").find("div").removeClass("cur")
		}
	});
	payment.hover(function(){
		$(this).addClass("hover").parent("li").siblings("li").find("div").removeClass("hover")
	},function(){
		$(this).removeClass("hover")
	});
	//
	postscript=$("#postscript");
	if(postscript.val()==""){
		postscript.siblings("span").show();
	}else{
		postscript.siblings("span").hide();
	};
	$("#postscript").focus(function(){
		$(this).siblings("span").hide();
	});
	$("#postscriptText").click(function(){
		$(this).hide().siblings("input").focus();
	});
	$("#postscript").blur(function(){
		if($(this).val()==""){
			$(this).siblings("span").show();
		}else{
			$(this).siblings("span").hide();
		}
	});
	//
	$(".orderCoupon h3 a").click(function(){
		if( $(this).parent().hasClass("on") ){
			$(this).parent().removeClass("on").next().hide();
		}else{
			$(this).parent().addClass("on").next().show();
		}
	});
</script>
<?php endif; ?> 
  
  <?php if ($this->_var['step'] == "done"): ?> 
  
        <div class="flowBox subOrder">
         <div class="subTitle">感谢您在本店购物！您的订单已提交成功!</div>
         <?php if ($this->_var['order_count'] > 1): ?>
         <div class="subDesc"><span>由于您的商品由不同的商家发出，此订单将分为<em><?php echo $this->_var['order_count']; ?></em>个不同的子订单配送：</span></div>
         <?php endif; ?>
          <table width="99%" align="center" border="0">
          <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('seller_id', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['seller_id'] => $this->_var['order']):
?>
            <tr>
              <td>订单号：<?php echo $this->_var['order']['order_sn']; ?></td>
              <td>
              <?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>:<strong><?php echo $this->_var['order']['pay_name']; ?></strong>,<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['order']['format_order_amount']; ?></strong>
              </td>
              <td></td>
            </tr>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php if ($this->_var['pay_online']): ?>
            
            <tr>
              <td align="center" colspan="3" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
            </tr>
            <?php endif; ?>
          </table>
          <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?>
          <p class="returngw"><?php echo $this->_var['order_submit_back']; ?></p>
        </div>
        <?php endif; ?>
  <?php if ($this->_var['step'] == "login"): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
  <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script> 

<div id="content" class="userLogin">
	<div class="login-wrap">
    	<div class="w">
        	<div class="login-form">
            	<div class="login-box">
                	<div class="mt">
                    	<h1>京东会员</h1>
                        <div class="extra-r">
                        	<div class="regist-link">
                            	<a href="user.php?act=register"><span><b></b></span>立即注册</a>
                            </div>
                        </div>
                    </div>
                    <div class="mc">
                    	<div class="form">
                        	<form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                            	<ul>
                                	<li class="item">
                                    	<input name="username" type="text" class="input_text1 text" id="username" />
                                        <label for="username" class="icon icon01">&nbsp;</label>
                                        <span class="con"><?php echo $this->_var['lang']['username']; ?></span>
                                    </li>
                                    <li class="item">
                                    	<input name="password" class="input_text1 text" type="password" />
                                        <label for="password" class="icon icon02">&nbsp;</label>
                                        <span class="con"><?php echo $this->_var['lang']['password']; ?></span>
                                    </li>
                                    <li class="item-fore3">
                                    	<div class="safe">
                                        	<span><input type="checkbox" value="1" name="remember" id="remember" class="checkbox" /><label for="remember" class="mar"><?php echo $this->_var['lang']['remember']; ?></label></span>
                                            <span style="float:right; padding:0;"><a href="user.php?act=get_password">忘记密码？</a></span>
                                        </div>
                                    </li>
                                    <?php if ($this->_var['enabled_login_captcha']): ?>
                                    <li id="o-authcode">
                                    	<input type="text" size="8" name="captcha" class="input_text2 text" />
                                        <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
                                        <span>点图换一张</span>
                                    </li>
                                    <?php endif; ?>
                                    <li class="submit">
                                    	<input type="submit" class="btn-img" name="login" value="登　录" />
                                        <input name="act" type="hidden" value="signin" />
                                    </li>
                                    <?php if ($this->_var['anonymous_buy'] == 1): ?>
                                    <li class="submit submit02">
                                    	<input type="button" class="btn-img" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-banner" style="position:absolute;left:0; width:100%;"><?php 
$k = array (
  'name' => 'ads',
  'id' => '24',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
</div>
   
  <?php endif; ?> 
</div>
<div class="flowBottomBox">
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
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
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";

$(function(){
	var input=$(".userLogin li.item").find("input");
	input.focus(function(){
		$(this).parent("li").addClass("on")
	});
	input.blur(function(){
		$(this).parent("li").removeClass("on");
		if( $(this).val() == "" ){
			$(this).siblings(".con").show()
		}
	});
	input.keydown(function(){
		$(this).siblings(".con").hide()
	});
});
</script>
</body>
</html>
