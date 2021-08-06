<?php


namespace app\common\business;

class Sms {
    public static function sendCode($phone,$type){
        //根据$type选择服务商

        $type = ucfirst($type);
        $class = 'app\common\lib\sms\\'.$type.'yunSms';
        $send = $class::sendCode($phone);
        //$send = AliyunSms::sendCode($phone);
        if($send){
            return true;
        }else{
            return false;
        }
    }
}