<?php
return [
    //'配置项'=>'配置值'


    'TMPL_PARSE_STRING' => array(

        '__PUBLIC__' => __ROOT__ . '/Application/Member/View/Public', // 更改默认的/Public 替换规则
        '__CSS__' => '/Public/css', // 增加新的JS类库路径替换规则
        '__JS__' => '/Public/js', // 增加新的JS类库路径替换规则
        '__IMAGES__' => '/Public/images', // 增加新的JS类库路径替换规则
    ),




    'verify' =>[
        'fontSize' => 14, // 验证码字体大小
        'length' => 2, // 验证码位数
        'useNoise' => false, // 关闭验证码杂点
        'fontttf'  => '4.ttf' , //验证码字体
        // 'useZh' =>true, //开启中文验证码
        'zhSet'=>'我爱你',
        // 'codeSet'=>'122',
        'zhSet' => '蓝宝石',
        'imageW' =>120,
        'imageH'   =>30,
    ],

    /*session设置*/
//    'SESSION_OPTIONS'=>[
//        'expire'=>10,
//        'path'=>TEMP_PATH.'/Session/',
//    ],


];
