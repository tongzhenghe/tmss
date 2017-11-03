<?php
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
if ((DEBUG_MODE & 2) != 2) 
{
	$smarty->caching = true;
}
$action = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'default';
if($_REQUEST['act'] == 'contact')
{
	assign_template();
	$article = get_article_info(5);
	$smarty->assign('article', $article);
	$smarty->assign('action', $action);
	$smarty->display('ectouch.dwt');
}
elseif($_REQUEST['act'] == 'share')
{
	assign_template();
	$smarty->assign('HTTP_REFERER', $_SERVER['HTTP_REFERER']);
	$smarty->assign('action', $action);
	$smarty->display('ectouch.dwt');
}
elseif($_REQUEST['act'] == 'map')
{
	$smarty->assign('action', $action);
	$smarty->display('ectouch.dwt');
}
function get_article_info($article_id) 
{
	$sql = "SELECT a.*, IFNULL(AVG(r.comment_rank), 0) AS comment_rank ". "FROM " .$GLOBALS['ecs']->table('article'). " AS a ". "LEFT JOIN " .$GLOBALS['ecs']->table('comment'). " AS r ON r.id_value = a.article_id AND comment_type = 1 ". "WHERE a.is_open = 1 AND a.article_id = '$article_id' GROUP BY a.article_id";
	$row = $GLOBALS['db']->getRow($sql);
	if ($row !== false) 
	{
		$row['comment_rank'] = ceil($row['comment_rank']);
		$row['add_time'] = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']);
		if (empty($row['author']) || $row['author'] == '_SHOPHELP') 
		{
			$row['author'] = $GLOBALS['_CFG']['shop_name'];
		}
	}
	return $row;
}
?>