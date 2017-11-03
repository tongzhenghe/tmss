<?php if ($this->_var['script_name'] == 'index'): ?>
<div class="mt">
	<h2><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></h2>
    <div class="extra"><a href="<?php echo $this->_var['articles_cat']['url']; ?>" target="_blank">更多&nbsp;&gt;</a></div>
</div>
<div class="mc">
	<ul>
    	<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
        <li <?php if ($this->_foreach['foo']['iteration'] % 2 == 1): ?>class="odd"<?php endif; ?>><a href="<?php echo $this->_var['article_item']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php elseif ($this->_var['script_name'] == 'category'): ?>
<div id="market">
	<div class="mt"><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></div>
    <div class="mc">
    	<ul>
        	<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
            <li>·<a href="<?php echo $this->_var['article_item']['url']; ?>" target="_blank"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</div>
<?php else: ?>
<div class="mt">
	<h2><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></h2>
</div>
<div class="mc">
	<ul>
    	<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
        <li>·<a target="_blank" href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>