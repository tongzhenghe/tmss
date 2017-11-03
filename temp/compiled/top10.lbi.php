<?php if ($this->_var['script_name'] == "category"): ?>
<div class="j_box">
	<div class="j_logo">销量排行榜</div>
    <div class="j_boxcontent">
    	<div class="j_skulist" id="cont">
        	<div class="j_skulist_inner">
            	<ul class="clearfix" id="list1">
                	<?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
                    <li>
                    	<div class="p_img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="190" height="190"></a></div>
                        <div class="p_name"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></div>
                        <div class="p_price"><span class="tag_content"><?php echo $this->_var['goods']['price']; ?></span></div>
                        <div class="clr"></div>
                    </li>
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clr"> </div>
</div>
<div class="blank10"></div>
<?php endif; ?>

