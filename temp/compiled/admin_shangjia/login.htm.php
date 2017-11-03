<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/share.js">

<style type="text/css">
body {
  color: white;
}
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

if (window.parent != window)
{
  window.top.location.href = location.href;
}

//-->
</script>
<style type="text/css">
/* css 重置 */

* {
	margin: 0;
	padding: 0;
	list-style: none;
}
body {
	background: #fff;
	font: normal 12px/22px 宋体;
}
img {
	border: 0;
}
a {
	text-decoration: none;
	color: #333;
}
/* 本例子css */
.slideBox {
	width: 521px;
	height: 70px;
	overflow: hidden;
	margin:0px auto;
	margin-top:20px;
	position: relative; background:url(images/qq.png) no-repeat;
}
.slideBox p{position:absolute; right:12px; top:5px; height:55px; line-height:55px; color:#eb8918; width:150px; text-align:left; font-size:20px;}
</style>
</head>
<body style="background:url(images/bg.jpg) repeat-x top center #ededed;" >
<form method="post" action="privilege.php" name='theForm' onsubmit="return validate()">
  <table cellspacing="0" cellpadding="0" style="width:521px; height:327px;background:url(images/loginbg.png); color:#727272; font-size:#727272; margin:auto; margin-top:212px;" align="center">
    <tr>
      <td height="99" align="center" valign="middle"><img src="images/logo.gif" style="border:none; display:block; margin-top:15px; text-align:center;"/></td>
    </tr>
    <tr>
      <td height="201" align="center" ><table width="328" height="180">
          <tr>
            <td width="131"><?php echo $this->_var['lang']['label_username']; ?></td>
            <td colspan="2"><input type="text" name="username" style=" width:216px; height:24px; padding:0; line-height:24px; background:url(images/txtbg.png) no-repeat; border:none; padding:0px 3px;" /></td>
          </tr>
          <tr>
            <td><?php echo $this->_var['lang']['label_password']; ?></td>
            <td colspan="2"><input type="password" name="password" style=" width:216px; line-height:24px; padding:0; height:24px; background:url(images/txtbg.png) no-repeat; border:none; padding:0px 3px;" /></td>
          </tr>
          <?php if ($this->_var['gd_version'] > 0): ?>
          <tr>
            <td><?php echo $this->_var['lang']['label_captcha']; ?></td>
            <td width="106"><input type="text" name="captcha" class="capital" style=" width:108px; height:24px; padding:0; background:url(images/txtbg.png) no-repeat; border:none; padding:0px 3px;"  /></td>
            <td width="103"><img src="index.php?act=captcha&amp;<?php echo $this->_var['random']; ?>" width="105" height="20" alt="CAPTCHA" border="1" onclick= "this.src=&quot;index.php?act=captcha&amp;&quot;+Math.random()" style="cursor: pointer;" title="<?php echo $this->_var['lang']['click_for_another']; ?>" /></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="left"><input type="checkbox" value="1" name="remember" id="remember"/>
              <label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
          <tr>
            <td colspan="3"></td>
          </tr>
          <tr>
            <td height="34">&nbsp;</td>
            <td colspan="2" align="left"><input type="submit" value="<?php echo $this->_var['lang']['signin_now']; ?>" class="button" style="background:url(images/btn.jpg); width:118px; height:28px; padding:0; color:#FFF; line-height:28px; border:none;" /></td>
          </tr>
          <tr>
            <td colspan="3" align="center" >&raquo; <a href="../" style="color:#727272"><?php echo $this->_var['lang']['back_home']; ?></a> &nbsp;&nbsp;&raquo; <a href="get_password.php?act=forget_pwd" style="color:#727272"><?php echo $this->_var['lang']['forget_pwd']; ?></a></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center" style="padding-left: 50px">&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" name="act" value="signin" />
</form>
<script language="JavaScript">
<!--
  document.forms['theForm'].elements['username'].focus();
  
  /**
   * 检查表单输入的内容
   */
  function validate()
  {
    var validator = new Validator('theForm');
    validator.required('username', user_name_empty);
    //validator.required('password', password_empty);
    if (document.forms['theForm'].elements['captcha'])
    {
      validator.required('captcha', captcha_empty);
    }
    return validator.passed();
  }
  
//-->
</script>
</body>
