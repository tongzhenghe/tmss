<!-- $Id: attribute_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <?php echo $this->_var['lang']['by_goods_type']; ?><select name="goods_type" onchange="searchAttr(this.value)"><option value="0"><?php echo $this->_var['lang']['all_goods_type']; ?></caption><?php echo $this->_var['goods_type_list']; ?></select>
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th>
        <input onclick='listTable.selectAll(this, "checkboxes[]")' type="checkbox">
        <a href="javascript:listTable.sort('attr_id'); "><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_attr_id']; ?>
      </th>
      <th><a href="javascript:listTable.sort('attr_name'); "><?php echo $this->_var['lang']['attr_name']; ?></a><?php echo $this->_var['sort_attr_name']; ?></th>
      <th><a href="javascript:listTable.sort('cat_id'); "><?php echo $this->_var['lang']['cat_id']; ?></a><?php echo $this->_var['sort_cat_id']; ?></th>
      <th><a href="javascript:listTable.sort('attr_input_type');"><?php echo $this->_var['lang']['attr_input_type']; ?></a><?php echo $this->_var['sort']['attr_input_type']; ?></th>
      <th><?php echo $this->_var['lang']['attr_values']; ?></th>
      <th><a href="javascript:listTable.sort('sort_order'); "><?php echo $this->_var['lang']['sort_order']; ?></a><?php echo $this->_var['sort_sort_order']; ?></th>
      <th><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>
    <?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
    <tr>
      <td nowrap="true" valign="top"><span><input value="<?php echo $this->_var['attr']['attr_id']; ?>" name="checkboxes[]" type="checkbox"><?php echo $this->_var['attr']['attr_id']; ?></span></td>
      <td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', <?php echo $this->_var['attr']['attr_id']; ?>)"><?php echo $this->_var['attr']['attr_name']; ?></span></td>
      <td nowrap="true" valign="top"><span><?php echo $this->_var['attr']['cat_name']; ?></span></td>
      <td nowrap="true" valign="top"><span><?php echo $this->_var['attr']['attr_input_type_desc']; ?></span></td>
      <td valign="top"><span><?php echo $this->_var['attr']['attr_values']; ?></span></td>
      <td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['attr']['attr_id']; ?>)"><?php echo $this->_var['attr']['sort_order']; ?></span></td>
      <td align="center" nowrap="true" valign="top">
        <a href="?act=edit&amp;attr_id=<?php echo $this->_var['attr']['attr_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(<?php echo $this->_var['attr']['attr_id']; ?>)" title="<?php echo $this->_var['lang']['remove']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td><input type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="button" disabled="true" /></td>
      <td align="right"><?php echo $this->fetch('page.htm'); ?></td>
    </tr>
  </table>
<?php if ($this->_var['full_page']): ?>
</div>

</form>
<script language="JavaScript">
<!--
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
      // 开始检查订单
      startCheckOrder();
  }

  /**
   * 查询商品属性
   */
  function searchAttr(goodsType)
  {
    listTable.filter.goods_type = goodsType;
    listTable.filter.page = 1;
    listTable.loadList();
  }

  function removeRow(attr_id)
  {
    Ajax.call('attribute.php?act=get_attr_num&attr_id=' + attr_id, '', removeRowResponse, 'GET', 'JSON');
  }

  function removeRowResponse(result)
  {
    if (result.message.length > 0)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      listTable.remove(result.content.attr_id, result.content.drop_confirm);
    }
  }

  
//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
