<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站首页</title>
	<link rel="stylesheet" href="/bbs/Public/css/index.css">
	<link rel="stylesheet" href="/bbs/Public/css/header.css">
	<link rel="stylesheet" href="/bbs/Public/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/bbs/Public/css/nav.css">
	<link rel="stylesheet" href="/bbs/Public/Bootstrap/css/bootstrap.min.css">
	<script src="/bbs/Public/Bootstrap/js/jquery.min.js"></script>
	<script src="/bbs/Public/Bootstrap/js/bootstrap.min.js"></script>
	<script src="/bbs/Public/js/nav.js"></script>
	<script src="/bbs/Public/js/index.js"></script>
</head>
<body>
	<?php if(session('login')!=0): ?><!-- 登陆后的欢迎信息  头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>欢迎<a href="">&nbsp;<?php echo session('username');?>&nbsp;</a>登录&nbsp;&nbsp;&nbsp;<a href="/bbs/index.php/Home/login/logout" class="btn btn-primary btn-xs">退出</a></small>
</div>

		<div class="container nav">
	<ul class="nav navbar-nav">
		<li id="a_sent"><a href="#">发表新帖</a></li>
		<li class="dropdown">
			<a href="#" data-toggle="dropdown">消息管理<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="">我的帖子</a></li>
				<li class="divider"></li>
				<li><a href="">我的回复</a></li>
				<li class="divider"></li>
				<li><a href="">系统信息</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="" data-toggle="dropdown">账号信息<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="">个人资料</a></li>
				<li class="divider"></li>
				<li><a href="">修改密码</a></li>
				<li class="divider"></li>
				<li><a href="/bbs/index.php/Home/login/logout">退出登录</a></li>
			</ul>
		</li>
	</ul>
	<form class="navbar-form navbar-right">
		<div class="input-group">
		<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
			<input class="form-control" type="text" name="search" placeholder="搜索相关标题">
		</div>
		<button class="btn btn-primary" type="submit">搜&nbsp;索</button>
	</form>
</div>

	<?php else: ?> 
		<!-- 网站头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>您还没登录，请&nbsp;<a href="/bbs/index.php/Home/login/login" class="btn btn-primary btn-xs">登录</a>&nbsp;或&nbsp;<a href="/bbs/index.php/Home/login/register" class="btn btn-primary btn-xs">注册</a></small>
</div><?php endif; ?>
	<div class="container main">
	<div class="col-md-10 col-md-offset-1">
		<table>
		<caption class="text-left">帖子：</caption>
		<?php if(is_array($list)): foreach($list as $key=>$topics): ?><tr>
				<td class="col-md-8">
					<a href="/bbs/index.php/Home/publish/read/id/<?php echo ($topics["id"]); ?>">
						<?php if(strlen($topics['title']) > 30): echo mb_substr($topics['title'],0,10,'utf-8');?>...
						<?php else: ?>
							<?php echo ($topics["title"]); endif; ?>
					</a>
				</td>
				<td class="col-md-1 text-center"><?php echo ($topics["username"]); ?></td>
				<td class="col-md-2 text-center"><?php echo (date('m-d H:i',$topics["sent_time"])); ?></td>
			</tr>
			<tr class="content">
				<td class="col-md-8">
					<?php if(strlen($topics['content']) > 70): echo mb_substr($topics['content'],0,23,'utf-8');?>...
					<?php else: ?>
						<?php echo ($topics["content"]); endif; ?>
				</td>
				<td class="col-md-1 text-center"></td>
				<td class="col-md-2 text-center"><?php echo (date('m-d H:i',$topics["last_time"])); ?></td>
			</tr><?php endforeach; endif; ?>
		</table>
		<div class="page text-center"><?php echo ($page); ?></div>
	</div>
	<img src="/bbs/Public/images/totop.png" id="back-to-top">
	<div class="sent">
		<form id="sent" class="form-horization" action="/bbs/index.php/Home/Publish/publish" method="post">
			<span class="help-block"><?php echo ($msg); ?></span>
			<div class="input-group bottom col-md-8 col-md-offset-2">
				<span class="input-group-addon">标题：</span>
				<input type="text" name="title" id="title" class="form-control">
			</div>
			<div class="input-group bottom col-md-8 col-md-offset-2">
				<span class="input-group-addon">内容：</span>
				<textarea class="form-control" rows="5" id="content" name="content"></textarea>
			</div>
			<div class="input-group bottom col-md-offset-2">
				<button type="submit" id="submit" class="btn btn-primary">发表</button>
			</div>
		</form>
	</div>
	</div>
	<div class="footer container text-center">
	友情链接：<a href="http://blog.csdn.net/u014715974" target="_brank">CSDN博客</a>
</div>
</body>
<script type="text/javascript">
$().ready(function(){
if(<?php echo session('login')==0;?>){
	$('#submit').attr('disabled',true);
	$('#title').attr('placeholder','登陆后就可以发帖啦');
	$('#title').attr('disabled',true);
	$('#content').attr('disabled',true);
}
});
</script>
</html>