<?php
/**
 * Created by PhpStorm.
 * User: wsp
 * Date: 2016/7/19
 * Time: 9:21
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    protected $user;
    public function __construct()
    {
        $this->user = M('user');
    }
    //查询一个用户
    public function selectUser(){
        $data = $this->user->find();
        return $data;
    }
    //验证用户名
    public function checkUser($uname){
        $data = $this->user->where(array('uname'=>$uname))->select();
        return $data;
    }
    //验证邮箱
    public function checkEmail($email)
    {
        $data = $this->user->where(array('email' => $email))->select();
        return $data;
    }
    //验证手机号
    public function checkMobile($mobile){
        $data = $this->user->where(array('mobile' => $mobile))->select();
        return $data;
    }
    //加密
    function getPassword($password,$salt){
        return md5($password."123!@#qwe".$salt);
    }
    // 添加
    function addUser($uname,$mobile,$email,$password,$regip){
        $ctime = time();
        $salt = rand(100000,999999);
        $password = $this->getPassword($password, $salt);
        $data = array(
            "uname" => $uname,
            "password" => $password,
            "email" => $email,
            "mobile" => $mobile,
            "regip" => $regip,
            "ctime" => $ctime,
            "salt" => $salt
        );
        return $this->user->data($data)->add();
    }
    function getUserByEmail($email){
        $map['email'] = array("eq",$email);
        return $this->user->where($map)->find();
    }
    function getUserByMobile($mobile){
        $map['mobile'] = array('eq',$mobile);
        return $this->user->where($map)->find();
    }
    function  getUserByUname($uname){
        $map['uname'] = array("eq",$uname);
        return $this->user->where($map)->find();
    }
    function checkPassword($uid,$newpass,$salt){
        $map['uid'] = array("eq",$uid);
        $newpass = $this->getPassword($newpass,$salt);
        $map['password'] = array("eq",$newpass);
        return $this->user->where($map)->find();
    }
}