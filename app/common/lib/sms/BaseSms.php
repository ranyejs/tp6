<?php
namespace app\common\lib\sms;
interface BaseSms{
    public static function sendCode($phone);
}