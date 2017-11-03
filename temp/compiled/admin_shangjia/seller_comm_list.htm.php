<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<!-- 佣金搜索 -->
<div class="form-div">
  <form action="javascript:searchOrder()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    时间段<input name="start_time" type="text" id="start_time" size="15"><input type="button" class="button" value="选择日期" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" id="selbtn1" name="selbtn1" >
    &nbsp;&nbsp;——&nbsp;&nbsp;<input name="end_time" type="text" id="end_time" size="15"><input type="button" class="button" value="选择日期" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" id="selbtn1" name="selbtn1" >
    返佣状态<select name="status" id="status">
    <option value="0">选择状态</option>
    <option value="1">未处理</option>
    <option value="2">已结算</option>
    </select>
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<!-- 佣金列表 -->
<form method="post" action="seller_comm_list.php?act=operate" name="listForm" onsubmit="return check()">
  <div class="list-div" id="listDiv">
<?php endif; ?>

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>商家账号</th>
    <th>时间段</th>
    <th>总营业额</th>
    <th>佣金</th>
    <th>实际结算金额</th>
    <th>返佣状态</th>
    <th>结算日期</th>
    <th>备注</th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  <?php $_from = $this->_var['comm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'comm');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['comm']):
?>
  <tr>
    <td align="center"><?php echo htmlspecialchars($this->_var['comm']['user_name']); ?></td>
    <td align="center" valign="top"><?php echo $this->_var['comm']['prev_date']; ?>&nbsp;——&nbsp;<?php echo $this->_var['comm']['curr_date']; ?></td>
    <td align="right" valign="top" nowrap="nowrap">￥<?php echo $this->_var['comm']['total_turnover']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap">￥<?php echo $this->_var['comm']['commission']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap">￥<?php echo $this->_var['comm']['check_mony']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap"><?php echo $this->_var['comm']['status']; ?></td>
    <td align="center" valign="top" nowrap="nowrap"><?php echo $this->_var['comm']['check_date']; ?></td>
    <td align="center" valign="top" nowrap="nowrap"><?php echo $this->_var['comm']['remark']; ?></td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="seller_commission.php?act=info&id=<?php echo $this->_var['comm']['id']; ?>">查看</a>
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td align="center"></td>
    <td align="center" valign="top"></td>
    <td align="right" valign="top" nowrap="nowrap">合计:￥<?php echo $this->_var['mony_count']['total']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap">￥<?php echo $this->_var['mony_count']['comm']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap">￥<?php echo $this->_var['mony_count']['mony']; ?>元</td>
    <td align="center" valign="top" nowrap="nowrap"></td>
    <td align="center" valign="top" nowrap="nowrap"></td>
    <td align="center" valign="top" nowrap="nowrap"></td>
    <td align="center" valign="top"  nowrap="nowrap"></td>
  </tr>
</table>

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
  </div>
</form>
<script language="JavaScript">
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
     * 搜索订单
     */
    function searchOrder()
    {
        listTable.filter['start_time'] = Utils.trim(document.forms['searchForm'].elements['start_time'].value);
		listTable.filter['end_time'] = Utils.trim(document.forms['searchForm'].elements['end_time'].value);
        listTable.filter['status'] = document.forms['searchForm'].elements['status'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>