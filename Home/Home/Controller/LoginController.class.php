<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    function login(){
    	//用户登录验证
    	if($_POST){
	    	$user=M('User');
	    	$_POST['password']=md5($_POST['password']);
	    	$user->last_time=time();
	    	$row=$user->where($_POST)->save();
	    	if($row){
	    		session("username",$_POST['username']);
	    		session("login",1);
	    		redirect(U('index/index'));
	    	}else{
	    		$msg='用户名或密码错误';
	    	}
	    	$this->assign("msg",$msg);
    	}
    	$this->display("login");
    }
    //处理用户提出请求
    function logout(){
    	session(null);
    	session('[destroy]');
    	cookie(null);
    	$this->success("退出登陆成功");
    }
    //处理用户注册请求
    function register(){
    	if($_POST){
	    	$user=D("User");
	    	if($user->create()){
	    		if($user->add()){
	    			session("username",$_POST['username']);
	    			session("login",1);
	    			$this->success('注册成功',U('index/index'));
	    			// redirect(U('index/index'), 0, '注册成功');
	    			exit();
	    		}else{
	    			$this->error('注册失败，请重试',U('login/register'));
	    		}
	    	}else{
	    		$this->error($user->getError(),U('login/register'));
	    	}
    	}
	    $this->display("register");
    }
}