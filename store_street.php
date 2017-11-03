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

	$cate_id=!empty($_GET['cat'])?intval($_GET['cat']):0;
	$page=intval($_REQUEST['page'])>0?intval($_REQUEST['page']):1;
	$street_stores=get_street_stores($cate_id,$page);
	
	$smarty->assign('pager', $street_stores['pager']);
	$smarty->assign('store_cate',get_store_cate());
	$smarty->assign('street_stores',$street_stores['result']);
	$smarty->assign('recom_cate_store',get_recomm_store(1));
	$smarty->assign('categories',get_categories_tree()); // 分类树
    $smarty->display('store_street.dwt');
}

//获得店铺街店铺
function get_street_stores($cate_id=0,$page=1,$size=15)
{
	if($cate_id)
	{
		$sql="select id from ".$GLOBALS['ecs']->table('store_category')." where id='$cate_id'";
		$cate_id=$GLOBALS['db']->getOne($sql);
		if($cate_id)
		{
			$where=" and sh.street_cate='$cate_id' ";
		}	
	}
	/* 获得符合条件的店铺总数 */
    $sql="select count(sh.id) from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where;
    $count = $GLOBALS['db']->getOne($sql);

    $max_page = ($count> 0) ? ceil($count / $size) : 1;

    if ($page > $max_page)
    {
        $page = $max_page;
    }

	 $sql="select sh.id,sh.shop_name,sh.street_logo,sh.street_spjpg,sh.shop_title,st.tag_name from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where." order by sh.street_order desc";

	 $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page-1) * $size);
	 $arr = array();
	 while ($row = $GLOBALS['db']->FetchRow($res))
	 {
		$arr[$row['id']]['id']=$row['id'];
		$arr[$row['id']]['shop_name']=$row['shop_name'];
		$arr[$row['id']]['street_logo']=str_replace('../','./',$row['street_logo']);
		$arr[$row['id']]['street_spjpg']=str_replace('../','./',$row['street_spjpg']);
		$arr[$row['id']]['shop_title']=$row['shop_title'];
		$arr[$row['id']]['tag_name']=$row['tag_name'];
	 }

	 $pager['search'] = array('cat'   => $cate_id);
			
	 $pager = get_pager('store_street.php', $pager['search'], $count, $page, $size);
	
	 $street_stores=array('pager'=>$pager,'result'=>$arr);
	 
	 return $street_stores;
}

//获得店铺街分类
function get_store_cate($is_recom=0)
{
	if($is_recom)
	{
		$where=" and is_recom='$is_recom' order by cate_order asc limit 0,7";	
	}
	$sql="select * from ".$GLOBALS['ecs']->table('store_category')." where is_show=1 ".$where;
	return $GLOBALS['db']->getAll($sql);	
}
//获得推荐的分类店铺
function get_recomm_store()
{
	$cate_store=array();
	$store_cate=get_store_cate(1);

	foreach($store_cate as $key=>$val)
	{
		$sql="select sh.id,sh.shop_name,sh.street_logo from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh where sh.street_cate='".$val['id']."' and sh.is_street=1 ";

		$stores=$GLOBALS['db']->getAll($sql);
		if($stores)
		{
			foreach($stores as $k=>$store)
			{
				$stores[$k]['street_logo']=str_replace('../','./',$store['street_logo']);
			}
			$cate_store[$key]['stores']=$stores;
			$cate_store[$key]['cate_name']=$val['cate_name'];
		}
		 
	}
	
	return $cate_store;
}

?>