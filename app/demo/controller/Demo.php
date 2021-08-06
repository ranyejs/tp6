<?php


namespace app\demo\controller;

use app\common\business\user as UserService;
use app\BaseController;
use think\Exception;

class Demo extends BaseController {
    public function Index(){
        print_r(2);
        //echo $dd;exit;
        //throw new \think\exception\HttpException(302,'dsfsd');


        $id = $this->request->param('id',0,'int');
//        if(empty($id)){
//            return show(config('status.error'),'请求参数不能为空');
//        }
        //查询数据
        $service = new UserService();
        $res = $service->getDataBySex($id);
        halt($res);
    }
}