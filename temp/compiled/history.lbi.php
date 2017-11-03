
<div id="recent-view-track" class="m m2">
	<div class="mt"><h2>最近浏览</h2></div>
    <div class="mc">
    	<ul id="history_list2"><?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></ul>
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