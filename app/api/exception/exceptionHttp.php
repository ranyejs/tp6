<?php
namespace app\demo\exception;
use \think\exception\Handle;
use think\Response;
use Throwable;

class ExceptionHttp extends Handle{
    private $httpStatus = 500;
    /**
     * Render an exception into an HTTP response.
     *
     * @access public
     * @param \think\Request   $request
     * @param Throwable $e
     * @return Response
     */
    public function render($request, Throwable $e): Response
    {
        if(method_exists($e,'getStatusCode')){
            $httpStatus = $e->getStatusCode();
        }else{
            $httpStatus = $this->httpStatus;
        }
        //dump($e->getCode());
        if($e->getMessage()==''){
            return parent::render($request, $e);
        }else{
            return show(config('status.error'),$e->getMessage(),[],$httpStatus);
        }
        // 添加自定义异常处理机制
        //return show(config('status.error'),$e->getMessage(),[],$httpStatus);
        // 其他错误交给系统处理

    }
}