<?php
return array(
  //'配置项'=>'配置值'

    //数据库配置
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'hsdcw',          // 数据库名
    'DB_USER'               =>  'hsdcw',      // 用户名
    'DB_PWD'                =>  'hsdcw123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'hsdcw_',    // 数据库表前缀
    'DB_PARAMS'             =>  array(), // 数据库连接参数    
    'DB_DEBUG'              =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号



    'SHOW_ERROR_MSG'        => true,    // 显示错误信息
    'SHOW_PAGE_TRACE'       => true,     //显示trace信息  


    //验证码配置
    
    'verify' => array(
        'fontSize' => 14, // 验证码字体大小
        'length' => 1, // 验证码位数
        'useNoise' => false, // 关闭验证码杂点
        'fontttf'  => '4.ttf' , //验证码字体
        // 'useZh' =>true, //开启中文验证码
        'zhSet'=>'我爱你',
        // 'codeSet'=>'122',
        'zhSet' => '蓝宝石',
        'imageW' =>120,
        'imageH'   =>30,
      
        ),

     // 文件上传配置
     'upload' => array(
          'maxSize'    =>    3145728,
          'rootPath'   =>    './Upload/',
          'saveName'   =>    array('uniqid',''),
          'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
          'autoSub'    =>    true,
          'subName'    =>    array('date','Ymd'),
      ),


     
     /* Cookie设置 */
    'COOKIE_EXPIRE'         =>  0,       // Cookie有效期
    'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
    'COOKIE_PATH'           =>  '/',     // Cookie路径
    'COOKIE_PREFIX'         =>  'chenchu_',      // Cookie前缀 避免冲突
    'COOKIE_SECURE'         =>  false,   // Cookie安全传输
    'COOKIE_HTTPONLY'       =>  '',      // Cookie httponly设置


   // 'DEFAULT_GROUP'      =>'Home',
   
  // 开启路由
    'URL_ROUTER_ON'   => true, 
    'URL_ROUTE_RULES'=>array(
       'H_N_d/:id\d'              => 'Home/News/detail',//文章详情页路由
        // 'house'          => array('/Home/Fang/index'),
    ),

    'APP_SUB_DOMAIN_DEPLOY'   => true, // 开启子域名配置
    
    'APP_SUB_DOMAIN_RULES'    =>    array(   
        'house'    => array('Home/Fang'),  // admin.domain1.com域名指向Home模块
        // 'admin'    =>array('Admin/Login'),
    ),

   
   



    

);