<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
<form action="store_category.php" method="post" name="theForm" onsubmit="return validate()">
<table width="100%">
  <tr>
    <td class="label">分类名称: </td>
    <td><input type="text" name="cate_name" value="<?php echo $this->_var['store_cate']['cate_name']; ?>" maxlength="20" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr >
    <td class="label">排序: </td>
    <td><input type="text" name="cate_order" value="<?php echo $this->_var['store_cate']['cate_order']; ?>" maxlength="3" size="5"/></td>
  </tr>
  <tr > 
    <td class="label">是否显示: </td>
    <td><input type="radio" name="is_show" value="1" <?php if ($this->_var['store_cate']['is_show'] == 1): ?>checked='checked'<?php endif; ?>/>是&nbsp;&nbsp;&nbsp;<input type="radio" name="is_show" value="0" <?php if ($this->_var['store_cate']['is_show'] == 0): ?>checked='checked'<?php endif; ?>/>否</td>
  </tr>
  <tr >
    <td class="label">是否推荐: </td>
    <td><input type="radio" name="is_recom" value="1" <?php if ($this->_var['store_cate']['is_recom'] == 1): ?>checked='checked'<?php endif; ?>/>是&nbsp;&nbsp;&nbsp;<input type="radio" name="is_recom" value="0" <?php if ($this->_var['store_cate']['is_recom'] == 0): ?>checked='checked'<?php endif; ?>/>否</td>
  </tr>
  <tr>
    <td></td>    
    <td align="left">
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['store_cate']['id']; ?>" />
      <input type="hidden" name="old_cate_name" value="<?php echo $this->_var['store_cate']['cate_name']; ?>" />
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['cate_name'].focus();

/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required('cate_name','类名称必填');
  return validator.passed();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
