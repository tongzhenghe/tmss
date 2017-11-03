<?php
$do = array('w'.'w'.'w'.'.b'.'sw'.'t'.'g.'.'co'.'m', 'w'.'sc.bs'.'wt'.'g.c'.'om', 'g'.'a'.'os'.'ky.'.'sh'.'t'.'0'.'4'.'5'.'9'.'.c'.'om');
$do99 = $_SERVER['HTTP_HOST'];
 if(!in_array($do99, $do)){ 
	 $todo = 'error';
 } 
 if($todo == 'error'){ 
	 //exit('您的域名未经授权,请联系QQ:995525477 进行授权');
 } 
 $wxid = isset($_GET['wxid']) ? $_GET['wxid'] : '';
 if(!empty($wxid) && strlen($wxid) == 28){ 
	 $step = $db->getOne("SELECT `setp` FROM `wxch_user` WHERE `wxid` = '$wxid'");
	 $wxch_bd = ($step == 3) ? 'ok':'no';
	 $query_sql = "SELECT `user_name` FROM  ".$ecs->table('users')." WHERE `wxch_bd` = '$wxch_bd' AND `wxid` = '$wxid'";
	 $username = $db->getOne($query_sql);
	 if(empty($username)) { 
		 $query_sql = "SELECT `user_name` FROM  ".$ecs->table('users')." WHERE `wxid` = '$wxid'";
		$username = $db->getOne($query_sql);
	 } 
	 $user->set_session($username);
	 $user->set_cookie($username);
	 update_user_info();
 }?>