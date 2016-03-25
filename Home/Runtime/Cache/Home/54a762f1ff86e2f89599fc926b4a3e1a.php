<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($row[0]['title']); ?></title>
	<link rel="stylesheet" href="/bbs/Public/css/header.css">
	<link rel="stylesheet" href="/bbs/Public/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/bbs/Public/css/read.css">
	<link rel="stylesheet" href="/bbs/Public/Bootstrap/css/bootstrap.min.css">
	<script src="/bbs/Public/Bootstrap/js/jquery.min.js"></script>
	<script src="/bbs/Public/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php if(session('login')!=0): ?><!-- 登陆后的欢迎信息  头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>欢迎<a href="">&nbsp;<?php echo session('username');?>&nbsp;</a>登录&nbsp;&nbsp;&nbsp;<a href="/bbs/index.php/Home/login/logout" class="btn btn-primary btn-xs">退出</a></small>
</div>

	<?php else: ?> 
		<!-- 网站头部 -->
<div class="header container text-right">
	<span class="pull-left"><a href="/bbs/index.php/Home/index/index">首页</a></span>
	<small>您还没登录，请&nbsp;<a href="/bbs/index.php/Home/login/login" class="btn btn-primary btn-xs">登录</a>&nbsp;或&nbsp;<a href="/bbs/index.php/Home/login/register" class="btn btn-primary btn-xs">注册</a></small>
</div><?php endif; ?>
	<div class="container main">
		<table border="1">
			<?php if(is_array($row)): foreach($row as $key=>$k): ?><h3><?php echo ($k["title"]); ?></h3>
				<tr>
					<td><?php echo ($k["username"]); ?></td>
					<td><?php echo ($k["content"]); ?></td>
				</tr>
				<tr>
					<td><?php echo (date('m-d H:i',$k["sent_time"])); ?></td>
					<td><a href="">回复</a></td>
				</tr><?php endforeach; endif; ?>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
					<td><?php echo ($v["username"]); ?></td>
					<td><?php echo ($v["reply"]); ?></td>
				</tr>
				<tr>
					<td><?php echo (date('m-d H:i',$v["sent_time"])); ?></td>
					<td><a href="">回复</a></td>
				</tr><?php endforeach; endif; ?>
		</table>
		<div class="sent">
			<form id="sent" class="form-horization" action="/bbs/index.php/Home/Publish/reply" method="post">
				<span class="help-block"><?php echo ($msg); ?></span>
				<input type="hidden" name="title_id" value="<?php echo ($_GET['id']); ?>">
				<div class="input-group bottom col-md-8 col-md-offset-2">
					<span class="input-group-addon">内容：</span>
					<textarea class="form-control" rows="5" id="content" name="reply"></textarea>
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
</html>