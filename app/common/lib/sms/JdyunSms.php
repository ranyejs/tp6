<?php


namespace app\common\lib\sms;


class JdyunSms implements BaseSms {

    public static function sendCode($phone){
        return true;
    }

}