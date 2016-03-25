<?php 
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	protected $_auto = array(
		array('password','md5',3,'function'),
		array('addtime','time',1,'function'),
		array('status','1',1,'string')
	);
	protected $_validate=array(
		array('username','','用户名已存在',0,'unique',1),
		array('username','require','用户名不能为空'),
		array('password','require','密码不能为空'),
		array('email','require','邮箱地址不能为空'),
		array('phone','require','手机号码不能为空'),
		array('vcode','require','验证码不能为空'),
		array('username','/^[A-Za-z]+[A-Za-z0-9]*$/','用户名为字母+数字组合',1,'regex',3),
		array('email','email','邮箱格式不正确'),
		array('password','6,16','密码长度不符合要求',1,'length',3),
		array('conpwd','password','两次输入的密码不一致',1,'confirm'),
		array('phone','/^1\d{10}$/','手机号码无效',1,'regex'),
		array('vcode','check_verify',"验证码不正确",1,'callback'),
		array('xieyi','agree','只有同意协议才能获取注册资格',1,'equal'),
	);
	function check_verify($code, $id = ''){    
		$verify = new \Think\Verify();    
		return $verify->check($code, $id);
	}
}	
 ?>