<?php
/**
 * ECSHOP 控制台首页
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: index.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);



require(dirname(__FILE__) . '/includes/init.php');

require_once(ROOT_PATH . '/includes/lib_order.php');
/*------------------------------------------------------ */
//-- 框架
/*------------------------------------------------------ */
if ($_REQUEST['act'] == '')
{
    $smarty->assign('shop_url', urlencode($ecs->url()));
    $smarty->display('index.htm');
}

/*------------------------------------------------------ */
//-- 顶部框架的内容
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'top')
{
    // 获得管理员设置的菜单
    $lst = array();
    $admin_info = $db->getRow('SELECT nav_list,seller_id FROM ' . $ecs->table('admin_user') . " WHERE user_id = '" . $_SESSION['admin_id'] . "'");

    if (!empty($admin_info['nav_list']))
    {
        $arr = explode(',', $admin_info['nav_list']);

        foreach ($arr AS $val)
        {
            $tmp = explode('|', $val);
            $lst[$tmp[1]] = $tmp[0];
        }
    }

    // 获得商家的店铺id
	$store_id=$db->getOne("select id from ".$ecs->table('seller_shopinfo')." where seller_id='".$admin_info['seller_id']."'");
	
    // 获得管理员ID
    $smarty->assign('send_mail_on',$_CFG['send_mail_on']);
    $smarty->assign('nav_list', $lst);
    $smarty->assign('admin_id', $_SESSION['admin_id']);
	$smarty->assign('store_id', $store_id);
    $smarty->assign('certi', $_CFG['certi']);

    $smarty->display('top.htm');
}

/*------------------------------------------------------ */
//-- 计算器
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'calculator')
{
    $smarty->display('calculator.htm');
}

/*------------------------------------------------------ */
//-- 左边的框架
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'menu')
{
    include_once('includes/inc_menu.php');

// 权限对照表
    include_once('includes/inc_priv.php');

    foreach ($modules AS $key => $value)
    {
        ksort($modules[$key]);
    }
    ksort($modules);

    foreach ($modules AS $key => $val)
    {
        $menus[$key]['label'] = $_LANG[$key];
        if (is_array($val))
        {
            foreach ($val AS $k => $v)
            {
                if ( isset($purview[$k]))
                {
                    if (is_array($purview[$k]))
                    {
                        $boole = false;
                        foreach ($purview[$k] as $action)
                        {
                             $boole = $boole || admin_priv($action, '', false);
                        }
                        if (!$boole)
                        {
                            continue;
                        }

                    }
                    else
                    {
                        if (! admin_priv($purview[$k], '', false))
                        {
                            continue;
                        }
                    }
                }
                if ($k == 'ucenter_setup' && $_CFG['integrate_code'] != 'ucenter')
                {
                    continue;
                }
                $menus[$key]['children'][$k]['label']  = $_LANG[$k];
                $menus[$key]['children'][$k]['action'] = $v;
            }
        }
        else
        {
            $menus[$key]['action'] = $val;
        }

        // 如果children的子元素长度为0则删除该组
        if(empty($menus[$key]['children']))
        {
            unset($menus[$key]);
        }

    }

    $smarty->assign('menus',     $menus);
    $smarty->assign('no_help',   $_LANG['no_help']);
    $smarty->assign('help_lang', $_CFG['lang']);
    $smarty->assign('charset', EC_CHARSET);
    $smarty->assign('admin_id', $_SESSION['admin_id']);
    $smarty->display('menu.htm');
}


/*------------------------------------------------------ */
//-- 清除缓存
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'clear_cache')
{
    clear_all_files();

    sys_msg($_LANG['caches_cleared']);
}


/*------------------------------------------------------ */
//-- 主窗口，起始页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'main')
{
    //开店向导第一步
    if(isset($_SESSION['seller_shop_guide']) && $_SESSION['seller_shop_guide'] === true)
    {
        unset($_SESSION['seller_shop_guide']);//销毁session

        ecs_header("Location: ./index.php?act=first\n");

        exit();
    }

    $gd = gd_version();

    /* 检查文件目录属性 */
    $warning = array();

    if ($_CFG['shop_closed'])
    {
        $warning[] = $_LANG['shop_closed_tips'];
    }

    if (file_exists('../install'))
    {
        $warning[] = $_LANG['remove_install'];
    }

    if (file_exists('../upgrade'))
    {
        $warning[] = $_LANG['remove_upgrade'];
    }
    
    if (file_exists('../demo'))
    {
        $warning[] = $_LANG['remove_demo'];
    }

    $open_basedir = ini_get('open_basedir');
    if (!empty($open_basedir))
    {
        /* 如果 open_basedir 不为空，则检查是否包含了 upload_tmp_dir  */
        $open_basedir = str_replace(array("\\", "\\\\"), array("/", "/"), $open_basedir);
        $upload_tmp_dir = ini_get('upload_tmp_dir');

        if (empty($upload_tmp_dir))
        {
            if (stristr(PHP_OS, 'win'))
            {
                $upload_tmp_dir = getenv('TEMP') ? getenv('TEMP') : getenv('TMP');
                $upload_tmp_dir = str_replace(array("\\", "\\\\"), array("/", "/"), $upload_tmp_dir);
            }
            else
            {
                $upload_tmp_dir = getenv('TMPDIR') === false ? '/tmp' : getenv('TMPDIR');
            }
        }

        if (!stristr($open_basedir, $upload_tmp_dir))
        {
            $warning[] = sprintf($_LANG['temp_dir_cannt_read'], $upload_tmp_dir);
        }
    }

    $result = file_mode_info('../cert');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'cert', $_LANG['cert_cannt_write']);
    }

    $result = file_mode_info('../' . DATA_DIR);
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'data', $_LANG['data_cannt_write']);
    }
    else
    {
        $result = file_mode_info('../' . DATA_DIR . '/afficheimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/afficheimg', $_LANG['afficheimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/brandlogo');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/brandlogo', $_LANG['brandlogo_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/cardimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/cardimg', $_LANG['cardimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/feedbackimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/feedbackimg', $_LANG['feedbackimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/packimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/packimg', $_LANG['packimg_cannt_write']);
        }
    }

    $result = file_mode_info('../images');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['images_cannt_write']);
    }
    else
    {
        $result = file_mode_info('../' . IMAGE_DIR . '/upload');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], IMAGE_DIR . '/upload', $_LANG['imagesupload_cannt_write']);
        }
    }

    $result = file_mode_info('../temp');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['tpl_cannt_write']);
    }

    $result = file_mode_info('../temp/backup');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['tpl_backup_cannt_write']);
    }

    if (!is_writeable('../' . DATA_DIR . '/order_print.html'))
    {
        $warning[] = $_LANG['order_print_canntwrite'];
    }
    clearstatcache();

    $smarty->assign('warning_arr', $warning);
    

    /* 管理员留言信息 wang 商家入驻 start*/
    $sql = 'SELECT message_id, sender_id, receiver_id, sent_time, readed, deleted, title, message, user_name,b.action_list ' .
    'FROM ' . $ecs->table('admin_message') . ' AS a, ' . $ecs->table('admin_user') . ' AS b ' .
    "WHERE a.sender_id = b.user_id AND (a.receiver_id = '$_SESSION[admin_id]' or a.sender_id = '$_SESSION[admin_id]') AND ".
    "a.readed = 0 AND deleted = 0 ORDER BY a.sent_time DESC";

    $admin_msg = $db->GetAll($sql);
	
	foreach($admin_msg as $key=>$val)
	{
		if($val['action_list']=='all')
		{
			$admin_msg[$key]['user_name']='网站运营商';
		}
		$admin_msg[$key]['sent_time']=local_date('Y-m-d H:i',$val['sent_time']);
	}
	/*wang 商家入驻 end*/
	
    $smarty->assign('admin_msg', $admin_msg);

    /* 取得支持货到付款和不支持货到付款的支付方式 */
    $ids = get_pay_ids();

	/*wang 商家入驻 start*/
    /* 已完成的订单 */
    $order['finished']     = $db->GetOne('SELECT COUNT(*) FROM ' . $ecs->table('order_info').
    " WHERE 1 and seller_id='".$_SESSION['seller_id']."' " . order_query_sql('finished'));
    $status['finished']    = CS_FINISHED;

    /* 待发货的订单： */
    $order['await_ship']   = $db->GetOne('SELECT COUNT(*)'.
    ' FROM ' .$ecs->table('order_info') .
    " WHERE 1 and seller_id='".$_SESSION['seller_id']."' " . order_query_sql('await_ship'));
    $status['await_ship']  = CS_AWAIT_SHIP;
    
    /* 待付款的订单： */
    $order['await_pay']    = $db->GetOne('SELECT COUNT(*)'.
    ' FROM ' .$ecs->table('order_info') .
    " WHERE 1 and seller_id='".$_SESSION['seller_id']."' " . order_query_sql('await_pay'));
    $status['await_pay']   = CS_AWAIT_PAY;

    /* “未确认”的订单 */
    $order['unconfirmed']  = $db->GetOne('SELECT COUNT(*) FROM ' .$ecs->table('order_info').
    " WHERE 1 and seller_id='".$_SESSION['seller_id']."' " . order_query_sql('unconfirmed'));
    $status['unconfirmed'] = OS_UNCONFIRMED;

    /* “部分发货”的订单 */
    $order['shipped_part']  = $db->GetOne('SELECT COUNT(*) FROM ' .$ecs->table('order_info').
    " WHERE seller_id='".$_SESSION['seller_id']."' and shipping_status=" .SS_SHIPPED_PART);
    $status['shipped_part'] = OS_SHIPPED_PART;

//    $today_start = mktime(0,0,0,date('m'),date('d'),date('Y'));
    $order['stats']        = $db->getRow('SELECT COUNT(*) AS oCount, IFNULL(SUM(order_amount), 0) AS oAmount' .
    ' FROM ' .$ecs->table('order_info')." where seller_id='".$_SESSION['seller_id']."'");

    $smarty->assign('order', $order);
    $smarty->assign('status', $status);

    /* 商品信息 */
    $goods['total']   = $db->GetOne('SELECT COUNT(*) FROM ' .$ecs->table('goods').
    ' WHERE is_delete = 0 AND is_alone_sale = 1 AND is_real = 1'." and seller_id='".$_SESSION['seller_id']."'");

    $time             = gmtime();


    /* 缺货商品 */
    if ($_CFG['use_storage'])
    {
        $sql = 'SELECT COUNT(*) FROM ' .$ecs->table('goods'). ' WHERE is_delete = 0 AND goods_number <= warn_number AND is_real = 1'." and seller_id='".$_SESSION['seller_id']."'";
        $goods['warn'] = $db->GetOne($sql);
        //$sql = 'SELECT COUNT(*) FROM ' .$ecs->table('goods'). ' WHERE is_delete = 0 AND goods_number <= warn_number AND is_real=0 AND extension_code=\'virtual_card\'';
//        $virtual_card['warn'] = $db->GetOne($sql);
    }
    else
    {
        $goods['warn'] = 0;
        //$virtual_card['warn'] = 0;
    }
    $smarty->assign('goods', $goods);
   // $smarty->assign('virtual_card', $virtual_card);

	/*wang 商家入驻*/
	

    /* 缺货登记 */
    $smarty->assign('booking_goods', $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('booking_goods') . ' WHERE is_dispose = 0'." and seller_id='".$_SESSION['seller_id']."'"));

    /* 退款申请 */
    $smarty->assign('new_repay', $db->getOne('SELECT COUNT(*) FROM ' . $ecs->table('user_account') . ' WHERE process_type = ' . SURPLUS_RETURN . ' AND is_paid = 0 '));

    assign_query_info();
    $smarty->assign('ecs_version',  VERSION);
    $smarty->assign('ecs_release',  RELEASE);
    $smarty->assign('ecs_lang',     $_CFG['lang']);
    $smarty->assign('ecs_charset',  strtoupper(EC_CHARSET));
    $smarty->assign('install_date', local_date($_CFG['date_format'], $_CFG['install_date']));
    $smarty->display('start.htm');
}
//wang 商家入驻 店铺头部装修
elseif($_REQUEST['act'] == 'shop_top')
{
	$smarty->assign('ur_here','店铺头部装修');
	//获取入驻商家店铺信息 wang 商家入驻
	$sql="select id,seller_theme,shop_color from ".$ecs->table('seller_shopinfo')." where seller_id='".$_SESSION['seller_id']."'";
	$seller_shop_info=$db->getRow($sql);
	if($seller_shop_info['id']>0)
	{
		//店铺头部
		$header_sql="select content from ".$GLOBALS['ecs']->table('seller_shopheader')." where seller_theme='".$seller_shop_info['seller_theme']."' and seller_id = '".$_SESSION['seller_id']."'";
		$header_content=$db->getOne($header_sql);
		/* 创建 百度编辑器 wang 商家入驻 */
    	create_ueditor_editor('shop_header',$header_content);
		
		$smarty->assign('form_action', 'shop_top_edit');
		$smarty->assign('shop_info',$seller_shop_info);
	}
	else
	{
		$lnk[] = array('text' => '设置店铺信息','href'=>'index.php?act=first');
		sys_msg('请先设置店铺基本信息', 0, $lnk);
	}
	
	$smarty->display('seller_shop_header.htm');
}
elseif($_REQUEST['act'] == 'shop_top_edit')
{
	
	//正则去掉js代码
	$preg = "/<script[\s\S]*?<\/script>/i";
	
	$shop_header=!empty($_REQUEST['shop_header'])?preg_replace($preg,"",stripslashes($_REQUEST['shop_header'])):'';
	
	$seller_theme=!empty($_REQUEST['seller_theme'])?preg_replace($preg,"",stripslashes($_REQUEST['seller_theme'])):'';
	
	$shop_color=!empty($_REQUEST['shop_color'])?$_REQUEST['shop_color']:'';
	
	//跟新店铺颜色
	$sql="update ".$ecs->table('seller_shopinfo')." set shop_color='$shop_color' where seller_id='".$_SESSION['seller_id']."'";
	
	$db->query($sql);
	//跟新店铺头部
	$sql="update ".$ecs->table('seller_shopheader')." set content='$shop_header' where seller_id='".$_SESSION['seller_id']."' and seller_theme='".$seller_theme."'";
	
	$db->query($sql);
	
	$lnk[] = array('text' => '','href'=>'index.php?act=shop_top');
	
	sys_msg('店铺头部装修成功', 0, $lnk);
}
/*------------------------------------------------------ */
//-- 开店向导第一步
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'first')
{
    $smarty->assign('countries',    get_regions());
    $smarty->assign('provinces',    get_regions(1, 1));

    //获取入驻商家店铺信息 wang 商家入驻
	$sql="select * from ".$ecs->table('seller_shopinfo')." where seller_id='".$_SESSION['seller_id']."'";
	$seller_shop_info=$db->getRow($sql);
	$action='add';
	if($seller_shop_info)
	{
		$action='update';	
	}
	
	$smarty->assign('store_two_code',$_CFG['store_two_code']);//店铺二维码
	$smarty->assign('cities',    get_regions(2, $seller_shop_info['province']));
	$smarty->assign('shop_info',$seller_shop_info);
	
	$smarty->assign('data_op',$action);
    assign_query_info();

    $smarty->assign('ur_here', $_LANG['ur_config']);
    $smarty->display('seller_shop_first.htm');
}

/*------------------------------------------------------ */
//-- 开店向导第二步
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'second')
{
    $shop_name = empty($_POST['shop_name']) ? '' : $_POST['shop_name'] ;
    $shop_title = empty($_POST['shop_title']) ? '' : $_POST['shop_title'] ;
	$shop_keyword = empty($_POST['shop_keyword']) ? '' : $_POST['shop_keyword'] ;
    $shop_country = empty($_POST['shop_country']) ? '' : intval($_POST['shop_country']);
    $shop_province = empty($_POST['shop_province']) ? '' : intval($_POST['shop_province']);
    $shop_city = empty($_POST['shop_city']) ? '' : intval($_POST['shop_city']);
    $shop_address = empty($_POST['shop_address']) ? '' : $_POST['shop_address'];
	$two_code=empty($_POST['two_code'])?'':$_POST['two_code'];
    $kf_qq = empty($_POST['kf_qq']) ? '' : $_POST['kf_qq'];
    $kf_ww = empty($_POST['kf_ww']) ? '' : $_POST['kf_ww'];
	$kf_tel = empty($_POST['kf_tel']) ? '' : $_POST['kf_tel'];
	$notice = empty($_POST['notice']) ? '' : $_POST['notice'];
	$data_op = empty($_POST['data_op']) ? '' : $_POST['data_op'];
	$shop_style = intval($_POST['shop_style']);
	$apply = intval($_POST['apply']);
	$shop_info=array(
		'seller_id'=>$_SESSION['seller_id'],
		'shop_name'=>$shop_name,
		'shop_title'=>$shop_title,
		'shop_keyword'=>$shop_keyword,
		'country'=>$shop_country,
		'province'=>$shop_province,
		'city'=>$shop_city,
		'shop_address'=>$shop_address,
		'kf_qq'=>$kf_qq,
		'kf_ww'=>$kf_ww,
		'kf_tel'=>$kf_tel,
		'notice'=>$notice,
		'shop_style'=>$shop_style,
		'apply'=>$apply,
		'two_code'=>$two_code
	);
	/* 允许上传的文件类型 */
    $allow_file_types = '|GIF|JPG|PNG|BMP|';
	//上传店铺logo
	if($_FILES['shop_logo'])
	{
		$file=$_FILES['shop_logo'];
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
                $file_name ='../seller_imgs/seller_logo/seller_logo'.$_SESSION['seller_id'].'.'. $ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $shop_info['shop_logo']=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}
	//上传店铺logo
	if($_FILES['two_code_logo'])
	{
		$file=$_FILES['two_code_logo'];
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
                $file_name ='../seller_imgs/seller_code_logo/logo'.$_SESSION['seller_id'].'.'. $ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $shop_info['two_code_logo']=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}
	//上传店铺街小图标
	if($_FILES['street_logo'])
	{
		$file=$_FILES['street_logo'];
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
                $file_name ='../seller_imgs/street_logo/street_logo'.$_SESSION['seller_id'].'.'. $ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $shop_info['street_logo']=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}
	//上传店铺街商品大图
	if($_FILES['street_spjpg'])
	{
		$file=$_FILES['street_spjpg'];
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
                $file_name ='../seller_imgs/street_spjpg/street_spjpg'.$_SESSION['seller_id'].'.'. $ext;
                /* 判断是否上传成功 */
                if (move_upload_file($file['tmp_name'], $file_name))
                {
                    $shop_info['street_spjpg']=$file_name;
                }
                else
                {
                    sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], 'seller_imgs/seller_'.$_SESSION['seller_id']));
                }
            }
        }	
	}
	
	
	if($data_op=='add')
	{
		$db->autoExecute($ecs->table('seller_shopinfo'),$shop_info);
		$lnk[] = array('text' => '返回首页','href'=>'index.php?act=main');
		sys_msg('编辑店铺信息成功', 0, $lnk);	
	}
	else
	{
		
		$db->autoExecute($ecs->table('seller_shopinfo'),$shop_info,'update',"seller_id='".$_SESSION['seller_id']."'");
		$lnk[] = array('text' => '返回首页','href'=>'index.php?act=main');
		sys_msg('跟新店铺信息成功', 0, $lnk);
	}
}

/*------------------------------------------------------ */
//-- 关于 ECSHOP
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'about_us')
{
    assign_query_info();
    $smarty->display('about_us.htm');
}

/*------------------------------------------------------ */
//-- 拖动的帧
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'drag')
{
    $smarty->display('drag.htm');;
}

/*------------------------------------------------------ */
//-- 检查订单
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'check_order')
{
    if (empty($_SESSION['last_check']))
    {
        $_SESSION['last_check'] = gmtime();

        make_json_result('', '', array('new_orders' => 0, 'new_paid' => 0));
    }

    /* 新订单 */
    $sql = 'SELECT COUNT(*) FROM ' . $ecs->table('order_info').
    " WHERE add_time >= '$_SESSION[last_check]' and seller_id='".$_SESSION['seller_id']."'";
    $arr['new_orders'] = $db->getOne($sql);

    /* 新付款的订单 */
    $sql = 'SELECT COUNT(*) FROM '.$ecs->table('order_info').
    ' WHERE pay_time >= ' . $_SESSION['last_check']." and seller_id='".$_SESSION['seller_id']."'";
    $arr['new_paid'] = $db->getOne($sql);

    $_SESSION['last_check'] = gmtime();

    if (!(is_numeric($arr['new_orders']) && is_numeric($arr['new_paid'])))
    {
        make_json_error($db->error());
    }
    else
    {
        make_json_result('', '', $arr);
    }
}

// 邮件群发处理
elseif ($_REQUEST['act'] == 'send_mail')
{
    if ($_CFG['send_mail_on'] == 'off')
    {
        make_json_result('', $_LANG['send_mail_off'], 0);
        exit();
    }
    $sql = "SELECT * FROM " . $ecs->table('email_sendlist') . " ORDER BY pri DESC, last_send ASC LIMIT 1";
    $row = $db->getRow($sql);

    //发送列表为空
    if (empty($row['id']))
    {
        make_json_result('', $_LANG['mailsend_null'], 0);
    }

    //发送列表不为空，邮件地址为空
    if (!empty($row['id']) && empty($row['email']))
    {
        $sql = "DELETE FROM " . $ecs->table('email_sendlist') . " WHERE id = '$row[id]'";
        $db->query($sql);
        $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('email_sendlist'));
        make_json_result('', $_LANG['mailsend_skip'], array('count' => $count, 'goon' => 1));
    }

    //查询相关模板
    $sql = "SELECT * FROM " . $ecs->table('mail_templates') . " WHERE template_id = '$row[template_id]'";
    $rt = $db->getRow($sql);

    //如果是模板，则将已存入email_sendlist的内容作为邮件内容
    //否则即是杂质，将mail_templates调出的内容作为邮件内容
    if ($rt['type'] == 'template')
    {
        $rt['template_content'] = $row['email_content'];
    }

    if ($rt['template_id'] && $rt['template_content'])
    {
        if (send_mail('', $row['email'], $rt['template_subject'], $rt['template_content'], $rt['is_html']))
        {
            //发送成功

            //从列表中删除
            $sql = "DELETE FROM " . $ecs->table('email_sendlist') . " WHERE id = '$row[id]'";
            $db->query($sql);

            //剩余列表数
            $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('email_sendlist'));

            if($count > 0)
            {
                $msg = sprintf($_LANG['mailsend_ok'],$row['email'],$count);
            }
            else
            {
                $msg = sprintf($_LANG['mailsend_finished'],$row['email']);
            }
            make_json_result('', $msg, array('count' => $count));
        }
        else
        {
            //发送出错

            if ($row['error'] < 3)
            {
                $time = time();
                $sql = "UPDATE " . $ecs->table('email_sendlist') . " SET error = error + 1, pri = 0, last_send = '$time' WHERE id = '$row[id]'";
            }
            else
            {
                //将出错超次的纪录删除
                $sql = "DELETE FROM " . $ecs->table('email_sendlist') . " WHERE id = '$row[id]'";
            }
            $db->query($sql);

            $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('email_sendlist'));
            make_json_result('', sprintf($_LANG['mailsend_fail'],$row['email']), array('count' => $count));
        }
    }
    else
    {
        //无效的邮件队列
        $sql = "DELETE FROM " . $ecs->table('email_sendlist') . " WHERE id = '$row[id]'";
        $db->query($sql);
        $count = $db->getOne("SELECT COUNT(*) FROM " . $ecs->table('email_sendlist'));
        make_json_result('', sprintf($_LANG['mailsend_fail'],$row['email']), array('count' => $count));
    }
}

?>
