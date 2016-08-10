<?php
namespace app\index\validate;

use think\Validate;

class Note extends Validate
{
    // 验证规则
    protected $rule = [
        ['title', 'require', '名称不能为空'],
        ['content', 'require', '内容不能为空'],

    ];


}