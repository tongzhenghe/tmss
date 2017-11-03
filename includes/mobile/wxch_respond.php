<?php
//此程序由【找源码】http://Www.ZhaoYuanMa.Com 网站在线逆向还原，QQ：7530782 QQ群：342233194 
?>
<?php
$sql = "SELECT COUNT(*) FROM " . $ecs->table('payment') . " WHERE pay_code = '$pay_code' AND enabled = 1";
if ($db->getOne($sql) == 0) 
{
	$msg = $_LANG['pay_disabled'];
}
else 
{
	$plugin_file = 'includes/modules/payment/' . $pay_code . '.php';
	if (file_exists($plugin_file)) 
	{
		include_once($plugin_file);
		$payment = new $pay_code();
		$msg = ($payment->respond()) ? $_LANG['pay_success'] : $_LANG['pay_fail'];
	}
	else 
	{
		$msg = $_LANG['pay_not_exist'];
	}
}
if ($_GET['result'] == 'success') 
{
	if(!empty($_GET['out_trade_no'])) 
	{
		$order_sn = substr($_GET['out_trade_no'], 0,13);
		$order_sn = trim($order_sn);
		$order_id = $db->getOne("SELECT order_id FROM  ". $ecs->table('order_info') ." WHERE order_sn = $order_sn");
		$wxch_order_name = 'pay';
		include ('wxch_order.php');
	}
}
?>