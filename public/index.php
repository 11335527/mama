<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//$mem = new Memcache;
//$mem->connect('127.0.0.1', 11211);
//$arr=['2',4,5,6,8,7,8,8,8];
//$mem->set('key', json_encode($arr),0,60);
//$val = $mem->get('key');
//echo $val;
//phpinfo();exit;
// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');


//define('__SITE__', 'http://www.topp123.com/hishu/public/');
define('__SITE__', 'http://tp.com/');

// 开启调试模式
define('APP_DEBUG', true);
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
