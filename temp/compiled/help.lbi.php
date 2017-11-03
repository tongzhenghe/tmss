<div class="blank"></div>
<?php if ($this->_var['helps']): ?>
<div class="w">
  <div id="service-2013" class="Help_JD"> 
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?> 
    <?php if ($this->_foreach['foo']['iteration'] < 6): ?>
    <dl class="fore<?php echo $this->_foreach['foo']['iteration']; ?>">
      <dt><b></b><strong><?php echo $this->_var['help_cat']['cat_name']; ?></strong></dt>
      <dd> 
        <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <div><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </dd>
    </dl>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    <span class="clr"></span> </div>
</div>
<?php endif; ?> 

