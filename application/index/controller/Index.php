<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends  Controller
{
	/**
	 * 前台首页
	 */
    public function index()
    {
    	//查询所有的类型 赋值给模板变量
    	$type=Db::table('typeinfo')->select();
		$this->assign("type",$type);
    	//查询最新的10条新闻 赋值给模板变量
    	$news=Db::table('newsinfo')->order('id desc')->limit(10)->select();
		$this->assign("news",$news);
    	//调用模板输出
    	return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
	public function test(){
		return url("admin/login/login");
	}
	public function miss(){
		return "访问出错";
	}
}
