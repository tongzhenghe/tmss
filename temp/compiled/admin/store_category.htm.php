<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm">
<!-- start reg_fiedls list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

<table cellspacing='1' id="list-table">
  <tr>
    <th>分类名称</th>
    <th>排序</th>
    <th>显示</th>
    <th>推荐</th>
    <th>操作</th>
  </tr>
  <?php $_from = $this->_var['store_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
  <tr>
    <td class="first-cell" ><span onclick="listTable.edit(this,'edit_name', <?php echo $this->_var['cate']['id']; ?>)"><?php echo $this->_var['cate']['cate_name']; ?></span></td>
    <td align="center"><span onclick="listTable.edit(this,'edit_order', <?php echo $this->_var['cate']['id']; ?>)"><?php echo $this->_var['cate']['cate_order']; ?></span></td>
    <td align="center"><img src="images/<?php if ($this->_var['cate']['is_show']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_dis', <?php echo $this->_var['cate']['id']; ?>)" /></td>
    <td align="center"><img src="images/<?php if ($this->_var['cate']['is_recom']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_recom', <?php echo $this->_var['cate']['id']; ?>)" /></td>
    <td align="center"><a href="?act=edit&id=<?php echo $this->_var['cate']['id']; ?>"><?php echo $this->_var['lang']['edit']; ?></a> | <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cate']['id']; ?>, '确定删除该分类？')" title="<?php echo $this->_var['lang']['remove']; ?>"><?php echo $this->_var['lang']['remove']; ?></a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end reg_fiedls list -->
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
