<?php


namespace app\common\lib\sms;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class AliyunSms implements BaseSms {
    /**
     * 使用AK&SK初始化账号Client
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @return Dysmsapi Client
     */
    public static function sendCode($phone){
        return true;
        //echo $phone;exit;
        $accessKeyId = 'CdJQ903r68BcLX5F';
        $accessKeySecret = 's84n14DuEnreeTaj9Mz4u9hPbmLdNi';
        AlibabaCloud::accessKeyClient($accessKeyId, $accessKeySecret)
            ->regionId('cn-hangzhou')
            ->asDefaultClient();
        try {
            $result = AlibabaCloud::rpc()
                ->product('SMS_220637904')
                // ->scheme('https') // https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->host('dysmsapi.aliyuncs.com')
                ->options([
                    'query' => [
                        'PhoneNumbers' => $phone,
                        'SignName' => "重庆华侨城",
                        'TemplateCode' => "SMS_220637904",
                        'code' => rand(1000,9999),
                    ],
                ])
                ->request();
            //halt($result);
//            if($result->getStatusCode()==200){
//                return true;
//            }
            print_r($result->toArray());
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }

        //return true;
    }

}