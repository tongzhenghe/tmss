<?php if ($this->_var['pName'] == 'displayW'): ?>
<a class="sLink" target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"><?php echo $this->_var['ad']['link_man']; ?><i>&gt;</i></a>
<a target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"> <img src="<?php echo $this->_var['src']; ?>" width="<?php echo $this->_var['ad']['ad_width']; ?>" height="<?php echo $this->_var['ad']['ad_height']; ?>"> </a>
<?php else: ?>

<a target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"> <img src="<?php echo $this->_var['src']; ?>" width="<?php echo $this->_var['ad']['ad_width']; ?>" height="<?php echo $this->_var['ad']['ad_height']; ?>"/> </a> 
<?php endif; ?>