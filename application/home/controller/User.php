<?php
namespace app\home\controller;
use think\Controller;
use think\facade\Request;
use think\Db;
class User extends  Controller {

	
	//用户添加
	public function add(){
		if(Request::isPost()){
			  $data=[
              'name'=>input('name'),
              'pwd'=>md5(input('pwd')),//这两句是接收form表提交的数据
            ];
			if(db('user')->insert($data)){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			return $this -> fetch();
		}
	}
	//查看用户
	public function  index(){
		$type=Db::table('user')->select();


		$this->assign("list",$type);

    	return $this->fetch();
	}
	//查看日志
	public function riindex(){
		$where[]=['time1','like','%'.input("get.chaxun").'%'];
		$type=Db::table('user')
		->alias('a')
		->join('rz w','a.id = w.uid')
		->where($where)
		->select();
		
		$this->assign("list",$type);

    	return $this->fetch();
	}
	//日志详情
	public  function xqing(){
		$where=[
			'id'=>input('id'),
			
		];
		$type=Db::table('rz')->where($where)->find();
		
		$this->assign("list",$type);
		return $this->fetch();
	}
	//用户删除
	public function del(){
		$a=input('id');

			//$type=Db::table('rz')->where('id',$a)->delete();
			$type=Db::table('user')->delete($a);
			//dump($type);
			if($type){
				$this->success('删除成功','index');
			}else{
				$this->error('删除失败');
			}
	}
}