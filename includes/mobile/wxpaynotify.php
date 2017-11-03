<?php
$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
// 给下列参数赋值
/*$appid= AppId;
$secret= AppSecret;
$appkey= 支付专用签名串PaySignKey*/
$appid= 'wxfea3e92ddf4936d5';
$secret= '674828c37381378ba816825c3d533a82';
$appkey= 'd1qOVI3KEMQWz2uX2koFros8U2NZpTN5CX8JU6cN50UU4SO38fqRKZ3GD8jv3Ut6UzMmChnc1JerftH1Opdg0hnCW4GC35f09HCkqad3ashj9MVJVVSglknlMZMsJCgi';
$url_get='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$secret;
$json=json_decode(curlGet($url_get));
$access_token=$json->access_token;
$openid=$postObj->OpenId;
$deliver_msg = "ok";
$deliver_status = "1";
$deliver_timestamp = time();
$out_trade_no = $_GET['out_trade_no'];
$transid =$_GET['transaction_id'];
$sign=getSign($appid, $appkey, $deliver_msg,$deliver_status,$deliver_timestamp, $openid, $out_trade_no,$transid);
$url = "https://api.weixin.qq.com/pay/delivernotify?access_token=".$access_token;
$data = '{
		"appid" : "'.$appid.'",
		"openid" : "'.$openid.'",
		"transid" : "'.$transid.'",
		"out_trade_no" : "'.$out_trade_no.'",
		"deliver_timestamp" : "'.$deliver_timestamp.'",
		"deliver_status" : "'.$deliver_status.'",
		"deliver_msg" : "'.$deliver_msg.'",
		"app_signature" : "'.$sign.'",
		"sign_method" : "sha1"
	}';
$result=json_decode(api_notice_increment($url, $data));
if($result->errmsg=="ok"){
		//如果发货成功，则向客服发送微信文本信息
		$msgcontent = "尊敬的用户，我们已经收到订单号：".$_GET['out_trade_no']." 支付成功订单，请耐心等待客服发货哦！ ";
		kefu_response($openid,$msgcontent,$access_token);
		echo "success";
}
function kefu_response($openid,$msg,$access_token){
	$url='https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token='.$access_token;
	$mesage='{"touser":"'.$openid.'",
    				"msgtype":"text",
				    "text":
				    {
				         "content":"'.$msg.'"
				    }}';
	api_notice_increment($url,$mesage);
}
function getSign($appid,$appkey,$deliver_msg,$deliver_status,$deliver_timestamp,$openid,$out_trade_no,$transid)
{
	$keyvaluestring = "appid=".$appid."&appkey=".$appkey."&deliver_msg=".$deliver_msg."&deliver_status=".$deliver_status."&deliver_timestamp=".$deliver_timestamp."&openid=".$openid."&out_trade_no=".$out_trade_no."&transid=".$transid;
	return sha1($keyvaluestring);
}

function api_notice_increment($url, $data){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$tmpInfo = curl_exec($ch);
	if (curl_errno($ch)) {
		return $tmpInfo;
	}else{

		return $tmpInfo;
	}
}
function curlGet($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$temp = curl_exec($ch);
	return $temp;
}
?>