<?php

namespace Member\Model;

use Think\Model;

//会员表
class VipUserModel extends Model
{

    protected $tableName = "vipuser";

    protected $_validate = [

        ['mobile', 'require', '手机号必填！'], // 在新增的时候验证name字段是否唯一
        ['mobile', '', '手机号已经存在！', 0, 'unique', 1], // 在新增的时候验证name字段是否唯一
        ['mobile', 'checkMobile', '手机格式不正确！', 0, 'callback'], // 自定义函数验证密码格式

        ['mobile_verify', 'require', '验证码必须！'], //默认情况下用正则进行验证
        ['password', 'require', '密码必填！'], // 在新增的时候验证name字段是否唯一
        ['password', 'checkPassword', '6-16位密码，区分大小写，不能用空格！', 0, 'callback'], // 自定义函数验证密码格式
    ];

    protected  function checkMobile(String  $mobile){
        if(!preg_match("/^1[345678]{1}\d{9}$/",$mobile)){
            return false;
        }
        return true;
    }

    protected  function checkPassword(String  $password){
        if(!preg_match("/[0-9a-z]{6,16}$/i",$password)){
            return false;
        }
        return true;
    }

    //字段映射
//    protected $_map=[
//        'mobile'=>'mobile',
//        'password'=>'pwd',
//    ];

    protected $_scope = array(

        'normal' => [
            'where' => ['uid' => 3], // 把表单中的mail映射到数据表的email字段
        ]

    );


}
