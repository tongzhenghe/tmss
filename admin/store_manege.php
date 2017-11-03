<?php

/**
 * ECSHOP 管理中心供货商管理
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wanglei $
 * $Id: suppliers.php 15013 2009-05-13 09:31:42Z wanglei $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/*------------------------------------------------------ */
//--商家店铺列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('store_manege');

    /* 查询 */
    $result = seller_store_list();

    /* 模板赋值 */
    $smarty->assign('ur_here', '商家店铺列表'); // 当前导航

    $smarty->assign('full_page', 1); // 翻页参数

    $smarty->assign('seller_store_list',    $result['result']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);
	$smarty->assign('sort_status', '<img src="images/sort_desc.gif">');
	$smarty->assign('sort_apply', '<img src="images/sort_desc.gif">');
	$smarty->assign('sort_is_street', '<img src="images/sort_desc.gif">');

    /* 显示模板 */
    assign_query_info();
    $smarty->display('seller_store_list.htm');
}
/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    /* 检查权限 */
    admin_priv('store_manege');

    $result = seller_store_list();

    $smarty->assign('seller_store_list',    $result['result']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);

    /* 排序标记 */
    $sort_flag  = sort_flag($result['filter']);

    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('seller_store_list.htm'), '',
        array('filter' => $result['filter'], 'page_count' => $result['page_count']));
}
/*------------------------------------------------------ */
//-- 编辑店铺在店铺街的参数
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    admin_priv('store_manege');

    $form_action = 'update';
	//店铺街分类
	$store_category=$db->getAll("select id,cate_name from ".$ecs->table('store_category')." where is_show=1 order by cate_order asc");
	//店铺标签
	$street_tags=$db->getAll("select id,tag_name from ".$ecs->table('street_tags')." where 1 order by tags_order asc");

    $sql = "SELECT id,shop_name,street_logo,street_spjpg,remark,street_cate,street_tags,street_order FROM ".$ecs->table('seller_shopinfo'). " WHERE id='$_REQUEST[id]'";
    $store_info = $db->GetRow($sql);

	$smarty->assign('store_category',  $store_category);
	$smarty->assign('street_tags',  $street_tags);
    $smarty->assign('store',  $store_info);

    $smarty->assign('ur_here', '修改店铺参数');
    $smarty->assign('action_link', array('text' => '返回店铺', 'href'=>'store_manege.php?act=list'));
    $smarty->assign('form_action', $form_action);

    assign_query_info();
    $smarty->display('street_store_info.htm');
}
/*------------------------------------------------------ */
//-- 更新店铺在店铺街的信息
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'update')
{
    admin_priv('store_manege');

	
	$dis_order=!empty($_POST['street_order'])?intval($_POST['street_order']):0;
	
    $sql = "UPDATE " .$ecs->table('seller_shopinfo') . " SET `street_cate` = '$_POST[street_cate]', `street_tags` = '$_POST[street_tags]', `street_order` = '$dis_order' WHERE `id` = '$_POST[id]'";
    $db->query($sql);

    /* 管理员日志 */
    clear_cache_files();

    $lnk[] = array('text' => '返回上一页','href'=>'store_manege.php?act=list');
    sys_msg('更新店铺参数成功', 0, $lnk);
}


/*------------------------------------------------------ */
//-- 修改店铺开启状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'status')
{
    /* 检查权限 */
    admin_priv('store_manege');

    $id = intval($_REQUEST['id']);
    $sql = "SELECT id, status
            FROM " . $ecs->table('seller_shopinfo') . "
            WHERE id = '$id'";
    $store = $db->getRow($sql, TRUE);

    if ($store['id'])
    {
        $store['status'] = $store['status']>0 ? 0 : 1;
        $db->autoExecute($ecs->table('seller_shopinfo'),$store, '', "id = '$id'");
		
        clear_cache_files();
        make_json_result($store['status']);
    }

    exit;
}
/*------------------------------------------------------ */
//-- 修改店铺开启状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'is_street')
{
    /* 检查权限 */
    admin_priv('store_manege');

    $id = intval($_REQUEST['id']);
    $sql = "SELECT id,is_street
            FROM " . $ecs->table('seller_shopinfo') . "
            WHERE id = '$id'";
    $store = $db->getRow($sql, TRUE);

    if ($store['id'])
    {
        $store['is_street'] = $store['is_street']>0 ? 0 : 1;
        $db->autoExecute($ecs->table('seller_shopinfo'),$store, '', "id = '$id'");
		
        clear_cache_files();
        make_json_result($store['is_street']);
    }

    exit;
}

/**
 *  获取入驻商家店铺会员等信息
 *
 * @access  public
 * @param
 *
 * @return void
 */
function seller_store_list()
{
    $result = get_filter();
    if ($result === false)
    {
        $aiax = isset($_GET['is_ajax']) ? $_GET['is_ajax'] : 0;

        /* 过滤信息 */
		$filter['keywords'] = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
        {
            $filter['keywords'] = json_str_iconv($filter['keywords']);
        }
        $filter['sort_by'] = empty($_REQUEST['sort_by']) ? 's.id' : trim($_REQUEST['sort_by']);
        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'ASC' : trim($_REQUEST['sort_order']);

        $where = 'WHERE 1 ';

		if($filter['keywords'])
		{
			$where .="and sh.shop_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
		}

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
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('seller_shopinfo') ." as sh ". $where;
        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;

        /* 查询 */
        $sql = "SELECT sh.id,sh.shop_name,sh.country,sh.province,sh.city,sh.shop_address,sh.kf_tel,s.add_time,u.email,u.user_name,sh.status,sh.apply,sh.is_street,sh.remark,s.id as seller_id,u.user_id
                FROM " . $GLOBALS['ecs']->table("seller_shopinfo") . " as sh left join ".$GLOBALS['ecs']->table("user_seller")." as s on s.id=sh.seller_id left join ".$GLOBALS['ecs']->table("users")." as u on s.user_id=u.user_id ". $where ."
                ORDER BY " . $filter['sort_by'] . " " . $filter['sort_order']. "
                LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ", " . $filter['page_size'] . " ";
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $row = $GLOBALS['db']->getAll($sql);
	if($row)
	{
		foreach($row as $key=>$val)
		{
			$row[$key]['add_time']=local_date('Y-m-d H:i',$val['add_time']);
			$sql = 'SELECT region_name FROM ' . $GLOBALS['ecs']->table('region') ." WHERE region_id in(".$val['province'].",".$val['city'].") order by region_id Asc";
			$address=$GLOBALS['db']->getCol($sql);
			$row[$key]['address']=$address[0].$address[1].$val['shop_address'];	
		}	
	}

    $arr = array('result' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

?>