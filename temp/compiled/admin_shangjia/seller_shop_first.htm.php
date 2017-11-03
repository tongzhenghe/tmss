<!-- $Id: setting_first.htm 16339 2009-06-24 08:01:25Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,../js/region.js')); ?>
<div class="main-div">
<div class="step1">设置商店的一些基本信息<em>商店的信息用于显示在商品详情和店铺页面</em></div>
<form action="index.php?act=second" name="theForm" method="post" onsubmit="return validator()" enctype="multipart/form-data" >
  <table cellspacing="1" cellpadding="3" width="100%">
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_name']; ?>:</td>
      <td><input type="text" name="shop_name" value="<?php echo $this->_var['shop_info']['shop_name']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_title']; ?>:</td>
      <td><input type="text" name="shop_title" value="<?php echo $this->_var['shop_info']['shop_title']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label">店铺关键字:</td>
      <td><input type="text" name="shop_keyword" value="<?php echo $this->_var['shop_info']['shop_keyword']; ?>" />
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_country']; ?>:</td>
      <td>
         <select name="shop_country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')">
           <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
           <?php $_from = $this->_var['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
             <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['country']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </select>                
       </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_province']; ?>:</td>
      <td>
         <select name="shop_province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
           <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
             <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
               <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['province']): ?>selected<?php endif; ?>> <?php echo $this->_var['region']['region_name']; ?></option>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </select>
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_city']; ?>:</td>
      <td>
        <select name="shop_city" id="selCities">
          <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
            <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
              <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['city']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_address']; ?>:</td>
      <td><input type="text" name="shop_address" value="<?php echo $this->_var['shop_info']['shop_address']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label">客服QQ号码:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_qq']; ?>" name="kf_qq">
		  <br>
          <!--<span id="noticeqq" class="notice-span">如果您有多个客服的QQ号码，请在每个号码之间使用半角逗号（,）分隔。</span>-->
      </td>
    </tr>
    <tr>
      <td class="micro-label">客服淘宝旺旺:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_ww']; ?>" name="kf_ww">
		  <br>
          <!--<span id="noticeqq" class="notice-span">如果您有多个客服的旺旺号码，请在每个号码之间使用半角逗号（,）分隔。</span>-->
      </td>
    </tr>
    <tr>
      <td class="micro-label">客服电话:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_tel']; ?>" name="kf_tel">
      </td>
    </tr>
    <tr>
        <td class="micro-label">商店 Logo: </td>
        <td>
             <input type="file" name="shop_logo"/>
             <?php if ($this->_var['shop_info']['shop_logo']): ?>
             <img src="<?php echo $this->_var['shop_info']['shop_logo']; ?>" width="150" /> 
             <?php endif; ?>   
                     
        </td>
    </tr>
    <tr>
      <td class="micro-label">首页样式:</td>
      <td><input type="radio" name="shop_style" value="1" <?php if ($this->_var['shop_info']['shop_style']): ?>checked="true"<?php endif; ?>/>显示左侧&nbsp;&nbsp;<input type="radio" name="shop_style" value="0" <?php if ($this->_var['shop_info']['shop_style'] == 0): ?>checked="true"<?php endif; ?>/>去掉左侧
      <br/>(选择‘去掉左侧’将不显示店铺首页左侧信息，首页成单页状态)
      </td>
    </tr>
    <tr>
      <td class="micro-label">是否申请加入店铺街:</td>
      <td><input type="radio" name="apply" value="1" <?php if ($this->_var['shop_info']['apply']): ?>checked="true"<?php endif; ?>/>是&nbsp;&nbsp;<input type="radio" name="apply" value="0" <?php if ($this->_var['shop_info']['apply'] == 0): ?>checked="true"<?php endif; ?>/>否
      <br/>(选择‘是’,网站管理员将审核信息,通过后才可显示在网站店铺街)
      </td>
    </tr>
    <tr>
        <td class="micro-label">店铺街小图标: </td>
        <td>
             <input type="file" name="street_logo"/>
             <?php if ($this->_var['shop_info']['street_logo']): ?>
             <img src="<?php echo $this->_var['shop_info']['street_logo']; ?>" width="90" height="45" /> 
             <?php endif; ?>   
             <br/>(图标尺寸:90x45px)
        </td>
    </tr>
    <tr>
        <td class="micro-label">店铺街商品大图: </td>
        <td>
             <input type="file" name="street_spjpg"/>
             <?php if ($this->_var['shop_info']['street_spjpg']): ?>
             <img src="<?php echo $this->_var['shop_info']['street_spjpg']; ?>" width="220" /> 
             <?php endif; ?>   
             <br/>(图片尺寸:500x500px)   
        </td>
    </tr>
    <tr>
      <td class="micro-label">店铺公告:</td>
      <td>
      <textarea name="notice" style="max-height:130px; min-height:130px; max-width:293px; min-width:293px;"><?php echo $this->_var['shop_info']['notice']; ?></textarea>
      </td>
    </tr>
    <tr>
      <td>
      <input type="hidden" name="data_op" value="<?php echo $this->_var['data_op']; ?>"/>
      </td>
      <td>
        <input type="submit" value="提交信息" class="button" />
      </td>
    </tr>
  </table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<script type="Text/Javascript" language="JavaScript">
<!--

region.isAdmin = true;

onload = function()
{
   document.getElementById('paynon').style.display = 'none';
}

function validator()
{
  var validator = new Validator('theForm');
  validator.required('shop_name', shop_name_not_null);
  
  return validator.passed();
}

function show_shipping_area()
{
  Ajax.call('shipping.php?act=shipping_priv', '', shippingResponse, 'GET', 'JSON');
}

function shippingResponse(result)
{
  var shipping_name = document.getElementById('shipping_type');
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    shipping_name.options[0].selected = true;
    return;
  }
  
  var area = document.getElementById('shipping_area');
  if(shipping_name.value == '')
  {
    area.style.display = 'none';
  }
  else
  {
    area.style.display = "block";
  }
}

function loadConfig()
{
  var payment = document.forms['theForm'].elements['payment'];
  var paymentConfig = document.getElementById('paymentConfig');
  if(payment.value == '')
  {
    paymentConfig.style.display = 'none';
    return;
  }
  else
  {
    paymentConfig.style.display = 'block';
  }
	if(payment.value == 'alipay')
  {
	  document.getElementById('paynon').style.display = 'block';
	}
	else
	{
	  document.getElementById('paynon').style.display = 'none';
	}
  var params = 'code=' + payment.value;

  Ajax.call('payment.php?is_ajax=1&act=get_config', params, showConfig, 'GET', 'JSON');
}

function showConfig(result)
{
  var payment = document.forms['theForm'].elements['payment'];
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    payment.options[0].selected = true;
    return;
  }
  var paymentConfig = document.getElementById('paymentConfig');
  var config = result.content;

  paymentConfig.innerHTML = config;
}


//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
