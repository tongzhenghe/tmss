<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：bd.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信通-精品查询
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
if (! defined('IN_ECTOUCH')) {
    die('Deny Access');
}

/**
 * 精品查询类
 *
 * @author wanglu
 *        
 */
class bd extends PluginWechatController
{
    // 插件名称
    protected $plugin_name = '';
    // 配置
    protected $cfg = array();

    /**
     * 构造方法
     *
     * @param unknown $cfg            
     */
    public function __construct($cfg = array())
    {
        $name = basename(__FILE__, '.class.php');
        $this->plugin_name = $name;
        $this->cfg = $cfg;
    }

    /**
     * 安装
     */
    public function install()
    {
        $this->plugin_display('install', $this->cfg);
    }

    /**
     * 获取数据
     *
     * @see PluginWechatController::show()
     */
    public function show($fromusername, $info)
    {
        $articles = array('type'=>'text', 'content'=>'暂时不能绑定');
        $media = array();
        $config = unserialize($info['config']);
        // 素材
        if (! empty($config['media_id'])) {
            $media = model('Base')->model->table('wechat_media')
                ->field('id, title, file, file_name, type, content, add_time, article_id, link')
                ->where('id = ' . $config['media_id'])
                ->find();
            // 单图文
            if (empty($media['article_id'])) {
                $media['content'] = strip_tags(html_out($media['content']));
            }
        }
        if (! empty($media)) {
            $articles = array();
            // 数据
            $articles['type'] = 'news';
            $articles['content'][0]['Title'] = $media['title'];
            $articles['content'][0]['Description'] = $media['content'];
            // 不是远程图片
            if (! preg_match('/(http:|https:)/is', $media['file'])) {
                $articles['content'][0]['PicUrl'] = __URL__ . '/' . $media['file'];
            } else {
                $articles['content'][0]['PicUrl'] = $media['file'];
            }
            $articles['content'][0]['Url'] = html_out($media['link']);
            // 积分赠送
            $this->give_point($fromusername, $info);
            
        }
        return $articles;
    }

    /**
     * 积分赠送
     *
     * @param unknown $fromusername            
     * @param unknown $info            
     */
    public function give_point($fromusername, $info)
    {
        if (! empty($info)) {
            // 配置信息
            $config = array();
            $config = unserialize($info['config']);
            // 开启积分赠送
            if (isset($config['point_status']) && $config['point_status'] == 1) {
                $where = 'openid = "' . $fromusername . '" and keywords = "' . $info['command'] . '" and createtime > (UNIX_TIMESTAMP(NOW())- ' . $config['point_interval'] . ')';
                $num = model('base')->model->table('wechat_point')
                    ->field('createtime')
                    ->where($where)
                    ->order('createtime desc')
                    ->count();
                // 当前时间减去时间间隔得到的历史时间之后赠送的次数
                if ($num < $config['point_num']) {
                    $this->do_point($fromusername, $info, $config['point_value']);
                }
            }
        }
    }

    /**
     * 页面显示
     */
    public function html_show()
    {
        if(isset($_SESSION['openid']) && !empty($_SESSION['openid'])){
            $file = ADDONS_PATH . 'wechat/' . $this->plugin_name . '/view/index.php';
            if (file_exists($file)) {
                require_once ($file);
            }
        }
        else{
            show_message('您未登陆，不能进行绑定操作！', '首页', url('index/index'));
        }
    }

    /**
     * 行为操作
     */
    public function action()
    {
        if (IS_POST) {
            $data = I('post.data');
            $rs = Check::rule(array(
                Check::must($data['username']),
                '用户名不能为空'
            ), array(
                Check::must($data['password']),
                '请输入密码'
            ));
            if ($rs !== true) {
                show_message($rs, '会员绑定', url('wechat/plugin_show', array(
                    'name' => $this->plugin_name
                )));
            }
            if(!isset($_SESSION['openid'])){
                show_message('您未登陆，不能进行绑定操作！', '首页', url('index/index'));
            }
            //会员信息
            $user = init_users();
            if (empty($_SESSION['user_id'])) {
                if ($user->get_cookie()) {
                    // 如果会员已经登录并且还没有获得会员的帐户余额、积分以及优惠券
                    if ($_SESSION['user_id'] > 0 && ! isset($_SESSION['user_money'])) {
                        model('Users')->update_user_info();
                    }
                } else {
                    $_SESSION['user_id'] = 0;
                    $_SESSION['user_name'] = '';
                    $_SESSION['email'] = '';
                    $_SESSION['user_rank'] = 0;
                    $_SESSION['discount'] = 1.00;
                }
            }
            $old_uid = session('user_id');
            if ($user->login($data['username'], $data['password'], '')) {
                //绑定
                $unionid = model('Base')->model->table('wechat_user')->field('unionid')->where('openid = "'.session('openid').'"')->getOne();
                if($unionid){
                  model('Base')->model->table('wechat_user')->data('ect_uid = '.session('user_id'))->where('unionid = "'.$unionid.'"')->update();
                }
                else{
                  model('Base')->model->table('wechat_user')->data('ect_uid = '.session('user_id'))->where('openid = "'.session('openid').'"')->update();
                }
                model('Users')->update_user_info();
                model('Users')->recalculate_price();
                show_message('绑定成功', '返回首页', url('index/index'));
            } else {
                show_message('用户名或密码错误', '会员绑定', url('wechat/plugin_show', array(
                    'name' => $this->plugin_name
                )));
            }
        }
    }
}
