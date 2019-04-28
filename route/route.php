<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// get方式访问think时  直接执行后面定义的闭包函数 
Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
// 用get方式访问 hello/后面传入一个参数  指向index控制器的hello操作
Route::get('hello/:name', 'index/hello');
//当用户访问了路由定义之外的地址，就显示miss方法指定操作
//Route::miss('index/miss');
Route::get("hi/:name",function($name){
	return "你好,".$name;
});

//Route::any("login","admin/login/login");

return [

];
