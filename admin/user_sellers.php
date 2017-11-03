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

define('SUPPLIERS_ACTION_LIST', 'delivery_view,back_view');
/*------------------------------------------------------ */
//-- 供货商列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('seller_list');

    /* 查询 */
    $result = user_seller_list();

    /* 模板赋值 */
    $smarty->assign('ur_here', '申请商家入驻的会员列表'); // 当前导航

    $smarty->assign('full_page', 1); // 翻页参数

    $smarty->assign('user_seller_list',    $result['result']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);
	$smarty->assign('sort_id', '<img src="images/sort_desc.gif">');
	$smarty->assign('sort_use_fee', '<img src="images/sort_desc.gif">');
	$smarty->assign('sort_deposit', '<img src="images/sort_desc.gif">');
	$smarty->assign('sort_fencheng', '<img src="images/sort_desc.gif">');

    /* 显示模板 */
    assign_query_info();
    $smarty->display('user_seller_list.htm');
}
elseif($_REQUEST['act'] == 's_info')
{
	/* 检查权限 */
    admin_priv('seller_list');
	$u_id=!empty($_GET['uid'])?intval($_GET['uid']):0;
	$id=!empty($_GET['id'])?intval($_GET['id']):0;
	 /* 取出注册扩展字段 */
    $sf_sql = 'SELECT * FROM ' . $ecs->table('seller_fields') . ' WHERE display = 1 ORDER BY dis_order';
    $seller_fields_list = $db->getAll($sf_sql);
	
	//取出会员注册的信息
	$se_sql='SELECT reg_field_id,content FROM ' . $ecs->table('seller_extend_info') . " WHERE user_id = '".$u_id."'";
	$seller_extend_info=$db->getAll($se_sql);
	foreach($seller_fields_list as $key=>$val)
	{
		if(!empty($val['select_options'])&&$val['type']=='select')
		{
			$arr=explode("\n",$val['select_options']);
			
			foreach($arr as $key2=>$val2){
			  if(!$val2)
			  {
				  unset($arr[$key2]);
			  }
			  $arr[$key2]=trim($val2);
			}
		
			$seller_fields_list[$key]['select_options']=$arr;
		}
		
		if($seller_extend_info)
		{
			foreach($seller_extend_info as $val3)
			{
				if($val['id']==$val3['reg_field_id'])
				{
					$seller_fields_list[$key]['content']=trim($val3['content']);
				}		
			}
		}
	}
	$sql="select * from ".$ecs->table('user_seller')." where user_id='$u_id' and id='$id'";
	$user_seller_info=$db->getRow($sql);

	$smarty->assign('user_seller_info',$user_seller_info);
	$smarty->assign('seller_fields_list', $seller_fields_list);
	$smarty->display('sellers_info.htm');
}
elseif($_REQUEST['act']=='u_s_update')
{
	
	/* 检查权限 */
    admin_priv('seller_list');
	$u_id=!empty($_POST['uid'])?intval($_POST['uid']):0;
	$id=!empty($_POST['id'])?intval($_POST['id']):0;
	$is_check=!empty($_POST['is_check'])?intval($_POST['is_check']):0;
	$checkout_type=!empty($_POST['checkout_type'])?intval($_POST['checkout_type']):0;
	$use_fee=!empty($_POST['use_fee'])?floatval($_POST['use_fee']):0;
	$deposit=!empty($_POST['deposit'])?floatval($_POST['deposit']):0;
	$fencheng=!empty($_POST['fencheng'])?floatval($_POST['fencheng']):0;
	$remark=!empty($_POST['remark'])?$_POST['remark']:'';
	if($id)
	{
		$sql="update ".$ecs->table('user_seller')." set is_check='$is_check',checkout_type='$checkout_type',use_fee='$use_fee',deposit='$deposit',fencheng='$fencheng',remark='$remark' where user_id='$u_id' and id='$id'";
		
		if($db->query($sql))
		{
			//入驻商家成为管理员
			admin_seller($id);
			//将商家列入佣金表
			insert_commission($id);
			$lnk[] = array('text' => '返回列表',    'href'=>'user_sellers.php?act=list');
			sys_msg('编辑商家信息成功', 0, $lnk);	
		}	
	}
	else
	{
			$lnk[] = array('text' => '返回列表',    'href'=>'user_sellers.php?act=list');
			sys_msg('没有对应信息', 0, $lnk);	
	}

}
/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $result = user_seller_list();

    $smarty->assign('user_seller_list',    $result['result']);
    $smarty->assign('filter',       $result['filter']);
    $smarty->assign('record_count', $result['record_count']);
    $smarty->assign('page_count',   $result['page_count']);

    /* 排序标记 */
    $sort_flag  = sort_flag($result['filter']);

    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('user_seller_list.htm'), '',
        array('filter' => $result['filter'], 'page_count' => $result['page_count']));
}

/*------------------------------------------------------ */
//-- 列表页编辑平台使用费
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_use_fee')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $id     = intval($_POST['id']);
    $use_fee  = floatval(trim($_POST['val']));

   /* 保存供货商信息 */
        $sql = "UPDATE " . $ecs->table('user_seller') ." SET use_fee = '$use_fee' WHERE id = '$id'";
        if ($result = $db->query($sql))
        {
            /* 记日志 */
            admin_log($use_fee, 'edit', 'user_seller');

            clear_cache_files();

            make_json_result(stripslashes($use_fee));
        }
        else
        {
            make_json_result(sprintf($_LANG['agency_edit_fail'], $use_fee));
        }
}
/*------------------------------------------------------ */
//-- 列表页编辑商家保证金
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_deposit')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $id     = intval($_POST['id']);
    $deposit  = floatval(trim($_POST['val']));

   /* 保存供货商信息 */
        $sql = "UPDATE " . $ecs->table('user_seller') ." SET deposit = '$deposit' WHERE id = '$id'";
        if ($result = $db->query($sql))
        {
            /* 记日志 */
            admin_log($deposit, 'edit', 'user_seller');

            clear_cache_files();

            make_json_result(stripslashes($deposit));
        }
        else
        {
            make_json_result(sprintf($_LANG['agency_edit_fail'], $deposit));
        }
}
/*------------------------------------------------------ */
//-- 列表页编辑商家保证金
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit_fencheng')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $id     = intval($_POST['id']);
    $fencheng  = floatval(trim($_POST['val']));

   /* 保存供货商信息 */
        $sql = "UPDATE " . $ecs->table('user_seller') ." SET fencheng = '$fencheng' WHERE id = '$id'";
        if ($result = $db->query($sql))
        {
            /* 记日志 */
            admin_log($fencheng, 'edit', 'user_seller');

            clear_cache_files();

            make_json_result(stripslashes($fencheng));
        }
        else
        {
            make_json_result(sprintf($_LANG['agency_edit_fail'], $fencheng));
        }
}
/*------------------------------------------------------ */
//-- 修改供货商状态
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'is_check')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $id = intval($_REQUEST['id']);
    $sql = "SELECT id, is_check
            FROM " . $ecs->table('user_seller') . "
            WHERE id = '$id'";
    $seller = $db->getRow($sql, TRUE);

    if ($seller['id'])
    {
        $seller['is_check'] = $seller['is_check']<>1 ? 1 : 2;
        $db->autoExecute($ecs->table('user_seller'),$seller, '', "id = '$id'");
		//入驻商家成为管理员
		admin_seller($id);
		
        clear_cache_files();
        make_json_result($seller['is_check']);
    }

    exit;
}
/*------------------------------------------------------ */
//-- 删除入驻商家
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'remove')
{
    /* 检查权限 */
    admin_priv('seller_list');

    $id = intval($_REQUEST['id']);
    $sql = "SELECT * FROM ".$ecs->table('user_seller')." WHERE id = '$id'";
    $seller = $db->getRow($sql, TRUE);

    if ($seller['id'])
    {
        //获取商家所有订单id
		$sql="select order_id from ".$ecs->table('order_info')." where seller_id='".$seller['id']."'";
		$orders=$db->getCol($sql);
		//删除订单商品
		$sql="delete from ".$ecs->table('order_goods')." where order_id ".db_create_in($orders);
		$db->query($sql);
		//删除退货单
		//$sql="delete from ".$ecs->table('order_return')." where order_id ".db_create_in($orders);
		//$db->query($sql);
		//删除订单操作日志
		$sql="delete from ".$ecs->table('order_action')." where order_id ".db_create_in($orders);
		$db->query($sql);
		$sql="delete from ".$ecs->table('back_order')." where order_id ".db_create_in($orders);
		$db->query($sql);
		
		//$sql="delete from ".$ecs->table('baitiao_log')." where order_id ".db_create_in($orders);
		//$db->query($sql);
		//$sql="delete from ".$ecs->table('comment')." where order_id ".db_create_in($orders);
		//$db->query($sql);
		$sql="delete from ".$ecs->table('delivery_order')." where order_id ".db_create_in($orders);
		$db->query($sql);
		$sql="delete from ".$ecs->table('feedback')." where order_id ".db_create_in($orders);
		$db->query($sql);
		$sql="delete from ".$ecs->table('pay_log')." where order_id ".db_create_in($orders);
		$db->query($sql);
		//$sql="delete from ".$ecs->table('single')." where order_id ".db_create_in($orders);
		//$db->query($sql);
		//删除订单
		$sql="delete from ".$ecs->table('order_info')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//获得商家所有商品id
		$sql="select goods_id from ".$ecs->table('goods')." where seller_id='".$seller['id']."'";
		$goods_ids=$db->getCol($sql);
		//删除商家与商品有关的信息
		$sql="delete from ".$ecs->table('goods_activity')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('goods_article')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('goods_attr')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('goods_cat')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('group_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('back_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('booking_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('cart')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('collect_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('collect_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('delivery_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('exchange_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('link_goods')." where goods_id ".db_create_in($goods_ids)." or link_goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('member_price')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('package_goods')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('products')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		//$sql="delete from ".$ecs->table('sale_notice')." where goods_id ".db_create_in($goods_ids);
		//$db->query($sql);
		$sql="delete from ".$ecs->table('tag')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('virtual_card')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('volume_price')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		$sql="delete from ".$ecs->table('wholesale')." where goods_id ".db_create_in($goods_ids);
		$db->query($sql);
		/* 取得商品信息 */
    	$sql = "SELECT goods_id, goods_name, is_delete, is_real, goods_thumb,goods_img, original_img FROM ".$ecs->table('goods')." WHERE seller_id='".$seller['id']."'";
		$goods_infos = $db->getAll($sql);
		foreach($goods_infos as $goods)
		{
			/* 删除商品图片和轮播图片 */
			if (!empty($goods['goods_thumb']))
			{
				@unlink('../' . $goods['goods_thumb']);
			}
			if (!empty($goods['goods_img']))
			{
				@unlink('../' . $goods['goods_img']);
			}
			if (!empty($goods['original_img']))
			{
				@unlink('../' . $goods['original_img']);
			}
		}
		 
		//删除商家商品相册所有图片
		$sql="select img_url,thumb_url,img_original from ".$ecs->table('goods_gallery')." where goods_id ".db_create_in($goods_ids);
		$goods_imgs=$db->getAll($sql);
		foreach($goods_imgs as $goods)
		{
			/* 删除商品图片和轮播图片 */
			if (!empty($goods['img_url']))
			{
				@unlink('../' . $goods['img_url']);
			}
			if (!empty($goods['thumb_url']))
			{
				@unlink('../' . $goods['thumb_url']);
			}
			if (!empty($goods['img_original']))
			{
				@unlink('../' . $goods['img_original']);
			}
		}
		
		//删除商家所有商品
		$sql="delete from ".$ecs->table('goods')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//删除商家佣金列表
		$sql="delete from ".$ecs->table('commission')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//删除商品类型
		$sql="delete from ".$ecs->table('goods_type')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//删除商家店铺信息
		//删除商家分类图片
		$sql="select cat_img from ".$ecs->table('seller_category')." where seller_id='".$seller['id']."'";
		$cat_imgs=$db->getAll($sql);
		if($cat_imgs)
		{
			foreach($cat_imgs as $cat_img)
			{
				if(!empty($cat_img))
				{
					@unlink($cat_img);
				}	
			}
		}
		
		//删除商家分类
		$sql="delete from ".$ecs->table('seller_category')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		//删除导航图片
		$sql="select nav_img from ".$ecs->table('seller_nav')." where seller_id='".$seller['id']."'";
		$nav_imgs=$db->getAll($sql);
		if($nav_imgs)
		{
			foreach($nav_imgs as $img)
			{
				if(!empty($img))
				{
					@unlink($img);
				}	
			}	
		}
		//删除导航
		$sql="delete from ".$ecs->table('seller_nav')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		//删除商家店铺背景图片
		$sql="select bgimg from ".$ecs->table('seller_shopbg')." where seller_id='".$seller['id']."'";
		$bg_imgs=$db->getAll($sql);
		if($bg_imgs)
		{
			foreach($bg_imgs as $img)
			{
				if(!empty($img))
				{
					@unlink('../'.$img);
				}	
			}
		}
		$sql="delete from ".$ecs->table('seller_shopbg')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		$sql="delete from ".$ecs->table('seller_shopheader')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//删除店铺幻灯片图片
		$sql="select img_url from ".$ecs->table('seller_shopslide')." where seller_id='".$seller['id']."'";
		$slide_imgs=$db->getAll($sql);
		if($slide_imgs)
		{
			foreach($slide_imgs as $img)
			{
				if(!empty($img)&&substr_count($img,'../')>0)
				{
					@unlink($img);
				}	
			}	
		}
		$sql="delete from ".$ecs->table('seller_shopslide')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		$sql="delete from ".$ecs->table('seller_shopwindow')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		//删除商家店铺信息图片
		$sql="select shop_logo,street_logo,street_spjpg from ".$ecs->table('seller_shopinfo')." where seller_id='".$seller['id']."'";
		$shop_info=$db->getRow($sql);
		if($shop_info)
		{
			/*删除店铺图片*/
			if (!empty($shop_info['shop_logo']))
			{
				@unlink($shop_info['shop_logo']);
			}
			if (!empty($shop_info['street_logo']))
			{
				@unlink($shop_info['street_logo']);
			}
			if (!empty($shop_info['street_spjpg']))
			{
				@unlink($shop_info['street_spjpg']);
			}
		}
		$sql="delete from ".$ecs->table('seller_shopinfo')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
		//获得商家的会员id
		$sql="select user_id from ".$ecs->table('user_seller')." where id='".$seller['id']."'";
		$user_id=$db->getOne($sql);
		//删除商家入住注册信息
		$sql="delete from ".$ecs->table('seller_extend_info')." where user_id='$user_id'";
		$db->query($sql);
		//删除商家
		$sql="delete from ".$ecs->table('user_seller')." where id='".$seller['id']."'";
		$db->query($sql);
		//删除商家管理员
		$sql="delete from ".$ecs->table('admin_user')." where seller_id='".$seller['id']."'";
		$db->query($sql);
		
        /* 记日志 */
        admin_log('删除入驻商', 'remove', 'sellers');

        /* 清除缓存 */
        clear_cache_files();
    }

    $url = 'user_sellers.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
    ecs_header("Location: $url\n");

    exit;
}
/**
 *  获取入住商列表信息
 *
 * @access  public
 * @param
 *
 * @return void
 */
function user_seller_list()
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
		
		if(isset($_REQUEST['is_check'])&&intval($_REQUEST['is_check'])<3)
		{
			$is_check=intval($_REQUEST['is_check']);
			$where .=" and s.is_check='$is_check' ";	
		}
		
		if($filter['keywords'])
		{
			$where .="and u.user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
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
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('user_seller') ." as s left join ".$GLOBALS['ecs']->table("users")." as u on u.user_id=s.user_id ". $where;
        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;

        /* 查询 */
        $sql = "SELECT s.id,s.is_check,s.use_fee,s.deposit,s.checkout_type,s.fencheng,s.remark,s.add_time,u.user_name,u.email,u.user_id
                FROM " . $GLOBALS['ecs']->table("user_seller") . " as s left join ".$GLOBALS['ecs']->table("users")." as u on u.user_id=s.user_id $where
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
		}	
	}

    $arr = array('result' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}
//入驻商家成为管理员
function admin_seller($seller_id)
{
	$sql="select seller_id from ".$GLOBALS['ecs']->table("admin_user")." where seller_id='$seller_id'";
	if(!$GLOBALS['db']->getOne($sql))
	{
		$sql="select u.user_name,u.password,u.ec_salt,u.email from ".$GLOBALS['ecs']->table("users")." as u left join ".$GLOBALS['ecs']->table("user_seller")." as s on u.user_id=s.user_id where s.id='$seller_id'";
		$user_info=$GLOBALS['db']->getRow($sql);
		
		if($user_info)
		{
			$admin_info=array(
				'user_name'=>$user_info['user_name'],
				'email'=>$user_info['email'],
				'password'=>$user_info['password'],
				'ec_salt'=>$user_info['ec_salt'],
				'add_time'=>gmtime(),
				'action_list'=>'goods_manage,remove_back,goods_auto,picture_batch,goods_export,goods_batch,order_os_edit,order_ps_edit,order_ss_edit,order_view,order_view_finished,sale_order_stats,booking,delivery_view,back_view,sale_order_stats',
				'nav_list'=>'商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list',
				'agency_id'=>'0',
				'seller_id'=>$seller_id
			);
			$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('admin_user'),$admin_info);	
		}
	}
}
//将商家列入佣金表
function insert_commission($id)
{
	$sql="select count(id) from ".$GLOBALS['ecs']->table("commission")." where seller_id='$id'";
	$count=$GLOBALS['db']->getOne($sql);
	if($count<=0)
	{
		$sql="insert into ".$GLOBALS['ecs']->table("commission")." (`seller_id`, `prev_date`) values ('$id',".gmtime().")";
		$GLOBALS['db']->query($sql);
	}
}

?>