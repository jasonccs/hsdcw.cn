<?php

namespace Member\Controller;

use Think\Cache\Driver\Redis;
use Think\Controller;
use Think\Verify;

class VerifyController extends Controller
{

    /**
     * /**
     * [verify 生成验证码]
     */
    public function verify(){
        ob_end_clean();//清除缓存
        //C('verify'); //读取Common/conf/config.php验证码的配置
        $verify=new Verify(C('verify'));
        $verify->entry();
    }


    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    function checkVerify($code, $id = ''){
        $verify = new Verify();
        return $verify->check($code, $id);
    }

    public function aa()
    {
//        session('user_name','2289');

//         session('user_id',11);
        dump(session('user_info'));
        dump(session('user_info.username'));
        dump(cookie('username'));
//
//        session(array('name' => 'abc', 'id' => 'aaa', 'expire' => 10));
//        session('a', '12345');
//        echo session('a');//12345
//
//        $_SESSION['expiretime'] = time() + 10;
//        $_SESSION['a']=1111111;
//        session_id('aaa');
    
//        $session_data['data'] = 1111;
//        $session_data['expire'] = time()+10;
//        $_SESSION['a'] = $session_data;
//
//        dump( session('a'));//12345
        
//        echo session('username');
//        echo session('user_id');
//        $redis = new Redis();
//        $redis->set('test','hello world!');
//        $redis->set('13554078820','hello world',120);
//
//        $res=$redis->get('13554078820');
//        dump($res);
//        if($res!='hello world'){
//            return false;
//        }
//        dump( $redis->get('18086506759'));
//        dump($redis->get('18086506759')=='120');
    }


}
