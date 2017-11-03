<?php

/**
 * ECSHOP 动态内容函数库
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用
 * ============================================================================
 * $Author: liubo $
 * $Id: lib_insert.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
/**
 * 与浏览记录相关的商品
 * int $limit 调用数量
 * return $goods
 */
function insert_browse_related()
{

	if (!empty($_COOKIE['ECS']['history']))
    {
		$where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
		$sql   = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
		$res = $GLOBALS['db']->getAll($sql);
		foreach($res as $row)
		{
			$arr[] = $row['cat_id'];
		}
		if(!empty($arr[0]))
		{
			$arr = array_flip(array_flip($arr));		
			$where = implode(" , ",$arr);
			$sql = 'SELECT * FROM '.$GLOBALS['ecs']->table('goods').' WHERE cat_id=('.$where.') ORDER BY RAND() LIMIT '.$limit;
	
			$sql = 'SELECT g.goods_id,g.cat_id, g.goods_name, g.market_price, g.shop_price AS org_price, ' .
					"IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
				   'g.promote_price, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_img ' .
				"FROM " . $GLOBALS['ecs']->table('goods') . ' AS g '.
				"LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
						"ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
				'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND '.
					"g.is_delete = 0 AND cat_id IN (".$where.") AND g.goods_id NOT IN (".$_COOKIE['ECS']['history'].") ORDER BY RAND() LIMIT 25 ";
			
			$res = $GLOBALS['db']->getAll($sql);
			$str = '';
			$goods = array();
			foreach ($res AS $idx => $row)
			{
				if ($row['promote_price'] > 0)
				{
					$promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
					$goods[$idx]['shop_price'] = $promote_price > 0 ? price_format($promote_price) : '';
				}
				else
				{
					$goods[$idx]['shop_price'] = price_format($row['shop_price']);
				}
				
			
				
				
				$goods[$idx]['id']           = $row['goods_id'];
				$goods[$idx]['name']         = $row['goods_name'];
				$goods[$idx]['brief']        = $row['goods_brief'];
				$goods[$idx]['market_price'] = $row['market_price'];
				$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];			
				$goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
				$goods[$idx]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
				$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);
			
				$str .= ' <li>
					<div class="p-img"><a target="_blank" title="'.$goods[$idx]['name'].'" href="'.$goods[$idx]['url'].'"><img height="130" width="130" alt="" src="'.$goods[$idx]['thumb'].'"></a></div>
					<div class="p-name"><a target="_blank" title="'.$goods[$idx]['name'].'" href="'.$goods[$idx]['url'].'">'.$goods[$idx]['short_name'].'</a></div>
			
					<div class="p-price"><strong class="J-p-718168">'.$goods[$idx]['shop_price'].'</strong></div>
				  </li>';
				  
				
			}
		}
		return $str;
	}
}
function insert_browse_related_index()
{
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

	if (!empty($_COOKIE['ECS']['history']))
    {
		$where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
		$sql   = 'SELECT cat_id FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
		$res = $GLOBALS['db']->getAll($sql);
		foreach($res as $row)
		{
			$arr[] = $row['cat_id'];
		}
		if(!empty($arr[0]))
		{
			$arr = array_flip(array_flip($arr));		
			$where = implode(" , ",$arr);
			$sql = 'SELECT * FROM '.$GLOBALS['ecs']->table('goods').' WHERE cat_id=('.$where.') ORDER BY RAND() LIMIT '.$limit;
	
			$sql = 'SELECT g.goods_id,g.cat_id, g.goods_name, g.market_price, g.shop_price AS org_price, ' .
					"IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
				   'g.promote_price, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_img ' .
				"FROM " . $GLOBALS['ecs']->table('goods') . ' AS g '.
				"LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
						"ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
				'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND '.
					"g.is_delete = 0 AND cat_id IN (".$where.") AND g.goods_id NOT IN (".$_COOKIE['ECS']['history'].") ORDER BY RAND() LIMIT 18 ";
			
			$res = $GLOBALS['db']->getAll($sql);
			$str = '';
			$goods = array();
			foreach ($res AS $idx => $row)
			{
				if ($row['promote_price'] > 0)
				{
					$promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
					$goods[$idx]['shop_price'] = $promote_price > 0 ? price_format($promote_price) : '';
				}
				else
				{
					$goods[$idx]['shop_price'] = price_format($row['shop_price']);
				}
				
			
				
				
				$goods[$idx]['id']           = $row['goods_id'];
				$goods[$idx]['name']         = $row['goods_name'];
				$goods[$idx]['brief']        = $row['goods_brief'];
				$goods[$idx]['market_price'] = $row['market_price'];
				$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];			
				$goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
				$goods[$idx]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
				$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);
			
				
				
			}
		}
		$GLOBALS['smarty']->assign('goodsList',$goods);
		$val = $GLOBALS['smarty']->fetch('library/related_index.lbi');  
   		$GLOBALS['smarty']->caching = $need_cache;
		return $val;
	}
}
function insert_ads_pro($arr)
{
	$arr['cat_name'];
	$arr['type'];
	$ad_name = $arr['cat_name'].$arr['type'];

	$time = gmtime();
    if (!empty($ad_name))
    {
        $sql  = 'SELECT a.ad_id, a.position_id, a.media_type, a.ad_link, a.ad_code, a.ad_name, a.link_man, a.link_email, p.position_name, p.ad_width, ' .
                    'p.ad_height, p.position_style, RAND() AS rnd ' .
                'FROM ' . $GLOBALS['ecs']->table('ad') . ' AS a '.
                'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position') . ' AS p ON a.position_id = p.position_id ' .
                "WHERE enabled = 1 AND start_time <= '" . $time . "' AND end_time >= '" . $time . "' ".
                    "AND a.ad_name = '" . $ad_name . "' " .
                'ORDER BY a.ad_id ';
				
				
        $row = $GLOBALS['db']->GetRow($sql);
    }


	$src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ? DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
	$row["ad_link"] = "affiche.php?ad_id=$row[ad_id]&amp;uri=".urlencode($row["ad_link"]);

	
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

	if($row['position_name'] == "生活橱窗广告位")
	{
		$GLOBALS['smarty']->assign('pName','displayW');
	}
	else
	{
		$GLOBALS['smarty']->assign('pName','default');
	}

	
    $GLOBALS['smarty']->assign('ad', $row);
	$GLOBALS['smarty']->assign('src', $src);
	
	
	
    $val = $GLOBALS['smarty']->fetch('library/ads_pro.lbi');  
    $GLOBALS['smarty']->caching = $need_cache;
	return $val;

}
/**
 * 获得查询次数以及查询时间
 *
 * @access  public
 * @return  string
 */
function insert_query_info()
{
    if ($GLOBALS['db']->queryTime == '')
    {
        $query_time = 0;
    }
    else
    {
        if (PHP_VERSION >= '5.0.0')
        {
            $query_time = number_format(microtime(true) - $GLOBALS['db']->queryTime, 6);
        }
        else
        {
            list($now_usec, $now_sec)     = explode(' ', microtime());
            list($start_usec, $start_sec) = explode(' ', $GLOBALS['db']->queryTime);
            $query_time = number_format(($now_sec - $start_sec) + ($now_usec - $start_usec), 6);
        }
    }

    /* 内存占用情况 */
    if ($GLOBALS['_LANG']['memory_info'] && function_exists('memory_get_usage'))
    {
        $memory_usage = sprintf($GLOBALS['_LANG']['memory_info'], memory_get_usage() / 1048576);
    }
    else
    {
        $memory_usage = '';
    }

    /* 是否启用了 gzip */
    $gzip_enabled = gzip_enabled() ? $GLOBALS['_LANG']['gzip_enabled'] : $GLOBALS['_LANG']['gzip_disabled'];

    $online_count = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('sessions'));

    /* 加入触发cron代码 */
    $cron_method = empty($GLOBALS['_CFG']['cron_method']) ? '<img src="api/cron.php?t=' . gmtime() . '" alt="" style="width:0px;height:0px;" />' : '';

    return sprintf($GLOBALS['_LANG']['query_info'], $GLOBALS['db']->queryCount, $query_time, $online_count) . $gzip_enabled . $memory_usage . $cron_method;
}

/**
 * 调用浏览历史
 *
 * @access  public
 * @return  string
 */
function insert_history()
{
    $str = '';
    if (!empty($_COOKIE['ECS']['history']))
    {
        $where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
        $sql   = 'SELECT goods_id, promote_price, goods_name, goods_thumb, shop_price FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
        $query = $GLOBALS['db']->query($sql);
        $res = array();
        while ($row = $GLOBALS['db']->fetch_array($query))
        {
            $goods['goods_id'] = $row['goods_id'];
            $goods['goods_name'] = $row['goods_name'];
            $goods['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
			if ($row['promote_price'] > 0)
			{
				$goods['shop_price'] = price_format($row['promote_price']);
			}
			else
			{
            	$goods['shop_price'] = price_format($row['shop_price']);
			}
            $goods['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
			
			$str .= '<li>
              <div class="p-img"><a target="_blank" title="'.$goods['goods_name'].'" href="'.$goods['url'].'"><img height="50" width="50" alt="" src="'.$goods['goods_thumb'].'"></a></div>
              <div class="p-name"><a target="_blank" title="'.$goods['goods_name'].'" href="'.$goods['url'].'">'.$goods['short_name'].'</a></div>
              <div class="p-price"><strong class="J-p-1044476">'.$goods['shop_price'].'</strong></div>
            </li>';

        }
		
		$str .= '<li class="all-recent" style="text-align:right;padding:5px 0;"><a href="javascript:void(0);" onclick="clear_history()" style="color:#005ea7;">清除浏览历史 <span style="font-family:simsun;">&gt;</span></a></li>';

    }
    return $str;
}

/**
 * 调用浏览历史
 *
 * @access  public
 * @return  string
 */
function insert_history2()
{
    $str = '';
    if (!empty($_COOKIE['ECS']['history']))
    {
        $where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
        $sql   = 'SELECT goods_id, goods_name, goods_thumb, shop_price,promote_price FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
        $query = $GLOBALS['db']->query($sql);
        $res = array();
		
        while ($row = $GLOBALS['db']->fetch_array($query))
        {
            $goods['goods_id'] = $row['goods_id'];
            $goods['goods_name'] = $row['goods_name'];
            $goods['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
           if ($row['promote_price'] > 0)
			{
				$goods['shop_price'] = price_format($row['promote_price']);
			}
			else
			{
            	$goods['shop_price'] = price_format($row['shop_price']);
			}
            $goods['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
			
			$str .= '<div class="item"><a href="'.$goods['url'].'" title="'.$goods['goods_name'].'"><img src="'.$goods['goods_thumb'].'" width="50" height="50"></a></div>';

	
        }
    }

    return $str;
}

/**
 * 调用浏览历史
 *
 * @access  public
 * @return  string
 */
function insert_history_user()
{
    $str = '';
    if (!empty($_COOKIE['ECS']['history']))
    {
        $where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
        $sql   = 'SELECT goods_id, goods_name, goods_thumb, shop_price,promote_price FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
        $query = $GLOBALS['db']->query($sql);
        $res = array();
		
        while ($row = $GLOBALS['db']->fetch_array($query))
        {
            $goods['goods_id'] = $row['goods_id'];
            $goods['goods_name'] = $row['goods_name'];
            $goods['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
           if ($row['promote_price'] > 0)
			{
				$goods['shop_price'] = price_format($row['promote_price']);
			}
			else
			{
            	$goods['shop_price'] = price_format($row['shop_price']);
			}
            $goods['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
			
			$str .= '<li><div class="p-img"><a href="'.$goods['url'].'" title="'.$goods['goods_name'].'"><img src="'.$goods['goods_thumb'].'" width="144" height="144"></a></div><div class="p-price">'.$goods['shop_price'].'</div></li>';
        }
    }

    return $str;
}

/**
 * 调用购物车信息
 *
 * @access  public
 * @return  string
 */
function insert_cart_info()
{
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }
	
	$sql = 'SELECT c.rec_id,c.goods_id,c.goods_price,c.goods_number,c.goods_name,c.goods_attr,g.goods_thumb ' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') . ' AS c '.
		   " LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON c.goods_id = g.goods_id " .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $res = $GLOBALS['db']->GetAll($sql);
	
	foreach($res as $idx => $row)
	{
		$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);	
		$goods[$idx]['id']           = $row['goods_id'];
		$goods[$idx]['rec_id']           = $row['rec_id'];
		$goods[$idx]['name']         = $row['goods_name'];
		$goods[$idx]['goods_number']         = $row['goods_number'];
		$goods[$idx]['goods_attr']         = $row['goods_attr'];
		$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$goods[$idx]['shop_price']   = $row['goods_price'];
		$goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
	}
	
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;
	$GLOBALS['smarty']->assign('number', $number);
	$GLOBALS['smarty']->assign('amount', $amount);
	$GLOBALS['smarty']->assign('cart_list', $goods);

    $val = $GLOBALS['smarty']->fetch('library/cart_info.lbi');  
    $GLOBALS['smarty']->caching = $need_cache;
	return $val;
}

/**
 * 调用指定的广告位的广告
 *
 * @access  public
 * @param   integer $id     广告位ID
 * @param   integer $num    广告数量
 * @return  string
 */
function insert_ads($arr)
{
    static $static_res = NULL;

    $time = gmtime();
    if (!empty($arr['num']) && $arr['num'] != 1)
    {
        $sql  = 'SELECT a.ad_id, a.position_id, a.media_type, a.ad_link, a.ad_code, a.ad_name, p.position_name, p.ad_width, ' .
                    'p.ad_height, p.position_style, RAND() AS rnd ' .
                'FROM ' . $GLOBALS['ecs']->table('ad') . ' AS a '.
                'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position') . ' AS p ON a.position_id = p.position_id ' .
                "WHERE enabled = 1 AND start_time <= '" . $time . "' AND end_time >= '" . $time . "' ".
                    "AND a.position_id = '" . $arr['id'] . "' " .
                'ORDER BY rnd LIMIT ' . $arr['num'];
        $res = $GLOBALS['db']->GetAll($sql);
    }
    else
    {
        if ($static_res[$arr['id']] === NULL)
        {
            $sql  = 'SELECT a.ad_id, a.position_id, a.media_type, a.ad_link, a.ad_code, a.ad_name, p.position_name, p.ad_width, '.
                        'p.ad_height, p.position_style, RAND() AS rnd ' .
                    'FROM ' . $GLOBALS['ecs']->table('ad') . ' AS a '.
                    'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position') . ' AS p ON a.position_id = p.position_id ' .
                    "WHERE enabled = 1 AND a.position_id = '" . $arr['id'] .
                        "' AND start_time <= '" . $time . "' AND end_time >= '" . $time . "' " .
                    'ORDER BY rnd LIMIT 1';
            $static_res[$arr['id']] = $GLOBALS['db']->GetAll($sql);
        }
        $res = $static_res[$arr['id']];
    }
    $ads = array();
    $position_style = '';

    foreach ($res AS $row)
    {
        if ($row['position_id'] != $arr['id'])
        {
            continue;
        }
        $position_style = $row['position_style'];
		
		if($row['position_name'] == '首页幻灯片下方广告位')
		{
			
			$src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ?
							DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
							
			$ads[] = '<a target="_blank" href="affiche.php?ad_id='.$row[ad_id].'&amp;uri='.urlencode($row["ad_link"]).'">            
			<img width="'.$row['ad_width'].'" height="'.$row[ad_height].'" src="images/blank.gif"
			class="loading-style2" style="background:url('.$src.') center 0 no-repeat #fff;" border="0"></a>';
	
		}
		else
		{
			switch ($row['media_type'])
			{
				case 0: // 图片广告
					$src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ?
							DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
					$ads[] = "<a href='affiche.php?ad_id=$row[ad_id]&amp;uri=" .urlencode($row["ad_link"]). "'
					target='_blank'><img src='$src' width='" .$row['ad_width']. "' height='$row[ad_height]'
					border='0' /></a>";
					break;
				case 1: // Flash
					$src = (strpos($row['ad_code'], 'http://') === false && strpos($row['ad_code'], 'https://') === false) ?
							DATA_DIR . "/afficheimg/$row[ad_code]" : $row['ad_code'];
					$ads[] = "<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" " .
							 "codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\"  " .
							   "width='$row[ad_width]' height='$row[ad_height]'>
							   <param name='movie' value='$src'>
							   <param name='quality' value='high'>
							   <embed src='$src' quality='high'
							   pluginspage='http://www.macromedia.com/go/getflashplayer'
							   type='application/x-shockwave-flash' width='$row[ad_width]'
							   height='$row[ad_height]'></embed>
							 </object>";
					break;
				case 2: // CODE
					$ads[] = $row['ad_code'];
					break;
				case 3: // TEXT
					$ads[] = "<a href='affiche.php?ad_id=$row[ad_id]&amp;uri=" .urlencode($row["ad_link"]). "'
					target='_blank'>" .htmlspecialchars($row['ad_code']). '</a>';
					break;
			}
		}
    }
    $position_style = 'str:' . $position_style;

    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    $GLOBALS['smarty']->assign('ads', $ads);
    $val = $GLOBALS['smarty']->fetch($position_style);

    $GLOBALS['smarty']->caching = $need_cache;

    return $val;
}

/**
 * 调用会员信息
 *
 * @access  public
 * @return  string
 */
function insert_member_info()
{
    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    if ($_SESSION['user_id'] > 0)
    {
        $GLOBALS['smarty']->assign('user_info', get_user_info());
    }
    else
    {
        if (!empty($_COOKIE['ECS']['username']))
        {
            $GLOBALS['smarty']->assign('ecs_username', stripslashes($_COOKIE['ECS']['username']));
        }
        $captcha = intval($GLOBALS['_CFG']['captcha']);
        if (($captcha & CAPTCHA_LOGIN) && (!($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
        {
            $GLOBALS['smarty']->assign('enabled_captcha', 1);
            $GLOBALS['smarty']->assign('rand', mt_rand());
        }
    }
    $output = $GLOBALS['smarty']->fetch('library/member_info.lbi');

    $GLOBALS['smarty']->caching = $need_cache;

    return $output;
}


/**
 * 调用会员信息
 *
 * @access  public
 * @return  string
 */
function insert_member_info2()
{
    $need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;

    if ($_SESSION['user_id'] > 0)
    {
        $GLOBALS['smarty']->assign('user_info', get_user_info());
    }
    else
    {
        if (!empty($_COOKIE['ECS']['username']))
        {
            $GLOBALS['smarty']->assign('ecs_username', stripslashes($_COOKIE['ECS']['username']));
        }
        $captcha = intval($GLOBALS['_CFG']['captcha']);
        if (($captcha & CAPTCHA_LOGIN) && (!($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
        {
            $GLOBALS['smarty']->assign('enabled_captcha', 1);
            $GLOBALS['smarty']->assign('rand', mt_rand());
        }
    }
    $output = $GLOBALS['smarty']->fetch('library/member_info2.lbi');

    $GLOBALS['smarty']->caching = $need_cache;

    return $output;
}

/**
 * 调用评论信息
 *
 * @access  public
 * @return  string
 */
function insert_comments($arr)
{
    $need_cache = $GLOBALS['smarty']->caching;
    $need_compile = $GLOBALS['smarty']->force_compile;

    $GLOBALS['smarty']->caching = false;
    $GLOBALS['smarty']->force_compile = true;

    /* 验证码相关设置 */
    if ((intval($GLOBALS['_CFG']['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
    {
        $GLOBALS['smarty']->assign('enabled_captcha', 1);
        $GLOBALS['smarty']->assign('rand', mt_rand());
    }
    $GLOBALS['smarty']->assign('username',     stripslashes($_SESSION['user_name']));
    $GLOBALS['smarty']->assign('email',        $_SESSION['email']);
    $GLOBALS['smarty']->assign('comment_type', $arr['type']);
    $GLOBALS['smarty']->assign('id',           $arr['id']);
    $cmt = assign_comment($arr['id'],          $arr['type']);
    $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	$comment_percent = comment_percent($arr['id']);
	$GLOBALS['smarty']->assign('comment_percent',         $comment_percent); 
	
    $val = $GLOBALS['smarty']->fetch('library/comments_list.lbi');

    $GLOBALS['smarty']->caching = $need_cache;
    $GLOBALS['smarty']->force_compile = $need_compile;
	
    return $val;
}


/**
 * 调用商品购买记录
 *
 * @access  public
 * @return  string
 */
function insert_bought_notes($arr)
{
    $need_cache = $GLOBALS['smarty']->caching;
    $need_compile = $GLOBALS['smarty']->force_compile;

    $GLOBALS['smarty']->caching = false;
    $GLOBALS['smarty']->force_compile = true;

    /* 商品购买记录 */
    $sql = 'SELECT u.user_name, og.goods_number, oi.add_time, IF(oi.order_status IN (2, 3, 4), 0, 1) AS order_status ' .
           'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS oi LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
           'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $arr['id'] . ' ORDER BY oi.add_time DESC LIMIT 5';
    $bought_notes = $GLOBALS['db']->getAll($sql);

    foreach ($bought_notes as $key => $val)
    {
        $bought_notes[$key]['add_time'] = local_date("Y-m-d G:i:s", $val['add_time']);
    }

    $sql = 'SELECT count(*) ' .
           'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS oi LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
           'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $arr['id'];
    $count = $GLOBALS['db']->getOne($sql);


    /* 商品购买记录分页样式 */
    $pager = array();
    $pager['page']         = $page = 1;
    $pager['size']         = $size = 5;
    $pager['record_count'] = $count;
    $pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
    $pager['page_first']   = "javascript:gotoBuyPage(1,$arr[id])";
    $pager['page_prev']    = $page > 1 ? "javascript:gotoBuyPage(" .($page-1). ",$arr[id])" : 'javascript:;';
    $pager['page_next']    = $page < $page_count ? 'javascript:gotoBuyPage(' .($page + 1) . ",$arr[id])" : 'javascript:;';
    $pager['page_last']    = $page < $page_count ? 'javascript:gotoBuyPage(' .$page_count. ",$arr[id])"  : 'javascript:;';

    $GLOBALS['smarty']->assign('notes', $bought_notes);
    $GLOBALS['smarty']->assign('pager', $pager);


    $val= $GLOBALS['smarty']->fetch('library/bought_notes.lbi');

    $GLOBALS['smarty']->caching = $need_cache;
    $GLOBALS['smarty']->force_compile = $need_compile;

    return $val;
}


/**
 * 调用在线调查信息
 *
 * @access  public
 * @return  string
 */
function insert_vote()
{
    $vote = get_vote();
    if (!empty($vote))
    {
        $GLOBALS['smarty']->assign('vote_id',     $vote['id']);
        $GLOBALS['smarty']->assign('vote',        $vote['content']);
    }
    $val = $GLOBALS['smarty']->fetch('library/vote.lbi');

    return $val;
}

?>