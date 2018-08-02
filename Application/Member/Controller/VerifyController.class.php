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
        $redis = new Redis();
        $redis->set('test','hello world!');
        dump($redis->get('mobile_code'));
    }


}
