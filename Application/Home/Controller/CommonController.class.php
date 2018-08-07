<?php

    namespace Home\Controller;

    use Think\Controller;

    /**
     *
     */
    class CommonController extends Controller
    {

        protected $db;

        function _initialize()
        {

            if (method_exists($this, '__auto')) {
                $this->__auto();
            }
//            if (empty(session('user_info')) || empty(session('user_info.username')) || empty(session('user_info.user_id'))) {
//
//                $this->ajaxReturn(['status' => false, 'msg' => '请先登录！']);
//            }

        }


    }
