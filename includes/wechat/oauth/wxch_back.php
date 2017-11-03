<?php
define('IN_ECS', true);
if(!empty($_SESSION['wxch_oid'])) {
	$oid = $_SESSION['wxch_oid'];
} else {
	if(isset($_GET['oid'])) {
		$oid = $_GET['oid'];
	} else {
		$oid = '';
	}
}
require (dirname(__FILE__) . '/../../mobile/includes/init.php');
$wxch_config = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
$appid = $wxch_config['appid'];
$appsecret = $wxch_config['appsecret'];
$code = !empty($_GET['code']) ? $_GET['code'] : '';
$url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
//echo $url;
$ret_json = curl_get_contents($url);
//print_r($ret_json);
$ret = json_decode($ret_json);
//$openid = $ret->openid;
$openid = !empty($ret->openid) ? $ret->openid : '';
//$access_token = $ret->access_token;
$access_token = !empty($ret->access_token) ? $ret->access_token : '';
$cfg_baseurl = $db->getOne("SELECT cfg_value FROM wxch_cfg WHERE cfg_name = 'baseurl'");
$cfg_murl = $db->getOne("SELECT cfg_value FROM wxch_cfg WHERE cfg_name = 'murl'");
$back_url = $db->getOne("SELECT `contents` FROM `wxch_oauth` WHERE `oid` = '$oid'");
$affiliate_id = $db->getOne("SELECT `affiliate` FROM `wxch_user` WHERE `wxid` = '$openid'");
if($affiliate_id>=1) 
{
	$affiliate = '&u='.$affiliate_id;
	$back_url = $back_url.$affiliate;
}
$update_sql = "UPDATE `wxch_oauth` SET `count` = `count` + 1 WHERE `oid` = $oid; ";
$db->query($update_sql);
if(!empty($openid) && strlen($openid) == 28)
{
	$oauth_step = $db->getOne("SELECT `setp` FROM `wxch_user` WHERE `wxid` = '$openid'");
	$wxch_ecs = $ecs->table('users');
	if($oauth_step == 3) 
	{
		$w_res = $db->getRow("SELECT * FROM  ".$wxch_ecs." WHERE `wxch_bd` = 'ok' AND `wxid` = '$openid'");
	}
	else 
	{
		$w_res = $db->getRow("SELECT * FROM  ".$wxch_ecs." WHERE `wxch_bd` = 'no' AND `wxid` = '$openid'");
	}
	$_SESSION['wxid'] = $openid;
	$is_login = 0;
	if ($is_login == 0) 
	{
		$user->login($w_res['user_name'], null, true);
		update_user_info();
		recalculate_price();
		$is_login = 1;
	}
	if($is_login == 0) 
	{
		$user->set_session($w_res['user_name']);
		$user->set_cookie($w_res['user_name']);
		update_user_info();
		recalculate_price();
		$is_login = 1;
	}
}
//echo $back_url;
header("HTTP/1.1 301 Moved Permanently");
header("Location: $back_url");
exit;
function curl_get_contents($url) 
{
	if(isset($_SERVER['HTTP_USER_AGENT'])) {
		$agent = $_SERVER['HTTP_USER_AGENT'];
	} else {
		$agent = '';
	}
	
	if(isset($_SERVER['HTTP_REFERER'])) {
		$referer = $_SERVER['HTTP_REFERER'];
	} else {
		$referer = '';
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	curl_setopt($ch, CURLOPT_REFERER,$referer);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$r = curl_exec($ch);
	curl_close($ch);
	return $r;
}
?>