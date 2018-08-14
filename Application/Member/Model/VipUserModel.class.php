<?php

namespace Member\Model;

use Think\Cache\Driver\Redis;
use Think\Model;
use Think\Verify;

//会员表
class VipUserModel extends Model
{
    
    protected $tableName = "vipuser";
    
    protected $_validate = [
        
        [ 'mobile', 'require', '手机号必填！' ], // 在新增的时候验证name字段是否唯一
        [ 'mobile', '', '手机号已经存在！', 0, 'unique', 1 ], // 在新增的时候验证name字段是否唯一
        [ 'mobile', 'checkMobile', '手机格式不正确！', 0, 'callback' ], // 自定义函数验证密码格式
        
        
        [ 'password', 'require', '密码必填！' ], // 在新增的时候验证name字段是否唯一
        [ 'password', 'checkPassword', '6-16位密码，区分大小写，不能用空格！', 0, 'callback' ], // 自定义函数验证密码格式
        
        [ 'mobile-code', 'require', '短信验证码必填！' ], //默认情况下用正则进行验证
        [ 'mobile-code', 'integer', '短信验证码不正确！' ], //默认情况下用正则进行验证
        [ 'mobile-code', 'checkMobileCode', '短信验证码不正确！', 0, 'callback' ], //默认情况下用正则进行验证
        
        [ 'verify', 'require', '图像验证码必填！' ], //默认情况下用正则进行验证
        [ 'verify', 'checkVerify', '图像验证码不正确！', 0, 'callback' ], //默认情况下用正则进行验证
    ];
    
    protected $mobile = '';
    
    protected function checkMobile ( String $mobile = '' )
    {
        if ( !preg_match("/^1[345678]{1}\d{9}$/", $mobile) ) {
            return false;
        }
        $this->mobile = $mobile;
        return true;
    }
    
    protected function checkPassword ( String $password = '' )
    {
        if ( !preg_match("/[0-9a-z]{6,16}$/i", $password) ) {
            return false;
        }
        return true;
    }
    
    //检测短信验证码
    protected function checkMobileCode ( int $mobile_code )
    {
        $redis = new Redis();
        $res = $redis->get($this->mobile);
        if ( $res != $mobile_code || !$res ) {
            return false;
        }
        return true;
    }
    
    //检测图像验证码
    protected function checkVerify ( String $verify_code, String $mobile = '' )
    {
        $verify = new Verify();
        return $verify->check($verify_code, $mobile);
    }
    
    //字段映射
//    protected $_map=[
//        'mobile'=>'mobile',
//        'password'=>'pwd',
//    ];
    
    protected $_scope = [
        
        'normal' => [
            'where' => [ 'uid' => 3 ], // 把表单中的mail映射到数据表的email字段
        ],
    
    ];
    
    
    public function UserInfo ()
    {
        $user_info = self::field('')->find(session('user_info.user_id'));
        if ( !empty($user_info) )
            return $user_info;
        return [];
        
    }
    
}
