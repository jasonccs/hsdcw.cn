<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>黄石房产</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="/Application/Home/View/Public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/main.css" /> 
    <link rel="stylesheet" type="text/css" href="/Application/Home/View/Public/css/house.css" /> 
    <script type="text/javascript" src="/Application/Home/View/Public/js/jquery.1.10.2.min.js"></script> 
    <script type="text/javascript" src="/Application/Home/View/Public/js/date.js"></script> 
    <script type="text/javascript" src="/Application/Home/View/Public/js/common.js"></script> 
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


  <div class="lanmu">
      <div class="bread">
           <a href="/">首页</a>
           <span>></span>
           <a href="">房产</a>
      </div>
  </div>

     <div class="fangchan">
        <div class="yixuan">
           <ul class="clearfix tiaojian">
            <li style="border:none;color:#000;">已选条件</li>
            <li>
                <a class="fl" href="javascript:void(0)">2号线</a>
                <a href="" class="close fl" title="删除"></a>
            </li> 
          </ul>
        </div>
          <div class="sousuo">
              <dl>
                 <dt>区域</dt>
                  <?php if(is_array($diqu)): $i = 0; $__LIST__ = $diqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd> <?php echo ($vo); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
              
                   <?php if(!empty($sondiqu) and count($sondiqu) > 1): ?><dl>
                       <?php if(is_array($sondiqu)): $i = 0; $__LIST__ = $sondiqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd> <?php echo ($vo); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dl><?php endif; ?>
               
              </dl>
               <dl>
                 <dt>价格</dt>
                 <?php if(is_array($price)): $i = 0; $__LIST__ = $price;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd> <?php echo ($vo); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
              </dl>
               <dl>
                 <dt>面积</dt>
                    <?php if(is_array($mianji)): $i = 0; $__LIST__ = $mianji;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd> <?php echo ($vo); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
              </dl>
        <dl>
                 <dt>户型</dt>
                 <?php if(is_array($huxing)): $i = 0; $__LIST__ = $huxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd> <?php echo ($vo); ?></dd><?php endforeach; endif; else: echo "" ;endif; ?>
              </dl>
          </div> 
     </div>

     <div class="fangchanjieguo">

          <div class="fangchanjieguol">
            <div class="soutiaojian">
                  <ul>
                    <li><a href="">默认排序</a></li>
                    <li><a href="">价格</a></li>
                    <li><a href="">开盘时间</a></li>
                    <li><a href="">点评数</a></li>
                  </ul>
            </div> 
            <div class="soushow">
               <ul>
                

                   <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                   <div class="fimg">
                      <a href="<?php echo U('Fang/show',array('gid'=>$vo['gid']));?>"><img src="<?php echo ($vo["goods_img"]); ?>" width="180" height="106"></a>

                   </div>
                   <div class="finfo">
                         <div class="finfo_one">
                          <h2><a href="<?php echo U('Fang/show',array('gid'=>$vo['gid']));?>">  <?php echo ($vo["main_title"]); ?></a>
                            <img src="/Application/Home/View/Public/images/hot.png" width="24" height="14"/>
                            </h2>
                                <div id="sjina_C32_03">
                                    
                                  <ul class="star_group">
                                  <!-- orange-star为橘黄色星星，half为各一半星星，gray-star为灰色星星 -->
                                  
                                   <script>
                                  //   var allstar = 3;
                                  //   var halfstar = 1;
                                  //   var huistar = 1;
                                  //   var starstr = '';
                                  //   for(var i=0; i < allstar; i++){
                                  //     starstr += '<li class="orange-star"></li>';
                                  //   }
                                  //   if (halfstar) {
                                  //     starstr += '<li class="half-star"></li>';
                                  //   }
                                  //   for(var i=0; i < huistar; i++){
                                  //     starstr += '<li class="gray-star"></li>';
                                  //   }
                                  //   document.write(starstr);
                                  // </script>
                                    <li class="orange-star"></li>
                                    <li class="orange-star"></li>
                                    <li class="orange-star"></li>
                                    <li class="half-star"></li>
                                    <li class="gray-star"></li>
                                                                    
                                  </ul>
                                    <span class="value_num">(359条评论)</span>
                               
                                </div>
                       </div>
                       <div class="finfo_two">
                          <a href="">[ 经济开发区 ] 万家湖中路以东沌口路以南（沌口路和</a>
                       </div>
                       <div class="finfo_three">
                          <a href="">毛坯</a>
                          <a href="">中环以外</a>
                          <a href="">交通便利</a>
                       </div>
                       <div class="finfo_four">
                          <h2><a href=""><?php echo ($vo["mianji"]); ?>平米  <?php echo ($vo["huxing"]); ?>居室</a></h2>
                       </div>
                       <div class="fprice">
                             <div class="fprice_l"><b><?php echo ($vo["price"]); ?></b><em>元/㎡</em></div>
                             <div class="fprice_c"><em></em><b>400-12345678</b></div>
                             <div class="fprice_r"><em></em><span><a href="">预约看房</a></span></div>
                       </div>
                   </div>

                 </li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
                </ul>

               <div class="house_page"> <?php echo ($page); ?></div>
            </div> 
        </div>

<!-- 右侧开始 -->
        <div class="fangchanjieguor">

            <div class="zf-help" style="margin-bottom: 20px;" id="sjina_D51_11">
  <h2 class="zf-tit" style="height: 40px;line-height: 40px;border-color:#000;"><span>帮你找房</span></h2>
  <ul class="zf-content">
    <li class="fm-line clearfix" id="entrust_district_li">
      <label for="" class="fl zf-lab">意向区域：</label>
      <div class="zf-select fl">
        <i class="s-arr"></i>
        <span class="mr-opn" id="entrust_district">不限</span>
        <ul class="zf-opns" id="district_list" style="display: none;">
                      <li class="zf-opn">东湖高新区</li>
                      <li class="zf-opn">洪山区</li>
                      <li class="zf-opn">江岸区</li>
                      <li class="zf-opn">东西湖区</li>
                      <li class="zf-opn">汉阳区</li>
                      <li class="zf-opn">武昌区</li>
                    
                  </ul>
      </div>
    </li>
    <li class="fm-line clearfix" id="yxloupan_container">
      <label for="" class="fl zf-lab">意向楼盘：</label>
      <input type="text" class="zf-input" id="yxloupan" onkeyup="yxloupanSearch.suggest(event)" onfocus="yxloupanSearch.suggest(event)" onblur="yxloupanSearch.onblur(event);" style="color: rgb(102, 102, 102);" autocomplete="off">
      <input type="hidden" id="entrust_projname">
      <input type="hidden" id="entrust_newcode">
    </li>
    <li class="fm-line clearfix" id="entrust_price_li">
      <label for="" class="fl zf-lab">预算总价：</label>
      <div class="zf-select fl">
        <i class="s-arr"></i>
        <span class="mr-opn" id="entrust_price">不限</span>
        <ul class="zf-opns" id="price_list" style="display: none;">
                      <li class="zf-opn">30万以下</li>
                      <li class="zf-opn">30-50万</li>
                      <li class="zf-opn">50-80万</li>
                      <li class="zf-opn">80-100万</li>
                      <li class="zf-opn">100-140万</li>
                      <li class="zf-opn">140-200万</li>
                      <li class="zf-opn">200万以上</li>
                  </ul>
      </div>
    </li>
    <li class="fm-line clearfix">
      <label for="" class="fl zf-lab">手机号码：</label>
      <input type="text" class="zf-input" autocomplete="off" id="entrust_cellphone" onblur="checkMobile(this.value);">
    </li>
  
    <li id="adver_yanzhengma" class="clearfix" style="margin-bottom:10px;display:none;">
      <img id="entrust_adver_mf_authimg" width="76" height="32" onclick="MobileSendCode.getNewImgCode('entrust')" src="" style="margin: 0px 5px 0 0px;float:left;">
      <input id="adver_mf_authcode" type="text" value="" style="float:left;width:130px;height:28px;border:1px solid #cecece;text-indent:4px;">
      <input type="button" value="确定" onclick="MobileSendCode.sendMesAndShowMathCode('entrust','entrust_getauthcode','entrust_cellphone');" style="float:left;margin: 4px 5px;background:#ededed;border:1px solid #dedede;height:25px;width:35px;cursor:pointer;color:black;">
    </li>
    <li class="fm-line clearfix">
      <label for="" class="fl zf-lab">验<i style="margin-left: 7px;"></i>证<i style="margin-left: 7px;"></i>码：</label>
      <input type="text" class="zf-input fl" style="width: 82px;margin-right: 10px;" id="entrust_authcode">
      <input type="button" class="yz-btn fl" value="发送验证码" href="javascript:void(0);" onclick="MobileSendCode.sendMesAndShowMathCode('entrust','entrust_getauthcode','entrust_cellphone');" id="entrust_getauthcode">
    </li>
    <li style="margin-top: 10px;"><input type="button" class="zf-sub" value="提交" id="entrust_submit"></li>
  </ul>

</div>
            
<div class="contentHot" id="sjina_C13_09">
        <div class="hotTool hidden">
          <h3 class="fl" ctm-data="newlp_bt"><a href="" target="_blank" ctm-data-idx="1">黄石最新楼盘</a></h3>
          <a href="" ctm-data="newlp_more" target="_blank" class="fr">更多<em>&gt;</em></a>
        </div>
        <div class="hotContent" ctm-data="newlp_lb">
          <dl>
            <dt>
              <span class="mc">楼盘名称</span><span class="jg">价格</span><span class="lt">论坛</span><span class="db">对比</span>
            </dt> 
                          
            <dd>
              <span class="mc"><a href="http://..com/3/" target="_blank" title="大华滨江天地三期铂金瑞府">大华滨江天地三期</a></span>
              <span class="jg">--</span>
              <span class="lt">--</span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153070','大华滨江天地三期铂金瑞府');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://shijitianjie..com/" target="_blank" title="世纪天街">世纪天街</a></span>
              <span class="jg">--</span>
              <span class="lt"><a href="http://shijitianjie..com/bbs/" target="_blank" title="世纪天街业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153066','世纪天街');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://guanggushijichengas." target="_blank" title="奥山光谷世纪城">奥山光谷世纪城</a></span>
              <span class="jg">--</span>
              <span class="lt"><a href="http://guanggushijichengas.bbs/" target="_blank" title="奥山光谷世纪城业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153062','奥山光谷世纪城');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://baolichengsohozhongxin." target="_blank" title="保利城SOHO中心">保利城SOHO中心</a></span>
              <span class="jg">15200元/㎡</span>
              <span class="lt">--</span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153058','保利城SOHO中心');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://sjtdsjgg." target="_blank" title="盛景天地盛景公馆">盛景天地盛景公馆</a></span>
              <span class="jg">--</span>
              <span class="lt">--</span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153056','盛景天地盛景公馆');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://188guojishequgg." target="_blank" title="光谷188国际社区">光谷188国际社区</a></span>
              <span class="jg">--</span>
              <span class="lt"><a href="http://188guojishequgg.bbs/" target="_blank" title="光谷188国际社区业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153050','光谷188国际社区');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://xinchengjinghui." target="_blank" title="新城璟汇">新城璟汇</a></span>
              <span class="jg">--</span>
              <span class="lt">--</span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153048','新城璟汇');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://hailunchuntian027.3/" target="_blank" title="海伦春天三期">海伦春天三期</a></span>
              <span class="jg">--</span>
              <span class="lt"><a href="http://hailunchuntian027.bbs/" target="_blank" title="海伦春天三期业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153038','海伦春天三期');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://xingfutiandiyiqiht." target="_blank" title="海天幸福天地一期">海天幸福天地一期</a></span>
              <span class="jg">5600元/㎡</span>
              <span class="lt"><a href="http://xingfutiandiyiqiht.bbs/" target="_blank" title="海天幸福天地一期业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153030','海天幸福天地一期');">+</a></span>
            </dd>
                                      
            <dd>
              <span class="mc"><a href="http://xingfushidaigongyu." target="_blank" title="幸福时代公寓">幸福时代公寓</a></span>
              <span class="jg">11500元/㎡</span>
              <span class="lt"><a href="http://xingfushidai.bbs/" target="_blank" title="幸福时代公寓业主论坛">BBS</a></span>
              <span class="db"><a href="javascript:void(0);" onclick="add('2610153024','幸福时代公寓');">+</a></span>
            </dd>
                                  </dl>
        </div>
      </div>
  

      <div style="position: relative;text-align: center;">
        <div class="news_adv"><a href=""><img src="/Application/Home/View/Public/images/news_adv.jpg"></a></div>
        <div style="bottom:0px; width: 26px; height: 16px; z-index: 12; background: url(/Application/Home/View/Public/images/leftbottom_new.png) 100% 0% no-repeat;position:absolute"></div>
          </div>



        </div>
        <!-- 右侧结束 -->
     </div>


<!-- 折线图 -->
    <div id="main" style="height:220px;width:1098px; margin:20px auto 0px; border:1px solid #ddd"></div>

    
<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
    <script type="text/javascript">
        // 路径配置
        require.config({
            paths: {
                echarts: 'http://echarts.baidu.com/build/dist'
            }
        });
        
        // 使用
        require(
            [
                'echarts',
                'echarts/chart/line' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
                
                var option = option = {
   title: {
       text: "2016黄石房价折线图",
       x: "center"
   },
   tooltip: {
       trigger: "item",
       formatter: "{a} <br/>{b} : {c}"
   },
   legend: {
       x: 'left',
       data: ["黄石房价"]
   },
   xAxis: [
       {
           type: "category",
           name: "月份",
           splitLine: {show: false},
           data: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"]
       }
   ],
   yAxis: [
       {
           type: "log",
           name: "均价(元)"
       }
   ],
    toolbox: {
       show: true,
       feature: {
           // mark: {
           //     show: true
           // },
           // dataView: {
           //     show: true,
           //     readOnly: true
           // },
           restore: {
               show: true
           },
           saveAsImage: {
               show: true
           }
       }
   },
   // calculable: true,
   series: [
     
       {
           name: "黄石房价",
           type: "line",
           data: [1320,2400,1900,2500,2100,2320,3000]

       }
   ]
};
                
                    
              window.onresize = myChart.resize;  
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
<!-- 折线图 -->
<!-- 免佣推荐开始 -->
<div class="border">
<h3 class="cloumn-name">其他推荐</h3>

    <dl class="recommend-xfmy ">
 
    <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>
     <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>
     <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>
     <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>
     <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>
     <dd>
        <p class="pic"><a href="" target="_blank"><img src=""></a></p>
        <p class="words"><a href="" target="_blank">朝阳 东湖湾</a>
            </p>                        
        <p class="words2"><span class="org bold floatr">1300万</span>3室2厅</p>
    </dd>

   
</dl>
<input id="xfmy_count" type="hidden" value="5">
<div class="clear"></div>

 </div>

<!-- 免佣推荐开始 -->

<!-- 友情连接 -->
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
<!-- 友情连接 -->

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