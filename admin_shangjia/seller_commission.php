<?php

/**
 * ECSHOP 订单管理
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: yehuaixiao $
 * $Id: order.php 17219 2011-01-27 10:49:19Z yehuaixiao $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
require_once(ROOT_PATH . 'includes/lib_goods.php');

/*------------------------------------------------------ */
//-- 订单查询
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'query')
{
    /* 检查权限 */
    //admin_priv('seller_yj_manage');
	
	$smarty->assign('action_link', array('href' => 'seller_commission.php?comm=comm_export', 'text' => '导出佣金列表'));
	/* 模板赋值 */
    $smarty->assign('ur_here', '商家佣金列表');
	
	$comm_list = comm_list();

    $smarty->assign('comm_list',   $comm_list['comm_list']);
	$smarty->assign('mony_count',   $comm_list['mony_count']);
    $smarty->assign('filter',       $comm_list['filter']);
    $smarty->assign('record_count', $comm_list['record_count']);
    $smarty->assign('page_count',   $comm_list['page_count']);

    /* 显示模板 */
    assign_query_info();
    make_json_result($smarty->fetch('seller_comm_list.htm'), '', array('filter' => $comm_list['filter'], 'page_count' => $comm_list['page_count']));
}

/*------------------------------------------------------ */
//-- 订单列表
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    //admin_priv('seller_yj_manage');
	
	$smarty->assign('action_link', array('href' => 'seller_commission.php?comm=comm_export', 'text' => '导出佣金列表'));
    /* 模板赋值 */
    $smarty->assign('ur_here', '商家佣金列表');

    $comm_list = comm_list();
	
    $smarty->assign('comm_list',   $comm_list['comm_list']);
	$smarty->assign('mony_count',   $comm_list['mony_count']);
    $smarty->assign('filter',       $comm_list['filter']);
    $smarty->assign('record_count', $comm_list['record_count']);
    $smarty->assign('page_count',   $comm_list['page_count']);
	$smarty->assign('full_page','1');

    /* 显示模板 */
    assign_query_info();
    $smarty->display('seller_comm_list.htm');
}
elseif($_REQUEST['comm'] == 'comm_export'){

	export_csv($_SESSION['commission'],$_SESSION['mony_count']);
	exit;
}
/*------------------------------------------------------ */
//-- 获取商家佣金信息
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'info')
{
    /* 检查权限 */
    //admin_priv('seller_yj_manage');
	
	$smarty->assign('action_link',  array('text' => '返回佣金列表', 'href'=>'seller_commission.php?act=list'));
	
	$id=!empty($_GET['id'])?intval($_GET['id']):0;
	
	$sql="select o.*,u.user_name from ".$GLOBALS['ecs']->table('commission')." AS o LEFT JOIN " .$GLOBALS['ecs']->table('admin_user'). " AS u ON u.seller_id=o.seller_id where id='$id' and o.seller_id='".$_SESSION['seller_id']."'";
	$comm_info=$GLOBALS['db']->getRow($sql);
	
	//上一笔佣金
	$sql = "SELECT MAX(id) FROM " . $ecs->table('commission') . " as o WHERE id < '$comm_info[id]' and o.seller_id='".$_SESSION['seller_id']."'";
	$smarty->assign('prev_id', $db->getOne($sql));
	//下一笔佣金
	$sql = "SELECT MIN(id) FROM " . $ecs->table('commission') . " as o WHERE id > '$comm_info[id]' and o.seller_id='".$_SESSION['seller_id']."'";
	$smarty->assign('next_id', $db->getOne($sql));
	
	if($comm_info['status']>1)
	{
		$comm_info['prev_date']=local_date('Y-m-d H:i',$comm_info['prev_date']);
		$comm_info['curr_date']=local_date('Y-m-d H:i',$comm_info['curr_date']);
		$comm_info['check_date']=local_date('Y-m-d H:i',$comm_info['check_date']);
	}
	else
	{
		//统计总营业额
		$sql="select sum(goods_amount) as number,order_id from " . $GLOBALS['ecs']->table('order_info') ." where  order_status IN ('1','5') AND shipping_status IN ('1','2') AND pay_status IN ('2','1')  and seller_id='".$_SESSION['seller_id']."' and add_time>=".$comm_info['prev_date']." and add_time<=".gmtime();
		$total_turnover=$GLOBALS['db']->getOne($sql);
		//获取商家分成百分比
		$sql="select fencheng from ".$GLOBALS['ecs']->table('user_seller')." where id='".$_SESSION['seller_id']."'";
		$fc=$GLOBALS['db']->getOne($sql);
		
		$comm_info['total_turnover']=round($total_turnover,2);
		$comm_info['commission']=round(($total_turnover*$fc)/100,2);
		$comm_info['check_mony']=round($total_turnover-(($total_turnover*$fc)/100),2);
		$comm_info['prev_date']=local_date('Y-m-d H:i',$comm_info['prev_date']);
		$comm_info['curr_date']=!empty($comm_info['curr_date'])?local_date('Y-m-d H:i',$comm_info['curr_date']):local_date('Y-m-d H:i',gmtime());	
		$comm_info['check_date']=$comm_info['check_date']>0?local_date('Y-m-d H:i',$comm_info['check_date']):'';
	}
	
	//获取入驻商家对应的会员id
	$sql="select user_id from ". $GLOBALS['ecs']->table('user_seller')." where id='".$_SESSION['seller_id']."'";
	$smarty->assign('uid',$GLOBALS['db']->getOne($sql));
	
	$smarty->assign('comm_info',$comm_info);
	
	$smarty->display('seller_comm_info.htm');
}
function export_csv($export_list,$mony_count) {

    $filename = date('YmdHis').".csv";
    header("Content-type:text/csv");
    header("Content-Disposition:attachment;filename=".$filename);
    header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
    header('Expires:0');
    header('Pragma:public');
	echo user_date($export_list,$mony_count);
}
function user_date($result,$mony_count) {
    if(empty($result)) {
        return i("没有符合您要求的数据！^_^");
    }
    $data = i('会员号,时间段,总营业额,佣金,实际结算金额,返佣状态,结算日期,备注'."\n");
    $count = count($result);
    for($i = 0 ; $i < $count ;  $i++) {
		$user_name = i($result[$i]['user_name']);
		$prev_date = i($result[$i]['prev_date']);
		$curr_date = i($result[$i]['curr_date']);
		$total_turnover = i($result[$i]['total_turnover']);
		$commission = i($result[$i]['commission']);
		$check_mony = i($result[$i]['check_mony']);
		$status = i($result[$i]['status']);
		$check_date = i($result[$i]['check_date']);
		$remark = i($result[$i]['remark']);
        $data .= $user_name .','. $prev_date.'——'. $curr_date .','. $total_turnover .','. $commission .','. $check_mony .','.i($status).','. $check_date .','. i($remark).','."\n";
    }
	$data.=' , ,'.'合计：'.$mony_count['total'].','.$mony_count['comm'].','.$mony_count['mony'];
    return $data;
}

function i($strInput) {
	return $strInput;
}
/**
 *  获取佣金列表信息
 * @access  public
 * @param
 *
 * @return void
 */
function comm_list()
{

    $result = get_filter();
    if ($result === false)
    {
        /* 过滤信息 */
        $filter['start_time'] = empty($_REQUEST['start_time']) ? '' : (strpos($_REQUEST['start_time'], '-') > 0 ?  local_strtotime($_REQUEST['start_time']) : $_REQUEST['start_time']);
        $filter['end_time'] = empty($_REQUEST['end_time']) ? '' : (strpos($_REQUEST['end_time'], '-') > 0 ?  local_strtotime($_REQUEST['end_time']) : $_REQUEST['end_time']);
		
		$filter['status'] = empty($_REQUEST['status'])? 0:intval($_REQUEST['status']);

        $where = "WHERE 1 and o.seller_id='".$_SESSION['seller_id']."'";
		
        if ($filter['start_time'])
        {
            $where .= " AND o.prev_date >= '$filter[start_time]'";
        }
        if ($filter['end_time'])
        {
            $where .= " AND o.curr_date <= '$filter[end_time]'";
        }

		if($filter['status'])
		{
			$where .= " AND o.status = '$filter[status]'";
		}
		
		$sql="";

        /* 分页大小 */
        $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);

        if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0)
        {
            $filter['page_size'] = intval($_REQUEST['page_size']);
        }
        elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0)
        {
            $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
        }
        else
        {
            $filter['page_size'] = 15;
        }

        /* 记录总数 */
        if ($filter['user_name'])
        {
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('commission') . " AS o ,".
                   $GLOBALS['ecs']->table('admin_user') . " AS u " . $where;
        }
        else
        {
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('commission') . " AS o ". $where;
        }
		
		
        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;

        /* 查询 */
        $sql = "SELECT o.*,u.add_time,u.user_name".
                " FROM " .$GLOBALS['ecs']->table('commission'). " AS o " .
                " LEFT JOIN " .$GLOBALS['ecs']->table('admin_user'). " AS u ON u.seller_id=o.seller_id ". $where .
                " LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ",$filter[page_size]";
		
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $row = $GLOBALS['db']->getAll($sql);

	//定义小计变量
	$total=0;//营业额小计
	$comm=0;//佣金小计
	$mony=0;//实际结算费用小计
    /* 格式话数据 */
    foreach ($row AS $key => $value)
    {
		if($value['status']>1)
		{
			$row[$key]['prev_date'] = local_date('Y-m-d H:i',$value['prev_date']);
			$row[$key]['curr_date'] = local_date('Y-m-d H:i',$value['curr_date']);
			$row[$key]['check_date'] = local_date('Y-m-d H:i',$value['check_date']);
			$row[$key]['status'] =$value['status']>1?'已结算':'未处理';
			//小计
			$total+=$value['total_turnover'];
			$comm+=$value['commission'];
			$mony+=$value['check_mony'];
		}
		else
		{
			//统计总营业额
			$sql="select sum(goods_amount) as number from " . $GLOBALS['ecs']->table('order_info') ." where  order_status IN ('1','5') AND shipping_status IN ('1','2') AND pay_status IN ('2','1')  and seller_id='".$value['seller_id']."' and add_time>=".$value['prev_date']." and add_time<=".gmtime() ;
			$total_turnover=$GLOBALS['db']->getOne($sql);
			//获取商家分成百分比
			$sql="select fencheng from ".$GLOBALS['ecs']->table('user_seller')." where id='".$value['seller_id']."'";
			$fc=$GLOBALS['db']->getOne($sql);
			
			$row[$key]['total_turnover']=round($total_turnover,2);
			$row[$key]['commission']=round(($total_turnover*$fc)/100,2);
			$row[$key]['check_mony']=round($total_turnover-(($total_turnover*$fc)/100),2);
			$row[$key]['prev_date'] = !empty($value['prev_date'])?local_date('Y-m-d H:i',$value['prev_date']):local_date('Y-m-d H:i',$value['add_time']);
			$row[$key]['curr_date'] = !empty($value['curr_date'])?local_date('Y-m-d H:i',$value['curr_date']):local_date('Y-m-d H:i',gmtime());
			$row[$key]['check_date'] = !empty($value['check_date'])?local_date('Y-m-d H:i',$value['check_date']):'';
			$row[$key]['status'] =$value['status']>1?'已结算':'未处理';
			//小计
			$total+=round($total_turnover,2);
			$comm+=round(($total_turnover*$fc)/100,2);
			$mony+=round($total_turnover-(($total_turnover*$fc)/100),2);
		}
		
    }
	//小计
	$mony_count=array('total'=>$total,'comm'=>$comm,'mony'=>$mony);
	
	$_SESSION['commission']= $row;
	$_SESSION['mony_count']= $mony_count;

    $arr = array('comm_list' => $row,'mony_count'=>$mony_count, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

?>