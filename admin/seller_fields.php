<?php

/**
* 商家入驻注册项设置
* ecshop 模板堂by Leah
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$exc = new exchange($ecs->table("seller_fields"), $db, 'id', 'reg_field_name');
/*------------------------------------------------------ */
//-- 会员注册项列表
/*------------------------------------------------------ */
$type_lang=array('text'=>'文本','file'=>'文件上传','select'=>'下拉菜单','textarea'=>'文本域');

if ($_REQUEST['act'] == 'list')
{
    $fields = array();
    $fields = $db->getAll("SELECT * FROM " . $ecs->table('seller_fields') . " ORDER BY dis_order, id");
	foreach($fields as $key=>$val)
	{
		$fields[$key]['type']=$type_lang[$val['type']];	
	}

    $smarty->assign('ur_here','商家注册项设置');
    $smarty->assign('action_link',  array('text' => '添加注册项', 'href'=>'seller_fields.php?act=add'));
    $smarty->assign('full_page',    1);

    $smarty->assign('reg_fields', $fields);
	
    assign_query_info();
    $smarty->display('seller_fields.htm');
}


/*------------------------------------------------------ */
//-- 翻页，排序
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $fields = array();
    $fields = $db->getAll("SELECT * FROM " .$ecs->table('seller_fields') . "ORDER BY dis_order");

    $smarty->assign('reg_fields', $fields);
    make_json_result($smarty->fetch('seller_fields.htm'));
}

/*------------------------------------------------------ */
//-- 添加会员注册项
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'add')
{
    admin_priv('seller_fields');

    $form_action = 'insert';

    $reg_field['reg_field_order'] = 100;
    $reg_field['reg_field_display'] = 1;
    $reg_field['reg_field_need'] = 1;

    $smarty->assign('reg_field',  $reg_field);
	$smarty->assign('type_lang', $type_lang);
    $smarty->assign('ur_here', '添加注册项');
    $smarty->assign('action_link', array('text' => '返回注册项列表', 'href'=>'seller_fields.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('seller_field_info.htm');
}

/*------------------------------------------------------ */
//-- 增加会员注册项到数据库
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert')
{
    admin_priv('seller_fields');

    /* 检查是否存在重名的会员注册项 */
    if (!$exc->is_only('reg_field_name', trim($_POST['reg_field_name'])))
    {
        sys_msg(sprintf('注册项已存在', trim($_POST['reg_field_name'])), 1);
    }
	
	$dis_order=!empty($_POST['reg_field_order'])?intval($_POST['reg_field_order']):0;
	$width=!empty($_POST['reg_field_width'])?intval($_POST['reg_field_width']):'';
	$height=!empty($_POST['reg_field_height'])?intval($_POST['reg_field_height']):'';
	$select_option=($_POST['reg_field_type']=='select')?$_POST['select_options']:'';
	
    $sql = "INSERT INTO " .$ecs->table('seller_fields') ."("."reg_field_name, dis_order, display,type,is_need,select_options,width,height".") VALUES ("."'$_POST[reg_field_name]', '$dis_order', '$_POST[reg_field_display]', '$_POST[reg_field_type]', '$_POST[reg_field_need]','$select_option','$width','$height')";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['reg_field_name']), 'add', 'seller_fields');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页',    'href'=>'seller_fields.php?act=list');
    $lnk[] = array('text' => '继续添加', 'href'=>'seller_fields.php?act=add');
    sys_msg('添加注册项成功', 0, $lnk);
}
/*------------------------------------------------------ */
//-- 编辑会员注册项
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    admin_priv('seller_fields');

    $form_action = 'update';

    $sql = "SELECT * FROM ".$ecs->table('seller_fields'). " WHERE id='$_REQUEST[id]'";
    $reg_field = $db->GetRow($sql);

    $smarty->assign('reg_field',  $reg_field);
	$smarty->assign('type_lang', $type_lang);
    $smarty->assign('ur_here', '修改注册项信息');
    $smarty->assign('action_link', array('text' => '返回注册项列表', 'href'=>'seller_fields.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('seller_field_info.htm');
}
/*------------------------------------------------------ */
//-- 更新会员注册项
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'update')
{
    admin_priv('seller_fields');

    /* 检查是否存在重名的会员注册项 */
    if ($_POST['reg_field_name'] != $_POST['old_field_name'] && !$exc->is_only('reg_field_name', trim($_POST['reg_field_name'])))
    {
        sys_msg(sprintf('注册项已存在', trim($_POST['reg_field_name'])), 1);
    }
	
	$dis_order=!empty($_POST['reg_field_order'])?intval($_POST['reg_field_order']):0;
	$width=!empty($_POST['reg_field_width'])?intval($_POST['reg_field_width']):'';
	$height=!empty($_POST['reg_field_height'])?intval($_POST['reg_field_height']):'';
	$select_option=($_POST['reg_field_type']=='select')?$_POST['select_options']:'';
	
    $sql = "UPDATE " .$ecs->table('seller_fields') . " SET `reg_field_name` = '$_POST[reg_field_name]', `dis_order` = '$dis_order', `display` = '$_POST[reg_field_display]', `type` = '$_POST[reg_field_type]', `is_need` = '$_POST[reg_field_need]', `select_options` = '$select_option', `width` = '$width', `height` = '$height' WHERE `id` = '$_POST[id]'";
    $db->query($sql);

    /* 管理员日志 */
    admin_log(trim($_POST['reg_field_name']), 'edit', 'seller_fields');
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页',    'href'=>'seller_fields.php?act=list');
    sys_msg('更新注册项信息成功', 0, $lnk);
}

/*------------------------------------------------------ */
//-- 删除会员注册项
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    check_authz_json('seller_fields');

    $field_id = intval($_GET['id']);
    $field_name = $exc->get_name($field_id);

    if ($exc->drop($field_id))
    {
        /* 删除会员扩展信息表的相应信息 */
        $sql = "DELETE FROM " . $GLOBALS['ecs']->table('seller_extend_info') . " WHERE reg_field_id = '" . $field_id . "'";
        @$GLOBALS['db']->query($sql);

        admin_log(addslashes($field_name), 'remove', 'seller_fields');
        clear_cache_files();
    }

    $url = 'seller_fields.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;

}

/*
 *  编辑会员注册项名称
 */
elseif ($_REQUEST['act'] == 'edit_name')
{
    $id = intval($_REQUEST['id']);
    $val = empty($_REQUEST['val']) ? '' : json_str_iconv(trim($_REQUEST['val']));
    check_authz_json('seller_fields');
    if ($exc->is_only('reg_field_name', $val, $id))
    {
        if ($exc->edit("reg_field_name = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'seller_fields');
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
        make_json_error(sprintf('注册项已存在', htmlspecialchars($val)));
    }
}

/*
 *  编辑会员注册项排序权值
 */
elseif ($_REQUEST['act'] == 'edit_order')
{
    $id = intval($_REQUEST['id']);
    $val = isset($_REQUEST['val']) ? json_str_iconv(trim($_REQUEST['val'])) : '' ;
    check_authz_json('seller_fields');
    if (is_numeric($val))
    {
        if ($exc->edit("dis_order = '$val'", $id))
        {
            /* 管理员日志 */
            admin_log($val, 'edit', 'seller_fields');
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
//-- 修改会员注册项显示状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_dis')
{
    check_authz_json('seller_fields');

    $id     = intval($_POST['id']);
    $is_dis = intval($_POST['val']);

    if ($exc->edit("display = '$is_dis'", $id))
    {
        clear_cache_files();
        make_json_result($is_dis);
    }
}

/*------------------------------------------------------ */
//-- 修改会员注册项必填状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_need')
{
    check_authz_json('seller_fields');

    $id     = intval($_POST['id']);
    $is_need = intval($_POST['val']);

    if ($exc->edit("is_need = '$is_need'", $id))
    {
        clear_cache_files();
        make_json_result($is_need);
    }
}
/*------------------------------------------------------ */
//-- 修改会员注册项表单宽度
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_width')
{
    check_authz_json('seller_fields');

    $id     = intval($_POST['id']);
    $width = intval($_POST['val']);

    if ($exc->edit("width = '$width'", $id))
    {
        clear_cache_files();
        make_json_result($width);
    }
}
/*------------------------------------------------------ */
//-- 修改会员注册项表单高度
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_height')
{
    check_authz_json('seller_fields');

    $id     = intval($_POST['id']);
    $height = intval($_POST['val']);

    if ($exc->edit("height = '$height'", $id))
    {
        clear_cache_files();
        make_json_result($height);
    }
}

?>