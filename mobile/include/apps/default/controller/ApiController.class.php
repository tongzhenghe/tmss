<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：ApiController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTouch接口控制器
 * 调用说明：url('api/index', array('openid'=>$openid, 'title'=>$title, 'msg'=>$msg, 'url'=>$url));
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class ApiController extends CommonController
{
    // 微信用户openid
    public $openid = '';
    // 消息标题
    public $title = '';
    // 消息内容
    public $msg = '';
    // 微信类对象
    private $weObj = '';

    /**
     * 构造方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->openid = I('get.openid');
        $this->title = I('get.title');
        $this->msg = I('get.msg');
		$this->url = I('get.url');
		$this->url = $this->url ? base64_decode(urldecode($this->url)) : '';
    }

    /**
     * 接口方法
     */
    public function index()
    {
        // 公众号信息
        $sql = 'SELECT w.token, w.appid, w.appsecret FROM ' . $this->model->pre . 'wechat w LEFT JOIN ' . $this->model->pre . 'wechat_user u ON w.id = u.wechat_id WHERE u.openid = "' . $this->openid . '" and w.status = 1 ORDER BY w.sort asc, w.time desc LIMIT 1';
        $wechat = $this->model->query($sql);
		$return = false;
        if (! empty($wechat)) {
            $config['token'] = $wechat[0]['token'];
            $config['appid'] = $wechat[0]['appid'];
            $config['appsecret'] = $wechat[0]['appsecret'];
            // 实例化微信类
            $this->weObj = new Wechat($config);
            if (! empty($this->title) || ! empty($this->msg)) {
                // 微信端发送消息
                $send_msg = array(
                    'touser' => $this->openid,
                    'msgtype' => 'news',
                    'news' => array(
                        'articles' => array(
                            array(
                                'title' => $this->title,
                                'description' => $this->msg,
								'url' => $this->url
                            )
                        )
                    )
                );
                $rs = $this->weObj->sendCustomMessage($send_msg);
				$return = $rs ? true : false;
                // 发送失败
                /*
                 * if(empty($rs)){ }
                 */
            }
        }
		return $rs;
    }
}
