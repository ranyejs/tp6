<?php


namespace app\common\lib\sms;


class TxunyunSms implements BaseSms {

    public static function sendCode($phone){
        return true;
    }

}