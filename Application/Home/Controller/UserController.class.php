<?php
namespace Home\Controller;
use Think\Controller;
use Vendor\StackFull;

class UserController extends Controller
{
//    public $user_model;
//    public function __construct()
//    {
//        $user = D('user');
//    }
    public function index(){
        echo '成功';
    }
    //注册
    public function reg()
    {
        if(IS_POST){
            $user = D('user');
            $uname = I('post.uname');
            $mobile = I('post.mobile');
            $email = I('post.email');
            $password = I('post.password');
            $passwords = I('post.passwords');
            $vcode = I('post.vcode');
            $error = array();
            //检测验证码
            if(!$this->checkVerify($vcode)){
                array_push($error,(array('info'=>'验证码错误*-','status'=>1)));
            }
            //检测密码
            if(!(strlen($password)>=6)){
                array_push($error,(array('info'=>'密码必需大于6位','status'=>2)));
            }elseif($password != $passwords){
                array_push($error,(array('info'=>'两次密码不一致','status'=>2)));
            }
            //检测邮箱
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if (!(preg_match( $pattern, $email)) ){
                array_push($error,(array('info'=>'邮件不合法','status'=>3)));
            }elseif($user->checkEmail($email)){
                array_push($error,(array('info'=>'邮件已注册','status'=>3)));
            }
            //检测用户名
            if(!(strlen($uname) >= 6)){
                array_push($error,(array('info'=>'用户名必需大于6位','status'=>4)));
            }elseif($user->checkUser($uname)){
                array_push($error,(array('info'=>'用户名已经存在','status'=>4)));
            }
            //检测电话号码
            $pattern = '/^1[34578]{1}\d{9}$/';
            if(!(preg_match( $pattern, $mobile))){
                array_push($error,(array('info'=>'电话不合法','status'=>5)));
            }elseif($user->checkMobile($mobile)){
                array_push($error,(array('info'=>'电话已经注册','status'=>5)));
            }
            $cip = get_client_ip();
            if($error){
                $this->ajaxReturn($error);
            }elseif($user->addUser($uname,$mobile,$email,$password)){
                $this->ajaxReturn(array('info'=>'成功','status'=>0));
            }
        }else{
            $this->display();
        }
    }

//    登录
    public function login()
    {
        if(IS_POST){
            $user = D('user');
            $uname = I('post.uname');
            $vcode = I('post.vcode');
            if(!$this->checkVerify($vcode)){
                $this->ajaxReturn(array('info'=>'验证码错误*-','status'=>4));
            }
            if(strpos($uname, "@")!==false){
                $userinfo = $user->getUserByEmail($uname);
            }elseif (preg_match('#1[3|4|5|7|8]\d{9}#', $uname)>0){
                $userinfo = $user->getUserByMobile($uname);
            }else{
                $userinfo = $user->getUserByUname($uname);
            }
            $password = I('post.password');
            $uid = $userinfo['uid'];
            $salt = $userinfo['salt'];
            if(!($uid)){
                $this->ajaxReturn(array('info'=>'用户不存在','status'=>2));
            }
            $ret = $user->checkPassword($uid,$password,$salt);
            if($ret){
                cookie('uid',$uid);
                cookie('uname',$uname);
                $this->ajaxReturn(array('info'=>'成功','status'=>1));
            }else{
                $this->ajaxReturn(array('info'=>'密码错误','status'=>3));
            }
        }else{
            $this->display();
        }
    }

    //验证码
    function vcode()
    {
        $vcode = new StackFull\Verifycode();
        $vcode->main();
    }
    //检测验证码
    function checkVerify($vcode){
        return $_SESSION['vcode'] == $vcode;
    }
    public function test(){
        $user = D('user');
        $data = $user->selectUser();
        dump($data);
    }
}

