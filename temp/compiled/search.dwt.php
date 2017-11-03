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

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_category.js')); ?> <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="w main">

  <div class="right-extra"> 
  <?php if ($this->_var['action'] == "form"): ?>
  
  <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['advanced_search']; ?></span></h3>
    <div class="boxCenterList">
      <form action="search.php" method="get" name="advancedSearchForm" id="advancedSearchForm">
    <table border="0" align="center" cellpadding="3">
      <tr>
        <td valign="top"><?php echo $this->_var['lang']['keywords']; ?>：</td>
        <td>
          <input name="keywords" id="keywords" type="text" size="40" maxlength="120" class="inputBg" value="<?php echo $this->_var['adv_val']['keywords']; ?>" />
          <label for="sc_ds"><input type="checkbox" name="sc_ds" value="1" id="sc_ds" <?php echo $this->_var['scck']; ?> /><?php echo $this->_var['lang']['sc_ds']; ?></label>
          <br /><?php echo $this->_var['lang']['searchkeywords_notice']; ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['category']; ?>：</td>
        <td><select name="category" id="select" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_category']; ?></option><?php echo $this->_var['cat_list']; ?></select>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['brand']; ?>：</td>
        <td><select name="brand" id="brand" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_brand']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['brand_list'],'selected'=>$this->_var['adv_val']['brand'])); ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['price']; ?>：</td>
        <td><input name="min_price" type="text" id="min_price" class="inputBg" value="<?php echo $this->_var['adv_val']['min_price']; ?>" size="10" maxlength="8" />
          -
          <input name="max_price" type="text" id="max_price" class="inputBg" value="<?php echo $this->_var['adv_val']['max_price']; ?>" size="10" maxlength="8" />
        </td>
      </tr>
      <?php if ($this->_var['goods_type_list']): ?>
      <tr>
        <td><?php echo $this->_var['lang']['extension']; ?>：</td>
        <td><select name="goods_type" onchange="this.form.submit()" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['goods_type_list'],'selected'=>$this->_var['goods_type_selected'])); ?>
          </select>
        </td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['goods_type_selected'] > 0): ?>
      <?php $_from = $this->_var['goods_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <?php if ($this->_var['item']['type'] == 1): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>]" value="<?php echo $this->_var['item']['value']; ?>" class="inputBg" type="text" size="20" maxlength="120" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 2): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>][from]" class="inputBg" value="<?php echo $this->_var['item']['value']['from']; ?>" type="text" size="5" maxlength="5" />
          -
          <input name="attr[<?php echo $this->_var['item']['id']; ?>][to]" value="<?php echo $this->_var['item']['value']['to']; ?>"  class="inputBg" type="text" maxlength="5" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 3): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><select name="attr[<?php echo $this->_var['item']['id']; ?>]" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['item']['options'],'selected'=>$this->_var['item']['value'])); ?>
          </select></td>
      </tr>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>

      <?php if ($this->_var['use_storage'] == 1): ?>
      <tr>
        <td>&nbsp;</td>
        <td><label for="outstock"><input type="checkbox" name="outstock" value="1" id="outstock" <?php if ($this->_var['outstock']): ?>checked="checked"<?php endif; ?>/> <?php echo $this->_var['lang']['hidden_outstock']; ?></label>
        </td>
      </tr>
      <?php endif; ?>

      <tr>
        <td colspan="4" align="center"><input type="hidden" name="action" value="form" />
          <input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['button_search']; ?>" /></td>
      </tr>
    </table>
  </form>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  <?php endif; ?>
  <?php if ($this->_var['goods_list']): ?>
  <DIV style="float:right; margin-right:20px;"> 


          <form action="search.php" method="post" class="sort" name="listform" id="form">
              <select name="sort">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['sort'],'selected'=>$this->_var['pager']['search']['sort'])); ?>
              </select>
              <select name="order">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['search']['order'])); ?>
              </select>
              <input type="image" name="imageField" src="themes/jingdong2015/images/bnt_go.gif" alt="go"/>
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </form>

            </DIV>
            <div class="clr"></div>
          <?php endif; ?>
    <?php if ($this->_var['goods_list']): ?>
    <form action="compare.php" method="post" name="compareForm" id="compareForm" onsubmit="return compareGoods(this);">
     
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
              <div class="p-name"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><font style="color: #ff0000;" class="adwords"><?php echo $this->_var['goods']['goods_brief']; ?></font></a></div>
              <div class="p-price"><strong> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong><span></span></div>
              <div class="extra"><span class="evaluate"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">已有<?php echo $this->_var['goods']['comments_number']; ?>人评价</a></span></div>
              <div class="stocklist" style="display:none;"><span class="st33">上海有货</span></div>
              <div class="btns"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-buy">加入购物车</a><a id="coll647948" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="btn-coll">关注</a><a id="comp_647948" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="btn-compare btn-compare-s"><span></span>对比</a></div>
            </div>
          </li>
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>

    </form>
    <script type="text/javascript">
        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

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
        window.onload = function()
        {
          Compare.init();
          fixpng();
        }
        var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
        var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
        var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
        </script> 
    <?php else: ?>
    <div style="padding:20px 0px; text-align:center" class="f5" ><?php echo $this->_var['lang']['no_search_result']; ?></div>
    <?php endif; ?> 
    
    <?php echo $this->fetch('library/pages.lbi'); ?> </div>
  <div class="left">  <?php echo $this->fetch('library/recommend_best.lbi'); ?>  
    
    
    <div id="finalbuy" class="hide m m0"></div>
    <?php echo $this->fetch('library/top10.lbi'); ?> 
    
    <div id="alsobuy" class="hide m m0"></div>
    <div id="da211x261-1" class="m"></div>
  </div>
  <span class="clr"></span>
  <div id="Collect_Tip" class="Tip360 w260"></div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
