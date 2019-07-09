<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //
    public function reg(){
        $url = "http://vm.api.com/user/reg";
        $post_arr = [
            'username'  => 'longbin',
            'pwd'       =>  'admin123',
            'qpwd'      =>  'admin123',
            'email'     => '2878094450@qq.com',
            'tel'       =>  15720386520
        ];
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //需要获取的URL地址
        curl_setopt($ch,CURLOPT_POST,1);    //发送post请求
        curl_setopt($ch,CURLOPT_HEADER,0);  //启用时会将头文件的信息作为数据流输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   //禁止浏览器输出

        curl_setopt($ch,CURLOPT_POSTFIELDS,$post_arr);

        $info = curl_exec($ch);

        curl_close($ch);
        return $info;
    }
    public function login(){
        $url = "http://vm.api.com/user/login";
        $post_arr = [
            'email' =>  '2878094450@qq.com',
            'password'  => 'admin123'
        ];
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //需要获取的URL地址
        curl_setopt($ch,CURLOPT_POST,1);    //发送post请求
        curl_setopt($ch,CURLOPT_HEADER,0);  //启用时会将头文件的信息作为数据流输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   //禁止浏览器输出

        curl_setopt($ch,CURLOPT_POSTFIELDS,$post_arr);

        $info = curl_exec($ch);

        curl_close($ch);
        return $info;
    }
    public function my(){
        $url = "http://vm.api.com/user/my";
        $post_arr = [
            'token' =>  "bc40ae337f0a2a96",
            'uid'  => 2
        ];
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //需要获取的URL地址
        curl_setopt($ch,CURLOPT_POST,1);    //发送post请求
        curl_setopt($ch,CURLOPT_HEADER,0);  //启用时会将头文件的信息作为数据流输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   //禁止浏览器输出

        curl_setopt($ch,CURLOPT_POSTFIELDS,$post_arr);

        $info = curl_exec($ch);

        curl_close($ch);
        return $info;
    }
    public function index(){
        return view("Login/Index");
    }
}
