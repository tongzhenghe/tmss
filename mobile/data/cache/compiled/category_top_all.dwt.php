<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
	<header class="Header clearfix">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title"><?php echo $this->_var['title']; ?></span>
        <a href="./" class="Home"><span></span></a>
    </header>
    <div class="panel panel-default ect-category-all ect-border-radius0">
        <ul>
            <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
            <li>
                <div class="media panel-body">
                    <div class="pull-left ect-category-right"><h3><?php echo htmlspecialchars($this->_var['cat']['name']); ?></h3></div>
                </div>
                <div class="ect-category-child">
                    <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
                    <?php if ($this->_var['child']['cat_id']): ?>
                    <span><a href="<?php echo url('category/all',array('id'=>$this->_var['child']['id']));?>"><img class="pull-left" src="<?php echo $this->_var['child']['cat_image']; ?>"><p><?php echo htmlspecialchars($this->_var['child']['name']); ?></p></a></span>
                    <?php else: ?>
                    <span><a href="<?php echo $this->_var['child']['url']; ?>"><img class="pull-left" src="<?php echo $this->_var['child']['cat_image']; ?>"><p><?php echo htmlspecialchars($this->_var['child']['name']); ?></p></a></span>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul> 
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>