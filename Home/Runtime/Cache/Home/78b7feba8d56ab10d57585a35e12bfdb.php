<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发表新帖</title>
	<style>
		span{
			color: red;
			font-size: 13px;
		}
	</style>
</head>
<body>
	<span><?php echo ($msg); ?></span>
	<form action="/bbs/index.php/Home/Publish/publish" method="post">
		<p>标题：<input type="text" name="title"></p>
		<p>内容：<textarea name="content"cols="30" rows="10"></textarea></p>
		<p><input type="submit" value="发表"></p>
	</form>
</body>
</html>