<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>会员绑定</title>
	<link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>/bootstrap/css/bootstrap.min.css" />
	<script src="<?php echo __PUBLIC__;?>/js/jquery.min.js"></script>
	<script src="<?php echo __PUBLIC__;?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo __PUBLIC__;?>/js/validform.js"></script>
</head>
<body>
<div class="container-fluid" style="margin-top: 1.6rem;">
	<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">绑定/注册</div>
			<div class="panel-body">
			<form action="<?php echo url('wechat/plugin_action', array('name'=>'bd'));?>" method="post" class="form-horizontal validforms" role="form" onsubmit="if(!confirm('您确认要进行绑定操作吗'))return false;">
				<div class="form-group">
				    <label class="col-sm-2 control-label">用户名</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="用户名" name="data[username]" datatype="*" />
				    </div>
			  	</div>
			  	<div class="form-group">
				    <label class="col-sm-2 control-label">密码</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" placeholder="密码" name="data[password]" datatype="*6-16" />
				    </div>
			  	</div>
			  	<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-primary" value="确认" />
						<input type="reset" class="btn btn-default" value="重置" />
				    </div>
				 </div>
				<div class="form-group">
					<p class="col-sm-12 control-label">1、如果您是老用户请输入帐号进行绑定。</p>
					<p class="col-sm-12 control-label">2、新用户输入用户名和密码进行注册并绑定。</p>
					<p class="col-sm-12 control-label">3、绑定后的帐号可以登录到其他终端。</p>
				</div>
			</form>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>