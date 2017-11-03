<?php

/**
 * ECSHOP 微信支付插件
 * ============================================================================
 * * 版权所有 2005-2014 ecshop模板堂(ecmoban.com) 版权所有
 * 网站地址: http://www.ecmoban.com；
 */

if (!defined('IN_ECTOUCH')) {
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'lang/' .$GLOBALS['_CFG']['lang']. '/payment/wxpay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'wxpay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'ECTOUCH';

    /* 网址 */
    $modules[$i]['website'] = 'http://mp.weixin.qq.com/';

    /* 版本号 */
    $modules[$i]['version'] = '2.5';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'wxpay_appid',           'type' => 'text',   'value' => ''),
        array('name' => 'wxpay_appsecret',       'type' => 'text',   'value' => ''),
        array('name' => 'wxpay_paysignkey',      'type' => 'text',   'value' => ''),
		array('name' => 'wxpay_partnerid',       'type' => 'text',   'value' => ''),
        array('name' => 'wxpay_partnerkey',      'type' => 'text', 'value' => ''),
		array('name' => 'wxpay_signtype',      'type' => 'text', 'value' => 'sha1')
    );

    return;
}

/**
 * 类
 */
class wxpay
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
	var $parameters; //cft 参数
	var $payments; //配置信息
    function wxpay()
    {
    }

    function __construct()
    {
        $this->wxpay();
    }

    /**
     * 生成支付代码
     * @param   array   $order      订单信息
     * @param   array   $payment    支付方式信息
     */
    function get_code($order, $payment)
    {
        if (!defined('EC_CHARSET'))
        {
            $charset = 'utf-8';
        }
        else
        {
            $charset = EC_CHARSET;
        }
		$charset = strtoupper($charset);

		//配置参数
		$this->payments = $payment;
		//根目录url
		$root_url = str_replace('mobile/', '', $GLOBALS['ecs']->url());
		
		//银行通道类型
		$this->setParameter("bank_type", "WX");
		//商品描述
		$this->setParameter("body", $order['order_sn']);
		//商户号
		$this->setParameter("partner", $payment['wxpay_partnerid']);
		//商户订单号
		$this->setParameter("out_trade_no", $order['order_sn'] .'O'. $order['log_id']);
		//订单总金额
		$this->setParameter("total_fee", $order['order_amount'] * 100);
		//支付币种
		$this->setParameter("fee_type", "1");
		//通知URL
		$this->setParameter("notify_url", $root_url.'notify_wap_wxpay.php');
		//订单生成的机器IP
		$this->setParameter("spbill_create_ip", real_ip());
		//传入参数字符编码
		$this->setParameter("input_charset", $charset);
		
		//生成jsapi支付请求json
		$jsapi = $this->create_biz_package();

		//wxjsbridge
		$js = '<script language="javascript">
			function callpay(){WeixinJSBridge.invoke("getBrandWCPayRequest",'.$jsapi.',function(res){if(res.err_msg == "get_brand_wcpay_request:ok"){location.href="respond.php?code=wxpay&status=1"}else{location.href="respond.php?code=wxpay&status=0"}});}
			</script>';

		$button = '<div style="text-align:center"><button class="c-btn4" type="button" onclick="callpay()">微信安全支付</button></div>'.$js;

		return $button;

        
    }

    /**
     * 响应操作
     */
    function respond()
    {
        if($_GET['status'] == 1){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

	/**
	* 设置参数
	*/
	function setParameter($parameter, $parameterValue) {
		$this->parameters[$this->trimString($parameter)] = $this->trimString($parameterValue);
	}

	/**
	* trim
	* @param value
	* @return
	*/
	function trimString($value){
		$ret = null;
		if (null != $value) {
			$ret = $value;
			if (strlen($ret) == 0) {
				$ret = null;
			}
		}
		return $ret;
	}

	//生成随机数
	function create_noncestr( $length = 16 ) {  
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
		$str ="";  
		for ( $i = 0; $i < $length; $i++ )  {  
			$str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);  
			//$str .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
		}  
		return $str;  
	}
	
	//参数判断
	function check_cft_parameters(){
		if($this->parameters["bank_type"] == null || $this->parameters["body"] == null || $this->parameters["partner"] == null || 
			$this->parameters["out_trade_no"] == null || $this->parameters["total_fee"] == null || $this->parameters["fee_type"] == null ||
			$this->parameters["notify_url"] == null || $this->parameters["spbill_create_ip"] == null || $this->parameters["input_charset"] == null
			)
		{
			return false;
		}
		return true;
	}

	//生成package
	protected function get_cft_package(){
		try {
			if (null == $this->payments['wxpay_partnerkey'] || "" == $this->payments['wxpay_partnerkey']) {
				throw new Exception("密钥不能为空！" . "<br>");
			}
			ksort($this->parameters);
			$unSignParaString = $this->formatQueryParaMap($this->parameters, false);
			$paraString = $this->formatQueryParaMap($this->parameters, true);

			return $paraString . "&sign=" . $this->sign($unSignParaString,$this->trimString($this->payments['wxpay_partnerkey']));
		}catch (Exception $e)
		{
			die($e->getMessage());
		}

	}
	protected function get_biz_sign($bizObj){
		 foreach ($bizObj as $k => $v){
			 $bizParameters[strtolower($k)] = $v;
		 }
		 try {
		 	if($this->payments['wxpay_paysignkey'] == ""){
		 			throw new Exception("APPKEY为空！" . "<br>");
		 	}
		 	$bizParameters["appkey"] = $this->payments['wxpay_paysignkey'];
		 	ksort($bizParameters);
		 	//var_dump($bizParameters);
		 	$bizString = $this->formatBizQueryParaMap($bizParameters, false);
		 	//var_dump($bizString);
		 	return sha1($bizString);
		 }catch (Exception $e)
		 {
			die($e->getMessage());
		 }
	}
	
	
	function formatQueryParaMap($paraMap, $urlencode){
		$buff = "";
		ksort($paraMap);
		foreach ($paraMap as $k => $v){
			if (null != $v && "null" != $v && "sign" != $k) {
			    if($urlencode){
				   $v = urlencode($v);
				}
				$buff .= $k . "=" . $v . "&";
			}
		}
		$reqPar;
		if (strlen($buff) > 0) {
			$reqPar = substr($buff, 0, strlen($buff)-1);
		}
		return $reqPar;
	}
	function formatBizQueryParaMap($paraMap, $urlencode){
		$buff = "";
		ksort($paraMap);
		foreach ($paraMap as $k => $v){
		//	if (null != $v && "null" != $v && "sign" != $k) {
			    if($urlencode){
				   $v = urlencode($v);
				}
				$buff .= strtolower($k) . "=" . $v . "&";
			//}
		}
		$reqPar;
		if (strlen($buff) > 0) {
			$reqPar = substr($buff, 0, strlen($buff)-1);
		}
		return $reqPar;
	}
	
	//md5
	function sign($content, $key) {
	    try {
		    if (null == $key) {
			   throw new Exception("财付通签名key不能为空！" . "<br>");
		    }
			if (null == $content) {
			   throw new Exception("财付通签名内容不能为空" . "<br>");
		    }
		    $signStr = $content . "&key=" . $key;
		
		    return strtoupper(md5($signStr));
		}catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	function verifySignature($content, $sign, $md5Key) {
		$signStr = $content . "&key=" . $md5Key;
		$calculateSign = strtolower(md5($signStr));
		$tenpaySign = strtolower($sign);
		return $calculateSign == $tenpaySign;
	}

	
	function arrayToXml($arr)
    {
        $xml = "<xml>";
        foreach ($arr as $key=>$val)
        {
        	 if (is_numeric($val))
        	 {
        	 	$xml.="<".$key.">".$val."</".$key.">"; 

        	 }
        	 else
        	 	$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";  
        }
        $xml.="</xml>";
        return $xml; 
    }

	//生成jsapi支付请求json
	/*
	"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传入
	"timeStamp" : "189026618", //时间戳这里随意使用了一个值
	"nonceStr" : "adssdasssd13d", //随机串
	"package" : "bank_type=WX&body=XXX&fee_type=1&input_charset=GBK&notify_url=http%3a%2f
	%2fwww.qq.com&out_trade_no=16642817866003386000&partner=1900000109&spbill_create_i
	p=127.0.0.1&total_fee=1&sign=BEEF37AD19575D92E191C1E4B1474CA9",
	//扩展字段，由商户传入
	"signType" : "SHA1", //微信签名方式:sha1
	"paySign" : "7717231c335a05165b1874658306fa431fe9a0de" //微信签名
	*/
	function create_biz_package(){
		 try {
			if($this->check_cft_parameters() == false) {   
			   throw new Exception("生成package参数缺失！" . "<br>");
		    }
		    $nativeObj["appId"] = $this->payments['wxpay_appid'];
		    $nativeObj["package"] = $this->get_cft_package();
		    $nativeObj["timeStamp"] = strval(time());
		    $nativeObj["nonceStr"] = $this->create_noncestr();
		    $nativeObj["paySign"] = $this->get_biz_sign($nativeObj);
		    $nativeObj["signType"] = $this->payments['wxpay_signtype'];
		   
		    return json_encode($nativeObj);
		   
		}catch (Exception $e)
		{
			die($e->getMessage());
		}		   
		
	}
	
}

?>