<?php echo $this->fetch('library/user_header.lbi'); ?>
    <form name="formLogin" action="<?php echo url('user/login');?>" method="post" class="validforms">
        <div class="flow-consignee ect-bg-colorf">
            <section>
                <ul>
                    <li><div class="input-text"><b>账号：</b><span><input placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>/<?php echo $this->_var['lang']['email']; ?>" name="username" type="text"  class="inputBg" id="username" datatype="*" ></span></div></li>
                    <li><div class="input-text"><b>密码：</b><span><input placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  name="password" type="password" class="inputBg" datatype="*6-16" /></span></div></li>
                    <?php if ($this->_var['enabled_captcha']): ?>
                    <li>
                        <div class="input-text code">
                            <b><?php echo $this->_var['lang']['comment_captcha']; ?></b>
                            <span><input name="captcha" type="text" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>"></span>
                            <img src="<?php echo url('Public/captcha', array('rand'=>$this->_var['rand']));?>" alt="captcha" class="img-yzm" onClick="this.src='<?php echo url('Public/captcha');?>&t='+Math.random()" />
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </section>
            <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0 ect-padding-lr">
                <input type="checkbox" value="1" name="remember" id="remember" class="l-checkbox" />
                <label for="remember" class="text"><?php echo $this->_var['lang']['remember']; ?><i></i></label><?php if ($this->_var['anonymous_buy'] == 1 && $this->_var['step'] == 'flow'): ?>
      <a href="<?php echo url('flow/consignee',array('direct_shopping'=>1));?>" style="float:right;"><?php echo $this->_var['lang']['direct_shopping']; ?></a>
      <?php endif; ?>
            </p>
            <span class="blank10"></span>
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <div class="ect-padding-lr ect-padding-tb goods-info"> <input type="submit" class="btn btn-info ect-btn-info ect-colorf" value="<?php echo $this->_var['lang']['now_landing']; ?>" /></div>
            <span class="blank10"></span>
			<p class="ect-padding-lr ect-margin-tb text-right ect-margin-bottom0 forgetkey" style="clear:both"><a href="<?php echo url('user/register');?>" class="f_l"><?php echo $this->_var['lang']['free_registered']; ?></a><a href="<?php echo url('user/get_password_phone');?>"><?php echo $this->_var['lang']['forgot_password']; ?></a></p>
        </div>
    </form>
    <?php if ($this->_var['oauth_url']): ?>
    <div class="ect-padding-lr ect-padding-tb goods-info"> <a class="btn btn-info ect-btn-info" style="background-color:#44b549; color:#fff;" href="<?php echo $this->_var['oauth_url']; ?>" >微信授权登录</a></div>
    <?php endif; ?>
    <div class="ect-padding-lr ect-margin-tb user-hezuo ThirdParty">
        <h2><span><?php echo $this->_var['lang']['third_login']; ?></span></h2>
        <p>
            <a href="<?php echo url('user/third_login',array('type'=>'qq'));?>"><img src="__TPL__/images/qq.png"></a>
            <a href="<?php echo url('user/third_login',array('type'=>'sina'));?>"><img src="__TPL__/images/weibo.png"></a>
        </p>
    </div>
    <ul class="introduce clearfix">
    	<li>
        	<span class="promise_zp"></span>
            <p>100%正品保证</p>
        </li>
        <li>
        	<span class="seven_return"></span>
            <p>七天无理由退货</p>
        </li>
        <li>
        	<span class="quily_fh"></span>
            <p>退货免运费</p>
        </li>
    </ul>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script>
$(function(){
	$("body").css({background:"#e8e8e8"})
})
</script>
</body>
</html>
