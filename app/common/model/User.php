<?php


namespace app\common\model;


use think\Model;

class User extends Model {
    //protected $prefix = 'luo_';
    public function getDataBySex($sex,$limit){

       $res = $this->where('sex',$sex)
           ->limit($limit)
           ->select()
           ->toArray();
        return $res;
    }
}