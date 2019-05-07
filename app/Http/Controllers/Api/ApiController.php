<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    // 字符串
    public function strPost(){
        $url = "http://vm.api.com/api/str";
        $post_str = "nickname=longbin&email=2569050087@qq.com&age=18";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //需要获取的URL地址
        curl_setopt($ch,CURLOPT_POST,1);    //发送post请求
        curl_setopt($ch,CURLOPT_HEADER,0);  //启用时会将头文件的信息作为数据流输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   //禁止浏览器输出

        curl_setopt($ch,CURLOPT_POSTFIELDS,$post_str);
        $info = curl_exec($ch);

        curl_close($ch);
        return $info;
    }
    // 数组
    public function arrayPost(){
        $url = "http://vm.api.com/api/array";
        $post_arr = [
            'nick_name' => 'longbin',
            'email'     => '2569050087@qq.com',
            'age'       =>  '18'
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
    // json串
    public function jsonPost(){
        $url = "http://vm.api.com/api/json";
        $post_arr = [
            'nick_name' => 'longbin',
            'email'     => '2569050087@qq.com',
            'age'       =>  '18'
        ];

        $post_json = json_encode($post_arr);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);  //需要获取的URL地址
        curl_setopt($ch,CURLOPT_POST,1);    //发送post请求
        curl_setopt($ch,CURLOPT_HEADER,0);  //启用时会将头文件的信息作为数据流输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   //禁止浏览器输出

        curl_setopt($ch,CURLOPT_POSTFIELDS,$post_json);
        curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type:text/plain']);

        $info = curl_exec($ch);

        curl_close($ch);
        return $info;
    }
    public function request(){
        $url = "http://vm.api.com/api/restrict";
        $post_arr = [
            'nick_name' => 'longbin',
            'email'     => '2569050087@qq.com',
            'age'       =>  '18'
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
}
