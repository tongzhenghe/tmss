<?php
if (!defined('IN_ECTOUCH')){
    die('Hacking attempt');
}

//默认配置

require(dirname(__FILE__) . '/convention.php');



//网站全局配置

$config['site_name'] = 'ECtouch PHP源码吧 http://php8.taobao.com '; //站点名称

//$config['site_url']='http://127.0.0.1/php8/ectouch/'; //电脑版地址
$config['site_url'] = "http://".$_SERVER['HTTP_HOST'];
$config['site_url'] .= str_replace('mobile/'.basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);


$config['site_email'] = '136349117@qq.com'; //管理员邮箱

$config['site_phone'] = '15536281846'; //公司电话

$config['site_fax'] = '15536281846'; //传真号码

$config['site_address'] = ' 泉州正尚网络科技有限公司'; //公司地址

$config['site_postcode'] = '010000'; //公司邮编

$config['site_image_maxwidth'] = '600'; //内容图片最大宽度

$config['site_summary_length'] = '360'; //内容摘要长度

$config['site_copyright'] = 'Copyright © 2014 河津信息有限公司';

$config['site_statcode'] = ''; //第三方统计代码

$config['site_icp'] = '京ICP备88888888号'; //ICP 备案信息

$config['site_title'] = 'PHP源码吧'; //首页标题

$config['site_keywords'] = ''; //站点关键字

$config['site_description'] = ''; //站点描述

$config['site_closed'] = false; //是否关闭网站

$config['site_closedreason'] = '网站暂未开放，请访问<a href="'.$config['site_url'].'">电脑版</a>。'; //关闭网站的原因

$config['site_themes'] = 'bianli100'; //模板主题，一般不需要修改

//$config['site_pagebreak'] = '_baidu_page_break_tag_'; //内容分页标签

$config['site_pagebreak'] = '&lt;hr style=&quot;page-break-after:always;&quot; class=&quot;ke-pagebreak&quot; /&gt;'; //内容分页标签

$config['site_attachment'] = 'data/attachment/'; //附件目录

$config['site_pagesize'] = 12; //网站分页数量

//邮箱服务器配置

$config['SMTP_HOST'] = 'smtp.qq.com'; //smtp服务器地址

$config['SMTP_PORT'] = '465'; //smtp服务器端口

$config['SMTP_SSL'] = false; //是否启用SSL安全连接，gmail需要启用sll安全连接

$config['SMTP_USERNAME'] = '136349117@qq.com'; //smtp服务器帐号，如：你的qq邮箱

$config['SMTP_PASSWORD'] = '********'; //smtp服务器帐号密码，如你的qq邮箱密码

$config['SMTP_FROM_TO'] = '136349117@qq.com'; //发件人邮件地址

$config['SMTP_FROM_NAME'] = '系统邮件'; //发件人姓名

$config['SMTP_CHARSET'] = 'utf-8'; //发送的邮件内容编码

//EcTouch版本

$config['ver'] = '0.1'; //版本号

$config['ver_name'] = '2.1'; //版本名称

$config['ver_date'] = '20140927'; //版本时间

$config['ver_author'] = 'PHP8';

$config['ver_email'] = '136349117@qq.com';

$config['ver_url'] = 'http://php8.taobao.com/';