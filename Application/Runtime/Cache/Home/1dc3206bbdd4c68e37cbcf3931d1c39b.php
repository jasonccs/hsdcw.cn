<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>黄石新闻_黄石最大的门户网站_<?php echo ($result["title"]); ?>_黄石之窗</title>
        <meta name="keywords" content="<?php echo ($result["keywords"]); ?>">
        <meta name="description" content="<?php echo (msubstr($result["description"],0,180)); ?>">
        <link href="/Application/Home/View/Public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

        <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/main.css" /> 
        <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/nbase_b7e2fdc.css" />
        <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/ndetail_main.css" />
        <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/ndetail_core_92bd36a.css" />

        <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.1.10.2.min.js"></script> 
        <script type="text/javascript" src="/Application/Home/View/Public/js/date.js"></script> 
        <script type="text/javascript" src="/Application/Home/View/Public/js/common.js"></script> 

    </head>
    
<body >

        <script type="text/javascript">
            var arcticle_id ='<?php echo ($result["id"]); ?>';
         </script>   

        <script type="text/javascript">
         var userloginurl='<?php echo U('Member/Login/login');?>';//
         var curenturl   ='/H_N_d/28.html';
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


       
        <div id="wrapper" class="detail-wrapper">
          
            <div id="container" class="clearfix">
                <div class="detail-main">
                    <div id="pagelet-article">
                        <div class="curpos">
                            <a href="/" target="_blank" ga_event="click_index">
                                首页
                            </a>
                           
                            <a href="/news_politics/" target="_blank" ga_event="click_channel">
                                国内
                            </a>
                        </div>
                        <div class="article-header">
                            <h1 class="title">
                                <?php echo ($result["title"]); ?>
                            </h1>
                            <div class="minibar clearfix">
                                <span class="src"><?php echo ($result["source"]); ?></span>
                                <span class="time"><?php echo (date('Y-m-d h:i',$result["time"])); ?></span>
                                <span class="eye"><i class="am-icon-github am-icon-sm"></i><?php echo ($result["eye"]); ?></span>
                            </div>
                        </div>
                        <div class="article-content" >
                           <?php echo ($result["content"]); ?>
                        </div>
                        <div class="article-actions">
                            <div class="top-actions clearfix">
                                <ul class="tag-list">
                                    <li class="tag-item">
                                        <a class="tag-link" href="" target="_blank" ga_event="click_tag">
                                            时政
                                        </a>
                                    </li>
                                    <li class="tag-item">
                                        <a class="tag-link" href="" target="_blank" ga_event="click_tag">
                                            宏观经济
                                        </a>
                                    </li>
                                    <li class="tag-item">
                                        <a class="tag-link" href="" target="_blank" ga_event="click_tag">
                                            国内宏观
                                        </a>
                                    </li>
                                    <li class="tag-item">
                                        <a class="tag-link" href="" target="_blank" ga_event="click_tag">
                                            经济
                                        </a>
                                    </li>
                                </ul>
                                <a class="areport" target="_blank" href=""
                                ga_event="report_news">
                                    投诉
                                </a>
                            </div>
                            <div class="bottom-actions clearfix" data-node="articleAction" data-groupid="">
                                <div class="snsbox">
                                    <div class="snsbox-inner">
                                        <span>
                                            分享到：
                                        </span>
                                        <div class="snszone" data-url=""
                                        data-text="【人民日报刊文：一些人竭力要..."
                                        data-desc="" data-pic="" data-node="share">
                                            <i class="sns-btn sns-weixin" ga_event="click_share_interactive" ga_label="weixin"
                                            data-type="" title="分享到微信">
                                                <div class="qrcodeW">
                                                    <div class="qrcode">
                                                    </div>
                                                </div>
                                            </i>
                                            <i class="sns-btn sns-qzone" ga_event="click_share_interactive" ga_label="qzone"
                                            data-type="qzone" title="分享到QQ空间">
                                            </i>
                                            <i class="sns-btn sns-weibo" ga_event="click_share_interactive" ga_label="tsina"
                                            data-type="tsina" title="分享到新浪微博">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                                <!--<a class="abtn abtn-like" data-node="like" href="javascript:;" ga_event="like_news">0</a>-->
                                <a class="abtn abtn-fav" data-type="repin" data-node="fav" href="javascript:;"
                                ga_event="collection_news">
                                    收藏
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="pagelet-relatednews">
                        <div class="dtag">
                            相关阅读
                        </div>
                        <ul class="relatednews" data-node="listBox">
                            <li class="item clearfix" data-node="item">
                                <div class="item-inner">
                                    <div class="title-box">
                                        <a ga_event="click_title_relevant" class="link title" href=""
                                        target="_blank" data-node="title">
                                            马克思主义开辟了通向真理之路
                                        </a>
                                    </div>
                                    <div class="abstract">
                                        <a ga_event="click_abstract_relevant" class="link" href=""
                                        target="_blank">
                                            习近平总书记在哲学社会科学工作座谈会上发表讲话指出，“坚持以马克思主义为指导，是当代中国哲学社会科学区别于其他哲学社会科学的根本标志，必须旗帜鲜明加以坚持”。
                                        </a>
                                    </div>
                                    <div class="news_foot  clearfix">
                                        <div class="left lnews_foot ">
                                            <a class="lbtn source" href=""
                                            target="_blank">
                                                中国社会科学网&nbsp;&sdot;
                                            </a>
                                            <span class="lbtn comment">
                                                2评论&nbsp;&sdot;
                                            </span>
                                            <span class="lbtn time" data-publishtime="五月 26, 2016, 7:46 a.m.">
                                                05-26 07:46
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item clearfix" data-node="item">
                                <div class="item-inner">
                                    <div class="title-box">
                                        <a ga_event="click_title_relevant" class="link title" href=""
                                        target="_blank" data-node="title">
                                            央行们的“凯恩斯”使全球陷入了一场金融大风暴
                                        </a>
                                    </div>
                                    <div class="abstract">
                                        <a ga_event="click_abstract_relevant" class="link" href=""
                                        target="_blank">
                                            央行们作为凯恩斯主义的追随者，忽略了借贷会产生不可避免的后果。由于金融系统性风险和全球金融化背景下不断扩大的财富、收入差距的存在，当前经济的“增长”愈发呈现出一种恶性增长的景象。事实证明，凯恩斯主义经济学已经失败，我们也因此置身于一场全球金融风暴之中。
                                        </a>
                                    </div>
                                    <div class="news_foot  clearfix">
                                        <div class="left lnews_foot ">
                                            <a class="lbtn source" href=""
                                            target="_blank">
                                                东方财富网&nbsp;&sdot;
                                            </a>
                                            <span class="lbtn comment">
                                                13评论&nbsp;&sdot;
                                            </span>
                                            <span class="lbtn time" data-publishtime="五月 26, 2016, 12:19 a.m.">
                                                05-26 00:19
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item clearfix" data-node="item">
                                <div class="item-inner">
                                    <div class="lbox left">
                                        <a ga_event="click_img_relevant" href=""
                                        target="_blank">
                                            <img class="feedimg middle-mode" src=""
                                            alt="美元破位信号确立后加速下跌，耶伦言论鹰派也难救多头" onload="this.style.opacity=1;">
                                        </a>
                                    </div>
                                    <div class="rbox">
                                        <!--hold-->
                                        <div class="rbox-inner">
                                            <div class="title-box">
                                                <a ga_event="click_title_relevant" class="link title" href=""
                                                target="_blank" data-node="title">
                                                    美元破位信号确立后加速下跌，耶伦言论鹰派也难救多头
                                                </a>
                                            </div>
                                            <div class="abstract">
                                                <a ga_event="click_abstract_relevant" class="link" href=""
                                                target="_blank">
                                                    自上周美联储发布鹰派的会议纪要以来，市场对于6月升息的预期升温，美元表现持续强劲，但随着市场情绪开始回归冷静，加之受到美元多头获利了结打压双重影响下，美元指数隔夜自一个半月以来的高位回落，并在周四(5月26日)亚市早盘延续跌势。
                                                </a>
                                            </div>
                                            <div class="news_foot  clearfix">
                                                <div class="left lnews_foot ">
                                                    <a class="lbtn source" href=""
                                                    target="_blank">
                                                        汇通网&nbsp;&sdot;
                                                    </a>
                                                    <span class="lbtn comment">
                                                        3评论&nbsp;&sdot;
                                                    </span>
                                                    <span class="lbtn time" data-publishtime="五月 26, 2016, 11:40 a.m.">
                                                        05-26 11:40
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item clearfix" data-node="item">
                                <div class="item-inner">
                                    <div class="lbox left">
                                        <a ga_event="click_img_relevant" href=""
                                        target="_blank">
                                            <img class="feedimg middle-mode" src=""
                                            alt="股市应该怎样去看人民币贬值？" onload="this.style.opacity=1;">
                                        </a>
                                    </div>
                                    <div class="rbox">
                                        <!--hold-->
                                        <div class="rbox-inner">
                                            <div class="title-box">
                                                <a ga_event="click_title_relevant" class="link title" href=""
                                                target="_blank" data-node="title">
                                                    股市应该怎样去看人民币贬值？
                                                </a>
                                            </div>
                                            <div class="abstract">
                                                <a ga_event="click_abstract_relevant" class="link" href=""
                                                target="_blank">
                                                    1、现在，股市分析当中存在一种奇怪的现象：一方面期盼央行货币政策能宽松一些，另一方面却大谈人民币贬值不利于股市。这是一种极其矛盾的说法。实际上，在开放条件下，国内货币宽松，利率水平下降，必然引发本币贬值预期。
                                                </a>
                                            </div>
                                            <div class="news_foot  clearfix">
                                                <div class="left lnews_foot ">
                                                    <a class="lbtn source" href=""
                                                    target="_blank">
                                                        钮文新&nbsp;&sdot;
                                                    </a>
                                                    <span class="lbtn comment">
                                                        1评论&nbsp;&sdot;
                                                    </span>
                                                    <span class="lbtn time" data-publishtime="五月 26, 2016, 1:45 p.m.">
                                                        05-26 13:45
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-union-1">
                    </div>
                    <div class="ad720" style="text-align:center;margin-bottom:20px">
                        <div class="ab1">
                           
                            
                        </div>
                        <div class="ab2 none">
                           
                           
                        </div>
                    </div>
                    <div id="pagelet-ncomment">
                        <!-- 用来实现在首页点击评论跳转至详情页评论区 -->
                        <div id="comment_area">
                        </div>
                        <div class="cheader clearfix">
                            <div class="dtag">
                                文章评论
                            </div>
                            <div class="ctotal">
                                <span class="ctotalnum" data-node="ctotalnum">
                                    <?php echo ($count); ?>
                                </span>
                                条
                            </div>
                        </div>
                        <div class="ceditzone clearfix">
                            <div class="cavatar" data-node="cavatar">
                            </div>
                            <div class="cbody cedit" data-node="cedit">
                                <div class="ctextarea" >
                                    <textarea  name="cinput" class="cinput" maxlength="160"  placeholder="写下你的评论..."></textarea>
                                </div>
<script type="text/javascript" src="/Application/Home/View/Public/js/jquery.cookie.js"></script>
<script type="text/javascript">
$(function(){

 $("textarea[name='cinput']").click(function(){
       $(this).parents('.cbody').addClass('focus');
       $(this).keyup(function(event){
                  if($(this).val()!='' && $(this).val().length>1){
                       $(this).parents('.ctextarea').siblings('.caction').children('.csubmit').addClass('active');
                   }else{

                        $(this).parents('.ctextarea').siblings('.caction').children('.csubmit').removeClass('active');
                   }          
             })
 });
               
               $('.csubmit').click(function(){

                        if($.cookie('<?php echo C('COOKIE_PREFIX') ?>username')==null || $.cookie('<?php echo C('COOKIE_PREFIX') ?>userid')==null){
                                 login(); 
                                 $('.rl-close').click(function(){
                                   loginhide();
                                 });
                                 viplogin();
                                 return ;
                    
                        }
                        if($(this).hasClass('csubmit active')){
                           $.post('<?php echo U('Home/News/comment');?>',{id:arcticle_id,content:
                           $("textarea[name='cinput']").val(),username:$.cookie('<?php echo C('COOKIE_PREFIX') ?>username')},function(data){

                                 if(data.status==true){
                                      delete data['status'];
                                      // console.log(data);
                                    var  commenthtml='<li class="citem clearfix">\
                                <div class="cavatar">\
                                    <a href="" target="_blank">\
                                        <img src="" />\
                                    </a>\
                                </div>\
                                <div class="cbody">\
                                    <div class="cuser">\
                                        <a class="cname" href="" target="_blank">\
                                            '+data.username+'</a>\
                                    </div>\
                                    <div class="ctxt">'+data.content+'</div>\
                                    <div class="cinfo clearfix">\
                                        <span class="ctime">\
                                            '+ new Date().format('yyyy-MM-dd hh:mm')+'</span>\
                                        <div class="c-actions">\
                                            <a class="cdigg " href="javascript:;" ga_event="click_good_comment">\
                                                <span class="digg-num">\
                                                    572\
                                                </span>\
                                                <i class="cbtn">\
                                                </i>\
                                            </a>\
                                            <a class="creply" href="javascript:;" data-node="creply" ga_event="click_reply_comment">\
                                                <i class="cbtn">\
                                                </i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>';  
                                     $('.clist').prepend(commenthtml) ;
                                     var ctotalnum = Number($('.ctotalnum').text())+1; //Number 将变量转为js内部对象 才能与其他数字相加  
                                     $('.ctotalnum').text(ctotalnum);
                                 }

                           },'json');
                            
                        }       
                                 
                      })  
       
})

</script>

                                <div class="caction">
                                    <div class="cshare">
                                        <div class="snsbox">
                                            <div class="snsbox-inner">
                                                <span>
                                                    分享到：
                                                </span>
                                                <div class="snszone" data-node="snszone">
                                                    <i class="sns-btn sns-weibo gray" ga_event="click_share_comment" ga_label=""
                                                    data-node="sina_weibo" title="分享到新浪微博">
                                                    </i>
                                                    <i class="sns-btn sns-tqq gray" ga_event="click_share_comment" ga_label=""
                                                    data-node="qq_weibo" title="分享到腾讯微博">
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="csubmit" data-node="csubmit" >发表</div>
                                </div>
                            </div>
                        </div>

             <ul id="clist" class="clist" >   
                 
                 <?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="citem clearfix">
                                <div class="cavatar">
                                    <a href="" target="_blank">
                                        <img src="" />
                                    </a>
                                </div>
                                <div class="cbody">
                                    <div class="cuser">
                                        <a class="cname" href="/user/6448930270/" target="_blank">
                                            <?php echo ($vo["username"]); ?>
                                        </a>
                                    </div>
                                    <div class="ctxt"><?php echo (msubstr($vo["content"],0,150)); ?></div>
                                    <div class="cinfo clearfix">
                                        <span class="ctime">
                                            <?php echo (date('Y-m-d H:i',$vo["time"])); ?>
                                        </span>
                                        <div class="c-actions">
                                            <a class="cdigg " href="javascript:;" data-node="cdigg" data-commentid="6608997803"
                                            ga_event="click_good_comment">
                                                <span class="digg-num">
                                                    572
                                                </span>
                                                <i class="cbtn">
                                                </i>
                                            </a>
                                            <a class="creply" href="javascript:;" data-node="creply" ga_event="click_reply_comment">
                                                <i class="cbtn">
                                                </i>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                    
                     <?php if($count >= 3): ?><a class="cloadmore show" href="javascript:ajaxmore();" >
                            点击加载更多
                        </a><?php endif; ?>   
				    </div>
                </div>

<script type="text/javascript">
                    var page=2;
                    var pagenum=<?php echo ($pagenum); ?>;//总页数

                   function ajaxmore(){
                        
                        $.ajax({
                             url:"<?php echo U('Home/News/ajaxmore');?>",
                             type:'post',   
                             data:{page:page,arcticle_id:arcticle_id},
                             datatype:'json',
                             beforeSend:function(){
                                // $('.cloadmore').text('正在加载!');
                                // setTimeout('alert(3)',3000);
                                $('.cloadmore').css('background','none');
                                $('.cloadmore').append('<img src="/Application/Home/View/Public/images/loading.gif"/>');
                             }, 
                             success:function(data){

                                if(page++<=pagenum && data !==null){
                                     $.each(data,function(key,value){
                                var  commenthtml='<li class="citem clearfix">\
                                <div class="cavatar">\
                                    <a href="" target="_blank">\
                                        <img src="" />\
                                    </a>\
                                </div>\
                                <div class="cbody">\
                                    <div class="cuser">\
                                        <a class="cname" href="" target="_blank">\
                                            '+value.username+'</a>\
                                    </div>\
                                    <div class="ctxt">'+value.content+'</div>\
                                    <div class="cinfo clearfix">\
                                        <span class="ctime">\
                                            '+getTime(value.time)+'</span>\
                                        <div class="c-actions">\
                                            <a class="cdigg " href="javascript:;" ga_event="click_good_comment">\
                                                <span class="digg-num">\
                                                    572\
                                                </span>\
                                                <i class="cbtn">\
                                                </i>\
                                            </a>\
                                            <a class="creply" href="javascript:;" data-node="creply" ga_event="click_reply_comment">\
                                                <i class="cbtn">\
                                                </i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>'; 

                                        $('.clist').append(commenthtml) ;
                                     })

                              }else{

                                  $('.cloadmore').remove() ;
                              }
                             },
                             complete:function(){
                                var shenyu=<?php echo ($count); ?>-(page-1)*3;
                                if(shenyu<0){
                                    $('.cloadmore').css({'cursor':'not-allowed','background':'#A2A2A2'});
                                    $('.cloadmore').text('没有了');
                                    $('.cloadmore').removeAttr('href') ;

                                }else{
                                    $('.cloadmore').css('background','#A2A2A2');
                                    $('.cloadmore').text('剩余'+shenyu+'条');  
                                } 
                             }  

                        })

                   }
</script>


 <div class="detail-right">
        

 <div id="pagelet-iad" class="sideGap" ga_event="click_banner_newspage_right">
      <div class="ab1">
        <a style="display:none!important" id="tanx-a-mm_32479643_3494618_56104552"></a></div>
        <div class="ab2 none">
        <div id="BAIDU_SSP__wrapper_u2643447_0">
        </div>
        </div>
</div>
   

<div id="pagelet-hotgallery" class="sideGap" style="display: block;">
<div class="dtag">精彩图片</div>
<ul class="hotgallery_show" data-node="gallery">
<li class="gallery_item style_3">
    <!-- style_3为三张图右侧为大图 -->
    <a href="" target="_blank" ga_event="click_pictures_recommend">
        <div class="gallery-con clearfix">
        <span class="pic_number">6图</span>
        <!-- 后续记得加边框 -->
        <div class="image small">
            <img src="" alt="">
        </div>
        <div class="image middle">
            <img src="" alt="">
        </div>
        <div class="image small">
            <img src="" alt="">
        </div>
        </div>
        <div class="title">
            <div class="title_content">
                <div class="pic_name">
                    <p>她的小蛮腰：经典黑白微性感人像棚拍</p>
                </div>
            </div>
        </div>
    </a>
</li>

<li class="gallery_item style_2">
    <!-- style_2为三张图左侧为大图 -->
    <a href="/" target="_blank" ga_event="click_pictures_recommend">
        <div class="gallery-con clearfix">
        <span class="pic_number">6图</span>
        <div class="image middle">
            <img src="" alt="">
        </div>
        <div class="image small">
            <img src="" alt="">
        </div>
        <div class="image small">
            <img src="" alt="">
        </div>
        </div>
        <div class="title">
            <div class="title_content">
                <div class="pic_name">
                    <p>11万可买国产性价比超强7座商务MPV：东风CM7果然美</p>
                </div>
        </div>
    </div>
</a>
</li>

<li class="gallery_item style_3">
    <!-- style_3为三张图右侧为大图 -->
    <a href="" target="_blank" ga_event="click_pictures_recommend">
        <div class="gallery-con clearfix">
        <span class="pic_number">19图</span>
        <!-- 后续记得加边框 -->
        <div class="image small">
            <img src="/" alt="">
        </div>
        <div class="image middle">
            <img src="" alt="">
        </div>
        <div class="image small">
            <img src="" alt="">
        </div>
        </div>
        <div class="title">
            <div class="title_content">
                <div class="pic_name">
                    <p>组图：大学情侣为圆心中遗憾，毕业季回母校补拍婚纱照！</p>
                </div>
            </div>
        </div>
    </a>
</li>


<li class="gallery_item style_3">
    <!-- style_3为三张图右侧为大图 -->
    <a href="" target="_blank" ga_event="click_pictures_recommend">
        <div class="gallery-con clearfix">
        <span class="pic_number">3图</span>
        <!-- 后续记得加边框 -->
        <div class="image small">
            <img src="" alt="">
        </div>
        <div class="image middle">
            <img src="" alt="">
        </div>
        <div class="image small">
            <img src="" alt="">
        </div>
        </div>
        <div class="title">
            <div class="title_content">
                <div class="pic_name">
                    <p>浙江举行“护航G20”誓师大会</p>
                </div>
            </div>
        </div>
    </a>
</li>

</ul>
</div>

<div id="pagelet-hotvideo" class="sideGap" style="display: block;">
        <div class="hotvideo_head dtag">热门视频</div>
 </div>

</div>
 </div>
           
</div>
     
     <!---->

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