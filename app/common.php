<?php
// 应用公共文件
function show($status,$message,$data=[],$httpStatus=200){
    $arr['status'] = $status;
    $arr['message'] = $message;
    $arr['data'] = $data;
    return json($arr,$httpStatus);
}
