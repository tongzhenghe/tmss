<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common_flow.js,easydialog.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>
<div id="shortcut-2013" class="pageHeaderFlow">
	<div class="w">
    	<ul class="fl lh">
        	<li class="fore1 ld"><b></b><a href="javascript:addToFavorite()" rel="nofollow">收藏汤姆</a></li>
        </ul>
        <ul class="fr lh">
        	<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            <?php if ($this->_var['navigator_list']['top']): ?>
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <li class="fore2 ld"><div class="dt"><s></s> <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></div></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            <li class="fore3 ld menu" id="app-jd">
            	<div class="dt"><s></s><i></i><span class="outline"></span><span class="blank"></span><a href="#" target="_blank">手机汤姆</a><b></b></div>
                <div class="dd lh">
                    <div class="qr-info"></div>
                    <div class="qr-item qr-jd-app">
                    	<div class="qr-img"><img id="app-qrcode-img" src="themes/jingdong2015/images/538557daNd249a428.png" class="err-product" width="76" height="76" alt="手机汤姆" src="themes/jingdong2015/images/blank.gif"></div>
                    	<div class="qr-ext"><strong>汤姆客户端</strong><a href="#" target="_blank" class="btn-app-apple"></a><a href="#" target="_blank" class="btn-app-android"></a></div>
                    </div>
                </div>
            </li>
            <li class="fore4 ld menu myJd" id="biz-service">
            	<div class="dt"><s></s> <span class="outline"></span> <span class="blank"></span> 客户服务 <b></b></div>
                <div class="dd">
                	<div><a href="#" target="_blank">帮助中心</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">售后服务</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">在线客服</a></div>
                    <div><a href="#" target="_blank" rel="nofollow">投诉中心</a></div>
                    <div><a href="#" target="_blank">客服邮箱</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="w w1 header clearfix">
	<div id="logo"><a href="./index.php"><img src="themes/jingdong2015/images/logo.gif" title="返回汤姆商城首页" alt="返回汤姆商城首页"></a></div>
    
	<div class="progress clearfix">
		<ul <?php if ($this->_var['step'] == "cart"): ?>class="progress-1"<?php endif; ?>  <?php if ($this->_var['step'] == "consignee"): ?>class="progress-2"<?php endif; ?>       <?php if ($this->_var['step'] == "checkout"): ?>class="progress-2"<?php endif; ?>         <?php if ($this->_var['step'] == "done"): ?>class="progress-3"<?php endif; ?>   <?php if ($this->_var['step'] == "login"): ?>class="progress-2"<?php endif; ?>>
			<li class="step-1"><b></b>1.我的购物车</li>
			<li class="step-2"><b></b>2.填写核对订单信息</li>
			<li class="step-3">3.成功提交订单</li>
		</ul>
	</div>
</div>