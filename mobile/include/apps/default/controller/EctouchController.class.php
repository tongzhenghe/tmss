<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：IndexController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTouch 内容展示页面控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class EctouchController extends CommonController
{

    /**
     * 分享
     */
    public function share()
    {
        $this->assign('HTTP_REFERER', $_SERVER['HTTP_REFERER']);
        $this->display('ectouch_share.dwt');
    }
    
    /**
     * 公司简介+联系我们 
     */ 
     public function contact(){
         /* 关于我们 文章详情 */
         assign_template();
         $article = model('Article')->get_article_info(4);
         $this->assign('article', $article);
         $this->display('ectouch_contact.dwt');
     }
     
     /* 地图页 */
     public function map(){
        $this->assign('address',$_GET['address']);
         $this->display('ectouch_map.dwt');
     }
}
