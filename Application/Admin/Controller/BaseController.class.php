<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 16-3-2
 * Time: 下午2:38
 */

namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {
    public function _initialize(){
        if(!$_SESSION['uid'] || !$_SESSION['username']){
            $this->redirect('Login/index');
        }
    }
}