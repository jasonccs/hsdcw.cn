<?php
return array(
	

	    //'配置项'=>'配置值'

		//模板路径配置
    	'TMPL_PARSE_STRING' =>array(
		
		'__PUBLIC__' =>__ROOT__. '/Application/Admin/View/Public', // 更改默认的/Public 替换规则

		),


    	'URL_HTML_SUFFIX'   =>'', //去掉 .html 后缀


       //验证码配置
        'verify' => [
            'fontSize' => 14, // 验证码字体大小
            'length' => 4, // 验证码位数
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
        'SESSION_OPTIONS'=>[
            'expire'=>3600,
            'path'=>TEMP_PATH,
        
        ],
       
);