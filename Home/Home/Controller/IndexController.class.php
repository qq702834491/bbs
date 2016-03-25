<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //分页
    public function index(){
    	$Topics=M("Topics");
        $count = $Topics->count();// 查询满足要求的总记录数
        $length=15;
        $Page  = new \Think\Page($count,$length);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('theme',' %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $this->page  = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->list  = $Topics->order('last_time desc')->limit($Page->firstRow,$length)->select();
        $this->display(); // 输出模板
    }
    //验证码
    function verify(){
    	$verify = new \Think\Verify();
    	$verify->length=4;
    	$verify->fontSize=14;
    	$verify->fontttf="5.ttf";
    	$verify->imageW=100;
    	$verify->imageH=30;
    	$verify->entry();
    }
}