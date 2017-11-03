<?php if ($this->_var['helps']): ?>
<div class="w">
    <div id="service2015">
        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
        <?php if ($this->_foreach['foo']['iteration'] < 6): ?>
        <dl class="fore<?php echo $this->_foreach['foo']['iteration']; ?>">
            <dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
            <dd>
                <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <p><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></p>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
        </dl>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <dl class="coverage">
        	<dt>汤姆叔叔自营覆盖成都</dt>
            <dd>
            	<div class="text">汤姆叔叔已向全市提供自营配送服务，支持货到付款、微信支付和售后服务。</div>

            </dd>
        </dl>
    </div>
</div>
<?php endif; ?> 

