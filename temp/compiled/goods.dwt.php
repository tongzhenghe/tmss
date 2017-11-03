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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<div class="GoodsPageHeader"><?php echo $this->fetch('library/page_header.lbi'); ?></div><?php echo $this->smarty_insert_scripts(array('files'=>'magiczoomplus.js,jd_goods.js')); ?>
<div class="rootNav">
<div class="w">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
    <div id="product-intro">
    	<div id="name">
        	<h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
            <strong><?php echo $this->_var['goods']['goods_brief']; ?></strong>
        </div>
        
            
        <div class="clearfix" style="width:600px; float:left">
            <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                <ul class="proInfoUl" id="summary">
                    <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                    <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
                    <li id="summary-price">
                        <div class="dt"><?php echo $this->_var['lang']['promote_price']; ?>：</div>
                        <div class="dd"> <strong class="p-price"><?php echo $this->_var['goods']['promote_price']; ?></strong> </div>
                        <div class="clearfix" id="TK-clear"></div>
                    </li>
                    <?php else: ?>
                    <li id="summary-price">
                        <div class="dt"><?php echo $this->_var['lang']['shop_prices']; ?>：</div>
                        <div class="dd"> <strong class="p-price" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></strong> </div>
                        <div class="clearfix" id="TK-clear"></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($this->_var['cfg']['show_marketprice']): ?>
                    <li id="summary-market" class="hide">
                        <div class="dt"><?php echo $this->_var['lang']['market_price']; ?>：</div>
                        <div class="dd"><del id="page_maprice"><?php echo $this->_var['goods']['market_price']; ?></del></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($this->_var['promotion']): ?>
                    <li id="summary-promotion" class="hide" style="display: list-item; ">
                        <div class="dt"><?php echo $this->_var['lang']['activity']; ?>：</div>
                        <div class="dd"> 
                            <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                            <div id="product-promotions"> 
                                <?php if ($this->_var['item']['type'] == "snatch"): ?>
                                <em class="hl_red_bg"><?php echo $this->_var['lang']['snatch']; ?></em>
                                <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                                <em class="hl_red_bg"><?php echo $this->_var['lang']['group_buy']; ?></em>
                                <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                                <em class="hl_red_bg"><?php echo $this->_var['lang']['auction']; ?></em>
                                <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                                <em class="hl_red_bg"><?php echo $this->_var['lang']['favourable']; ?></em>
                                <?php endif; ?>
                                <em class="hl_red"><?php echo $this->_var['item']['act_name']; ?></em><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank">&nbsp;&nbsp;详情 <s class="s-arrow">&gt;&gt;</s></a>
                            </div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        </div>
                    </li>
                    <?php endif; ?> 
                     
                    <li id="summary-grade">
                    	<p>累计评价</p>
                        <p><a href="#comment"><?php echo $this->_var['goods']['comments_number']; ?></a></p>
                    </li>
                </ul>
                <ul class="proInfoUl">
                    <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
                    <li id="summary-market"> 
                        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
                        <div class="dt"><?php echo $this->_var['lang']['goods_number']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['lang']['stock_up']; ?></span></div>
                        <?php else: ?>
                        <div class="dt"><?php echo $this->_var['lang']['goods_number']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></span></div>
                        <?php endif; ?> 
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                    <li id="summary-market">
                        <div class="dt"><?php echo $this->_var['lang']['goods_brand']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['goods']['goods_brand']; ?></span></div>
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['cfg']['show_goodsweight']): ?>
                    <li id="summary-market">
                        <div class="dt"><?php echo $this->_var['lang']['goods_weight']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['goods']['goods_weight']; ?></span></div>
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['cfg']['show_addtime']): ?>
                    <li id="summary-market">
                        <div class="dt"><?php echo $this->_var['lang']['add_time']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['goods']['add_time']; ?></span></div>
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['goods']['bonus_money']): ?>
                    <li id="summary-market">
                        <div class="dt"><?php echo $this->_var['lang']['goods_bonus']; ?></div>
                        <div class="dd"><span><?php echo $this->_var['goods']['bonus_money']; ?></span></div>
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['cfg']['use_integral']): ?>
                    <li id="summary-tips">
                        <div class="dt"><?php echo $this->_var['lang']['goods_integral']; ?></div>
                        <div class="dd">
                            <div id="product-tips"><em class="hl_red">最多可使用 <?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></em></div>
                        </div>
                    </li>
                    <?php endif; ?> 
                    <?php if ($this->_var['goods']['give_integral'] > 0): ?>
                    <li id="summary-tips">
                        <div class="dt"><?php echo $this->_var['lang']['goods_give_integral']; ?></div>
                        <div class="dd">
                            <div id="product-tips"><em class="hl_red"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></em></div>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
                
                <ul id="choose" class="proInfoUl spec_list_box">
                     
                    <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                        <?php if ($this->_var['spec']['is_show_img'] == 1): ?>
                        <li id="choose-version">
                            <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                            <div class="dd"> 
                                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                <div class="item<?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>">
                                    <b></b>
                                    <a href="#none" title="<?php echo $this->_var['value']['label']; ?>" style="cursor: pointer; "><img src="<?php echo $this->_var['value']['thumb_url']; ?>" width="30" height="30" /><?php echo $this->_var['value']['label']; ?></a>
                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                            </div>
                        </li>
                        <?php else: ?>
                        <li id="choose-version">
                            <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                            <div class="dd"> 
                                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                <div class="item<?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>">
                                    <b></b>
                                    <a href="#none" title="<?php echo $this->_var['value']['label']; ?>" style="cursor: pointer; "><?php echo $this->_var['value']['label']; ?></a>
                                    <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php else: ?>
                    <li id="choose-version">
                        <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                        <div class="dd">
                            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                            <div class="check_item">
                                <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]
                                </label>
                            </div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    
                       <?php if ($this->_var['volume_price_list']): ?> 
                    <li class="summary-market">
                        <font><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
                        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#e5e5e5">
                            <tr>
                                <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                                <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
                            </tr>
                            <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                            <tr>
                                <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                                <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </table>
                    </li>
                    <?php endif; ?>
                    <li id="choose-service" style="height:28px;">
                    <div class="dt">会员价格：</div>
                        <div class="dd">
                            <div class="service-type-yb">
                                <div class="yb-item-cat yb-item-cat-r1"> 
                                    <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');$this->_foreach['rank_price'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank_price']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
        $this->_foreach['rank_price']['iteration']++;
?> 
                                    <?php if ($this->_foreach['rank_price']['iteration'] == 1): ?>
                                    <div class="item"> <a href="#none" class="yb-item yb-item-first" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['rank_name']; ?> <?php echo $this->_var['rank_price']['price']; ?></a></div>
                                    <?php endif; ?> 
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <div class="yb-item-hide"> 
                                        <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');$this->_foreach['rank_price'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rank_price']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
        $this->_foreach['rank_price']['iteration']++;
?>
                                        <?php if ($this->_foreach['rank_price']['iteration'] > 1): ?>
                                        <div class="item"><a href="#none" class="yb-item" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['rank_name']; ?> <?php echo $this->_var['rank_price']['price']; ?></a></div>
                                        <?php endif; ?> 
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="chooseBtns">
                	<div class="chooseAmount">
                    <h2>购买数量：</h2>
                        <div class="wrapInput">
                        	
                        	<a class="btn-reduce" href="javascript:;" onclick="setAmount('reduce')">-</a>
                            <a class="btn-add" href="javascript:;" onclick="setAmount('add')">+</a>
                            <input class="text" name="number" id="buy-num" value="1" onchange="setAmount('edit')">
                        </div>
                    </div>
                    <div id="choose-btn-append" class="btn"> <a class="btn-append " id="InitCartUrl" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" title="">加入购物车<b></b></a></div>
                </div>
            </form>
             
            <span class="clr"></span>
        </div>
        <?php if ($this->_var['store']): ?>
        
       	<div class="brand-bar-pop">
        	<p class="seller">
            	<label>卖　　家：</label>
                <a href="seller_store.php?sid=<?php echo $this->_var['store']['id']; ?>" target="_blank"><?php echo $this->_var['store']['shop_name']; ?></a>
            </p>
         
            
            <p class="online-service">
            	<label>在线客服：</label>
                <span><a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['store']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8">旺旺客服</a></span>
            </p>
            <p class="online-service">
            	<label>在线客服：</label>
                <span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['store']['kf_qq']; ?>&site=qq&menu=yes">QQ客服</a></span>
            </p>
            <p class="pop-address">
            	<label>所在地址：</label>
                <span><?php echo $this->_var['store']['address']; ?></span>
            </p>
            <p class="pop-tel">
            	<label>联系电话：</label>
                <span><?php echo $this->_var['store']['kf_tel']; ?></span>
            </p>
            <div class="enter-shop">
            	<a href="seller_store.php?sid=<?php echo $this->_var['store']['id']; ?>" target="_blank">进入卖家店铺</a>
            </div>
            
        </div>
        <?php endif; ?>
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
         
    </div>
    
</div>
</div>
<div class="w goodsW">
	<?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <div class="clr"></div>
  <div class="right"> 
    <div id="product-detail" class="m m1">
      <div class="float-nav-wrap" style="height: 30px; ">
        <div class="mt" style="height: 30px;">
          <ul class="tab">
            <li class="curr" id="p-con-detail"><a href="javascript:;" class="toggle-link">商品介绍</a></li>
            <li id="p-con-attr"><a href="javascript:;" class="toggle-link">规格参数</a></li>
            <li id="p-con-list"><a href="javascript:;" class="toggle-link">包装清单</a></li>
            <li id="p-con-comm"><a href="javascript:;" class="toggle-link">商品评价</a></li>
            <li id="p-con-guar"><a href="javascript:;" class="toggle-link">售后保障</a></li>
          </ul>
        </div>
      </div>
      <div class="mc" id="p-con-detail-con">
        <ul class="detail-list">
          <li>商品名称：<?php echo $this->_var['goods']['goods_name']; ?></li>
          <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
          <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
          <li><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
        <div class="ac" style="height:10px;"></div>
        <div class="detail-content"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
      </div>
      <div class="mc hide" id="p-con-attr-con">
        <div class="detail-correction"> </div>
        <table cellpadding="0" cellspacing="1" width="100%" border="0" class="Ptable">
          <tbody>
            <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
            <tr>
              <th class="tdTitle" colspan="2"><?php echo htmlspecialchars($this->_var['key']); ?></th>
            </tr>
            <tr> </tr>
            
            <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
            <tr>
              <td class="tdTitle"><?php echo htmlspecialchars($this->_var['property']['name']); ?></td>
              <td><?php echo $this->_var['property']['value']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </tbody>
        </table>
      </div>
      <div class="mc hide" id="p-con-list-con">
        <div class="item-detail"><?php echo $this->_var['goods']['packing_list']; ?></div>
      </div>
      <div class="mc hide" id="p-con-guar-con">
        <div class="item-detail"><?php echo $this->_var['goods']['customer_service']; ?></div>
      </div>
    </div>
    <DIV class="clr"></DIV>
		<div id="comment" class="m m2">
  <div class="mt">
    <h2>商品评价</h2>
  </div>
  <div class="mc">
    <div id="i-comment">
      <div class="rate"> <strong><?php echo $this->_var['comment_percent']['haoping_percent']; ?><span>%</span></strong> <br>
        <span>好评度</span> </div>
      <div class="percent">
        <dl>
          <dt>好评<span>(<?php echo $this->_var['comment_percent']['haoping_percent']; ?>%)</span></dt>
          <dd>
            <div style="width: <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;"></div>
          </dd>
        </dl>
        <dl>
          <dt>中评<span>(<?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%)</span></dt>
          <dd class="d1">
            <div style="width: <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%;"> </div>
          </dd>
        </dl>
        <dl>
          <dt>差评<span>(<?php echo $this->_var['comment_percent']['chaping_percent']; ?>%)</span></dt>
          <dd class="d1">
            <div style="width: <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%;"> </div>
          </dd>
        </dl>
      </div>
      <div class="btns">
        <div><?php if ($this->_var['factor'] == 0): ?>所有用户都可以对该商品<br />
          <a href="javascript:void(0);" class="open_comment">【发表评论】</a><?php elseif ($this->_var['factor'] == 1): ?>只有登陆的用户才可以对该商品<br />
          <a href="javascript:void(0);" class="open_comment">【发表评论】</a><?php elseif ($this->_var['factor'] == 2): ?>在本站购买过一次其他商品的用户才可以对该商品<br />
          <a href="javascript:void(0);" class="open_comment">【发表评论】</a><?php elseif ($this->_var['factor'] == 3): ?>购买过此<?php echo $this->_var['goods_name']; ?>的顾客，在收到商品才可以对该商品<br />
          <a href="javascript:void(0);" class="open_comment">【发表评论】</a><?php endif; ?> </div>
      </div>
    </div>
  </div>
</div>
        <?php echo $this->fetch('library/comments.lbi'); ?>
      
  </div>
  <div class="left">
    <?php if ($this->_var['related_cat']): ?>
    <div id="related-sorts" class="m m2">
      <div class="mt">
        <h2>相关分类</h2>
      </div>
      <div class="mc">
        <ul class="lh">
   		 <?php $_from = $this->_var['related_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
          <li><a href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo $this->_var['cat']['cat_name']; ?>"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </ul>
      </div>
    </div>
    
    <?php endif; ?>
    
        <?php if ($this->_var['related_brand']): ?>
    <div id="related-brands" class="m m2">
      <div class="mt">
        <h2>同类其他品牌</h2>
      </div>
      <div class="mc">
        <ul class="lh">
          <?php $_from = $this->_var['related_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');if (count($_from)):
    foreach ($_from AS $this->_var['brands']):
?>
          <li><a href="<?php echo $this->_var['brands']['url']; ?>" title="<?php echo $this->_var['brands']['brand_name']; ?>"><?php echo $this->_var['brands']['brand_name']; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
    </div>
       <?php endif; ?>
    
    <?php if ($this->_var['$top10_price'] || $this->_var['top10_brand'] || $this->_var['top10_category']): ?>
    <div id="ranklist" class="m m2">
      <div class="mt">
        <h2>排行榜</h2>
      </div>
      <div class="mc">
        <ul class="tab">
          <li class="curr">同价位</li>
          <li>同品牌</li>
          <li>同类别</li>
        </ul>
        <ul class="tabcon">
          <?php $_from = $this->_var['top10_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_27505400_1507769357');$this->_foreach['top10_price'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top10_price']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_27505400_1507769357']):
        $this->_foreach['top10_price']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['top10_price']['iteration']; ?>"><span><?php echo $this->_foreach['top10_price']['iteration']; ?></span>
            <div class="p-img"><a href="<?php echo $this->_var['goods_0_27505400_1507769357']['url']; ?>"><img height="50" width="50" src="<?php echo $this->_var['goods_0_27505400_1507769357']['thumb']; ?>"></a></div>
            <div class="p-name"><a href="<?php echo $this->_var['goods_0_27505400_1507769357']['url']; ?>" title="<?php echo $this->_var['goods_0_27505400_1507769357']['short_name']; ?>"><?php echo $this->_var['goods_0_27505400_1507769357']['short_name']; ?></a></div>
            <div class="p-price"><strong class="J-p-942510"><?php echo $this->_var['goods_0_27505400_1507769357']['price']; ?></strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <ul class="tabcon hide">
          <?php $_from = $this->_var['top10_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_27523100_1507769357');$this->_foreach['top10_brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top10_brand']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_27523100_1507769357']):
        $this->_foreach['top10_brand']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['top10_brand']['iteration']; ?>"><span><?php echo $this->_foreach['top10_brand']['iteration']; ?></span>
            <div class="p-img"><a href="<?php echo $this->_var['goods_0_27523100_1507769357']['url']; ?>"><img data-img="1" height="50" width="50" src="<?php echo $this->_var['goods_0_27523100_1507769357']['thumb']; ?>" class="err-product"></a></div>
            <div class="p-name"><a href="<?php echo $this->_var['goods_0_27523100_1507769357']['url']; ?>" title="<?php echo $this->_var['goods_0_27523100_1507769357']['short_name']; ?>"><?php echo $this->_var['goods_0_27523100_1507769357']['short_name']; ?></a></div>
            <div class="p-price"><strong class="J-p-1029670"><?php echo $this->_var['goods_0_27523100_1507769357']['price']; ?></strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <ul class="tabcon hide">
          <?php $_from = $this->_var['top10_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_27542400_1507769357');$this->_foreach['top10_category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top10_category']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_27542400_1507769357']):
        $this->_foreach['top10_category']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['top10_category']['iteration']; ?>"><span><?php echo $this->_foreach['top10_category']['iteration']; ?></span>
            <div class="p-img"><a href="<?php echo $this->_var['goods_0_27542400_1507769357']['url']; ?>"><img height="50" width="50" src="<?php echo $this->_var['goods_0_27542400_1507769357']['thumb']; ?>" class="err-product"></a></div>
            <div class="p-name"><a href="<?php echo $this->_var['goods_0_27542400_1507769357']['url']; ?>" title="<?php echo $this->_var['goods_0_27542400_1507769357']['short_name']; ?>"><?php echo $this->_var['goods_0_27542400_1507769357']['short_name']; ?></a></div>
            <div class="p-price"><strong class="J-p-1094930"><?php echo $this->_var['goods_0_27542400_1507769357']['price']; ?></strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
     <?php endif; ?>
     <?php echo $this->fetch('library/bought_goods.lbi'); ?> </div>
</div>
<div class="clr"></div>
<div class="w">
  <div id="product-track">
    <div class="right">
            	<?php echo $this->fetch('library/browse_related.lbi'); ?> 
    </div>
    <div class="left">
      	<?php echo $this->fetch('library/history.lbi'); ?> 
    </div>
    <span class="clr"></span></div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>



</body>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);

  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_SHOPPRICE'))
      document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	
  }
}

</script>
</html>
