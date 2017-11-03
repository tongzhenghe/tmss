<div class="w">
  <div id="footer-2013"> 
    <?php if ($this->_var['navigator_list']['bottom']): ?>
    <div class="links"> 
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_90242700_1456731169');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_90242700_1456731169']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav_0_90242700_1456731169']['url']; ?>" <?php if ($this->_var['nav_0_90242700_1456731169']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_90242700_1456731169']['name']; ?></a> 
      <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> | <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    
    <div class="copyright"> 
     <?php echo $this->_var['copyright']; ?><br />
     <?php if ($this->_var['shop_address']): ?> 
     <?php echo $this->_var['shop_address']; ?> <br /> 
     <?php endif; ?> 
      <?php if ($this->_var['shop_postcode']): ?> 
     <?php echo $this->_var['shop_postcode']; ?><br /> 
          <?php endif; ?> 
      <?php if ($this->_var['service_phone']): ?> 
      Tel: <?php echo $this->_var['service_phone']; ?><br /> 
      <?php endif; ?> 
      <?php if ($this->_var['service_email']): ?> 
      E-mail: <?php echo $this->_var['service_email']; ?><br />
      <?php endif; ?> 
      <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/jingdong2015/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <img src="themes/jingdong2015/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
      
      <?php if ($this->_var['icp_number']): ?> 
      <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a> 
      <?php endif; ?> 
      
    </div>

    
    <div class="authentication">
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" alt="经营性网站备案中心" src="themes/jingdong2015/images/108_40_zZOKnl.gif"></a> 
     <a href="javascript:void(0);" target="_blank"> <img width="103" height="32" alt="可信网站" src="themes/jingdong2015/images/rBEHaFCFC5QIAAAAAAASVQX9RAYAACb2wHUV1kAABJt760.gif"></a> 
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" alt="朝阳网络警察" src="themes/jingdong2015/images/rBEIDE_nzcIIAAAAAAB30mYXo5QAACrhACj22IAAHfq378.png"></a> 
     <a href="javascript:void(0);" target="_blank"><img width="103" height="32" src="themes/jingdong2015/images/112_40_WvArIl.png"></a></div>    
  </div>
</div>


<div class="w backpanel hide" id="backpanel0708" style="display: none; ">
	<div class="backpanel-inner">
        <div class=" bp-item bp-item-survey"><a href="message.php" class="survey" target="_blank">反馈</a><s></s></div>
        <div class=" bp-item bp-item-backtop" data-top="0"><a href="#none" class="backtop" target="_self">顶部</a><s></s></div>
    </div>
</div>

<div id="cart_show" class="m">
	<div class="cart_show_wrap">
			<div class="success">
                <div class="success-b">
                    <h3>商品已成功加入购物车！</h3>
                 
                </div>
                	<div class="clr"></div>
            <div id="initCart_next_go"><a class="btn-pay " href="./flow.php" id="GotoShoppingCart">去结算</a><a class="btn-continue " href="javascript:void(0)" onclick="easyDialog.close();">继续购物</a>
            	<div class="clr"></div>
            </div></div>
			</div>
		</div>
<script>
$(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 300){
			$(".backpanel").fadeIn(500);
		}
		else
		{
			$(".backpanel").fadeOut(500);
		}
		
	});
	
	$(".backtop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})

</script>
