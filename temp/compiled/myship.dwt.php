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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,myship.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="blank"></div>
<div class="block">
  <h5><span><?php echo $this->_var['lang']['shipping_method']; ?></span></h5>
  <div class="blank"></div>
  
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

        /* $Id : myship.js 4865 2007-01-31 14:04:10Z Hackfan $ */

/* *
 * 检查收货地址信息表单中填写的内容
 */
function checkForm(frm)
{
  var msg = new Array();
  var err = false;

  if (frm.elements['country'].value == 0)
  {
    msg.push(country_not_null);
    err = true;
  }

  if (frm.elements['province'].value == 0 && frm.elements['province'].length > 1)
  {
    err = true;
    msg.push(province_not_null);
  }

  if (frm.elements['city'].value == 0 && frm.elements['city'].length > 1)
  {
    err = true;
    msg.push(city_not_null);
  }

  if (frm.elements['district'].length > 1)
  {
    if (frm.elements['district'].value == 0)
    {
      err = true;
      msg.push(district_not_null);
    }
  }

  if (err)
  {
    message = msg.join("\n");
    alert(message);
  }
  return ! err;
}

        
      </script>
<form action="myship.php" method="post" name="theForm" id="theForm" onsubmit="return checkForm(this)">
    <?php echo $this->fetch('library/myship.lbi'); ?>
    </form>
</div>
<div class="blank5"></div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
