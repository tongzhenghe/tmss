<!-- $Id: goods_type_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate();">
    <table cellspacing="1" cellpadding="3" width="100%">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['goods_type_name']; ?>:</td>
        <td><input type="text" name="cat_name" value="<?php echo htmlspecialchars($this->_var['goods_type']['cat_name']); ?>" size="40" />
        <?php echo $this->_var['lang']['require_field']; ?></td>
      </tr>
      <tr style="display:none">
        <td class="label"><?php echo $this->_var['lang']['goods_type_status']; ?>:</td>
        <td><?php echo $this->html_radios(array('name'=>'enabled','options'=>$this->_var['lang']['arr_goods_status'],'checked'=>$this->_var['goods_type']['enabled'])); ?></td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeAttrGroups');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a> <?php echo $this->_var['lang']['attr_groups']; ?>:</td>
        <td>
          <textarea name="attr_group" rows="5" cols="40"><?php echo htmlspecialchars($this->_var['goods_type']['attr_group']); ?></textarea><br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeAttrGroups"><?php echo $this->_var['lang']['notice_attr_groups']; ?></span>
        </td>
      </tr>
      <tr align="center">
        <td colspan="2">
          <input type="hidden" name="cat_id" value="<?php echo $this->_var['goods_type']['cat_id']; ?>" />
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
          <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
        </td>
      </tr>
    </table>
  </form>
</div>

<script type="text/javascript">
<!--

onload = function() {
  document.forms['theForm'].elements['cat_name'].focus();
  startCheckOrder();
}

function validate()
{
  var validator = new Validator('theForm');
  validator.required('cat_name', type_name_empty);

  return validator.passed();
}
  
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
