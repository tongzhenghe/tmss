<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting( E_ERROR | E_WARNING );
// by mike @ 2013-11-28
define('IN_ECS', true);
define('ROOT_PATH', preg_replace('/plugins(.*)/i', '', str_replace('\\', '/', __FILE__)));

if (isset($_SERVER['PHP_SELF'])){
    define('PHP_SELF', $_SERVER['PHP_SELF']);
}else{
    define('PHP_SELF', $_SERVER['SCRIPT_NAME']);
}

$root_path = preg_replace('/plugins(.*)/i', '', PHP_SELF);
$root_path_relative = '../../../';//根目录相对路径

require(ROOT_PATH . 'data/config.php');
require(ROOT_PATH . 'includes/lib_base.php');
require(ROOT_PATH . 'includes/cls_mysql.php');
require(ROOT_PATH . 'includes/cls_ecshop.php');
require(ROOT_PATH . 'includes/cls_session.php');
require(ROOT_PATH . 'includes/lib_common.php');

/* 创建 ECSHOP 对象 */
$ecs = new ECS($db_name, $prefix);
define('DATA_DIR', $ecs->data_dir());
define('IMAGE_DIR', $ecs->image_dir());

$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

/* init session */
$sess = new cls_session($db, $ecs->table('sessions'), $ecs->table('sessions_data'), 'ECSCP_ID');

if (!empty($_SESSION['admin_id'])){
    if ($_SESSION['action_list'] == 'all'){
        $enable = true;
    } else {
        if (strpos(',' . $_SESSION['action_list'] . ',', ',goods_manage,') === false && strpos(',' . $_SESSION['action_list'] . ',', ',virualcard,') === false && strpos(',' .
        $_SESSION['action_list'] . ',', ',article_manage,') === false)
        {
            $enable = false;
        } else {
            $enable = true;
        }
    }
} else {
    $enable = false;
}
/* 载入系统参数 */
$_CFG = load_config();
require 'Uploader.class.php';//加载上传类