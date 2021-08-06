<?php
namespace app\api\validate;
use think\validate;
class User extends Validate{
    protected $rule = [
        'username'=>'require',
        'phone'=>'require|mobile',
        'email'=>'require'
    ];

    protected $message = [
        'username'=>'用户名必须',
        'phone'=>'电话号码不合法'
    ];
    protected $scene = [
        'send_code'=>['phone'],//一个场景
    ];
}