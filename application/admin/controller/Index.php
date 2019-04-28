<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use think\facade\Session;
use think\Db;

class Index extends  Controller {
	
	//登陆
	public function index(){
		if(Request::isPost()){
			$where=[];
			$where['name']=input('post.name');
			$where['pwd']=md5(input('post.pwd'));
       //两种方法获取表单的值   
		//$data=Request::param();
			
			$re=Db::table('user')->where($where)->find();
//			dump($re);
			if($re){
				Session::set('id',$re['id']);
				//echo Session::get('id',$re['id']);
				$this->success('登陆成功','riadd');
			}else{
				$this->error('登陆失败');
			}
		}else{
			
			return $this -> fetch();
		}
		
	}
	
	//日志添加
	public function riadd(){
		if(Request::isPost()){
			$a=Session::get('id');//取出session 给下面的uid
			  $data1=date('Y:m:d',time());//获取系统日期
			   $data2=date('Y:m:d h:i:s',time());//获取系统日期时间
//			   $home=date('G',time());//获取时间
//			   $null="";
//			   if($home<12){
//			   	 $where=[$a,'time1'=>date("Y-m-d",strtotime("-1 day"))];
//			   }
			   //dump($where);
			  $data=[
				'data1'=>$data1,
              'zj'=>input('zj'),
              'jh'=>input('jh'),
              'th'=>input('th'),//这两句是接收form表提交的数据
              'uid'=>$a,
            ];
			if(db('rz')->insert($data)){
				Db::name('user')
		    ->where('id',$a )
		    ->update(['time2' => $data2]);
				$this->success('添加成功','riadd');
				
			}else{
				$this->error('添加失败');
			}
		}else{
			return $this -> fetch();
			
		}
	}
	//日志查看
	public function riindex(){
		
			$a=Session::get('id');
		$where=[
			'uid'=>$a,//接受uid
		];
		$type=Db::table('rz')->where($where)->select();
		$this->assign("list",$type);
	
    	return $this->fetch();
	}
	
}