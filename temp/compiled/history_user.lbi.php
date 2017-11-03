<div class="mod-main">
	<div class="mt"><h3>浏览历史</h3></div>
    <div class="mc">
    	<div class="follow">
            <ul> <?php 
$k = array (
  'name' => 'history_user',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
/*if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('historyItems').style.display='none';
}
else
{
    document.getElementById('historyItems').style.display='block';
}*/
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
   document.getElementById('history_list').innerHTML = '您还没有浏览记录';
}


function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
	document.getElementById('history_list2').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
	document.getElementById('history_div').style.display='none';
}
</script>