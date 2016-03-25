<?php 
namespace Home\Model;
use Think\Model;
class ReplyModel extends Model{
	protected $_auto=array(
		array('username','getUsername',1,'callback'),
		array('sent_time','time',1,'function'),
	);
	protected $_validate=array(
		array("reply","require","回复不能为空"),
	);
	function getUsername(){
		return session('username');
	}
}
 ?>