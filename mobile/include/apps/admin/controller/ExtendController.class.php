<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：ExtendController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信公众平台扩展
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
class ExtendController extends AdminController
{

    public $plugin_type = 'wechat';

    public $plugin_name = '';

    public function __construct()
    {
        parent::__construct();
        $this->plugin_name = I('get.ks');
        $this->assign('controller', CONTROLLER_NAME);
        //公众号类型
        $where['id'] = session('wechat_id');
        $type = $this->model->table('wechat')
        ->field('type')
        ->where($where)
        ->getOne();
        $this->assign('type', $type);
    }

    /**
     * 功能扩展
     */
    public function index()
    {
        // 数据库中的数据
        $extends = $this->model->table('wechat_extend')
            ->field('name, keywords, command, config, enable, author, website')
            ->where('type = "function" and enable = 1 and wechat_id = ' . session('wechat_id'))
            ->order('id asc')
            ->select();
        if (! empty($extends)) {
            $kw = array();
            foreach ($extends as $key => $val) {
                $val['config'] = unserialize($val['config']);
                $kw[$val['command']] = $val;
            }
        }
        
        $modules = $this->read_wechat();
        if (! empty($modules)) {
            foreach ($modules as $k => $v) {
                $ks = $v['command'];
                // 数据库中存在，用数据库的数据
                if (isset($kw[$v['command']])) {
                    $modules[$k]['keywords'] = $kw[$ks]['keywords'];
                    $modules[$k]['config'] = $kw[$ks]['config'];
                    $modules[$k]['enable'] = $kw[$ks]['enable'];
                }
            }
        }
        $this->assign('modules', $modules);
        $this->display();
    }

    /**
     * 功能扩展安装/编辑
     */
    public function edit()
    {
        if (IS_POST) {
            $handler = I('post.handler');
            $cfg_value = I('post.cfg_value');
            $data = I('post.data');
            if (empty($data['keywords'])) {
                $this->message('请填写扩展词', NULL, 'error');
            }

            $data['type'] = 'function';
            $data['wechat_id'] = session('wechat_id');
            // 数据库是否存在该数据
            $rs = $this->model->table('wechat_extend')
                ->field('name, config, enable')
                ->where('command = "' . $data['command'] . '" and wechat_id = ' . session('wechat_id'))
                ->find();
            if (! empty($rs)) {
                // 已安装
                if (empty($handler) && !empty($rs['enable'])) {
                    $this->message('插件已安装', NULL, 'error');
                } else {
	                //缺少素材
	                if(empty($cfg_value['media_id'])){
	                	$media_id = $this->model->table('wechat_media')->field('id')->where('command = "'.$this->plugin_name.'"')->getOne();
	                	if($media_id){
	                		$cfg_value['media_id'] = $media_id;
	                	}
	                	else{
							//安装sql(暂时只提供素材数据表)
			                $sql_file = ADDONS_PATH . $this->plugin_type . '/' . $this->plugin_name . '/install.sql';
			                if(file_exists($sql_file)){
			                    //添加素材
			                    $sql = file_get_contents($sql_file);
			                    $sql = str_replace(array('ecs_wechat_media', '(0', 'http://', 'view/images'), array($this->model->pre.'wechat_media', '('.session('wechat_id'), __HOST__.url('default/wechat/plugin_show', array('name'=>$this->plugin_name)), 'plugins/'. $this->plugin_type . '/' . $this->plugin_name.'/view/images'), $sql);
			                    $this->model->query($sql);
			                    //获取素材id
			                    $cfg_value['media_id'] = $this->model->table('wechat_media')->field('id')->where('command = "'.$this->plugin_name.'"')->getOne();
			                }
	                	}
	                }
                    $data['config'] = serialize($cfg_value);
                    $data['enable'] = 1;
                    $this->model->table('wechat_extend')
                        ->data($data)
                        ->where('command = "' . $data['command'] . '" and wechat_id = ' . session('wechat_id'))
                        ->update();
                }
            } else {
                //安装sql(暂时只提供素材数据表)
                $sql_file = ADDONS_PATH . $this->plugin_type . '/' . $this->plugin_name . '/install.sql';
                if(file_exists($sql_file)){
                    //添加素材
                    $sql = file_get_contents($sql_file);
                    $sql = str_replace(array('ecs_wechat_media', '(0', 'http://', 'view/images'), array($this->model->pre.'wechat_media', '('.session('wechat_id'), __HOST__.url('default/wechat/plugin_show', array('name'=>$this->plugin_name)), 'plugins/'. $this->plugin_type . '/' . $this->plugin_name.'/view/images'), $sql);
                    $this->model->query($sql);
                    //获取素材id
                    $cfg_value['media_id'] = $this->model->table('wechat_media')->field('id')->where('command = "'.$this->plugin_name.'"')->getOne();
                }
                $data['config'] = serialize($cfg_value);
                $data['enable'] = 1;
                $this->model->table('wechat_extend')
                    ->data($data)
                    ->insert();
            }
            $this->message('安装编辑成功', url('index'));
        }
        $handler = I('get.handler');
        // 编辑操作
        if (! empty($handler)) {
            // 获取配置信息
            $info = $this->model->table('wechat_extend')
                ->field('name, keywords, command, config, enable, author, website')
                ->where('command = "' . $this->plugin_name . '" and enable = 1 and wechat_id = ' . session('wechat_id'))
                ->find();
            // 修改页面显示
            if (empty($info)) {
                $this->message('请选择要编辑的功能扩展', NULL, 'error');
            }
            $info['config'] = unserialize($info['config']);
        }

        // 插件文件
        $file = ADDONS_PATH . $this->plugin_type . '/' . $this->plugin_name . '/' . $this->plugin_name . '.class.php';
        // 插件配置
        $config_file = ADDONS_PATH . $this->plugin_type . '/' . $this->plugin_name . '/config.php';
        if (file_exists($file)) {
            require_once ($file);
            //编辑
            if(!empty($info['config'])){
                $config = $info;
                $config['handler'] = 'edit';
            }
            else{
                $config = require_once ($config_file);
            }
            
            if (! is_array($config)) {
                $config = array();
            }
            $obj = new $this->plugin_name($config);
            $obj->install();
        }
    }


    /**
     * 功能扩展卸载
     */
    public function uninstall()
    {
        $keywords = I('get.ks');
        if (empty($keywords)) {
            $this->message('请选择要卸载的功能扩展', NULL, 'error');
        }
        $config = $this->model->table('wechat_extend')
            ->field('enable')
            ->where('command = "' . $keywords . '" and wechat_id = ' . session('wechat_id'))
            ->getOne();
        $data['enable'] = 0;
        
        $this->model->table('wechat_extend')
            ->data($data)
            ->where('command = "' . $keywords . '" and wechat_id = ' . session('wechat_id'))
            ->update();
        //删除素材
        $media_count = $this->model->table('wechat_media')->where('command = "'.$keywords.'"')->count();
        if($media_count > 0){
            $this->model->table('wechat_media')->where('command = "'.$keywords.'"')->delete();
        }
        
        $this->message('卸载成功', url('index'));
    }

    /**
     * 授权OAuth
     */
    public function oauth()
    {
        $list = $this->model->table('wechat_extend')
            ->field('name, config, enable')
            ->where('type = "oauth" and enable = 1')
            ->find();
        if (!empty($list['config'])) {
            $list['config'] = unserialize($list['config']);
        }

        $this->assign('list', $list);
        $this->display();
    }

    /**
     * 授权OAuth编辑
     */
    public function oauth_edit()
    {
        if (IS_POST) {
            $data['name'] = I('post.name');
            $data['enable'] = I('post.enable');
            $config = I('post.config');
            if (empty($data['name'])) {
                $this->message('请填写规则名称', NULL, 'error');
            }
            if (empty($config['redirect_uri'])) {
                $this->message('请填写回调地址', NULL, 'error');
            }
            $data['config'] = serialize($config);
            $this->model->table('wechat_extend')
                ->data($data)
                ->where('type = "oauth"')
                ->update();
            
            $this->message('编辑成功', url('oauth'));
        }
        $rs = $this->model->table('wechat_extend')
            ->field('name, config, enable')
            ->where('type = "oauth"')
            ->find();
        if ($rs) {
            $rs['config'] = unserialize($rs['config']);
        }
        
        $this->assign('rs', $rs);
        $this->display();
    }
    
    /**
     * 获取中奖记录
     */
    public function winner_list(){
        $ks = I('get.ks');
        if(empty($ks)){
            $this->message('请选择插件', NULL, 'error');
        }
        $sql = 'SELECT p.id, p.prize_name, p.issue_status, p.winner, p.dateline, p.openid, u.nickname FROM '.$this->model->pre.'wechat_prize p LEFT JOIN '.$this->model->pre.'wechat_user u ON p.openid = u.openid WHERE p.activity_type = "'.$ks.'" and p.prize_type = 1 ORDER BY dateline desc';
        $list = $this->model->query($sql);
        if(empty($list)){
            $list = array();
        }
        foreach($list as $key=>$val){
            $list[$key]['winner'] = unserialize($val['winner']);
        }

        $this->assign('list', $list);
        $this->display();
        
    }
    
    /**
     * 发放奖品
     */
    public function winner_issue(){
        $id = I('get.id');
        $cancel = I('get.cancel');
        if(empty($id)){
            $this->message('请选择中奖记录', NULL, 'error');
        }
        if(!empty($cancel)){
            $data['issue_status'] = 0;
            $this->model->table('wechat_prize')->data($data)->where('id = '.$id)->update();
            
            $this->message('取消成功');
        }
        else{
            $data['issue_status'] = 1;
            $this->model->table('wechat_prize')->data($data)->where('id = '.$id)->update();
            
            $this->message('发放成功');
        }
        
    }
    
    /**
     * 删除记录
     */
    public function winner_del(){
        $id = I('get.id');
        if(empty($id)){
            $this->message('请选择中奖记录', NULL, 'error');
        }
        $this->model->table('wechat_prize')->where('id = '.$id)->delete();
        
        $this->message('删除成功');
    }
    
    

    /**
     * 获取插件配置
     *
     * @return multitype:
     */
    private function read_wechat()
    {
        $modules = glob(ROOT_PATH . 'plugins/wechat/*/config.php');
        foreach ($modules as $file) {
            $config[] = require_once ($file);
        }
        return $config;
    }
}
