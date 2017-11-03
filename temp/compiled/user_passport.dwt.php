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
</head>
<body class="register_warp" <?php if ($this->_var['action'] == 'login'): ?>style="background:#fff;"<?php endif; ?>>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>
<?php if ($this->_var['action'] !== 'login'): ?>
<?php echo $this->fetch('library/page_header_register.lbi'); ?>
<?php endif; ?>
 
<?php if ($this->_var['action'] == 'login'): ?>
<div class="userLoginHeader">
	<div class="w"><a href="./"><img src="themes/jingdong2015/images/logo.gif" /></a><b>欢迎登录</b></div>
</div>
<div id="content" class="userLogin">
	<div class="login-wrap">
    	<div class="w">
        	<div class="login-form">
            	<div class="login-box">
                	<div class="mt">
                    	<h1>汤姆会员</h1>
                        <div class="extra-r">
                        	<div class="regist-link">
                            	<a href="user.php?act=register"><span><b></b></span>立即注册</a>
                            </div>
                        </div>
                    </div>
                    <div class="mc">
                    	<div class="form">
                        	<form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
                            	<ul>
                                	<li class="item">
                                    	<input type="text" id="loginname" name="username" class="text" tabindex="1" autocomplete="off" sta="2">
                                        <label for="loginname" class="icon icon01">&nbsp;</label>
                                        <span class="con">用户名</span>
                                    </li>
                                    <li class="item">
                                    	<input type="password" id="nloginpwd" name="password" class="text" tabindex="2" autocomplete="off" sta="2">
                                        <label for="nloginpwd" class="icon icon02">&nbsp;</label>
                                    	<span class="con">密码</span>
                                    </li>
                                    <li class="item-fore3">
                                    	<div class="safe">
                                        	<span><input type="checkbox" class="checkbox" name="remember" id="forget"><label for="forget" class="mar"><?php echo $this->_var['lang']['remember']; ?></label></span>
                                            <span style="float:right; padding:0;"><a href="user.php?act=get_password">忘记密码？</a></span>
                                        </div>
                                    </li>
                                    <?php if ($this->_var['enabled_captcha']): ?>
                                    <li id="o-authcode">
                                    	<input type="text" id="authcode" class="text text-1" name="captcha" tabindex="6" style="ime-mode:disabled">
                                        <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?is_login=1&'+Math.random()" id="JD_Verification1">
                                        <span>点图换一张</span>
                                    </li>
                                    <?php endif; ?>
                                    <li class="submit">
                                    	<input type="hidden" name="act" value="act_login" />
                                        <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                        <input type="submit" class="btn-img" id="loginsubmit" value="登　录" tabindex="8">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="coagent">
                        	<h5>使用合作网站账号登录汤姆：</h5>
                            <ul>
                            	<li><a href="user.php?act=oath&type=qq">qq</a><span>|</span></li>
                                <li><a href="user.php?act=oath&type=alipay">淘宝</a><span>|</span></li>
                                <li><a href="user.php?act=oath&type=weibo">新浪微博</a></li>
                                <input type="hidden" name="eMJcGDiwKA" value="rHAqh">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-banner"><?php 
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
 

 
<?php if ($this->_var['action'] == 'register'): ?> 
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
  </div>
</div>
<?php else: ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<DIV id="regist" class="w">
	<div class="mt">
    	<ul class="tab">
        	<li class="curr">个人用户</li>
        </ul>
    	<div class="extra"> <span>我已经注册，现在就&nbsp;<a href="user.php" class="flk13">登录</a></span> </div>
    </div>
    <div class="mc">
        <form action="user.php" method="post" name="formUser" onsubmit="return register();" >
            <div class="form">
                <div id="o-password">
                    <div class="item" id="select-regName">
                        <span class="label"><b class="ftx04">*</b>账户名：</span>
                        <div class="fl item-ifo">
                            <div class="o-intelligent-regName">
                                <input type="text" id="username" name="username" onblur="is_registered(this.value);" class="text" tabindex="1" autocomplete="off" onpaste="return false;" value="用户名" onfocus="if(this.value=='用户名') this.value='';this.style.color='#333'" onblur="if(this.value=='') {this.value='用户名';this.style.color='#999999'}" style="color: rgb(153, 153, 153); ">
                                <i class="i-name"></i>
                                <label id="username_notice"></label>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label"><b class="ftx04">*</b>请设置密码：</span>
                        <div class="fl item-ifo">
                            <input name="password" type="password" id="password1" class="text" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" tabindex="2" style="ime-mode:disabled;" onpaste="return  false" autocomplete="off" sta="0">
                            <i class="i-pass"></i>
                            <label id="password_notice"></label>
                            <span class="clr"></span>
                            <label class="" id="password_notice" style="display: inline; "><span class="fl">安全程度：</span><b></b></label>
                        </div>
                    </div>                    
                    <div class="item">
                        <span class="label"><b class="ftx04">*</b>请确认密码：</span>
                        <div class="fl item-ifo">
                            <input type="password" id="conform_password" name="conform_password" class="text" onblur="check_conform_password(this.value);" tabindex="3" onpaste="return  false" autocomplete="off">
                            <i class="i-pass"></i>
                            <label id="conform_password_notice"></label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label"><b class="ftx04">*</b><?php echo $this->_var['lang']['label_email']; ?>：</span>
                        <div class="fl item-ifo">
                            <input type="text" id="email" onblur="checkEmail(this.value);" name="email" class="text" tabindex="3" onpaste="return  false" autocomplete="off">
                            <label id="email_notice"></label>
                        </div>
                    </div>
                    <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
                    <?php if ($this->_var['field']['id'] == 6): ?>
                    <div class="item" style="height:50px;">
                        <span class="label"><?php echo $this->_var['lang']['passwd_question']; ?>：</span>
                        <div class="fl item-ifo" style="margin-top:5px;">
                            <select name='sel_question'><option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?></select>
                        </div>
                    </div>
                    <div class="item"<?php if ($this->_var['field']['is_need']): ?> id="passwd_quesetion"<?php endif; ?>>
                        <span class="label"><?php if ($this->_var['field']['is_need']): ?><b class="ftx04">*</b><?php endif; ?><?php echo $this->_var['lang']['passwd_answer']; ?>：</span>
                        <div class="fl item-ifo"><input type="text" name="passwd_answer" class="text" onpaste="return  false" autocomplete="off"></div>
                    </div>
                    <?php else: ?>
                    <div class="item"<?php if ($this->_var['field']['is_need']): ?> id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>>
                        <span class="label"><?php if ($this->_var['field']['is_need']): ?><b class="ftx04">*</b><?php endif; ?><?php echo $this->_var['field']['reg_field_name']; ?>：</span>
                        <div class="fl item-ifo"><input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" class="text" onpaste="return  false" autocomplete="off"></div>
                    </div>
                    <?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="item" id="authcodeDiv">
                        <span class="label"><b class="ftx04">*</b>验证码：</span>
                        <div class="fl item-ifo">
                            <input type="text" id="captcha" style="ime-mode:disabled" name="captcha" class="text text-1" tabindex="6" autocomplete="off" maxlength="6">
                            <label class="img"> <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="cursor:pointer;width:100px;height:36px;display:block;"  onClick="this.src='captcha.php?'+Math.random()" /> </label>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="item item-new">
                        <span class="label">&nbsp;</span>
                        <div class="fl item-ifo">
                            <input name="agreement" type="checkbox" value="1" checked="checked" class="checkbox">
                            <label for="protocol" style="color:#333;"><?php echo $this->_var['lang']['agreement']; ?></label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">&nbsp;</span>
                        <input name="act" type="hidden" value="act_register" >
                        <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                        <input type="submit" class="btn-img btn-regist" id="registsubmit" value="立即注册" tabindex="8">
                    </div>
                </div>
            </div>
        </form>
    </div>
</DIV>
<?php endif; ?> 
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'get_password'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
        </tr>
        <tr>
          <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
          <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
          <td><input name="email" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="send_pwd_email" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'qpassword_name'): ?>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
        </tr>
        <tr>
          <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
          <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="get_passwd_question" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'get_passwd_question'): ?>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
        </tr>
        <tr>
          <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
          <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
          <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
        </tr>
        <?php if ($this->_var['enabled_captcha']): ?>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
          <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="check_answer" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['action'] == 'reset_password'): ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 


<?php echo $this->fetch('library/page_footer_user.lbi'); ?> 

</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";

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
</html>
