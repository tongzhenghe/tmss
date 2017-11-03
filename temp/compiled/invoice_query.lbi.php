<?php if ($this->_var['invoice_list']): ?>
<ul  id="brtup1ul" >
<?php $_from = $this->_var['invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'invoice');if (count($_from)):
    foreach ($_from AS $this->_var['invoice']):
?>
<li style="padding-top:6px;">
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			  <td width="45%" align="left">&nbsp;<?php echo $this->_var['lang']['order_number']; ?>:&nbsp;</td>
			  <td><?php echo $this->_var['invoice']['order_sn']; ?></td>
		  </tr>
		  <tr >
			  <td  align="left">&nbsp;<?php echo $this->_var['lang']['consignment']; ?>:&nbsp;</td>
			  <td ><?php echo $this->_var['invoice']['invoice_no']; ?></td>
		  </tr>
	  </table>
   <div style="height:10px; border-bottom:1px dashed #ccc; width:100%;"></div>

</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>


<?php endif; ?>