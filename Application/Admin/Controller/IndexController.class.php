<?php

namespace Admin\Controller;
use Think\Controller;

/**
* 
*/
class IndexController extends CommonController
{
    
    //显示后台登录后首页
    public function index(){
         $userinfo=M('user')->where(array('username'=>session('username')))->find();
         $this->assign('userinfo',$userinfo);//获取登录者的信息
         $this->display();
     }

}

?>