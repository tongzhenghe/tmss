<?php

/**
 * ECSHOP 公用函数库
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: lib_common.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$store_id=!empty($_GET['sid'])?intval($_GET['sid']):0;

$store=get_seller_store($store_id);
if(!$store)
{
	/* 如果店铺不存在，则返回首页 */
		ecs_header("Location: ./\n");
	
		exit;	
}
elseif(!$store['status'])
{
		show_message('此店铺正在核查中', '返回首页', "index.php", 'error');
}

//获得店铺信息
function get_seller_store($id)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_shopinfo')." where id='$id'";
	$store=$GLOBALS['db']->getRow($sql);
	if($store)
	{
		$sql = 'SELECT region_name FROM ' . $GLOBALS['ecs']->table('region') ." WHERE region_id in(".$store['province'].",".$store['city'].") order by region_id Asc";
		$address=$GLOBALS['db']->getCol($sql);
		$store['address']=$address[0].$address[1];
		$store['shop_logo']=str_replace('../','./',$store['shop_logo']);
		//网站QQ信息
		$sql="select value from ".$GLOBALS['ecs']->table('shop_config')." where id=109 and code='qq'";
	
		$qq_info=$GLOBALS['db']->getOne($sql);
		if($qq_info)
		{
			$store['web_config_qq']=explode(",",$qq_info);	
		}
		
	}

	return $store;
}
//获得店铺头部设置
function get_store_header($seller_id,$store_theme)
{
	$sql="select content from ".$GLOBALS['ecs']->table('seller_shopheader')." where seller_id='$seller_id'  and seller_theme='$store_theme'";
	
	return $GLOBALS['db']->getOne($sql);
}
//获取店铺的背景
function get_store_bg($seller_id,$store_theme)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_shopbg')." where seller_id='$seller_id' and seller_theme='$store_theme'";	
	
	return $GLOBALS['db']->getRow($sql);
}
//获得店铺幻灯片
function get_store_slide($seller_id,$store_theme)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_shopslide')." where seller_id='$seller_id' and is_show=1 and seller_theme='$store_theme' order by img_order ASC";
	$slide=$GLOBALS['db']->getAll($sql);
	if($slide)
	{
		foreach($slide as $key=>$val)
		{
			$slide[$key]['img_url']=str_replace('../','./',$val['img_url']);
		}
		
	}

	return $slide;
}
//获取店铺橱窗和橱窗对应的商品
function get_store_window($seller_id,$store_theme)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_shopwindow')." where seller_id='$seller_id' and seller_theme='$store_theme' order by win_order ASC";	
	
	$window=$GLOBALS['db']->getAll($sql);
	foreach($window as $key=>$win)
	{
		$window[$key]['win_custom']=stripslashes($win['win_custom']);
		if($win['win_type']==1&&!empty($win['win_goods']))
		{
			$sql="select goods_id,goods_sn,goods_name,goods_name_style,goods_thumb,market_price,shop_price,promote_price,is_promote,promote_start_date,promote_end_date from ".$GLOBALS['ecs']->table('goods')." where is_display=1 and seller_id='$seller_id' and goods_id in(".$win['win_goods'].") order by sort_order Asc";
			$goods_list=$GLOBALS['db']->getAll($sql);
			foreach($goods_list as $key2=>$val)
			{
				$goods_list[$key2]['is_promote']=$val['is_promote']?(($val['promote_start_date']<=gmtime())&&(gmtime()<=$val['promote_end_date'])?1:0):0;
			}
			$window[$key]['goods_list']=$goods_list;
		}	
	}

	return $window;
}
//获得店铺导航栏
function get_store_nav($seller_id)
{
	$sql="select * from ".$GLOBALS['ecs']->table('seller_nav')." where seller_id='$seller_id' and is_show=1 order by nav_order ASC";	
	
	$nav=$GLOBALS['db']->getAll($sql);
	foreach($nav as $key=>$val)
	{
		$nav[$key]['nav_img']=str_replace('../','./',$val['nav_img']);
	}
	
	return $nav;
}

//获得店铺的分类
function get_store_cat($cat_id,$seller_id,$store_id)
{
	$child_arr = array();
    $sql = 'SELECT count(*) FROM ' . $GLOBALS['ecs']->table('seller_category') . " WHERE parent_id = '$cat_id' AND is_show = 1 and seller_id='$seller_id'";
    if ($GLOBALS['db']->getOne($sql) || $cat_id == 0)
    {
        $child_sql = 'SELECT seller_cat_id, cat_name, parent_id, is_show,is_text ' .
                'FROM ' . $GLOBALS['ecs']->table('seller_category') .
                "WHERE parent_id = '$cat_id' AND is_show = 1 and seller_id='$seller_id' ORDER BY sort_order ASC, seller_cat_id ASC";
        $res = $GLOBALS['db']->getAll($child_sql);
        foreach ($res AS $row)
        {
            if ($row['is_show'])
			{
               $child_arr[$row['seller_cat_id']]['id']   = $row['seller_cat_id'];
               $child_arr[$row['seller_cat_id']]['name'] = $row['cat_name'];
			   $child_arr[$row['seller_cat_id']]['is_text'] = $row['is_text'];
               $child_arr[$row['seller_cat_id']]['url']  = build_uri('seller_goods', array('cid' => $row['seller_cat_id'],'sid'=>$store_id), $row['cat_name']);

               if (isset($row['seller_cat_id']) != NULL)
               {
                       $child_arr[$row['seller_cat_id']]['child_cat'] = get_store_cat($row['seller_cat_id'],$seller_id,$store_id);
			   }
			}
        }
    }
	
    return $child_arr;
}

/**
 * 获得店铺指定分类的所有商品ID
 *
 * @access  public
 * @param   string $cat_id     分类查询字符串
 * @return  string
 */
function get_seller_cat_goods($cat_id)
{
    $extension_goods_array = '';
    $sql = 'SELECT seller_cat_id FROM ' . $GLOBALS['ecs']->table('seller_category') . " WHERE seller_cat_id='$cat_id' or parent_id='$cat_id'";
    $extension_goods_array = $GLOBALS['db']->getCol($sql);
    return db_create_in($extension_goods_array, 'g.seller_cat_id');
}


?>