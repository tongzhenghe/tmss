<?php

/**
* 商家店铺街标签
* ecshop 模板堂by Leah
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$exc = new exchange($ecs->table("street_tags"), $db, 'id', 'tag_name');
/*------------------------------------------------------ */
//-- 店铺街标签列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    
	$sql="select * from ".$ecs->table('street_tags')." order by tags_order desc";
	$street_tags=$db->getAll($sql);
	$smarty->assign('street_tags',$street_tags);
    $smarty->assign('ur_here','店铺街标签');
    $smarty->assign('action_link',  array('text' => '添加店铺街标签', 'href'=>'street_tags_manege.php?act=add'));
    $smarty->assign('full_page',    1);
	
    $smarty->display('street_tags.htm');
}


/*------------------------------------------------------ */
//-- 翻页，排序
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $sql="select * from ".$ecs->table('street_tags')." order by tags_order desc";
	$street_tags=$db->getAll($sql);
	$smarty->assign('street_tags',$street_tags);
    make_json_result($smarty->fetch('street_tags.htm'));
}

/*------------------------------------------------------ */
//-- 添加店铺街标签
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'add')
{
    admin_priv('street_tags_manage');

    $form_action = 'insert';

 	$street_tags['tags_order'] = 0;

    $smarty->assign('street_tags',$street_tags);

    $smarty->assign('ur_here', '添加店铺街标签');
    $smarty->assign('action_link', array('text' => '返回店铺街标签列表', 'href'=>'street_tags_manege.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('street_tags_info.htm');
}

/*------------------------------------------------------ */
//-- 增加店铺街标签到数据库
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert')
{
    admin_priv('street_tags_manage');

    /* 检查是否存在重名的会员注册项 */
    if (!$exc->is_only('tag_name', trim($_POST['tag_name'])))
    {
        sys_msg(sprintf('标签已存在', trim($_POST['tag_name'])), 1);
    }
	
	$dis_order=!empty($_POST['tags_order'])?intval($_POST['tags_order']):0;
	
    $sql = "INSERT INTO " .$ecs->table('street_tags') ."("."tag_name, tags_order".") VALUES ("."'$_POST[tag_name]', '$dis_order')";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['tag_name']), 'add', 'street_tags');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页',    'href'=>'street_tags_manege.php?act=list');
    $lnk[] = array('text' => '继续添加', 'href'=>'street_tags_manege.php?act=add');
    sys_msg('添加店铺街标签成功', 0, $lnk);
}
/*------------------------------------------------------ */
//-- 编辑店铺街标签
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    admin_priv('street_tags_manage');

    $form_action = 'update';

    $sql = "SELECT * FROM ".$ecs->table('street_tags'). " WHERE id='$_REQUEST[id]'";
    $street_tags = $db->GetRow($sql);

    $smarty->assign('street_tags',  $street_tags);

    $smarty->assign('ur_here', '修改店铺街标签');
    $smarty->assign('action_link', array('text' => '返回店铺街标签列表', 'href'=>'street_tags_manege.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('street_tags_info.htm');
}
/*------------------------------------------------------ */
//-- 更新店铺街标签
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'update')
{
    admin_priv('street_tags_manage');

    /* 检查是否存在重名的会员注册项 */
    if ($_POST['tag_name'] != $_POST['old_tag_name'] && !$exc->is_only('tag_name', trim($_POST['tag_name'])))
    {
        sys_msg(sprintf('标签已存在', trim($_POST['tag_name'])), 1);
    }
	
	$dis_order=!empty($_POST['tags_order'])?intval($_POST['tags_order']):0;
	
    $sql = "UPDATE " .$ecs->table('street_tags') . " SET `tag_name` = '$_POST[tag_name]', `tags_order` = '$dis_order' WHERE `id` = '$_POST[id]'";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['tag_name']), 'edit', 'street_tags');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页','href'=>'street_tags_manege.php?act=list');
    sys_msg('更新店铺街标签成功', 0, $lnk);
}

/*------------------------------------------------------ */
//-- 删除店铺街标签
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    check_authz_json('street_tags_manage');

    $id = intval($_GET['id']);
    $tag_name = $exc->get_name($id);

    if ($exc->drop($id))
    {
        admin_log(addslashes($tag_name), 'remove', 'street_tags');
        clear_cache_files();
    }

    $url = 'street_tags_manege.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;

}

/*
 *  编辑店铺街标签名称
 */
elseif ($_REQUEST['act'] == 'edit_name')
{
    $id = intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));
    check_authz_json('street_tags_manage');
    if ($exc->is_only('tag_name', $val, $id))
    {
        if ($exc->edit("tag_name = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'street_tags');
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
        make_json_error(sprintf('标签已存在', htmlspecialchars($val)));
    }
}

/*
 *  编辑店铺街标签排序
 */
elseif ($_REQUEST['act'] == 'edit_order')
{
    $id = intval($_REQUEST['id']);
    $val = isset($_REQUEST['val']) ? json_str_iconv(trim($_REQUEST['val'])) : '' ;
    check_authz_json('street_tags_manage');
    if (is_numeric($val))
    {
        if ($exc->edit("tags_order = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'street_tags');
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

?>