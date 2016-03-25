<?php 
namespace Home\Controller;
use Think\Controller;
class PublishController extends Controller{
	function publish(){
		//处理用户发帖请求
		if($_POST){
			$publish=D('Topics');
			if($publish->create()){
				if($publish->add()){
					$this->success("发表成功",U('index/index'),1);
				}else{
					$msg="发表失败";
				}
			}else{
				$this->error($publish->getError(),U('index/index'));
			}
		}
	}
	function read(){
		$topics=M('Topics');
		$this->row=$topics->select($_GET['id']);
		$reply=M('Reply');
		$this->list=$reply->where("title_id=$_GET[id]")->order("sent_time desc")->select();
		$this->display();
	}
	function reply(){
		$reply=D('Reply');
		if($reply->create()){
			if($reply->add()){
				$topics=M('Topics');
				$topics->last_time=time();
				$topics->where("id=$_POST[title_id]")->save();
				$this->success("回复成功","read/id/$_POST[title_id]",1);
			}
		}else{
			echo $reply->getError();
			$this->error($this->getError());
		}
		
		
		
	}
}
 ?>
