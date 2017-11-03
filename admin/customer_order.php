<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
require_once(ROOT_PATH . 'includes/lib_goods.php');
require_once(ROOT_PATH . 'includes/lib_common.php');


//客户下单处理
if($_REQUEST['act']=='list'){
//    $sql="select count(*) from".$ecs->table("tmss");
//    $recode_page=$GLOBALS['db']->getone($sql);
//    $pagesize=1;
//    $pagecount=$recode_page>0 ? ceil($recode_page / $pagesize) : 1;
//    $page=(int)$_GET['page'];
//    $page= empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 1) ? 1 : intval($_REQUEST['page']);
//    $offset=($page-1).$pagesize;
//    $sql="select * from".$ecs->table("tmss")."limit".$offset.",$pagesize";
    $sql="select * from".$ecs->table("tmss");
    $row = $GLOBALS['db']->getAll($sql);
    $smarty->assign('row',$row);
    $smarty->display('customer_list.htm');
}

////分页
//if($_REQUEST['act'] =='list'){
////获取信息列表
//$pzd_list = get_pzd_list();
//$smarty->assign('pzd_list',  $pzd_list['pzd_list']);
//$smarty->assign('filter',       $pzd_list['filter']);
//$smarty->assign('record_count', $pzd_list['record_count']);
//$smarty->assign('page_count',   $pzd_list['page_count']);
////后台页面样式
//$smarty->assign('full_page',    1);
////跳转页面
//assign_query_info();
//$smarty->display('page1.htm');
//
//}elseif ($_REQUEST['act'] =='query'){//分页代码
////获取信息列表
//$pzd_list = get_pzd_list();
//$smarty->assign('pzd_list',  $pzd_list['pzd_list']);
//$smarty->assign('filter',       $pzd_list['filter']);
//$smarty->assign('record_count', $pzd_list['record_count']);
//$smarty->assign('page_count',   $pzd_list['page_count']);
//
////跳转页面
//make_json_result($smarty->fetch('snatch_list.htm'),
//array('filter' => $pzd_list['filter'],'page_count' => $pzd_list['page_count']));
//}
//
//查询数据方法
function get_pzd_list()
{
    $sql ='SELECT COUNT(*) FROM'. $GLOBALS['ecs']->table('tmss');
    $filter['record_count'] = $GLOBALS['db']->getOne($sql);
    $filter = page_and_size($filter);
/* 获活动数据 */
$sql ='select * from'. $GLOBALS['ecs']->table('tmss').'.'.'LIMIT'. $filter['start'] .'.'. $filter['page_size'];
@$filter['keywords'] = stripslashes($filter['keywords']);
set_filter($filter, $sql);
$row = $GLOBALS['db']->getAll($sql);
$arr = array('pzd_list'=> $row,'filter'=> $filter,'page_count'=> $filter['page_count'],'record_count'=> $filter['record_count']);
return $arr;
}

?>