<div class="bigImg" id="vertical">
	<div id="preview">
    	<div id="spec-n1" class="jqzoom"> <a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus" id="Zoomer" rel="hint-text: ; selectors-effect: false; selectors-class: img-hover; zoom-distance: 10;zoom-width: 400; zoom-height: 400;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img id="midimg" src="<?php echo $this->_var['goods']['goods_img']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="350" height="350"></a> </div>
        <div id="spec-list" > <a href="javascript:;" class="spec-control prev" id="spec-forward"></a> <a href="javascript:;" class="spec-control next" id="spec-backward"></a>
        	<div class="spec-items">
            	<ul class="lh">
                	<?php if ($this->_var['pictures']): ?> 
                    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                    <li><a href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"> <img alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" width="50" height="50" /></a> </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div id="short-share">
            <?php if ($this->_var['cfg']['show_goodssn']): ?>
        	<div class="fl"><span><?php echo $this->_var['lang']['goods_sn']; ?>：</span><span><?php echo $this->_var['goods']['goods_sn']; ?></span></div>
            <?php endif; ?> 
            <a href="#none" onclick="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="chooseBtnColl fr" >关注商品<b></b></a>
            <div class="clb"></div>
        </div>
    </div>
</div>