<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>房产详情</title>
	<link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/main.css">
	<link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/house.css">
        <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.1.10.2.min.js"></script> 
        <script type="text/javascript" src="/Application/Home/View/Public/js/house_focus.js"></script> 


</head>
<body>


        <script type="text/javascript">
         var userloginurl='<?php echo U('Member/Login/login');?>';//
         var curenturl   ='/Home/Fang/show/gid/7.html';
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
               
                  <iframe width="340" scrolling="no" height="40" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=2"></iframe>

                  </span>
              </div>
              <div class="top_login">
                <span class="login"> 
                 <!-- <?php var_dump($_COOKIE['username']); ?> -->
                   <?php if($_COOKIE['chenchu_username']!= null and $_COOKIE['chenchu_userid']!=null ): ?><i style="">
                      <img src="/Application/Home/View/Public/images/logo.png" width="40" height="40"/></i>  
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
          <span class="tell"><img src="/Application/Home/View/Public/images/contact.png" width="16" height="16" alt=""> <b>新闻热线：0714-12345678</b></span>
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
                        <p class="b"><a href="<?php echo U('News/index');?>" target="_blank">黄石要闻</a><a href="" target="_blank">黄石民生</a></p>
                        <p class="b"><a href="" target="_blank">湖北新闻</a><a href="" target="_blank">国内国际</a></p>
                        <p class="b"><a href="" target="_blank">文娱体育</a> <a href="" target="_blank">东楚论坛 </a></p>
                      </li>
                      <li class="bd"></li>


                      <li>
                        <p class="b2"><a href="" target="_blank">视频</a><a href="" target="_blank">读图</a></p>
                        <p class="b2"><a href="" target="_blank">专题</a><a href="" target="_blank">微博</a></p>
                        <p class="b2"><a href="" target="_blank">时评</a> <a href="" target="_blank">人才</a></p>
                      </li>
                      <li class="bd"></li>


                      <li>
                        <p class="b2"><a href="" target="_blank">汽车</a><a href="" target="_blank">房产</a></p>
                        <p class="b2"><a href="" target="_blank">消费</a><a href="" target="_blank">旅游</a></p>
                        <p class="b2"><a href="" target="_blank">摄影</a> <a href="" target="_blank">医讯</a></p>
                        <p class="b2"><a href="" target="_blank">健康</a> <a href="" target="_blank">财经</a></p>

                      </li>
                      <li class="bd"></li>

                      <li>
                        <p class="b"><a href="" target="_blank">天天信息</a><a href="" target="_blank">在线商城</a></p>
                        <p class="b"><a href="" target="_blank">投资环境</a><a href="" target="_blank">广告业务</a></p>
                       

                      </li>
                      

                      

                      
                   </ul>

              </div>  
          </div>
    </div>


<div class="lanmu">
      <div class="bread">
           <a href="/">首页</a>
           <span>&gt;</span>
           <a href="">房产</a>
      </div>
  </div>

<div class="adv_house">
	<a href=""><img src="/Public/Adv/adv_house1.jpg" /> </a>
</div>  
<div class="show_fangchan">
	<div id="tFocus">
	<div class="prev" id="prev"></div>
	<div class="next" id="next"></div>
	<ul id="tFocus-pic">
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		<li><a href=""><img src="/Application/Home/View/Public/images/img01.jpg" width="430" height="243" alt="" /></a></li>
		
	</ul>
	<div id="tFocusBtn">
		<a href="javascript:void(0);" id="tFocus-leftbtn">上一张</a>
		<div id="tFocus-btn">
			<ul>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				<li class="active"><img src="/Application/Home/View/Public/images/img01.jpg" width="87" height="57" alt="" /></li>
				
			</ul>
		</div>
		<a href="javascript:void(0);" id="tFocus-rightbtn">下一张</a>
	</div>
    </div><!--tFocus end-->

    <div class="fang_info">
       <div class="lp_title"> <h2><?php echo ($detail["sub_title"]); ?></h2></div>
       <div class="lp_price"> <h5>平均价格:</h5><span><?php echo ($detail["price"]); ?></span> 元/平方米</div>
       <div class="lp_address"> <h5>产权:</h5><span> 70</span>年 </div>
       <div class="lp_address"> <h5>建造时间:</h5><span> 2015</span>年</div>
       <div class="lp_address"> <h5>楼盘地址:</h5><span>通州台湖镇铺外路（通州台湖镇（北京图书城北侧）北京图书城北侧）</span><h5><a href="#allmap">查看地图</a></h5></div>
       <div class="lp_huxing">  <h5>户型:</h5>3室一厅 <?php echo ($detail["mianji"]); ?>平米</div>
       <div class="lp_pingjia">  <h5>用户评价:</h5><ul><li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li><li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li><li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li></ul></div>
       <div class="lp_share"><ul><li><a href=""><i id="sc_sstar"></i>收藏</a></li><li><a href=""><i id="sc_fstar" ></i>分享</a></li></ul></div>
       <div class="lp_contact">
       	  <p class="fl"><span id="shadow_tel">400-890-0000</span>&nbsp;<span class="f14">转</span></p>
       	  <input type="button" class="tel" onclick="" value="购买咨询">
       </div>
      
    	
    </div>
</div>




<div class="lp_comment">
   		
        <div class="nhbox">
        	<div class="lp_comment_lf fl">
            	<div class="lp_comm_nr" id="xfptxq_B13_02" >
					
					</a><div class="comm_inf fl" id="score" style="display: block;"><dl><dt class="fl">综合评价<font style="font-size:30px; color:#c00; margin-left:5px; display:inline;">4.</font><font style=" font-size:18px;color:#c00;">06</font><font style=" font-size:14px;color:#666;margin-left:5px; display:inline;">分</font></dt>

					</dl>

					<div class="clear"></div>

					</div>
					<span id="lp_dian" class="fr">
					<span id="dpxie">
					<textarea type="text" value="" name="house" /> </textarea>
					<input type="button"  class="comm_btn" value="写评论"  id="xiedianping"  style="width:82px;" />
					</span> </span></div>
				

				<div id="pl_content">
					<div class="comm_con" id="xfptxq_B13_05" style="border-bottom:none;clear:both;">
		<div class="comm_list">
							<div class="img_cir fl">
					<img src="/Application/Home/View/Public/images/default_head.png"  width="50" height="50" class="vm">
								</div><div class="comm_list_nr fr">	
								<div class="comm_list_score" style="">
									<a href="" target="_blank">
										<div class="fl">
											<ul class="fl">
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/lpxqhrefstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/huistar.gif" width="12" height="12"></li>
												
											</ul>
										</div>
						
								<div class="fr lp_remove"></div>
									</a>
								</div>
							<div class="clear"></div>
								<div class="comm_list_con" style="position:relative;padding-right:80px;">
									<p style="height:16px; line-height:16px;text-overflow:ellipsis;width:626px;overflow:hidden ">
										<a href="" title="" target="_blank">周围环境挺好，很清净，就喜欢这样的，周围就这一个小区，旁边就是北京图书城，喜欢看书...</a>
									</p>
																	</div>
								<div style="clear:both"></div>
								<p class="look_hou">
									
									
									<em><span style="color:#999;font-family: '微软雅黑';">陈楚9&nbsp;2016-04-14 09:49:42</span></em>
								</p>
							</div>
						</div>
				
					</div>
				</div>

<div id="pl_content">
					<div class="comm_con" id="xfptxq_B13_05" style="border-bottom:none;clear:both;">
		<div class="comm_list">
							<div class="img_cir fl">
					<img src="/Application/Home/View/Public/images/default_head.png"  width="50" height="50" class="vm">
								</div><div class="comm_list_nr fr">	
								<div class="comm_list_score" style="">
									<a href="" target="_blank">
										<div class="fl">
											<ul class="fl">
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/lpxqhrefstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/huistar.gif" width="12" height="12"></li>
												
											</ul>
										</div>
						
								<div class="fr lp_remove"></div>
									</a>
								</div>
							<div class="clear"></div>
								<div class="comm_list_con" style="position:relative;padding-right:80px;">
									<p style="height:16px; line-height:16px;text-overflow:ellipsis;width:626px;overflow:hidden ">
										<a href="" title="" target="_blank">周围环境挺好，很清净，就喜欢这样的，周围就这一个小区，旁边就是北京图书城，喜欢看书...</a>
									</p>
																	</div>
								<div style="clear:both"></div>
								<p class="look_hou">
									
									
									<em><span style="color:#999;font-family: '微软雅黑';">陈楚9&nbsp;2016-04-14 09:49:42</span></em>
								</p>
							</div>
						</div>
				
					</div>
				</div>


				<div id="pl_content">
					<div class="comm_con" id="xfptxq_B13_05" style="border-bottom:none;clear:both;">
		<div class="comm_list">
							<div class="img_cir fl">
					<img src="/Application/Home/View/Public/images/default_head.png"  width="50" height="50" class="vm">
								</div><div class="comm_list_nr fr">	
								<div class="comm_list_score" style="">
									<a href="" target="_blank">
										<div class="fl">
											<ul class="fl">
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/allstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/lpxqhrefstar.gif" width="12" height="12"></li>
												<li><img src="/Application/Home/View/Public/images/huistar.gif" width="12" height="12"></li>
												
											</ul>
										</div>
						
								<div class="fr lp_remove"></div>
									</a>
								</div>
							<div class="clear"></div>
								<div class="comm_list_con" style="position:relative;padding-right:80px;">
									<p style="height:16px; line-height:16px;text-overflow:ellipsis;width:626px;overflow:hidden ">
										<a href="" title="" target="_blank">周围环境挺好，很清净，就喜欢这样的，周围就这一个小区，旁边就是北京图书城，喜欢看书...</a>
									</p>
																	</div>
								<div style="clear:both"></div>
								<p class="look_hou">
									
									
									<em><span style="color:#999;font-family: '微软雅黑';">陈楚9&nbsp;2016-04-14 09:49:42</span></em>
								</p>
							</div>
						</div>
				
					</div>
				</div>

                <!-- 点评内容 end -->
            </div>
            <div class="lp_comment_rt fr" id="xfxq_C03_29">
            	<div class="lp_bj_rt">
               
                    <div class="slideTxtBox_a">
                        <div class="hd hdmenu">
                            <ul><li class="on">同区域</li><li class="">同价格</li></ul>


                        </div>
                        <div class="bd hdjieguo" >
                           <ul style="display: block;">
						      <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
																							                                <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010738755" class="vm" name="toCompare" value="1010738755" type="checkbox"> <label class="vm"><a target="_blank" href="">首开万科城市之光</a></label></div>
                                </li>
																							                                <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010789635" class="vm" name="toCompare" value="1010789635" type="checkbox"> <label class="vm"><a target="_blank" href=>东亚环球国际</a></label></div>
                                </li>
                                <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
																							                                <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010738755" class="vm" name="toCompare" value="1010738755" type="checkbox"> <label class="vm"><a target="_blank" href="">首开万科城市之光</a></label></div>
                                </li>
																							                                <li>
                                	<a class="fr" href="" target="_blank">[拉斐水岸]</a>
                                    <div class="lpchoose"><input id="1010789635" class="vm" name="toCompare" value="1010789635" type="checkbox"> <label class="vm"><a target="_blank" href=>东亚环球国际</a></label></div>
                                </li>
																                                
                            </ul>
                            
                            <ul style="display: none;">
                               	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
                                 	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
                                 	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
                                 	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
                                 	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
                                 	  <li>
                                	<a class="fr" href="" target="_blank">[碧桂园·官厅湖]</a>
                                    <div class="lpchoose"><input id="1010766169" class="vm" name="toCompare" value="1010766169" type="checkbox"> <label class="vm"><a target="_blank" href="">万科东地城市之光</a></label></div>
                                </li>
																							                                
                            </ul>

                        </div>
					</div>

<script type="text/javascript">
	
    $(function(){
    	$('.hdmenu>ul>li').hover(function(){
            $(this).addClass('on');
            var index=$(this).index();
            $(this).siblings('li').removeClass('on');
            $(this).parents('.hdmenu').next('.hdjieguo').children('ul').eq(index).css('display','block');
 			$(this).parents('.hdmenu').next('.hdjieguo').children('ul').eq(index).siblings().css('display','none');
            
    	})
       var gid=<?php echo ($detail["gid"]); ?>;var click=1;
    	$('#xiedianping').click(function(){
    		
    		    click++;
            $(this).css('height', '61px');
            $(this).val('提交评论');
    		$('textarea[name=house]').css('display','block');
	        if(click!=1){
	        	 if( $(this).val()=='提交评论'){
	        	 	if($.trim($('textarea[name=house]').val())==''){
	        	 		$('textarea[name=house]').css({'border':'1px solid red'}); return;}
	        	 	else{
	        	 		$('textarea[name=house]').css('border', '1px solid #ccc');
	        	 	}  
	            	  $.post('House/message',{'gid':gid,'content':$('textarea[name=house]').val()},function(data){},'json');
	            }

	          
	        }
	           
	      
               
    	})


    })

</script>					
				
                  
					<div style="width:300px; margin:10px auto">
						<div style="position:relative;width:300px;height:200px;border:none;padding:0px;margin:0px;overflow:hidden;">	<a href="" target="_blank">		<img src="" width="300" height="200" border="0">	</a>	<a href="" target="_blank">		<div style="position:absolute; left: 0px; bottom: 0px; width: 30px; height: 20px; z-index: 12; background: ">		</div>	</a></div><!-- AdSame ShowCode: 北京 / 14-9新房详情页 / 画中画1 End -->

					</div>
                </div>
            </div>
        </div>
   </div>
<script type="text/javascript">addLoadEvent(Focus());</script>
    <div id="allmap" style="width:1100px; height:300px;margin:0 auto"></div>


<div class="link">
  <dl>
        <dt><strong class="floatl" style="font-weight:bold">友情链接</strong>
        <span class="floatr"><a href="" target="_blank">更多链接&gt;&gt;</a></span>
        </dt>
    </dl>
    <div class="flinks">
          
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a>
                  <a target="_blank" href="">腾讯旅游网</a> 

    </div>
    <div class="clear"></div>
</div>
      <div class="footer">
        
                <div class="friendlink">
                    <div class="friendlink_about"><a href="">关于我们</a>|<a href="">广告服务</a>|<a href="">商务洽谈</a></div>
                    <div class="friendlink_link"><span>友情链接</span><a href="">114啦影视</a>|<a href="">海报网</a>|<a href="">178游戏网</a><a href="">电影网</a>|<a href="">刷机精灵</a>|<a href="">欢视网</a>
                    <a href="">太平洋时尚网</a>|<a href="">电视应用市场</a>|<a href="">智能电视</a></div>
                </div>
                <div class="banquan">
                   <span>主 管：中共黄石市委宣传部 黄石市人民政府新闻办公室　主 办：蓝宝石网络工作室　电 话：0714-12345678 </span>
                   <span>Copyright © 1998 - 2015 Tencent. All Rights Reserved. 鄂备0000000-1 蓝宝石公司 版权所有 腾讯网络文化经营许可证</span>
                </div>

      </div>  

</body>
</html>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=yIXaWZKushCU5UVrZH043CFS"></script>

<script type="text/javascript">
    // 百度地图API功能    
    map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(116.417854, 39.921988), 15);
    var data_info = [[116.417854, 39.921988, "地址：北京市东城区王府井大街88号乐天银泰百货八层"],
                     [116.406605, 39.921585, "地址：北京市东城区东华门大街"],
                     [116.412222, 39.912345, "地址：北京市东城区正义路甲5号"]
                    ];
                     map.enableScrollWheelZoom(true); //启用滚轮放大缩小
                    //向地图中添加缩放控件
                    var ctrlNav = new window.BMap.NavigationControl({
                        anchor: BMAP_ANCHOR_TOP_LEFT,
                        type: BMAP_NAVIGATION_CONTROL_LARGE
                    });
                    map.addControl(ctrlNav);

                    //向地图中添加缩略图控件
                    var ctrlOve = new window.BMap.OverviewMapControl({
                        anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                        isOpen: 1
                    });
                    map.addControl(ctrlOve);

                    //向地图中添加比例尺控件
                    var ctrlSca = new window.BMap.ScaleControl({
                        anchor: BMAP_ANCHOR_BOTTOM_LEFT
                    });
                    map.addControl(ctrlSca);

    var opts = {
        width: 250,     // 信息窗口宽度
        height: 80,     // 信息窗口高度
        title: "信息窗口", // 信息窗口标题
        enableMessage: true//设置允许信息窗发送短息
    };
    for (var i = 0; i < data_info.length; i++) {
        var marker = new BMap.Marker(new BMap.Point(data_info[i][0], data_info[i][1]));  // 创建标注
        var content = data_info[i][2];
        map.addOverlay(marker);               // 将标注添加到地图中
        addClickHandler(content, marker);
    }
    function addClickHandler(content, marker) {
        marker.addEventListener("click", function (e) {
            openInfo(content, e)
        }
        );
    }
    function openInfo(content, e) {
        var p = e.target;
        var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
        var infoWindow = new BMap.InfoWindow(content, opts);  // 创建信息窗口对象 
        map.openInfoWindow(infoWindow, point); //开启信息窗口
    }
</script>