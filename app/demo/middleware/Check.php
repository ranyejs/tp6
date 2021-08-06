<?php


namespace app\demo\middleware;


class Check {
    public function handle($request,\Closure $next){
        //自定义验证操作
        echo 1;

        return $next($request);
    }

    /**
     * 中间件结束调度
     * 可以用来打印一些日志记录
     * @param \think\Response $response
     */
    public function end(\think\Response $response){
        //
    }
}