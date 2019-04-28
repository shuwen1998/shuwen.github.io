<?php
namespace app\home\controller;
use think\Controller;
use think\facade\Request;
use think\Db;

class Index extends  Controller {


	
public function  index(){

    	return $this->fetch();
	}
	
}