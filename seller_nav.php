<?php

/**
 * ECSHOP 管理中心入驻商家店铺导航管理
 * ============================================================================
 * * 版权所有 2005-2012 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wang $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

$exc = new exchange($ecs->table("seller_nav"), $db, 'id', 'nav_name');

/*------------------------------------------------------ */
//-- 店铺导航列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('ur_here','店铺导航列表');
    $smarty->assign('action_link',  array('text' => '添加店铺导航', 'href' => 'seller_nav.php?act=add'));
    $smarty->assign('full_page',    1);

    $nav_list = get_seller_navlist();

    $smarty->assign('seller_nav_list', $nav_list);

    assign_query_info();
    $smarty->display('seller_nav_list.htm');
}

/*------------------------------------------------------ */
//-- 添加导航
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'add')
{

    $smarty->assign('ur_here', '添加店铺导航');
    $smarty->assign('action_link', array('text' => '店铺导航列表', 'href' => 'seller_nav.php?act=list'));
    $smarty->assign('form_action', 'insert');

    assign_query_info();

    $smarty->display('seller_nav_info.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
	
	$sql = "SELECT count(nav_name) FROM " .$ecs->table('seller_nav'). " WHERE nav_name='".$_POST['navname']."' and seller_id='".$_SESSION['seller_id']."'";
    $count = $db->getOne($sql);
	
    if ($count>0)
    {
        sys_msg(sprintf('导航名称 %s 已经存在！', stripslashes($_POST['navname'])), 1);
    }
	
	$is_show = isset($_REQUEST['isshow']) ? intval($_REQUEST['isshow']) : 0;
	
	$nav_name=!empty($_POST['navname'])?stripslashes($_POST['navname']):'';
	
	$nav_link=!empty($_POST['navlink'])?stripslashes($_POST['navlink']):'#';
	
	$nav_order=isset($_POST['navorder'])?intval($_POST['navorder']):0;
	
	$is_blank = isset($_REQUEST['isblank']) ? intval($_REQUEST['isblank']) : 0;
	
	$is_text = isset($_REQUEST['istext']) ? intval($_REQUEST['istext']) : 0;

     /*处理图片*/
	/* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|';
	
	if($_FILES['navimg'])
	{
		$file=$_FILES['navimg'];
		 /* 判断用户是否选择了文件 */
        if ((isset($file['error']) && $file['error'] == 0) || (!isset($file['error']) && $file['tmp_name'] != 'none'))
        {
            /* 检查上传的文件类型是否合法 */
            if (!check_file_type($file['tmp_name'], $file['name'], $allow_file_types))
            {
                sys_msg(sprintf($_LANG['msg_invalid_file'], $file['name']));
            }
            else
            {
				
                $ext = array_pop(explode('.',$file['name']));
				$file_dir ='../seller_imgs/seller_nav_img/seller_'.$_SESSION['seller_id'];
				if(!is_dir($file_dir))
				{
					mkdir($file_dir);	
				}
				$file_name=$file_dir."/nav_".gmtime().'.'.$ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $nav_img=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}

    /*插入数据*/
	if($nav_name)
	{
		$sql = "INSERT INTO ".$ecs->table('seller_nav')."(nav_name, nav_link, nav_order, is_show, is_blank, nav_img,is_text,seller_id) ".
			   "VALUES ('$nav_name', '$nav_link', '$nav_order', '$is_show', '$is_blank', '$nav_img','$is_text','".$_SESSION['seller_id']."')";
		$db->query($sql);
	
		admin_log($_POST['navname'],'add','seller_nav');
	
		/* 清除缓存 */
		clear_cache_files();
	
		$link[0]['text'] = '继续添加';
		$link[0]['href'] = 'seller_nav.php?act=add';
	
		$link[1]['text'] = '返回列表';
		$link[1]['href'] = 'seller_nav.php?act=list';
	
		sys_msg('导航添加成功', 0, $link);
	}
	else
	{
		$link[0]['text'] = '继续添加';
		$link[0]['href'] = 'seller_nav.php?act=add';
		sys_msg('导航添加失败', 0, $link);
	}
}

/*------------------------------------------------------ */
//-- 编辑导航
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    /* 权限判断 */
	
    //admin_priv('brand_manage');
	
    $sql = "SELECT * FROM " .$ecs->table('seller_nav'). " WHERE id='$_REQUEST[id]' and seller_id='".$_SESSION['seller_id']."'";
    $seller_nav = $db->GetRow($sql);

    $smarty->assign('ur_here', '店铺导航编辑');
    $smarty->assign('action_link', array('text' => '店铺导航列表', 'href' => 'seller_nav.php?act=list'));
    $smarty->assign('nav',       $seller_nav);
    $smarty->assign('form_action', 'updata');

    assign_query_info();
    $smarty->display('seller_nav_info.htm');
}
elseif ($_REQUEST['act'] == 'updata')
{
    //admin_priv('brand_manage');
	
    $is_show = isset($_REQUEST['isshow']) ? intval($_REQUEST['isshow']) : 0;
	
	$nav_name=!empty($_POST['navname'])?stripslashes($_POST['navname']):'';
	
	$nav_link=!empty($_POST['navlink'])?stripslashes($_POST['navlink']):'#';
	
	$nav_order=isset($_POST['navorder'])?intval($_POST['navorder']):0;
	
	$is_blank = isset($_REQUEST['isblank']) ? intval($_REQUEST['isblank']) : 0;
	
	$is_text = isset($_REQUEST['istext']) ? intval($_REQUEST['istext']) : 0;

    /*处理图片*/
	/* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|';
	
	if($_FILES['navimg'])
	{
		$file=$_FILES['navimg'];
		 /* 判断用户是否选择了文件 */
        if ((isset($file['error']) && $file['error'] == 0) || (!isset($file['error']) && $file['tmp_name'] != 'none'))
        {
            /* 检查上传的文件类型是否合法 */
            if (!check_file_type($file['tmp_name'], $file['name'], $allow_file_types))
            {
                sys_msg(sprintf($_LANG['msg_invalid_file'], $file['name']));
            }
            else
            {
				
                $ext = array_pop(explode('.',$file['name']));
				$file_dir ='../seller_imgs/seller_nav_img/seller_'.$_SESSION['seller_id'];
				if(!is_dir($file_dir))
				{
					mkdir($file_dir);	
				}
				$file_name=$file_dir."/nav_".gmtime().'.'.$ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $nav_img=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}
	
    $param = "nav_link='$nav_link',nav_order='$nav_order', is_show='$is_show',is_blank='$is_blank',is_text='$is_text' ";
    if (!empty($nav_img))
    {
        //有图片上传
        $param .= " ,nav_img = '$nav_img' ";
    }
	
	$sql = "SELECT count(nav_name) FROM " .$ecs->table('seller_nav'). " WHERE nav_name='$nav_name' and seller_id='".$_SESSION['seller_id']."'";
    $count = $db->getOne($sql);

    if ($count==0)
    {
        $param .= " ,nav_name = '$nav_name'";
    }

    if ($exc->edit($param,  $_POST['id']))
    {
        /* 清除缓存 */
        clear_cache_files();

        admin_log($_POST['navname'], 'edit', 'seller_nav');

        $link[0]['text'] ='返回列表';
        $link[0]['href'] = 'seller_nav.php?act=list';
        sys_msg('店铺导航编辑成功', 0, $link);
    }
    else
    {
        die($db->error());
    }
}

/*------------------------------------------------------ */
//-- 编辑导航名称
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_nav_name')
{
    $id     = intval($_POST['id']);
    $name   = json_str_iconv(trim($_POST['val']));
	
	$sql = "SELECT count(nav_name) FROM " .$ecs->table('seller_nav'). " WHERE nav_name='$name' and seller_id='".$_SESSION['seller_id']."'";
    $count = $db->getOne($sql);
    /* 检查名称是否重复 */
    if ($count>0)
    {
        make_json_error(sprintf('导航 %s 已存在', $name));
    }
    else
    {
        if ($exc->edit("nav_name = '$name'", $id))
        {
            admin_log($name,'edit','seller_nav');
            make_json_result(stripslashes($name));
        }
        else
        {
            make_json_result(sprintf('%s 编辑失败', $name));
        }
    }
}
/*------------------------------------------------------ */
//-- 编辑排序序号
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_sort_order')
{
    $id     = intval($_POST['id']);
    $order  = intval($_POST['val']);
    $name   = $exc->get_name($id);

    if ($exc->edit("nav_order = '$order'", $id))
    {
        make_json_result($order);
    }
    else
    {
        make_json_error(sprintf('%s 编辑失败', $name));
    }
}

/*------------------------------------------------------ */
//-- 切换是否显示
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_show')
{

    $id     = intval($_POST['id']);
    $val    = intval($_POST['val']);

    $exc->edit("is_show='$val'", $id);

    make_json_result($val);
}
/*------------------------------------------------------ */
//-- 切换是否新窗口打开
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'toggle_blank')
{

    $id     = intval($_POST['id']);
    $val    = intval($_POST['val']);

    $exc->edit("is_blank='$val'", $id);

    make_json_result($val);
}
/*------------------------------------------------------ */
//-- 删除导航
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{

    $id = intval($_GET['id']);

    /* 删除该导航的图标 */
    $sql = "SELECT nav_img FROM " .$ecs->table('seller_nav'). " WHERE id = '$id' and s_cid = 0 and seller_id='".$_SESSION['seller_id']."'";
    $nav_img = $db->getOne($sql);
    if (!empty($nav_img))
    {
        //@unlink(ROOT_PATH . DATA_DIR .$nav_img);
		@unlink($nav_img);
    }

    $exc->drop($id);


    $url = 'seller_nav.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $nav_list = get_seller_navlist();
    $smarty->assign('seller_nav_list', $nav_list);

    make_json_result($smarty->fetch('seller_nav_list.htm'), '');
}

/**
 * 获取导航列表
 *
 * @access  public
 * @return  array
 */
function get_seller_navlist()
{

        $sql = "SELECT * FROM ".$GLOBALS['ecs']->table('seller_nav') .' WHERE seller_id = \''.$_SESSION['seller_id'].'\'';

        $nav_list= $GLOBALS['db']->getAll($sql);
		
		foreach($nav_list as $key=>$val)
		{
			$nav_list[$key]['is_text']=$val['is_text']>0?'文字':'图标';
		}
		
		return $nav_list;
}

?>
