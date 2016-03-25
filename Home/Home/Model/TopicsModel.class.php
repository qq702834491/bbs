<?php 
namespace Home\Model;
use Think\Model;
class TopicsModel extends Model{
	protected $_auto=array(
		array("sent_time","time",1,"function"),
		array("last_time","time",3,"function"),
		array("username","getUsername",1,"callback"),
	);

	protected $_validate=array(
		array("title","require","标题不能为空"),
		array("content","require","内容不能为空"),
	);
	function getUsername(){
		return session('username');
	}
}

 ?>