<?php

class IndexController extends Corog\Controller {
	public function __construct() {

	}
 
	public function ShowAction() {
		$m = $this->model("testa");
		echo "\r\n<br> model table=".$m->_table."<br>\r\n";
	
		//$ret = $m->table("world")->data( array( 'id'=>array('i',120) ) )->where('id = ? ', array(100))->update();
		//$ret = $m->table("world")->where('id = ?', array( array('i',100) ) )->find();
		//$ret = $m->table("world")->where('id = ?', array( array('i',120) ) )->delete();

		//$ret = $m->table("world")->data( array( 'id'=>array('i',120) ) )->insert();
		//$ret = $m->table("world")->limitCount(5)->find();

		$ret = $m->table("world")->limit(5,10)->find();
		if($ret===false) {
			echo "error";
			var_dump($m->getError());
		}
		else
		{
			var_dump($ret);
			var_dump($m->getAffectedRows());
			var_dump($m->getInsertId());
		}
		
		$k = new ImgHelper();
		$this->assign("username", "goodyork");
		$this->assign("email", "sadly@phpx.com");
		$this->display();
		printf("\r\n<br>memory used: %01.2f mb", intval(memory_get_usage())/1024/1024);
	}

	public function ApiAction() {
		$this->assign("result_code", 200);
		$this->assign("username", "goodyork");
		$this->assign("email", "sadly@phpx.com");
		$this->apiResult();
	}	
}