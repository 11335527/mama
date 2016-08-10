<?php
/**
 * Created by zhoukai
 * User: YiDian
 * Date: 2016/6/3
 * Time: 14:55
 */

//转换成几秒前
function time_ago($the_time) {

    $dur=time()-$the_time;
    if ($dur < 0) {
        return $the_time;
    } else {
        if ($dur < 60) {
            return $dur . '秒前';
        } else {
            if ($dur < 3600) {
                return floor($dur / 60) . '分钟前';
            } else {
                if ($dur < 86400) {
                    return floor($dur / 3600) . '小时前';
                } else {
                    if ($dur < 259200) {//3天内
                        return floor($dur / 86400) . '天前';
                    } else {
                        return date('Y-m-d H:i:s',$the_time);
                    }
                }
            }
        }
    }
}



//封装ajax成功返回
function success($mes=''){
    $arr=[
        'content'=>$mes,
        'status'=>1,
    ];
    return $arr;
}
//封装ajax失败返回
function error($mes=''){
    $arr=[
        'content'=>$mes,
        'status'=>0,
    ];
    return $arr;
}

//post 请求数据
function postData($url, $data)
{
    $ch = curl_init();
    $timeout = 300;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, "http://www.jb51.net/");   //构造来路
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $handles = curl_exec($ch);
    curl_close($ch);
    return $handles;
}

//记录日志

function ma_log($type){
    $ip=request()->ip();
    $arr=[
        '218.241.206.122',
        '114.249.212.104',
        '114.249.237.85'
    ];
    if(!in_array($ip,$arr)){

        db('visitor')->insert(['ip'=>$ip,'time'=>time(),'type'=>$type]);
    }
}