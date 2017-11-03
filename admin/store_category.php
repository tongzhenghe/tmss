<?php

/**
* 商家入驻注册项设置
* ecshop 模板堂by Leah
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$exc = new exchange($ecs->table("store_category"), $db, 'id', 'cate_name');
/*------------------------------------------------------ */
//-- 店铺分类列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    
	$sql="select * from ".$ecs->table('store_category')." order by cate_order desc";
	$store_cate=$db->getAll($sql);
	$smarty->assign('store_cate',$store_cate);
    $smarty->assign('ur_here','店铺分类');
    $smarty->assign('action_link',  array('text' => '添加店铺分类', 'href'=>'store_category.php?act=add'));
    $smarty->assign('full_page',    1);
	
    $smarty->display('store_category.htm');
}


/*------------------------------------------------------ */
//-- 翻页，排序
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $sql="select * from ".$ecs->table('store_category')." order by cate_order desc";
	$store_cate=$db->getAll($sql);
	$smarty->assign('store_cate',$store_cate);
    make_json_result($smarty->fetch('store_category.htm'));
}

/*------------------------------------------------------ */
//-- 添加店铺分类页面
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'add')
{
    admin_priv('store_cate_manage');

    $form_action = 'insert';

 	$store_cate['cate_order'] = 0;
    $store_cate['is_show'] = 0;
    $store_cate['is_recom'] = 0;

    $smarty->assign('store_cate',$store_cate);

    $smarty->assign('ur_here', '添加店铺分类');
    $smarty->assign('action_link', array('text' => '返回店铺分类列表', 'href'=>'store_category.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('store_category_info.htm');
}

/*------------------------------------------------------ */
//-- 增加店铺分类到数据库
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert')
{
    admin_priv('store_cate_manage');

    /* 检查是否存在重名的会员注册项 */
    if (!$exc->is_only('cate_name', trim($_POST['cate_name'])))
    {
        sys_msg(sprintf('类名称已存在', trim($_POST['cate_name'])), 1);
    }
	
	$dis_order=!empty($_POST['cate_order'])?intval($_POST['cate_order']):0;
	
    $sql = "INSERT INTO " .$ecs->table('store_category') ."("."cate_name, cate_order, is_show,is_recom".") VALUES ("."'$_POST[cate_name]', '$dis_order', '$_POST[is_show]', '$_POST[is_recom]')";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['cate_name']), 'add', 'store_category');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页',    'href'=>'store_category.php?act=list');
    $lnk[] = array('text' => '继续添加', 'href'=>'store_category.php?act=add');
    sys_msg('添加店铺分类成功', 0, $lnk);
}
/*------------------------------------------------------ */
//-- 编辑店铺分类
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    admin_priv('store_cate_manage');

    $form_action = 'update';

    $sql = "SELECT * FROM ".$ecs->table('store_category'). " WHERE id='$_REQUEST[id]'";
    $store_cate = $db->GetRow($sql);

    $smarty->assign('store_cate',  $store_cate);

    $smarty->assign('ur_here', '修改店铺分类');
    $smarty->assign('action_link', array('text' => '返回店铺分类列表', 'href'=>'store_category.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('store_category_info.htm');
}
/*------------------------------------------------------ */
//-- 更新店铺分类
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'update')
{
    admin_priv('store_cate_manage');

    /* 检查是否存在重名的会员注册项 */
    if ($_POST['cate_name'] != $_POST['old_cate_name'] && !$exc->is_only('cate_name', trim($_POST['cate_name'])))
    {
        sys_msg(sprintf('类名称已存在', trim($_POST['cate_name'])), 1);
    }
	
	$dis_order=!empty($_POST['cate_order'])?intval($_POST['cate_order']):0;
	
    $sql = "UPDATE " .$ecs->table('store_category') . " SET `cate_name` = '$_POST[cate_name]', `cate_order` = '$dis_order', `is_show` = '$_POST[is_show]', `is_recom` = '$_POST[is_recom]' WHERE `id` = '$_POST[id]'";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['cate_name']), 'edit', 'store_category');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页','href'=>'store_category.php?act=list');
    sys_msg('更新店铺分类成功', 0, $lnk);
}

/*------------------------------------------------------ */
//-- 删除店铺分类
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    check_authz_json('store_cate_manage');

    $id = intval($_GET['id']);
    $cate_name = $exc->get_name($id);

    if ($exc->drop($id))
    {
        admin_log(addslashes($cate_name), 'remove', 'store_category');
        clear_cache_files();
    }

    $url = 'store_category.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;

}

/*
 *  编辑店铺分类名称
 */
elseif ($_REQUEST['act'] == 'edit_name')
{
    $id = intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));
    check_authz_json('store_cate_manage');
    if ($exc->is_only('cate_name', $val, $id))
    {
        if ($exc->edit("cate_name = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'store_category');
            clear_cache_files();
            make_json_result(stripcslashes($val));
        }
        else
        {
            make_json_error($db->error());
        }
    }
    else
    {
        make_json_error(sprintf('类名称已存在', htmlspecialchars($val)));
    }
}

/*
 *  编辑店铺分类排序
 */
elseif ($_REQUEST['act'] == 'edit_order')
{
    $id = intval($_REQUEST['id']);
    $val = isset($_REQUEST['val']) ? json_str_iconv(trim($_REQUEST['val'])) : '' ;
    check_authz_json('store_cate_manage');
    if (is_numeric($val))
    {
        if ($exc->edit("cate_order = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'store_category');
            clear_cache_files();
            make_json_result(stripcslashes($val));
        }
        else
        {
            make_json_error($db->error());
        }
    }
    else
    {
        make_json_error($_LANG['order_not_num']);
    }
}

/*------------------------------------------------------ */
//-- 修改店铺分类显示状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_dis')
{
    check_authz_json('store_cate_manage');

    $id     = intval($_POST['id']);
    $is_dis = intval($_POST['val']);

    if ($exc->edit("is_show = '$is_dis'", $id))
    {
        clear_cache_files();
        make_json_result($is_dis);
    }
}

/*------------------------------------------------------ */
//-- 修改店铺分类推荐
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_recom')
{
    check_authz_json('store_cate_manage');

    $id     = intval($_POST['id']);
    $is_recom = intval($_POST['val']);

    if ($exc->edit("is_recom = '$is_recom'", $id))
    {
        clear_cache_files();
        make_json_result($is_recom);
    }
}

?>