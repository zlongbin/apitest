<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
	    phpinfo();
});

// api测试
Route::get('/api/str',"Api\ApiController@strPost");
Route::get('/api/array',"Api\ApiController@arrayPost");
Route::get('/api/json',"Api\ApiController@jsonPost");
Route::get('/api/request',"Api\ApiController@request");
// 用户注册、登录
Route::get('/user/reg',"User\UserController@reg");
Route::get('/user/login',"User\UserController@login");
Route::get('/user/my',"User\UserController@my");

Route::get('/login/index',"User\UserController@index")->middleware("CheckLoginToken");