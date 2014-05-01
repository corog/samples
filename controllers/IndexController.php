<?php

class IndexController extends Corog\Controller {
	public function __construct() {

	}
 
	public function ShowAction() {
		$m = $this->model("test");
		echo "\r\n<br> model table=".$m->_table."<br>\r\n";
		$k = new ImgHelper();
		$this->assign("username","goodyork");
		$this->assign("email","sadly@phpx.com");
		$this->display();
		printf("\r\n<br>memory used: %01.2f mb", intval(memory_get_usage())/1024/1024);
	}

	public function ApiAction() {
		$this->assign("result_code",200);
		$this->assign("username","goodyork");
		$this->assign("email","sadly@phpx.com");
		$this->apiResult();
	}	
}