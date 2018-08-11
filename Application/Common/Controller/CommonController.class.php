<?php

namespace Common\Controller;
use Home\Widget\NavigateWidget;
use Think\Controller;

/**
*
*/
class CommonController extends Controller{


	
        
         protected $login_status=false; //是否需要开启登录
        
         public function _initialize($status=false)
         {
            
             $this->login_status=$status;
             $this->assign('a','关于我们');

             $all_menu=new NavigateWidget();
             $this->assign('all_menu',$all_menu->navMenu());
             
             if (method_exists($this, '__auto')) {
                 $this->__auto();//房产方法中用到
             }
             
             if ($this->login_status) {
                 if (empty(session('user_info')) || empty(session('user_info.username')) || empty(session('user_info.user_id'))) {
                     $this->ajaxReturn(['status' => false, 'msg' => '请先登录！']);
                 }
             }
            
         }

}

