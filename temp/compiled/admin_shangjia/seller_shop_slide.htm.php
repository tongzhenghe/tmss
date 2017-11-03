<!-- $Id: brand_list.htm 15898 2009-05-04 07:25:41Z liuhui $ -->

<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<form method="post" action="" name="listForm">
<!-- start seller_nav list -->
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th>轮播图片</th>
      <th>图片超链接</th>
      <th>图片说明</th>
      <th><?php echo $this->_var['lang']['sort_order']; ?></th>
      <th>变换样式</th>
      <th>显示</th>
      <th><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>
    <?php $_from = $this->_var['seller_slide_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'slide_list');if (count($_from)):
    foreach ($_from AS $this->_var['slide_list']):
?>
    <tr>
      <td align="center"><a style="color:#F00;" href="<?php echo $this->_var['slide_list']['img_url']; ?>" target="_blank"><img src="<?php echo $this->_var['slide_list']['img_url']; ?>" height="70" /></a></span>
      </td>
      <td align="center"><a href="<?php echo $this->_var['slide_list']['img_link']; ?>" target="_blank"><?php echo $this->_var['slide_list']['img_link']; ?></a></td>
      <td align="center"><?php echo $this->_var['slide_list']['img_desc']; ?></td>
      <td align="center"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['slide_list']['id']; ?>)"><?php echo $this->_var['slide_list']['img_order']; ?></span></td>
      <td align="center"><?php echo $this->_var['slide_list']['slide_type']; ?></td>
      <td align="center"><img src="images/<?php if ($this->_var['slide_list']['is_show']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, 'toggle_show', <?php echo $this->_var['slide_list']['id']; ?>)" /></td>
      <td align="center">
        <a href="seller_shop_slide.php?act=edit&id=<?php echo $this->_var['slide_list']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><?php echo $this->_var['lang']['edit']; ?></a> |
        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['slide_list']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" ><?php echo $this->_var['lang']['remove']; ?></a> 
      </td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>

  </table>

<?php if ($this->_var['full_page']): ?>
<!-- end brand list -->
</div>
</form>

<script type="text/javascript" language="javascript">
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
  
  //-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>