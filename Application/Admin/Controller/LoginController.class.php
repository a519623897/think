<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-2
 * Time: 下午2:43
 */

namespace Admin\Controller;


use Think\Controller;
use Think\Verify;

class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function login(){
        if(!$_POST) die();
        $verify = new Verify();
        if(!$verify->check($_POST['code'])){
            $this->error('验证码错误');
        }
        $M_user = M('user');
        $username = I('username');
        $password = I('password');
        $info  = $M_user->where(array('username'=>$username))->find();
        if(!$info){
            $this->error('账号或者密码错误1');
        }
        if($info['password']!=md5($password)){
            $this->error('账号或者密码错误');
        }
        session('uid',$info['id']);
        session('username',$info['username']);
        $this->redirect('Index/index');
    }
    /**
     * 验证码
     */
    public function verify(){
        $verify = new Verify();
        $verify->entry();
    }

}