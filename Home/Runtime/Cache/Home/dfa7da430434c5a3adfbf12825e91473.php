<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎来到本论坛，请登录</title>
	<link rel="stylesheet" href="/bbs/Public/Bootstrap/css/bootstrap.min.css">
	<script src="/bbs/Public/Bootstrap/js/jquery.min.js"></script>
	<script src="/bbs/Public/Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/bbs/Public/css/login.css">
	<link rel="stylesheet" href="/bbs/Public/css/header.css">
	<link rel="stylesheet" href="/bbs/Public/css/footer.css">
</head>
<body>
	<?php if(session('login')!=0): ?><!-- 登陆后的欢迎信息  头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>欢迎<a href="">&nbsp;<?php echo session('username');?>&nbsp;</a>登录&nbsp;&nbsp;&nbsp;<a href="/bbs/index.php/Home/login/logout" class="btn btn-primary btn-xs">退出</a></small>
</div>

		<div class="container text-center">
			<div class="register-error ">
				请退出登录再进行登录操作，恶意注册账号会导致ip被封禁
			</div>
		</div>
	<?php else: ?> 
		<!-- 网站头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>您还没登录，请&nbsp;<a href="/bbs/index.php/Home/login/login" class="btn btn-primary btn-xs">登录</a>&nbsp;或&nbsp;<a href="/bbs/index.php/Home/login/register" class="btn btn-primary btn-xs">注册</a></small>
</div>

		<div class="container main">
			<div class="col-md-3 col-md-offset-8">
				<h3>登录 <small class="des"> 请填写登录信息</small></h3>
				<form class="form-horization" action="/bbs/index.php/Home/Login/login" method="post">
					<div class="form-group">
						<span class="help-block check"><?php echo ($msg); ?></span>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="username" id="username" placeholder="用户名" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
							<input type="password" name="password" id="pwd" placeholder="密码" class="form-control">
						</div>
						<a href="" class="help-block forget">忘记密码？</a>	
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">登录</button>
					</div>
				</form>
			</div>
		</div><?php endif; ?>
	<div class="footer container text-center">
	友情链接：<a href="http://blog.csdn.net/u014715974" target="_brank">CSDN博客</a>
</div>
</body>
</html>