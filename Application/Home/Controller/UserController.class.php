<?php
namespace Home\Controller;
use Think\Controller;
use Vendor\StackFull;

class UserController extends Controller
{
    //注册
    public function reg()
    {
        $this->display();
    }

    //获取注册信息
    public function reg_submit()
    {

    }

    //登录
    public function log()
    {
        $this->display();
    }

    //获取登录信息
    public function log_submit()
    {

    }

    //验证码
    function vcode()
    {
        $vcode = new StackFull\Verifycode();
        $vcode->main();
//        $this->display();
    }


}

