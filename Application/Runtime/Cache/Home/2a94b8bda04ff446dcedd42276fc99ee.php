<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="qc:admins" content="1161367665603437636" />
<meta property="wb:webmaster" content="e260609ebcc78022" />
    <title>黄石网|黄石新闻网|黄石门户|黄石地区最大的新闻媒体</title>
    <meta name="keywords" content="黄石新闻|黄石之窗|黄石门户网站|黄石|大冶|阳新|湖北黄石|黄石购物|大冶新闻">
    <meta name="description" content="黄石新闻网,黄石地区最大的新闻门户网站,是一家提供各类信息的综合型门户网站,集新闻,娱乐,军事,房产,汽车,旅游,购物,历史,文化等大型综合网络平台!为黄石人打造的一款网络的媒体.">
    <link href="/Application/Home/View/Public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/main.css" /> 
   
    <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.1.10.2.min.js"></script>
    <script type="text/javascript" src="/Application/Home/View/Public/js/date.js"></script><!--头部日期js-->
    <script type="text/javascript" src="/Application/Home/View/Public/js/dutu.slides.js"></script><!--头部日期js-->
    <script type="text/javascript" src="/Application/Home/View/Public/js/common.js"></script><!--commonjs-->
    <script type="text/javascript" src="/Application/Home/View/Public/js/jquery-131229.js"></script>
             
</head>
<body>
  
        <script type="text/javascript">
         var userloginurl='<?php echo U('Member/Login/login');?>';//
         var curenturl   ='/';
       </script>

       <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.cookie.js"></script> 
       <script type="text/javascript" src="/Application/Home/View/Public/js/vip_userlogin.js"></script> 
       <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/nbase_b7e2fdc.css" />
       
     <!--顶部悬浮导航-->
     <div class="top_xuanfu">
      
          <div class="top_nav">
              <div class="top_tianqi">
                  <span class="date">今天是：</span>
                  <span class="weather">
               
                  <!-- <iframe width="340" scrolling="no" height="40" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=2"></iframe> -->

                  </span>
              </div>
              <div class="top_login">
                <span class="login"> 
                   <?php if( cookie('username') !== null and cookie('userid') !== null): ?><i style="">
                      <img src="<?php echo (cookie('userphoto')); ?>" width="40" height="40"/></i>  
                      <b><a href="" >你好<?php echo (cookie('username')); ?></a></b>
                      <div class="user_center">
                          <ul>
                              <li><a href="">个人中心</a></li>
                              <li><a href="javascript:void(0)" class="outlogin">退出</a></li>
                          </ul>
                      </div> 
                    <?php else: ?>
                      <a href="javascript:void(0)" class="userlogin"> 登录</a> / <a href="javascript:void(0)"> 注册</a><?php endif; ?>

                  </span>

          <span class="msn"> <a href=""> <img src="/Application/Home/View/Public/images/sina.png" width="16" height="16" alt="" title="关注新浪微博"></a>  <a href=""> <img src="/Application/Home/View/Public/images/blog.png" width="16" height="16" alt="" title="关注腾讯微博"></a> <a href=""> <img src="/Application/Home/View/Public/images/weixin.png" width="16" height="16" alt="" title="关注官方微信"></a></span>
          <span class="tell"><img src="/Application/Home/View/Public/images/contact.png" width="16" height="16" alt=""> <b>邮箱：1521910992@qq.com</b></span>
              </div>
          </div>

    </div>


    <!--第二层菜单nav导航-->

    <div class="menu"> 
          <div class="nav_body">
              <div class="logo"><a href="/"><img src="/Application/Home/View/Public/images/logo.png" width="190" height="71" alt=""></a></div>
              <div class="nav">
                   <ul>
                          <li>
                        <p class="b">
                        <a href="<?php echo U('News/index');?>" target="_blank">黄石要闻</a>
                        <a href="<?php echo U('News/hsms');?>" target="_blank">黄石民生</a></p>
                        <p class="b">
                        <a href="<?php echo U('News/hbxw');?>" target="_blank">湖北新闻</a>
                        <a href="#" target="_blank">国内国际</a>
                        </p>
                        <p class="b">
                        <a href="#" target="_blank">文娱体育</a>
                        <a href="#" target="_blank">东楚论坛 </a>
                        </p>
                      </li>
                      <li class="bd"></li>


                      <li>
                        <p class="b2">
                        <a href="#" target="_blank">视频</a>
                        <a href="#" target="_blank">读图</a></p>
                        <p class="b2">
                        <a href="#" target="_blank">专题</a>
                        <a href="#" target="_blank">微博</a></p>
                        <p class="b2">
                         <a href="#" target="_blank">时评</a>
                         <a href="#" target="_blank">人才</a></p>
                      </li>
                      <li class="bd"></li>


                      <li>
                        <p class="b2">
                        <a href="#" target="_blank">汽车</a>
                        <a href="#" target="_blank">房产</a></p>
                        <p class="b2">
                        <a href="#" target="_blank">消费</a>
                        <a href="#" target="_blank">旅游</a></p>
                        <p class="b2">
                        <a href="#" target="_blank">摄影</a>
                        <a href="#" target="_blank">医讯</a></p>
                        <p class="b2">
                        <a href="#" target="_blank">健康</a>
                        <a href="#" target="_blank">财经</a></p>

                      </li>
                      <li class="bd"></li>

                      <li>
                        <p class="b">
                        <a href="#" target="_blank">天天信息</a>
                        <a href="#" target="_blank">在线商城</a></p>
                        <p class="b">
                        <a href="#" target="_blank">投资环境</a>
                        <a href="#" target="_blank">广告业务</a></p>
                       

                      </li>
                      

                      

                      
                   </ul>

              </div>  
          </div>
    </div>



  <!--主体开始-->

   <div class="guanggao">
        <div class="max_gg"><a href="#"><img src="/Application/Home/View/Public/images/g1.jpg" width="1100" height="100" alt=""></a></div>
        <ul>
           <li><a href="#"></a><img src="/Application/Home/View/Public/images/g2.jpg" width="545" height="50" alt=""></li>
           <li class="adv"><a href="#"></a><img src="/Application/Home/View/Public/images/g2.jpg" width="545" height="50" alt=""></li>
           <li ><a href="#"></a><img src="/Application/Home/View/Public/images/g2.jpg" width="545" height="50" alt=""></li>
           <li class="adv" ><a href="#"></a><img src="/Application/Home/View/Public/images/g2.jpg" width="545" height="50" alt=""></li>
             
        </ul>
        
   </div>

   <!--banner 图开始-->
<div class="body_content_first">
      <div class="banner-top-new">
  <div id="wowslider-container1"> 
                       <div class="ws_images">
                          <a href="" target="_blank" alt="光棍节" style="font-size: 0px;"><img src="/Application/Home/View/Public/images/img01.jpg" alt="光棍节" width="650" height="270" id="wows0" ></a>
                           <a href="" target="_blank" alt="光棍节" style="font-size: 0px;"><img src="/Application/Home/View/Public/images/img01.jpg" alt="光棍节" width="650" height="270" id="wows1" ></a>
                            <a href="" target="_blank" alt="光棍节" style="font-size: 0px;"><img src="/Application/Home/View/Public/images/img01.jpg" alt="光棍节" width="650" height="270px" id="wows2" ></a>
                             <a href="" target="_blank" alt="光棍节" style="font-size: 0px;"><img src="/Application/Home/View/Public/images/img01.jpg" alt="光棍节" width="650" height="270" id="wows3" ></a>
                         

                      </div>
      <div class="ws_bullets">
                       <div>
                              <a href="">1</a>
                              <a href="">2</a>
                              <a href="">3</a>
                              <a href="">4</a>
                          </div>
        </div>
      <div class="ws_shadow"></div> 
        <a href="#" class="ws_next"></a><a href="#" class="ws_prev"></a><div class="ws-title" style="display: none;"></div>
     </div>
        <div class="php_class" id="php-top-new-r">
                  <ul>
                <li  class="ldzy"><a href="" target="_blank"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>黄石政要</a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                <li><a href="" target="_blank"><span>[聚会]</span>中央召开党外人士座谈会 习近平主持并发表重要讲话<img src="/Application/Home/View/Public/images/hot.gif" alt=""></a></li>
                </ul>
        </div>
            </div>
      <script type="text/javascript" src="/Application/Home/View/Public/js/lib.js"></script> 
      <script type="text/javascript">
      $(document).ready(function(){
        $("#wowslider-container1").wowSlider({
          effect:"blinds",
          prev:"",
          next:"",
          duration:10*100,
          delay:40*100,
          outWidth:650,
          outHeight:270,
          width:650,
          height:270,
          autoPlay:true,
          stopOnHover:true,
          loop:false,
          bullets:true,
          caption:true,
          controls:true
        });
      });
      </script>
        
      


           <!-- 地区新闻开始-->

            <div class="tab_diqu">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="#" style="color:#fff">黄石新闻</a></li>
                        <li><a href="#">黄石民生</a></li>
                        <li><a href="#">湖北新闻</a></li>
                        <li><a href="#">国内国际</a></li>
                        <li><a href="#">东楚论坛</a></li>

                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                         </ul>

                           <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>

                         <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三26个攻坚任务拿下2/3 固定资产投资增速居省第三</a></h2><span>2015-11-26</span></li>
                           <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                             <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                           <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                             <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                              <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                             <li><a href="">26个攻坚任务拿下2/3 固定资产投资增速居省第三</a><span>2015-11-26</span></li>
                         </ul>
                         

                             <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>
                    </div>
            </div>

           <!-- 地区新闻结束-->

           <script type="text/javascript">
  
               $(function(){

                 $('.tab_diqu .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#b73102','color':'#fff','cursor': 'pointer'});
                     $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none','color':'#000'});
                    $('.tab_diqu .tab_content ul').eq(index).css('display','block');
                    $('.tab_diqu .tab_content ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>


        <!-- 地区新闻开始-->

            <div class="tab_zhuanti">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;color:#fff;"><a href="#" style="color:#fff;">专题视频</a></li>
                        <li><a href="#">拍客</a></li>
                        <li><a href="#">影视</a></li>
                        <li><a href="#">综艺</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                                
                      <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                            <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                          <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                          <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                          <li  class="content01"><img src="/Application/Home/View/Public/images/video.jpg" width="150" height="80"><h2><a href="">李克强应约会见安倍 中韩开启“创时代”</a></h2></li>
                         </ul>

                         <ul style="display:none">
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li>                   
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li>
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li> 
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li>
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li>
                        <li  class="content01"><img src="/Application/Home/View/Public/images/paike.jpg" width="150" height="80"><h2><a href="">流浪狗叼弃婴向住户求援</a></h2></li>
                         </ul>
                <script type="text/javascript">
                                     
                    $(function(){

                           $('.tab_zhuanti .tab ul li').hover(function(){
          
                            var index=$(this).index();
                            $(this).css({'background':'#b73102','color':'#fff','cursor': 'pointer'});
                             $(this).children('a').css('color','#fff');
                            $(this).siblings().children('a').css('color','#000');
                            $(this).siblings().css({'background':'none','color':'#000'});
                            $('.tab_zhuanti .tab_content ul').eq(index).css('display','block');
                            $('.tab_zhuanti .tab_content ul').eq(index).siblings().css('display','none');
                         })
                       })
 
                </script>
                       
                    </div>
            </div>

           <!-- 地区新闻结束-->

        <div class="weibo">
               <iframe width="325" height="210" class="share_self"  frameborder="0" scrolling="no" src=" http://widget.weibo.com/weiboshow/index.php?language=&width=350&height=550&fansRow=1&ptype=0&speed=0&skin=5&isTitle=0&noborder=1&isWeibo=1&isFans=0&uid=2545769230&verifier=b001128f&colors=ffffff,fcfcfc,666666,0082cb,ecfbfd&dpc=1"></iframe>
             <p> <img src="/Application/Home/View/Public/images/weibo.jpg" width="325" height="100" alt=""> </p>
        </div>
     
 </div>

    <!-- 第三部分广告开始-->
      <div class="adv3">
        
            <img src="/Application/Home/View/Public/images/adv2.jpg" width="1100" height="100" alt="">

      </div>
    <!-- 第三部分广告结束-->



    <!-- 第四部分广告开始-->
      <div class="content4">
           <div class="tab_caijing">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href=""  style="color: #fff;">黄石财经</a></li>
                        <li><a href="">黄石企业</a> </li>
                        <li><a href="">保险资讯</a></li>
                        <li><a href="">银行资讯</a></li>
                        <li><a href="">创富志</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                         </ul>

                        
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                          <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                    
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                         <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">湖北研究生平均月薪4328元湖北研究生平均月薪4328元</a></h2><span>2015-11-26</span></li>
                           <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                           <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                              <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                         </ul>
                    </div>
                    <script type="text/javascript">
          
                       $(function(){

                         $('.tab_caijing .tab ul li').hover(function(){
          
                            var index=$(this).index();
                            $(this).css({'background':'#b73102','color':'#fff','cursor': 'pointer'});
                             $(this).children('a').css('color','#fff');
                            $(this).siblings().children('a').css('color','#000');
                            $(this).siblings().css({'background':'none','color':'#000'});
                            $('.tab_caijing .tab_content ul').eq(index).css('display','block');
                            $('.tab_caijing .tab_content ul').eq(index).siblings().css('display','none');
                         })
                       })

                </script>
            </div>
             
                   <div class="shipin">
                         <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href=""  style="color: #fff;">黄石教育</a></li>
                        <li><a href="">消费</a> </li>
                        <li><a href="">健康</a></li>
                        <li><a href="">摄影</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                         </ul>

                        
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                          <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                    
                         <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">湖北研究生平均月薪4328元湖北研究生平均月薪4328元</a></h2><span>2015-11-26</span></li>
                           <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                           <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                              <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                             <li><a href="">湖北研究生平均月薪4328元</a><span>2015-11-26</span></li>
                         </ul>
                    
                    </div>

                   <script type="text/javascript">
          
                       $(function(){

                         $('.shipin .tab ul li').hover(function(){
          
                            var index=$(this).index();
                            $(this).css({'background':'#b73102','color':'#fff','cursor': 'pointer'});
                             $(this).children('a').css('color','#fff');
                            $(this).siblings().children('a').css('color','#000');
                            $(this).siblings().css({'background':'none','color':'#000'});
                            $('.shipin .tab_content ul').eq(index).css('display','block');
                            $('.shipin .tab_content ul').eq(index).siblings().css('display','none');
                         })
                       })

                   </script>

                   </div>


                    <div class="wangkan">
                           <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href=""  style="color: #fff;">东楚网刊</a></li>
                      <li><a href=""  style="color: #fff;">东楚美文</a></li>
                      <li><a href=""  style="color: #fff;">东楚时评</a></li>
                      <li><a href=""  style="color: #fff;">数字报</a></li>   
                       </ul>
                     </div>  

                     <div class="tab_content"  >
                      <ul class="slider" id="slider" > 
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">阳新9个创业项目获省扶持 白沙镇精准扶贫到村到户</a></h2><span>2015-11-26</span></li>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">看准了 文化宫后方两处停车场 一处不对外开放 </a></h2><span>2015-11-26</span></li>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">周先旺主持召开会议　学习贯彻十八届五中全会精神 </a></h2><span>2015-11-26</span></li>
                              <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">我市开通46路公交运营线路　12路公交线将调整延伸 </a></h2><span>2015-11-26</span></li>
                              

                              
                         </ul>

                         <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="100" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                         </ul>
                       
                    </div>
                    <script type="text/javascript" src="/Application/Home/View/Public/js/slider.js"></script>
                  <script type="text/javascript">new slider({id:'slider'})</script>
                    </div>
         <script type="text/javascript">
  
               $(function(){

                    $('.wangkan .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#828282','cursor': 'pointer'});
                    $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none'});
                    $('.wangkan .tab_content ul').eq(index).css('display','block');
                    $('.wangkan .tab_content ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>
      </div>
    <!-- 第四部分广告结束-->


      <!-- 第五部分房产开始-->

      <div class="content5">
        
           <div class="tab_junshi">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="" style="color: #fff;">军事</a></li>
                        <li><a href="">历史</a></li>
                        <li><a href="">科学</a></li>
                        <li><a href="">文学</a></li>
                        <li><a href="">星座</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                             <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                           <li><a href="">李克强应约会见安倍 中韩开启“创时代” 专题</a><span>2015-11-26</span></li>
                         </ul>

                        
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                          <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                      <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                       
                    </div>
            </div>
            <script type="text/javascript">
      
                   $(function(){

                        $('.tab_junshi .tab ul li').hover(function(){
      
                        var index=$(this).index();
                        $(this).css({'background':'#b73102','cursor': 'pointer'});
                        $(this).children('a').css('color','#fff');
                        $(this).siblings().children('a').css('color','#000');
                        $(this).siblings().css({'background':'none'});
                        $('.tab_junshi .tab_content ul').eq(index).css('display','block');
                        $('.tab_junshi .tab_content ul').eq(index).siblings().css('display','none');
                     })
                   })

               </script>
           <div class="tab_fangchan">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="" style="color: #fff;">楼盘大全</a></li>
                        <li><a href="">我要买房</a></li>
                        <li><a href="">我要租房</a></li>
                        <li><a href="">黄石土地</a></li>
                        <li><a href="">楼市行情</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                    
                        
                         <ul>
                               <div class="fangchan_shuaixuan">
                                  <p><b>地理区域</b><a href="#">黄石港区</a><a href="#">西塞山区</a><a href="#">团城山区</a><a href="#">下陆区</a><a href="#">铁山区</a><a href="#">花湖开发区</a><a href="#">大冶</a><a href="#">阳新</a></p>
                                  <p><b>楼盘均价</b><a href="#"><3000</a><a href="#">3000-4000</a><a href="#">4000-5000</a><a href="#">5000-7000</a><a href="#">7000-9000</a><a href="#">9000以上</a></p>
                                  <p><b>楼盘户型</b><a href="#">一室</a><a href="#">二室</a><a href="#">三室</a><a href="#">四室</a><a href="#">五室</a></p>
                               </div>

                               <div class="fangchan_list">
                                 <div class="fangchan_focus">
                                   <ul>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:50万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：花湖开发区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:50万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：花湖开发区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                      <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:50万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：花湖开发区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:50万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：花湖开发区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                   

                                  </ul>

                                   <ul>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:70万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：黄石港区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:70万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：黄石港区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                      <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:70万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：黄石港区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                     <li  class="content01"><img src="/Application/Home/View/Public/images/fangchan.jpg" width="100" height="70"><h2><span><label>价格:70万</label>  <label>面积：120㎡ </label></span><span><label>户型：3室2厅 </label><label>装修标准：毛坯</label></span> <span><label>位置：黄石港区</label><label><img src="/Application/Home/View/Public/images/contact.png">0714-12345678</label></span></h2></li>
                                    

                                  </ul>
                                </div>
                               </div>


                              
                          
                            
                         </ul>
                          <script type="text/javascript" src="/Application/Home/View/Public/js/fangchan_slider.js"></script>
                      <script type="text/javascript">
                      $(function() {
                        $('.fangchan_list').slideFocus();
                        
                      });
                      </script>

                        
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                          <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                      <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                       
                    </div>
            </div>
            <script type="text/javascript">
  
               $(function(){

                 $('.tab_fangchan .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#b73102','cursor': 'pointer'});
                    $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none'});
                    $('.tab_fangchan>.tab_content>ul').eq(index).css('display','block');
                    $('.tab_fangchan>.tab_content>ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>
              
      </div>

    <!-- 第五部分广告结束-->  



    <!-- 第六部分广告开始-->
      <div class="adv3">
        
            <img src="/Application/Home/View/Public/images/adv2.jpg" width="1100px" height="100" alt="">

      </div>
     <!-- 第六部分广告结束-->

      <!-- 第七部分汽车开始-->

      <div class="content7">
        
         <div class="tab_qiche">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="" style="color: #fff;">汽车大全</a></li>
                        <li><a href="">二手车出售</a></li>
                        <li><a href="">汽车资讯</a></li>
                        <li><a href="">用车知识</a></li>
                        <li><a href="">楼市行情</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                          
                             <ul>

                        <div class="section-focus-pic" id="section-focus-pic">
                        <div class="pages" data-scro="list">
                          <ul>
                      
                            <li class="item" style="left:0px;">
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>
                            <li class="item" >
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>
                            <li class="item" >
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>
                          </ul>
                        </div>
                        <div class="controler" data-scro="controler">
                          <b class="down"></b>
                          <b></b>
                          <b></b>
                        </div>
                        <div class="controler2" data-scro="controler2">
                          <a href="javascript:;" class="prev"><i></i></a>
                          <a href="javascript:;" class="next"><i></i></a>
                        </div>
                      </div>
                           <script type="text/javascript" src="/Application/Home/View/Public/js/qiche.js"></script> 
                             </ul>

                        
                        <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                             <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                          <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                      <ul style="display:none">
                               <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                             <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                           <li><a href="">卫计委：全面两孩须依法启动实施</a><span>2015-11-26</span></li>
                         </ul>
                       
                    </div>
            </div>
        <script type="text/javascript">
  
               $(function(){

                 $('.tab_qiche .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#b73102','cursor': 'pointer'});
                    $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none'});
                    $('.tab_qiche>.tab_content>ul').eq(index).css('display','block');
                    $('.tab_qiche>.tab_content>ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>


      </div>

    <!-- 第七部分汽车结束-->  
    
        <!-- 第八部分商城开始-->    
           <div class="content8">
                   <div class="tab_shop">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="" style="color: #fff;">电子数码</a></li>
                        <li><a href="">旅游户外</a></li>
                        <li><a href="">吃在黄石</a></li>
                        <li><a href="">住在黄石</a></li>
                        <li><a href="">黄石影讯</a></li>                     
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                          
                             <ul>

                        <div class="section-focus-pic" id="section-focus-pic">
                        <div class="pages" data-scro="listshop">
                          <ul>
                      
                            <li class="item" style="left:0px;">
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>
                            <li class="item" >
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>

                            <li class="item" >
                              
                                                <dl class="newcarpic-content">
                                                  <dt><a href=""><img width="368px" height="184px" src="http://car3.autoimg.cn/cardfs/newcarbig/g11/M06/CC/AD/x_autohomecar__wKjBzFY4AH-AA7MHAADaeeO4xG0459.jpg" title=""></a>
                                                    <div><a class="blacklink" href="">外观耐看空间够大 风行S500</a></div></dt>
                                                
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car0.autoimg.cn/upload/2012/8/29/s_201208292050562494136.jpg" ></a>
                                                        <div><a href="">久经沙场 悍马H1</a></div></dd>
                                                    
                                                        <dd><a href=""><img width="120px" height="90px" src="http://car1.autoimg.cn/car/upload/2015/7/29/s_201507291115239433710110.jpg" ></a>
                                                        <div><a href="">捍卫尊严 野马5.0L GT</a></div></dd> 
                                                  
                                                 </dl>                                            
                            </li>
                            
                          </ul>
                        </div>
                        <div class="controler" data-scro="shop">
                          <b class="down"></b>
                          <b></b>
                          <b></b>
                        </div>
                        <div class="controler2" data-scro="shop2">
                          <a href="javascript:;" class="prev"><i></i></a>
                          <a href="javascript:;" class="next"><i></i></a>
                        </div>
                      </div>
                           <script type="text/javascript" src="/Application/Home/View/Public/js/shop.js"></script> 
                             </ul>

                        
                        <ul style="display:none">
                           <li  class="content01"><img src="/Application/Home/View/Public/images/pic.jpg" width="150" height="70"><h2><a href="">李克强应约会见安倍 中韩开启“创时代” 专题中韩开启“创时代” 专题中韩开启“创时代” 专题</a></h2><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                           <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                            <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                            <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                            <li><a href="">美丽厦门新24景之惠和石韵（惠和石文化园）</a><span>2015-11-26</span></li>
                         </ul>


                        
                     
                       
                    </div>
            </div>
        <script type="text/javascript">
  
               $(function(){

                 $('.tab_shop .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#b73102','cursor': 'pointer'});
                    $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none'});
                    $('.tab_shop>.tab_content>ul').eq(index).css('display','block');
                    $('.tab_shop>.tab_content>ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>

           </div>
         <!-- 第八部分商城结束--> 

           <div class="adv4">
            
             <span> <img src="/Application/Home/View/Public/images/adv4.png" width="545" height="100" alt=""></span><span class="adv4_r"> <img src="/Application/Home/View/Public/images/adv4.png" width="545" height="100" alt=""></span>

           </div>



         <!--第九部分读图开始-->
                   <div class="content9">
                    
                               <div class="tab_dutu">
                
                     <div class="tab">
                       <ul>
                        <li style="background:#b73102;"><a href="" style="color: #fff;">读图</a></li>                                   
                        <li><a href="">都市丽人</a></li>
                        
                       </ul>
                     </div>  

                     <div class="tab_content">
                          
                       <ul>
      
                           <ul style="display: block;">

                        <div class="section-focus-pic" id="section-focus-pic">
                        <div class="pages" data-scro="listtupian">
                          <ul>
                      
                            <li class="item" style="left:0px;">
                                  <ul class="artist">
                                          <li class="a1"><img width="230" height="354" src="/Application/Home/View/Public/images/zxy.jpg" alt="张学友" />
                                          <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a2">
                                            <img width="232" height="232" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a3">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡琴</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a4">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>郑钧</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a5">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>费玉清</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a6">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>陈绮贞</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          
                                          <li class="a9">
                                            <img width="232" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>迈克学摇滚</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a10">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡依林</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a11">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>17sucai.com</strong><br /><span>17sucai.com</span><br />查看详情</a>
                                          </li>
                                          <li class="a12">
                                            <img width="374" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>罗志祥</strong><br /><span>即将有6场演出</span><br />查看详情</a>
                                          </li>
                                        </ul>                                     
                                </li>
                           
                            <li class="item">
                                  <ul class="artist">
                                          <li class="a1"><img width="230" height="354" src="/Application/Home/View/Public/images/zxy.jpg" alt="张学友" />
                                          <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a2">
                                            <img width="232" height="232" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a3">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡琴</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a4">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>郑钧</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a5">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>费玉清</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a6">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>陈绮贞</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          
                                          <li class="a9">
                                            <img width="232" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>迈克学摇滚</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a10">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡依林</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a11">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>17sucai.com</strong><br /><span>17sucai.com</span><br />查看详情</a>
                                          </li>
                                          <li class="a12">
                                            <img width="374" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>罗志祥</strong><br /><span>即将有6场演出</span><br />查看详情</a>
                                          </li>
                                        </ul>                                     
                            </li>
                             <li class="item">
                                  <ul class="artist">
                                          <li class="a1"><img width="230" height="354" src="/Application/Home/View/Public/images/zxy.jpg" alt="张学友" />
                                          <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a2">
                                            <img width="232" height="232" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>张震岳</strong><br /><span>即将有5场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a3">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡琴</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a4">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>郑钧</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a5">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>费玉清</strong><br /><span>即将有4场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a6">
                                            <img width="110" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>陈绮贞</strong><br /><span>即将有2场演出</span><br />查看详情</a>
                                          </li>
                                          
                                          <li class="a9">
                                            <img width="232" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>迈克学摇滚</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a10">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>蔡依林</strong><br /><span>即将有1场演出</span><br />查看详情</a>
                                          </li>
                                          <li class="a11">
                                            <img width="182" height="110" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>17sucai.com</strong><br /><span>17sucai.com</span><br />查看详情</a>
                                          </li>
                                          <li class="a12">
                                            <img width="374" height="180" src="/Application/Home/View/Public/images/zxy_01.jpg" />
                                            <a class="cover" href="#"><strong>罗志祥</strong><br /><span>即将有6场演出</span><br />查看详情</a>
                                          </li>
                                        </ul>                                     
                            </li>
                            
                          </ul>
                        </div>
                        <div class="controler" data-scro="tupian">
                          <b class="down"></b>
                          <b></b>
                          <b></b>
                        </div>
                        <div class="tupian2" data-scro="tupian2">
                          <a href="javascript:;" class="prev"><i></i></a>
                          <a href="javascript:;" class="next"><i></i></a>
                        </div>
                      </div>
                              <script type="text/javascript" src="/Application/Home/View/Public/js/tupian.js"></script>  
                             </ul>                           
                       </ul>
                    

                                            
                        <ul style="display:none">
                              
  <div class="dushiliren">
    <div class="lirenrPic">
      <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
     
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
       <div class="content">
        <img src="/Application/Home/View/Public/images/teacher011.jpg" width="180" height="360" alt="森科注会,职称高级讲师马贞" />
        <div class="txt">
          <h3>马老师</h3>
          <h4>中国注会师、注册税务师<br/>注会、职称高级讲师</h4>
          <p>拥有丰富的教学和实操经验，多年的教书生涯历练了对会计学的精深把握，课程讲授，深入浅出，语言干脆利落，旁征博引，解题思路，逻辑严密，化繁为简，直击要点。</p>
        </div>
      </div>
    </div>
    
    <div style="clear:both;"></div>
    
  </div>
<script type="text/javascript">
  $(".content") .hover(function(){
      $(this) .children(".txt").stop() .animate({height:"300px"},200);
      $(this) .find(".txt h3").stop() .animate({paddingTop:"60"},550);
      $(this) .find(".txt p").stop() .show();
  },function(){
      $(this) .children(".txt").stop() .animate({height:"100px"},200);
      $(this) .find(".txt h3").stop().animate({paddingTop:"0px"},550);
      $(this) .find(".txt p").stop() .hide();
    })
</script>

</ul>


                        
                     
                       
                    </div>
            </div>
        <script type="text/javascript">
  
               $(function(){

                 $('.tab_dutu .tab ul li').hover(function(){
  
                    var index=$(this).index();
                    $(this).css({'background':'#b73102','cursor': 'pointer'});
                    $(this).children('a').css('color','#fff');
                    $(this).siblings().children('a').css('color','#000');
                    $(this).siblings().css({'background':'none'});
                    $('.tab_dutu>.tab_content>ul').eq(index).css('display','block');
                    $('.tab_dutu>.tab_content>ul').eq(index).siblings().css('display','none');
                 })
               })

           </script>

                   </div>
        <!--第九部分读图结束-->


      <div class="footer">
        
                <div class="friendlink">
                    <div class="friendlink_about"><a href="">关于我们</a>|<a href="">广告服务</a>|<a href="">商务洽谈</a></div>
                    <div class="friendlink_link"><span>友情链接</span><a href="">114啦影视</a>|<a href="">海报网</a>|<a href="">178游戏网</a><a href="">电影网</a>|<a href="">刷机精灵</a>|<a href="">欢视网</a>
                    <a href="">太平洋时尚网</a>|<a href="">电视应用市场</a>|<a href="">智能电视</a></div>
                </div>
                <div class="banquan">
                   <span>主 管：中共黄石市委宣传部 黄石市人民政府新闻办公室　主 办：蓝宝石网络　电 话：13554078820 </span>
                   <span>Copyright © 2015 - 2019 Jasonccs. All Rights Reserved. 鄂ICP备15011090号-1 蓝宝石公司 版权所有 邮箱：1521910992@qq.com</span>
                </div>

      </div>  
      

</body>
</html>