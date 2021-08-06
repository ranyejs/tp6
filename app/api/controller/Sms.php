<?php


namespace app\api\controller;
use app\common\business\Sms as serviceSms;
use think\Validate;

class Sms {
    public function sendCode(){
        $phone = input('phone_num','','trim');
        //halt($phone);
        $data = ['phone'=>$phone];
        try {
            validate(\app\api\validate\User::class)->scene('send_code')->check($data);
        }catch (\think\exception\ValidateException $e){
            return show(config('status.error'),$e->getMessage());
        }
        $res = serviceSms::sendCode($phone,'ali');
        if(!$res){
            return show(config('status.error'),'发送失败1');
        }
        return show(config('status.success'),'发送成功');
        //return show(config('status.success'),'ok');
    }
}