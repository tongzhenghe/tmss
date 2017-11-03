<?php

/**
 * ECSHOP 管理中心入驻商家店铺模板管理程序
 * ============================================================================
 * * 版权所有 2005-2012 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: wang $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once('includes/lib_template.php');

//获得商家店铺模板信息
$sql="select id,seller_theme,store_style from ".$ecs->table('seller_shopinfo')." where seller_id='".$_SESSION['seller_id']."'";
$shop_info=$db->getRow($sql);

/*------------------------------------------------------ */
//-- 店铺模板列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    //admin_priv('template_select');

    /* 获得当前的模版的信息 */
    $curr_template = $shop_info['seller_theme'];
    $curr_style = $shop_info['store_style'];

    /* 获得可用的模版 */
    $available_templates = array();
    $template_dir        = @opendir(ROOT_PATH . 'seller_themes/');
    while ($file = readdir($template_dir))
    {
        if ($file != '.' && $file != '..' && is_dir(ROOT_PATH. 'seller_themes/' . $file) && $file != '.svn' && $file != 'index.htm')
        {
            $available_templates[] = get_seller_template_info($file);
        }
    }

    @closedir($template_dir);

    /* 获得可用的模版的可选风格数组 */
    $templates_style = array();
    if (count($available_templates) > 0)
    {
        foreach ($available_templates as $value)
        {
            $templates_style[$value['code']] = read_tpl_style($value['code'], 2);
        }
    }
	
	///* 清除不需要的模板设置 先注释掉，因为客户目前添加的数据都没有模板设置*/
//    $available_code = array();
//    $sql = "DELETE FROM ".$ecs->table('seller_shopwindow')." WHERE 1 ";
//    foreach ($available_templates AS $tmp)
//    {
//        $sql .= " AND seller_theme <> '".$tmp['code']."' ";
//        $available_code[] = $tmp['code'];
//    }
    
    $db->query($sql);

    assign_query_info();

    $smarty->assign('ur_here',$_LANG['template_manage']);
    $smarty->assign('curr_tpl_style', $curr_style);
    $smarty->assign('template_style', $templates_style);
    $smarty->assign('curr_template', get_seller_template_info($curr_template, $curr_style));
    $smarty->assign('available_templates', $available_templates);
    $smarty->display('templates_list.htm'); 
}
/*------------------------------------------------------ */
//-- 安装模版
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'install')
{
    //check_authz_json('backup_setting');

    $tpl_name = trim($_GET['tpl_name']);
    $tpl_fg=0;
    $tpl_fg = trim($_GET['tpl_fg']);
	
	//正则去掉js代码
	$preg = "/<script[\s\S]*?<\/script>/i";

    $sql = "UPDATE " .$GLOBALS['ecs']->table('seller_shopinfo'). " SET seller_theme = '$tpl_name' WHERE seller_id = '".$_SESSION['seller_id']."'";
    $step_one = $db->query($sql, 'SILENT');
    $sql = "UPDATE " .$GLOBALS['ecs']->table('seller_shopinfo'). " SET store_style = '$tpl_fg' WHERE seller_id = '".$_SESSION['seller_id']."'";
    $step_two = $db->query($sql, 'SILENT');
	
	
	//安装模板装修代码
	//店铺头部装修
	//检测是否设置过此模板的头部
	$sql="select count(id) from ".$GLOBALS['ecs']->table('seller_shopheader')." where seller_theme='$tpl_name' and seller_id = '".$_SESSION['seller_id']."'";
	$count=$GLOBALS['db']->getOne($sql);

	if($count==0)
	{
		$header_path = ROOT_PATH.'seller_themes/'.$tpl_name.'/header.txt';
		
		if(file_exists($header_path))
		{
					
			$content=file_get_contents($header_path);

			$header_content=!empty($content)?preg_replace($preg,"",stripslashes($content)):'';
					
			if(strlen($header_content)>3)//默认有3个字符
			{
					$sql="insert into".$GLOBALS['ecs']->table('seller_shopheader')."(content,seller_theme,seller_id) values ('$header_content','$tpl_name',".$_SESSION['seller_id'].")";
					
					$GLOBALS['db']->query($sql);
			}
		}
	}
	//模板幻灯片安装
	//检测是否设置过此模板的幻灯片
	$sql="select count(id) from ".$GLOBALS['ecs']->table('seller_shopslide')." where seller_theme='$tpl_name' and seller_id = '".$_SESSION['seller_id']."'";
	$count=$GLOBALS['db']->getOne($sql);
	
	if($count==0)
	{
		$silde_path=ROOT_PATH.'seller_themes/'.$tpl_name.'/slides.txt';

		if(file_exists($silde_path))
		{

			$slide_arr = array_slice(file($silde_path), 0, 3);
			if($slide_arr)
			{
				$sql="insert into ".$GLOBALS['ecs']->table('seller_shopslide')." (seller_id,img_url,img_link,img_desc,is_show,seller_theme) values ";
				foreach($slide_arr as $key=>$val)
				{
					$val=addslashes($val);
					if($key+1<count($slide_arr))
					{
						$sql.="($_SESSION[seller_id],'$val','','',1,'$tpl_name'),";	
					}
					else
					{
						$sql.="($_SESSION[seller_id],'$val','','',1,'$tpl_name')";	
					}
				}
				$GLOBALS['db']->query($sql);
			}	
		}
	}
	
	//橱窗自定义装饰代码
	//检测是否设置过此模板的自定义区域
	$sql="select count(id) from ".$GLOBALS['ecs']->table('seller_shopwindow')." where seller_theme='$tpl_name' and win_type=0 and seller_id = '".$_SESSION['seller_id']."'";
	$count=$GLOBALS['db']->getOne($sql);
	
	if($count==0)
	{
		$custom_path = ROOT_PATH.'seller_themes/' . $tpl_name . '/custom/';
			
		//$dir  = @opendir($custom_path);
		$file=scandir($custom_path);

		foreach($file as $val)
		{
			
			$val=iconv("GB2312", "UTF-8", $val);
			
			if($val != '.' && $val != '..' && !is_dir(ROOT_PATH. 'seller_themes/' . $val))
			{
				$content_path=ROOT_PATH.'seller_themes/' . $tpl_name . '/custom/'.$val;
				
				$ext=pathinfo($content_path);
				$cus_name= substr($val,0,strrpos($val, '.'));//文件名作为自定义区域的名称录入数据库
				
				if($ext['extension']== 'txt')
				{
					$content_path=iconv("GB2312","UTF-8", $content_path);
					$content=file_get_contents($content_path,true);
					$content=iconv("GB2312","UTF-8", $content);
					$custom_content=!empty($content)?preg_replace($preg,"",stripslashes($content)):'';

					if(strlen($custom_content)>3)//默认有3个字符
					{
						$sql="insert into".$GLOBALS['ecs']->table('seller_shopwindow')."(win_type,win_name,seller_id,is_show,win_custom,seller_theme) values ('0','$cus_name',".$_SESSION['seller_id'].",1,'$custom_content','$tpl_name')";
						
						$GLOBALS['db']->query($sql);
					}
				}
			}
			
		}
		@closedir($custom_path);	
	}
	
	
    if ($step_one && $step_two)
    {
        clear_all_files(); //清除模板编译文件

        $error_msg = '';
        make_json_result(read_style_and_tpl($tpl_name, $tpl_fg), ' 模板安装成功');
    }
    else
    {
        make_json_error($db->error());
    }
}

/**
 * 读取模板风格列表
 *
 * @access  public
 * @param   string  $tpl_name       模版名称
 * @param   int     $flag           1，AJAX数据；2，Array
 * @return
 */
function read_tpl_style($tpl_name, $flag=1)
{
    if (empty($tpl_name) && $flag == 1)
    {
        return 0;
    }

    /* 获得可用的模版 */
    $temp = '';
    $start = 0;
    $available_templates = array();
    $dir = ROOT_PATH . 'seller_themes/' . $tpl_name . '/';
    $tpl_style_dir = @opendir($dir);
    while ($file = readdir($tpl_style_dir))
    {
        if ($file != '.' && $file != '..' && is_file($dir . $file) && $file != '.svn' && $file != 'index.htm')
        {
            if (preg_match("/^(style|style_)(.*)*/i", $file)) // 取模板风格缩略图
            {
                $start = strpos($file, '.');
                $temp = substr($file, 0, $start);
                $temp = explode('_', $temp);
                if (count($temp) == 2)
                {
                    $available_templates[] = $temp[1];
                }
            }
        }
    }
    @closedir($tpl_style_dir);

    if ($flag == 1)
    {
        $ec = '<table border="0" width="100%" cellpadding="0" cellspacing="0" class="colortable" onMouseOver="javascript:onSOver(0, this);" onMouseOut="onSOut(this);" onclick="javascript:setupTemplateFG(0);"  bgcolor="#FFFFFF"><tr><td>&nbsp;</td></tr></table>';
        if (count($available_templates) > 0)
        {
            foreach ($available_templates as $value)
            {
                $tpl_info = get_template_info($tpl_name, $value);

                $ec .= '<table border="0" width="100%" cellpadding="0" cellspacing="0" class="colortable" onMouseOver="javascript:onSOver(\'' . $value . '\', this);" onMouseOut="onSOut(this);" onclick="javascript:setupTemplateFG(\'' . $value . '\');"  bgcolor="' . $tpl_info['type'] . '"><tr><td>&nbsp;</td></tr></table>';

                unset($tpl_info);
            }
        }
        else
        {
            $ec = '0';
        }

        return $ec;
    }
    elseif ($flag == 2)
    {
        $templates_temp = array('');
        if (count($available_templates) > 0)
        {
            foreach ($available_templates as $value)
            {
                $templates_temp[] = $value;
            }
        }

        return $templates_temp;
    }
}

/**
 * 读取当前风格信息与当前模板风格列表
 *
 * @access  public
 * @param   string  $tpl_name       模版名称
 * @param   string  $tpl_style 模版风格名
 * @return
 */
function read_style_and_tpl($tpl_name, $tpl_style)
{
    $style_info = array();
    $style_info = get_seller_template_info($tpl_name, $tpl_style);

    $tpl_style_info = array();
    $tpl_style_info = read_tpl_style($tpl_name, 2);
    $tpl_style_list = '';
    if (count($tpl_style_info) > 1)
    {
        foreach ($tpl_style_info as $value)
        {
            $tpl_style_list .= '<span style="cursor:pointer;" onMouseOver="javascript:onSOver(\'screenshot\', \'' . $value . '\', this);" onMouseOut="onSOut(\'screenshot\', this, \'' . $style_info['screenshot'] . '\');" onclick="javascript:setupTemplateFG(\'' . $tpl_name . '\', \'' . $value . '\', \'\');" id="templateType_' . $value . '"><img src="../themes/' . $tpl_name . '/images/type' . $value . '_';

            if ($value == $tpl_style)
            {
                $tpl_style_list .= '1';
            }
            else
            {
                $tpl_style_list .= '0';
            }
            $tpl_style_list .= '.gif" border="0"></span>&nbsp;';
        }
    }
    $style_info['tpl_style'] = $tpl_style_list;

    return $style_info;
}
?>
