<?php
namespace app\index\model;

use think\Model;

class Message extends Model{


    public function getTimeAttr($value) {
        return date('Y-m-d H:i:s',$value);
    }


    public function getIpAdAttr($value,$data) {
        $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' .$data['ip'];
        // 1. 初始化一个cURL会话
        $ch = curl_init();
        // 2. 设置请求选项, 包括具体的url
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 3. 执行一个cURL会话并且获取相关回复
        $info = curl_exec($ch);
        // 4. 释放cURL句柄,关闭一个cURL会话
        curl_close($ch);
        $info = ltrim($info, 'var remote_ip_info = ');
        $info = json_decode(rtrim($info, ';'));
        return $info->country . '->' . $info->province . '->' . $info->city;
    }


}