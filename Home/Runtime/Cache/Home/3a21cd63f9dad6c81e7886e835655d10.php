<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册成功即可成为本站会员</title>
	<link rel="stylesheet" href="/bbs/Public/Bootstrap/css/bootstrap.min.css">
	<script src="/bbs/Public/Bootstrap/js/jquery.min.js"></script>
	<script src="/bbs/Public/Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/bbs/Public/css/register.css">
	<link rel="stylesheet" href="/bbs/Public/css/header.css">
	<link rel="stylesheet" href="/bbs/Public/css/footer.css">
	<script src="/bbs/Public/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
	<script src="/bbs/Public/js/register.js"></script>
</head>
<body>
	<?php if(session('login')!=0): ?><!-- 登陆后的欢迎信息  头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>欢迎<a href="">&nbsp;<?php echo session('username');?>&nbsp;</a>登录&nbsp;&nbsp;&nbsp;<a href="/bbs/index.php/Home/login/logout" class="btn btn-primary btn-xs">退出</a></small>
</div>

		<div class="container text-center">
			<div class="register-error ">
				请退出登录再进行注册操作，恶意注册账号会导致ip被封禁
			</div>
		</div>
	<?php else: ?> 
		<!-- 网站头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>您还没登录，请&nbsp;<a href="/bbs/index.php/Home/login/login" class="btn btn-primary btn-xs">登录</a>&nbsp;或&nbsp;<a href="/bbs/index.php/Home/login/register" class="btn btn-primary btn-xs">注册</a></small>
</div>

		<div class="container main">
		<div class="col-md-3 col-md-offset-4">
			<h3>注册 <small class="des"> 请填写注册信息</small></h3>
			<form class="form-horization" action="/bbs/index.php/Home/Login/register" method="post">
				<div class="form-group input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input class="form-control" type="text" name="username" placeholder="用户名">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
					<input class="form-control" type="password" id="password" name="password" placeholder="密码">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
					<input class="form-control" type="password" name="conpwd" placeholder="确认密码">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
					<input class="form-control" type="text" name="email" placeholder="邮箱地址">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
					<input class="form-control" type="text" name="phone" placeholder="手机号码">
				</div>
				<div class="form-group input-group">
					<div class="row">
						<div class="col-md-6">
							<input class="form-control vcode" type="text" name="vcode" placeholder="验证码">
						</div>
						<div class="col-md-4">
							<img src="/bbs/index.php/Home/index/verify">
						</div>
					</div>
				</div>
				<div class="form-group input-group">
					<div class="ckeckbox">
						<label>
							<input type="checkbox" id="xieyi" name="xieyi" value="agree" checked>我接受<a href="">**协议</a>
						</label>
					</div>
				</div>
				<div class="form-group">
					<button id="ss" class="btn btn-primary" type="submit">注册</button> 
				</div>
			</form>
			</div>
		</div><?php endif; ?>
	<div class="footer container text-center">
	友情链接：<a href="http://blog.csdn.net/u014715974" target="_brank">CSDN博客</a>
</div>
</body>
</html>