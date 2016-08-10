<?php
namespace app\index\controller;
use think\Controller;


$url = 'http://127.0.0.1/test.php';//POST指向的链接
$data = array(
    'access_token'=>'thekeyvalue'
);

$json_data = postData($url, $data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);

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
?>