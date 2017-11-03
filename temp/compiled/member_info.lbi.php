<?php if ($this->_var['user_info']): ?>
<li class="fore1" id="loginbar">
	<div class="dt"><?php echo $this->_var['user_info']['username']; ?>，<?php echo $this->_var['lang']['welcome']; ?>！<a href="user.php?act=logout" class="link-logout">[退出]</a></div>
</li>
<?php else: ?>
<li class="fore1" id="loginbar">
	<div class="dt"><span><a href="user.php">你好，请登录</a> <a href="user.php?act=register" class="link-regist" style="color:#C81623;">免费注册</a></span></div>
</li>
<?php endif; ?>
<li class="fore2 ld"><div class="dt"><s></s><a href="user.php?act=order_list">我的订单</a></div></li>        
            
