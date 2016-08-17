<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <meta name="keywords" content="蓝宝石网络科技 www.lbsnet.cn">
    <meta name="description" content="武汉蓝宝石网络科技 www.lbsnet.cn">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/Application/Admin/View/Public/css/bootstrap.min14ed.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/font-awesome.min93e3.css" rel="stylesheet">

    <link href="/Application/Admin/View/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Application/Admin/View/Public/css/style.css" rel="stylesheet">

    <script src="/Application/Admin/View/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/Application/Admin/View/Public/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">LBS</h1>

            </div>
            <h3>欢迎使用蓝宝石</h3>

            <form class="m-t" role="form" action="<?php echo U('Admin/Login/login');?>">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="用户名" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="password" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="验证码" name="code" style="width: 100px;display: initial; float: left;" required="">
                    <img src="<?php echo U('Admin/Login/verify');?>" id="imgcode"  />
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>


<script type="text/javascript">
 $(function(){
    $("#imgcode").click(function(){
        var src=$(this).attr('src');
        $(this).attr('src',src+'?'+Math.random());
    });
  
})
</script>

        </div>
    </div>

    
</body>
</html>