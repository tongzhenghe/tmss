<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
  <form action="attribute.php"  method="post" name="theForm" onsubmit="return validate();">
  <table width="100%" id="general-table">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_attr_name']; ?></td>
        <td>
          <input type='text' name='attr_name' value="<?php echo $this->_var['attr']['attr_name']; ?>" size='30' />
          <?php echo $this->_var['lang']['require_field']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_cat_id']; ?></td>
        <td>
          <select name="cat_id" onchange="onChangeGoodsType(this.value)">
          <option value="0"><?php echo $this->_var['lang']['select_please']; ?></option>
            <?php echo $this->_var['goods_type_list']; ?>
          </select> <?php echo $this->_var['lang']['require_field']; ?>
        </td>
      </tr>
      <tr id="attrGroups" style="display:none">
        <td class="label"><?php echo $this->_var['lang']['label_attr_group']; ?></td>
        <td>
          <select name="attr_group">
          <?php if ($this->_var['attr_groups']): ?>
          <?php echo $this->html_options(array('options'=>$this->_var['attr_groups'],'selected'=>$this->_var['attr']['attr_group'])); ?>
          <?php endif; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeindex');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['label_attr_index']; ?></td>
        <td>
          <input type="radio" name="attr_index" value="0" <?php if ($this->_var['attr']['attr_index'] == 0): ?> checked="true" <?php endif; ?> />
          <?php echo $this->_var['lang']['no_index']; ?>
          <input type="radio" name="attr_index" value="1" <?php if ($this->_var['attr']['attr_index'] == 1): ?> checked="true" <?php endif; ?> />
          <?php echo $this->_var['lang']['keywords_index']; ?>
          <input type="radio" name="attr_index" value="2" <?php if ($this->_var['attr']['attr_index'] == 2): ?> checked="true" <?php endif; ?> />
          <?php echo $this->_var['lang']['range_index']; ?>
          <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeindex"><?php echo $this->_var['lang']['note_attr_index']; ?></span>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_is_linked']; ?></td>
        <td>
          <input type="radio" name="is_linked" value="0" <?php if ($this->_var['attr']['is_linked'] == 0): ?> checked="true" <?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
          <input type="radio" name="is_linked" value="1" <?php if ($this->_var['attr']['is_linked'] == 1): ?> checked="true" <?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        </td>
      </tr><tr>
        <td class="label"><a href="javascript:showNotice('noticeAttrType');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['label_attr_type']; ?></td>
        <td>
         <!-- EC模板修改 start by zhouH -->
          <input type="radio" name="attr_type" value="0" <?php if ($this->_var['attr']['attr_type'] == 0): ?> checked="true" <?php endif; ?> onClick="document.getElementById('show_img_box').style.display='none'; document.getElementsByName('is_show_img')[0].checked=true;"  /> <?php echo $this->_var['lang']['attr_type_values']['0']; ?>
         
          <input type="radio" name="attr_type" value="1" <?php if ($this->_var['attr']['attr_type'] == 1): ?> checked="true" <?php endif; ?> onClick="document.getElementById('show_img_box').style.display=''" /> <?php echo $this->_var['lang']['attr_type_values']['1']; ?>
             
          <input type="radio" name="attr_type" value="2" <?php if ($this->_var['attr']['attr_type'] == 2): ?> checked="true" <?php endif; ?> onClick="document.getElementById('show_img_box').style.display='none' document.getElementsByName('is_show_img')[0].checked=true;"/> <?php echo $this->_var['lang']['attr_type_values']['2']; ?><!-- EC模板修改 end by zhouH -->
          <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeAttrType"><?php echo $this->_var['lang']['note_attr_type']; ?></span>
        </td>
      </tr>
       <!-- EC模板修改 start by zhouH -->
       <tr id="show_img_box"  <?php if ($this->_var['attr']['attr_type'] != 1): ?>style="display:none;"<?php endif; ?>>
        <td class="label">是否显示属性图片</td>
        <td>
          <input type="radio" name="is_show_img" value="0" <?php if ($this->_var['attr']['is_show_img'] == 0): ?> checked="true" <?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
          <input type="radio" name="is_show_img" value="1" <?php if ($this->_var['attr']['is_show_img'] == 1): ?> checked="true" <?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        </td>
      </tr>
      <!-- EC模板修改 end by zhouH -->
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_attr_input_type']; ?></td>
        <td>
          <input type="radio" name="attr_input_type" value="0" <?php if ($this->_var['attr']['attr_input_type'] == 0): ?> checked="true" <?php endif; ?> onclick="radioClicked(0)"/>
          <?php echo $this->_var['lang']['text']; ?>
          <input type="radio" name="attr_input_type" value="1" <?php if ($this->_var['attr']['attr_input_type'] == 1): ?> checked="true" <?php endif; ?> onclick="radioClicked(1)"/>
          <?php echo $this->_var['lang']['select']; ?>
          <input type="radio" name="attr_input_type" value="2" <?php if ($this->_var['attr']['attr_input_type'] == 2): ?> checked="true" <?php endif; ?> onclick="radioClicked(0)"/>
          <?php echo $this->_var['lang']['text_area']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['label_attr_values']; ?></td>
        <td>
          <textarea name="attr_values" cols="30" rows="5"><?php echo $this->_var['attr']['attr_values']; ?></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div class="button-div">
          <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button"/>
          <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
        </div>
        </td>
      </tr>
      </table>
    <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
    <input type="hidden" name="attr_id" value="<?php echo $this->_var['attr']['attr_id']; ?>" />
  </form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
onload = function()
{

  radioClicked(<?php echo $this->_var['attr']['attr_input_type']; ?>);
  onChangeGoodsType(<?php echo $this->_var['attr']['cat_id']; ?>);
  // 开始检查订单
  startCheckOrder();

}

/**
 * 检查表单输入的数据
 */
function validate()
{
  var ele = document.forms['theForm'].elements;
  var msg = '';

  if (Utils.trim(ele['attr_name'].value) == '')
  {
    msg += name_not_null + '\n';
  }

  if (ele['cat_id'].value == 0)
  {
    msg += cat_id_not_null + '\n';
  }

  if (ele['attr_input_type'][1].checked && Utils.trim(ele['attr_values'].value) == '')
  {
    msg += values_not_null + '\n';
  }

  if (msg.length > 0)
  {
    alert(msg);
    return false;
  }
  else
  {
    return true;
  }
}

/**
 * 点击类型按钮时切换选项的禁用状态
 */
function radioClicked(n)
{
  document.forms['theForm'].elements["attr_values"].disabled = n > 0 ? false : true;
}

/**
 * 改变商品类型的处理函数
 */
function onChangeGoodsType(catId)
{
  Ajax.call('attribute.php?act=get_attr_groups&cat_id=' + catId, '', changeGoodsTypeResponse, 'GET', 'JSON');
}

function changeGoodsTypeResponse(res)
{
  if (res.error == 0)
  {
    var row = document.getElementById('attrGroups');
    if (res.content.length == 0) {
      row.style.display = 'none';
    } else {
      row.style.display = document.all ? 'block' : 'table-row';

      var sel = document.forms['theForm'].elements['attr_group'];

      sel.length = 0;

      for (var i = 0; i < res.content.length; i++)
      {
        var opt = document.createElement('OPTION');
        opt.value = i;
        opt.text = res.content[i];
        sel.options.add(opt);
        if (i == '<?php echo $this->_var['attr']['attr_group']; ?>')
        {
          opt.selected=true;
        }
      }
    }
  }

  if (res.message)
  {
    alert(res.message);
  }
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
