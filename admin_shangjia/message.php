<?php

/**
 * ECSHOP  管理中心管理员留言程序
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: message.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/* act操作项的初始化 */
$_REQUEST['act'] = trim($_REQUEST['act']);
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}

/*------------------------------------------------------ */
//-- 留言列表页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty->assign('full_page',   1);
    $smarty->assign('ur_here',     $_LANG['msg_list']);

    $list = get_message_list();

    $smarty->assign('message_list', $list['item']);
    $smarty->assign('filter',       $list['filter']);
    $smarty->assign('record_count', $list['record_count']);
    $smarty->assign('page_count',   $list['page_count']);

    $sort_flag  = sort_flag($list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    assign_query_info();
    $smarty->display('message_list.htm');
}

/*------------------------------------------------------ */
//-- 翻页、排序
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $list = get_message_list();

    $smarty->assign('message_list', $list['item']);
    $smarty->assign('filter',       $list['filter']);
    $smarty->assign('record_count', $list['record_count']);
    $smarty->assign('page_count',   $list['page_count']);

    $sort_flag  = sort_flag($list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('message_list.htm'), '',
        array('filter' => $list['filter'], 'page_count' => $list['page_count']));
}
/*------------------------------------------------------ */
//-- 留言查看页面
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'view')
{
    $msg_id = intval($_REQUEST['id']);

    /* 获得管理员留言数据 */
    $msg_arr = array();
    $sql     = "SELECT a.*, b.user_name ".
               "FROM " .$ecs->table('admin_message')." AS a ".
               "LEFT JOIN " .$ecs->table('admin_user')." AS b ON b.user_id = a.sender_id ".
               "WHERE a.message_id = '$msg_id'";
    $msg_arr = $db->getRow($sql);
    $msg_arr['title']   = nl2br(htmlspecialchars($msg_arr['title']));
    $msg_arr['message'] = nl2br(htmlspecialchars($msg_arr['message']));

    /* 如果还未阅读 */
    if ($msg_arr['readed'] == 0)
    {
        $msg_arr['read_time'] = gmtime(); //阅读日期为当前日期

        //更新阅读日期和阅读状态
        $sql = "UPDATE " .$ecs->table('admin_message'). " SET ".
               "read_time = '" . $msg_arr['read_time'] . "', ".
               "readed = '1' ".
               "WHERE message_id = '$msg_id'";
        $db->query($sql);
    }

    //模板赋值，显示
    $smarty->assign('ur_here',     $_LANG['view_msg']);
    $smarty->assign('action_link', array('href' => 'message.php?act=list', 'text' => $_LANG['msg_list']));
    $smarty->assign('admin_user',  $_SESSION['admin_name']);
    $smarty->assign('msg_arr',     $msg_arr);

    assign_query_info();
    $smarty->display('message_view.htm');
}
/*------------------------------------------------------ */
//--留言回复页面
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'reply')
{
    $msg_id = intval($_REQUEST['id']);

    /* 获得留言数据 */
    $msg_val = array();
    $sql     = "SELECT a.*, b.user_name ".
               "FROM " .$ecs->table('admin_message')." AS a ".
               "LEFT JOIN " .$ecs->table('admin_user')." AS b ON b.user_id = a.sender_id ".
               "WHERE a.message_id = '$msg_id'";
    $msg_val = $db->getRow($sql);

    $smarty->assign('ur_here',     $_LANG['reply_msg']);
    $smarty->assign('action_link', array('href' => 'message.php?act=list', 'text' => $_LANG['msg_list']));

    $smarty->assign('action',      'reply');
    $smarty->assign('form_act',    're_msg');
    $smarty->assign('msg_val',     $msg_val);

    assign_query_info();
    $smarty->display('message_info.htm');
}

/*------------------------------------------------------ */
//--留言回复的处理
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 're_msg')
{
    $sql = "INSERT INTO " .$ecs->table('admin_message'). " (sender_id, receiver_id, sent_time, ".
                "read_time, readed, deleted, title, message) ".
           "VALUES ('".$_SESSION['admin_id']."', '$_POST[receiver_id]', '" . gmtime() . "', ".
                "0, '0', '0', '$_POST[title]', '$_POST[message]')";
    $db->query($sql);

    $link[0]['text'] = $_LANG['back_list'];
    $link[0]['href'] = 'message.php?act=list';

    sys_msg($_LANG['send_msg'] . ' ' . $_LANG['action_succeed'],0, $link);

    /* 记录管理员操作 */
    admin_log(addslashes($_LANG['send_msg']), 'add', 'admin_message');
}

/*------------------------------------------------------ */
//-- 批量删除留言记录
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'drop_msg')
{
    if (isset($_POST['checkboxes']))
    {
        $count = 0;
        foreach ($_POST['checkboxes'] AS $key => $id)
        {
            $sql = "UPDATE " .$ecs->table('admin_message'). " SET ".
                   "deleted = '1'".
                   "WHERE message_id = '$id' AND (sender_id='$_SESSION[admin_id]' OR receiver_id='$_SESSION[admin_id]')";
            $db->query($sql);

            $count++;
        }

        admin_log('', 'remove', 'admin_message');
        $link[] = array('text' => $_LANG['back_list'], 'href' => 'message.php?act=list');
        sys_msg(sprintf($_LANG['batch_drop_success'], $count), 0, $link);
    }
    else
    {
        sys_msg($_LANG['no_select_msg'], 1);
    }
}

/*------------------------------------------------------ */
//-- 删除留言
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    $id = intval($_GET['id']);

    $sql = "UPDATE ".$ecs->table('admin_message')." SET deleted=1 ".
            " WHERE message_id=$id AND (sender_id='$_SESSION[admin_id]' OR receiver_id='$_SESSION[admin_id]')";
    $db->query($sql);

    $url = 'message.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}

/**
 *  获取管理员留言列表
 *
 * @return void
 */
function get_message_list()
{
    /* 查询条件 */
    $filter['sort_by']    = empty($_REQUEST['sort_by'])    ? 'sent_time' : trim($_REQUEST['sort_by']);
    $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    $filter['msg_type']   = empty($_REQUEST['msg_type'])   ? 0 : intval($_REQUEST['msg_type']);

    /* 查询条件 */
    switch ($filter['msg_type'])
    {
        case 1:
            $where = " a.receiver_id='" .$_SESSION['admin_id']. "'";
            break;
        case 2:
           $where = " a.sender_id='".$_SESSION['admin_id']."' AND a.deleted='0'";
           break;
        case 3:
           $where = " a.readed='0' AND a.receiver_id='".$_SESSION['admin_id']."' AND a.deleted='0'";
           break;
        case 4:
           $where = " a.readed='1' AND a.receiver_id='".$_SESSION['admin_id']."' AND a.deleted='0'";
           break;
        default:
           $where = " (a.receiver_id='".$_SESSION['admin_id']."' OR a.sender_id='" .$_SESSION['admin_id']. "') AND a.deleted='0'";
    }

    $sql = "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table('admin_message')." AS a WHERE 1 AND ". $where;
    $filter['record_count'] = $GLOBALS['db']->getOne($sql);

    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT a.message_id,a.sender_id,a.receiver_id,a.sent_time,a.read_time,a.deleted,a.title,a.message,b.user_name".
            " FROM ".$GLOBALS['ecs']->table('admin_message')." AS a,".$GLOBALS['ecs']->table('admin_user')." AS b ".
            " WHERE a.sender_id=b.user_id AND $where ".
            " ORDER BY ".$filter['sort_by']." ".$filter['sort_order'].
            " LIMIT ". $filter['start'] .", $filter[page_size]";
    $row = $GLOBALS['db']->getAll($sql);

    foreach ($row AS $key=>$val)
    {
		//wang 商家入驻
		$sql="select user_name from ".$GLOBALS['ecs']->table('admin_user')." where user_id='".$val['receiver_id']."'";
		$row[$key]['receiver']=$GLOBALS['db']->getOne($sql);
		
        $row[$key]['sent_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['sent_time']);
        $row[$key]['read_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['read_time']);
    }

    $arr = array('item' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

?>
