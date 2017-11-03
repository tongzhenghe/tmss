<?php

/**
 * ECSHOP 支付宝手机支付插件
 * ============================================================================
 * * 版权所有 2014 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wanganlin $
 * $Id: alipay_wap.php 17217 2014-02-13 16:29:08Z wanganlin $
 */

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'lang/' .$GLOBALS['_CFG']['lang']. '/payment/alipay_wap.php';

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
    $modules[$i]['desc']    = 'alipay_wap_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'ECTOUCH TEAM';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.ectouch.cn';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'alipay_account',           'type' => 'text',   'value' => ''),
        array('name' => 'alipay_key',               'type' => 'text',   'value' => ''),
        array('name' => 'alipay_partner',           'type' => 'text',   'value' => ''),
    );

    return;
}

/**
 * 类
 */
class alipay_wap
{

    /**
     * 构造函数
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function __construct()
    {
        $this->alipay_wap();
    }

    function alipay_wap()
    {
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

        $gateway = 'http://wappaygw.alipay.com/service/rest.htm?';

        /************************功能开始**************************/

        //请求业务数据
        $req_data = '<direct_trade_create_req>'
                . '<subject>'. $order['order_sn'] .'</subject>'
                . '<out_trade_no>'. $order['order_sn'] . '_' . $order['log_id'] .'</out_trade_no>'
                . '<total_fee>'. $order['order_amount'] .'</total_fee>'
                . '<seller_account_name>'. $payment['alipay_account'] .'</seller_account_name>'
                . '<call_back_url>'. return_url(basename(__FILE__, '.php')) .'</call_back_url>'
                . '<notify_url>'. $this->return_alipay_wap_url() .'</notify_url>'
                . '<out_user>'. $order['consignee'] .'</out_user>'
                . '<merchant_url>'. $GLOBALS['ecs']->url() .'</merchant_url>'
                . '<pay_expire>3600</pay_expire>'
                . '</direct_trade_create_req>';

        $parameter = array(
            'service'           => 'alipay.wap.trade.create.direct', //接口名称
            'format'            => 'xml', //请求参数格式
            'v'                 => '2.0', //接口版本号
            'partner'           => $payment['alipay_partner'], //合作者身份ID
            'req_id'            => date('Ymdhis').rand(1000,9999), //请求号，唯一
            'sec_id'            => 'MD5', //签名方式
            'req_data'          => $req_data, //请求业务数据
            "_input_charset"	=> $charset
        );

        ksort($parameter);
        reset($parameter);

        $param = '';
        $sign  = '';

        foreach ($parameter AS $key => $val)
        {
            $param .= "$key=" .urlencode($val). "&";
            $sign  .= "$key=$val&";
        }

        $param = substr($param, 0, -1);
        $sign  = substr($sign, 0, -1). $payment['alipay_key'];

        /************************功能分割**************************/

        //请求授权接口
        $result = $this->post($gateway, $param . '&sign='.md5($sign));
        $result = urldecode($result); //URL转码
        $result_array = explode('&', $result); //根据 & 符号拆分
        //重构数组
        $new_result_array = $temp_item = array();
        if(is_array($result_array)){
            foreach ($result_array as $vo){
                $temp_item = explode('=', $vo, 2); //根据 & 符号拆分
                $new_result_array[$temp_item[0]] = $temp_item[1];
            }
        }

        /************************功能分割**************************/
        
        $xml = simplexml_load_string($new_result_array['res_data']);
        $request_token = (array)$xml->request_token;
        //请求交易接口
        $parameter = array(
            'service'           => 'alipay.wap.auth.authAndExecute', //接口名称
            'format'            => 'xml', //请求参数格式
            'v'                 => $new_result_array['v'], //接口版本号
            'partner'           => $new_result_array['partner'], //合作者身份ID
            'sec_id'            => $new_result_array['sec_id'],
            'req_data'          => '<auth_and_execute_req><request_token>'. $request_token[0] .'</request_token></auth_and_execute_req>',
            'request_token'     => $request_token[0],
            '_input_charset'    => $charset
        );

        ksort($parameter);
        reset($parameter);

        $param = '';
        $sign  = '';

        foreach ($parameter AS $key => $val)
        {
            $param .= "$key=" .urlencode($val). "&";
            $sign  .= "$key=$val&";
        }

        $param = substr($param, 0, -1);
        $sign  = substr($sign, 0, -1). $payment['alipay_key'];

        /************************生成支付链接**************************/
        
        $button = '<div style="text-align:center"><input type="button" onclick="window.open(\''.$gateway.$param. '&sign='.md5($sign).'\')" value="' .$GLOBALS['_LANG']['pay_button']. '" class="c-btn3" /></div>';
        return $button;
    }
	
	/**
	 * 手机支付宝异步响应操作 by bragg
	 */
	function respond() {
		if (!empty($_POST)) {
			foreach($_POST as $key => $data) {
				$_GET[$key] = $data;
			}
		}

		$payment  = get_payment($_GET['code']);
		
		$out_trade_no = explode('_', $_GET['out_trade_no']);
		$order_sn = $out_trade_no[1];

		/* 检查数字签名是否正确 */
		ksort($_GET);
		reset($_GET);

		$sign = '';
		foreach ($_GET AS $key=>$val) {
			if ($key != 'sign' && $key != 'sign_type' && $key != 'code') {
				$sign .= "$key=$val&";
			}
		}

		$sign = substr($sign, 0, -1) . $payment['alipay_key'];
		if (md5($sign) != $_GET['sign']) {
			return false;
		}

		if ($_GET['result'] == 'success') {
			/* 改变订单状态，注销后统一使用异步通知 by bragg */
			//order_paid($order_sn, 2);
			return true;
		} else {
			return false;
		}
	}
	//打印日志
	function logResult($word='') {
		$fp = fopen("log.txt","a");
		flock($fp, LOCK_EX) ;
		fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
		flock($fp, LOCK_UN);
		fclose($fp);
	}
	
	/**
	 * 取得返回信息地址
	 */
	function return_alipay_wap_url()
	{
		return $GLOBALS['ecs']->url() . 'notify/alipay_wap.php';
	}

    function post($url, $curlPost) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return $return_str;
    }

}

?>