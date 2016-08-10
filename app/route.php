<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    'note/[:id]' => ['index/note/note', ['method' => 'get'], ['id' => '\d+']],
    'art' => 'index/note/art',
    'edit/[:id]' => ['index/note/edit', ['method' => 'get'], ['id' => '\d+']],
    'project' => 'index/project/project',
    'me' => 'index/me/me',
    'log' => 'index/log/log',
    'contact' => 'index/me/contact',
    'list' => 'index/note/search',
    'proIntro' => 'index/project/proIntro',
    'haier' => 'index/project/haier',
    'dir/[:id]' => ['index/index', ['method' => 'get'], ['id' => '\d+']],

];
