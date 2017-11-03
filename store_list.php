<?php

/**
 * ECSHOP 店铺街列表
 * ============================================================================
 * ecshop 模板堂 
 * @author: Leah 
 * @since: 2013/10/12
 */
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$act = !isset($_REQUEST['act']) ? 'list' : $_REQUEST['act'];
assign_template();
/**
 * 商家店铺页面
 */
if($act == 'list') {

	$keyword=!empty($_GET['keyword'])?trim($_GET['keyword']):'';
	$page=intval($_REQUEST['page'])>0?intval($_REQUEST['page']):1;
	$store_list=get_stores($keyword,$page);
	
	$smarty->assign('pager', $store_list['pager']);
	$smarty->assign('store_list',$store_list['result']);
	$smarty->assign('categories',get_categories_tree()); // 分类树
    $smarty->display('store_list.dwt');
}

//获得店铺街店铺
function get_stores($keyword,$page=1,$size=20)
{
	if(!empty($keyword))
	{
		$where=" and sh.shop_keyword like '%$keyword%' ";
	}
	
	/* 获得符合条件的店铺总数 */
    $sql="select count(sh.id) from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh where sh.status=1 ".$where;
    $count = $GLOBALS['db']->getOne($sql);

    $max_page = ($count> 0) ? ceil($count / $size) : 1;

    if ($page > $max_page)
    {
        $page = $max_page;
    }

	 $sql="select sh.id,sh.shop_name,sh.street_logo,sh.street_spjpg,sh.shop_title from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh where sh.status=1 ".$where;

	 $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page-1) * $size);
	 $arr = array();
	 while ($row = $GLOBALS['db']->FetchRow($res))
	 {
		$arr[$row['id']]['id']=$row['id'];
		$arr[$row['id']]['shop_name']=$row['shop_name'];
		$arr[$row['id']]['street_logo']=str_replace('../','./',$row['street_logo']);
		$arr[$row['id']]['street_spjpg']=str_replace('../','./',$row['street_spjpg']);
		$arr[$row['id']]['shop_title']=$row['shop_title'];
	 }

	 $pager['search'] = array('keyword'   => $keyword);
			
	 $pager = get_pager('store_list.php', $pager['search'], $count, $page, $size);

	
	 $store_list=array('pager'=>$pager,'result'=>$arr);
	 
	 return $store_list;
}

?>