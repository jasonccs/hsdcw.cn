<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>湖北新闻_黄石最大新闻门户网</title>
<meta name="keywords" content="黄石新闻门户网.梳理黄石,大冶,阳新新闻">
<meta name="description" content="黄石新闻门户网.梳理黄石新闻,足不出户知天下事.">
    <link href="/Application/Home/View/Public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/main.css" /> 
    <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/news.css" />
    <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.1.10.2.min.js"></script>
    <script type="text/javascript" src="/Application/Home/View/Public/js/date.js"></script><!--头部日期js-->
    <script type="text/javascript" src="/Application/Home/View/Public/js/common.js"></script><!--commonjs-->

</head>

<body id="subIndex">

        <script type="text/javascript">
         var userloginurl='<?php echo U('Member/Login/login');?>';//
         var curenturl   ='/Home/News/hbxw.html';
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



<div class="layout Q-g16b-b">
	<div class="chief" role="main">
		<h2 class="subTitle">湖北新闻</h2>  	
<div id="news">
<div>
<div id="subHot" bosszone="js_jdt">
		
       <?php  if(!isset($newtop['id'])){ echo '<a target="_blank" href="#">'; }else{ echo '<a target="_blank" href="<?php echo U('.'/H_N_d/'.$newtop['id'].');?>">'; } if(preg_match('/|/',$newtop['desc_image']) && $newtop['desc_image'] != ''){ $list_top_img=explode('|', $newtop['desc_image']); echo '<img src="'. $list_top_img[0].'" alt="'.$newtop['title'].'" width="750" height="346">'; }else{ echo '<img src="/Application/Home/View/Public/images/default.png" alt="'.$newtop['title'].'" width="100%" height="100%">'; }; ?>
		<!--  -->

		<div class="overlay"><?php echo (msubstr($newtop["title"],0,40)); ?></div>
		</a>
</div>
</div>

<div class="list first" bosszone="js_zxl">

<?php if(is_array($hsxw)): $k = 0; $__LIST__ = $hsxw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k%6 != 0): ?><div class="Q-tpList">
		<div class="Q-tpWrap">
				<a target="_blank" class="pic" href="<?php echo U('/H_N_d/'.$vo['id']);?>">
					<?php if($vo['desc_image'] != '' ): if (!empty($vo['desc_image'])) { $listimg=explode('|',$vo['desc_image']); if($key>=2){ echo '<img class="picto" src="'.$listimg[0].'" width="120" height="96">'; }else{ echo '<img class="picto" src="'.$listimg[0].'" width="120" height="96">'; } } ?>
						   
						<?php else: ?>
						  <img class="picto" src="/Application/Home/View/Public/images/default.png"  width="" height=""><?php endif; ?>
				</a>
				<div class="text">
					<em class="f14 l24"><a target="_blank" class="linkto" href="<?php echo U('/H_N_d/'.$vo['id']);?>"><?php echo (msubstr($vo["title"],0,40)); ?></a></em>
					<p style="text-indent:20px">
						<?php echo (msubstr($vo["description"],0,100)); ?>
					</p>
						<div class="st">
								<div class="info">
									<span class="from"><?php echo (date("Y-m-d H:i",$vo["time"])); ?></span>
									<span class="keywords" style="display: inline;"><a href="" target="_blank">关键词</a>
									 <?php
 $keywords=explode('|',$vo['keywords']); foreach ($keywords as $key => $value) { echo '<a href="" target="_blank">'.$value.'</a>'; } ?>

									</span>
								</div>
							<div class="btns">
											<a class="discuzBtn" title="评论数" target="_blank" href=""><?php echo ($vo["commentnum"]); ?></a>
											<div class="shareBtn" role="button"  aria-label="分享"></div>
							</div>
						</div>
				</div>
		</div>
	</div><?php endif; ?>	
  <?php if($k%6 == 0): ?><div class="Q-pList">
			<div class="content">
			<em><a target="_blank" class="linkto" href="<?php echo U('/H_N_d/'.$vo['id']);?>"><?php echo (msubstr($vo["title"],0,40)); ?></a></em>
					<ul>
				
						   <?php  $newsurl='http://'.$_SERVER['HTTP_HOST']."/Home/News/detail/id/".$vo['id'].C('URL_HTML_SUFFIX'); if (!empty($vo['desc_image'])) { $listimg=explode('|',$vo['desc_image']); foreach ($listimg as $value){ if(!empty($value)){ echo '<li class="pic"><a target="_blank" href="'.$newsurl.'"><img src="'.$value.'" ></a></li>'; }else{ echo '<li class="pic"><a target="_blank" href="'.$newsurl.'"><img src="/Application/Home/View/Public/images/default.png" ></a></li>'; } } } ?>
					</ul>
			</div>
			<div class="st">
					<div class="info">
					<span class="from"><?php echo (date("Y-m-d H:i",$vo["time"])); ?></span><span class="keywords">情侣;恩爱</span>
					</div>
					<div class="btns">
					<a class="discuzBtn" title="评论数" target="_blank" href="http://coral.qq.com/1413439104">2502</a>

					</div>
			</div>
		</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>





</div>



</div>
     <div class="page_tag"><?php echo ($page); ?></div>
</div>


 	<div class="extra" role="complementary">
			<div style="position: relative">
				<div class="news_adv"><a href=""><img src="/Application/Home/View/Public/images/news_adv.jpg"/></a></div>
				<div style="bottom:0px; width: 26px; height: 16px; z-index: 12; background: url(/Application/Home/View/Public/images/leftbottom_new.png) 100% 0% no-repeat;position:absolute"></div>
	      	</div>
	      	<style type="text/css">
				.news_adv{
				    cursor: pointer;
				    width: 300px;
				    height: 250px;
				    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='',sizingMethod='scale');
				}

			</style>
		<div id="ship4" bosszone="gjxw_xwsp">
			<div class="hd hd2">
				<h2 class="subTitle">新闻视频</h2>
			<span class="fr"><a href="" target="_blank">更多</a></span></div>
			<div class="bd bd2">
				<div class="Q-pList">
					<ul class="l28">
<li class="li_1">
<a target="_blank" href=""><img src="" alt=""></a><p class="Q-vBg"><b></b></p>
<p class="tinfo"><a target="_blank" href="" title="">习近平：实现强军目标要推动基层建设全面过硬</a></p>
</li>
<li class="li_2">
<a target="_blank" href=""><img src="" alt=""></a><p class="Q-vBg"><b></b></p>
<p class="tinfo"><a target="_blank" href="" title="">习近平：实现强军目标要推动基层建设全面过硬</a></p>
</li>
<li class="li_3">
<a target="_blank" href=""><img src="" alt=""></a><p class="Q-vBg"><b></b></p>
<p class="tinfo"><a target="_blank" href="" title="">习近平：实现强军目标要推动基层建设全面过硬</a></p>
</li>
<li class="li_4">
<a target="_blank" href=""><img src="" alt=""></a><p class="Q-vBg"><b></b></p>
<p class="tinfo"><a target="_blank" href="" title="">习近平：实现强军目标要推动基层建设全面过硬</a></p>
</li>
				</ul>
				</div>
			</div>
		</div>
		<div id="subzhuant" bosszone="gjxw_gjzt">
			<div class="hd hd2">
				<h2 class="subTitle">国际专题</h2>
			<span class="fr"><a href="tm" target="_blank">更多</a></span></div>
			<div class="bd bd2">
				<div class="Q-tpList">
				<em class="f14 l21">
				<a target="_blank" href="">习近平：实现强军目标要推动基层</a></em><div class="Q-tpWrap">
				<a target="_blank" class="pic" href=""><img src=""></a><p class="l21">习近平：实现强军目标要推动基层建设全面过硬,习近平：实现强军目标要推..
				<a target="_blank" href="">[详细]</a>
				</p>
				</div>
				<ul class="other l26 f14">
				<li><a target="_blank" href="">阿尔及利亚航空一架飞机坠毁</a></li>
				<li><a target="_blank" href="">马航客机在乌俄边境坠毁</a></li>
				<li><a target="_blank" href="">习近平出访拉美四国并出席金砖峰会</a></li>
				<li><a target="_blank" href="">2014年亚信第四次峰会</a></li>
				</ul>
				</div>

			</div>
		</div>
		

		<div id="paih" bosszone="gjxw_rdph">
			<div class="hd hd2">
				<h2 class="subTitle">热度排行</h2>
			</div>			<div class="bd bd2">
				<ol class="current">
				<?php if(is_array($hot)): $k = 0; $__LIST__ = array_slice($hot,0,10,true);if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
						<span class="topRank"><?php echo ($k); ?></span>
						<a target="_blank" href="<?php echo U('/H_N_d/'.$vo['id']);?>"><?php echo (msubstr($vo["title"],0,18)); ?></a>
					</li><?php endforeach; endif; else: echo "没有数据" ;endif; ?> 
				</ol>
			</div>
		</div>


</div> 

</div>

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