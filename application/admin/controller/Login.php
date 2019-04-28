<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Login extends  Controller {
	public function login(Request $req) {
		if ($req -> isPost()) {
			return "post访问";
		} elseif($req->isMobile()){
			return "手机访问";
		}
		else {
			$this -> assign("title", "欢迎登录");
			return $this -> fetch();
		}
	}

	//空操作
	public function _empty() {
		return "没有这个操作";
	}

}
?>