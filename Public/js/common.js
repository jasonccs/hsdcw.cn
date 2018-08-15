//author :石全松
//date   :2016-06-14
//update :2016-06-14

$(function(){

    $('.menu>.nav_body>.nav>ul>li>a').hover(function(){
        $(this).css({'background':'#B73102','color':'#fff'})
         //$(this).siblings().css({'background':'','padding':'0px','color':'#000'});
    },function(){
    	if($(this).hasClass('cur')){
    	   // $(this).css({'color':'#fff'});
            $(this).removeAttr('style')
    	}else{
    	   // $(this).css({'background':'','padding':'0px','color':'#000'});
			$(this).removeAttr('style')
    	}

    });

    $('.artist li').each(function(){

		$(this).find('.cover').css('top', -$(this).height());

		$(this).hover(function(){
			$(this).find('.cover').animate({
				'top': '0'
			},300);
		},function(){
			$(this).find('.cover').animate({
				'top':$(this).height()
			},{
				duration: 300,
				complete:function(){
					$(this).css('top', -$(this).parent('li').height())
				}
			});
		});

	});
	//会员登录拉下个人中心

	$('.top_login>.login>b').mouseover(function(){

         $(this).next().css('display','block');
         $(this).next().mouseleave(function(){
         	$(this).css('display','none');
         })
	});

	//菜单切换的跟踪样式
	$('.menu>.nav_body>.nav>ul>li>a').each(function () {
       var url= String(window.location),regx = /\d+/;
       var new_url=url.replace(/\/\d+\.?|html|htm/,'.');

        if(regx.test(url)){
        	// console.log(url);
            if ($($(this))[0].href == new_url || $($(this))[0].href.substring(0,$($(this))[0].href.length-4) == new_url || $($(this))[0].href.substring(0,$($(this))[0].href.length-3) == new_url)
                $(this).addClass('cur');
		}else{
            if ($($(this))[0].href == url)
                $(this).addClass('cur');
		}


    });

});

jQuery.fn.extend({

	slideFocus: function(){
		var This = $(this);
		var sWidth = $(This).width(),
			len    =$(This).find('ul li').length,
			index  = 0,
			Timer;

		// btn event
		var btn = "<div class='btn'>";
		for(var i=0; i < len; i++) {
			btn += "<span></span>";
		};
		btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
		$(This).append(btn);
		$(This).find('.btn span').eq(0).addClass('on');


		$(This).find('.btn span').mouseover(function(){
			index = $(This).find('.btn span').index(this);
			Tony(index);
		});

		$(This).find('.next').click(function(){
			index++;
			if(index == len){index = 0;}
			Tony(index);
		});

		$(This).find('.pre').click(function(){
			index--;
			if(index == -1){index = len - 1;}
			Tony(index);
		});


		// start setInterval
		$(This).find('ul').css("width",sWidth * (len));
		$(This).hover(function(){
			clearInterval(Timer);
			show($(This).find('.preNext'));
		},function(){
			hide($(This).find('.preNext'));
			Timer=setInterval(function(){
				Tony(index);
				index++;
				if(len == index){index = 0;}
			}, 2000)
		}).trigger("mouseleave");

		function Tony(index){
			var new_width = -index * sWidth;
			$(This).find('ul').stop(true,false).animate({'left' : new_width},300);
			$(This).find('.btn span').stop(true,false).eq(index).addClass('on').siblings().removeClass('on');
		};


		// show hide
		function show(obj){ $(obj).stop(true,false).fadeIn();}
		function hide(obj){ $(obj).stop(true,false).fadeOut();}
	}
});


//文章评论点赞方法
function thumbs(that){
    let result=false;
    $.ajax({
        url:'/Home/Comment/thumbs',
        type:'POST',
        data:{'id':$(that).attr('data-commentid')},
        dataType:'json',
        success:function(data){
            if(data.status){
                $(that).children('.digg-num').text(Number($(that).children('.digg-num').text())+1);
                result=true;
            }else{
                // layui.use(['layer', 'element'], function(){ layer.msg(data.msg);});
                login();
                $('.xa-showSignup').click(function () {
                    register_tab($(this));
                });

                $('.xa-user_login').click(function () {
                    login_tab($(this));
                });

                $('.rl-close').click(function () {
                    loginhide();
                });
                viplogin();
                result=false;
            }
        }
    });
    return result
}




/**
* 时间对象的格式化
*/
Date.prototype.format = function(format)
{
/*
* format="yyyy-MM-dd hh:mm:ss";
*/
var o = {
"M+" : this.getMonth() + 1,
"d+" : this.getDate(),
"h+" : this.getHours(),
"m+" : this.getMinutes(),
"s+" : this.getSeconds(),
"q+" : Math.floor((this.getMonth() + 3) / 3),
"S" : this.getMilliseconds()
}

if (/(y+)/.test(format))
{
format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4
- RegExp.$1.length));
}

for (var k in o)
{
if (new RegExp("(" + k + ")").test(format))
{
format = format.replace(RegExp.$1, RegExp.$1.length == 1
? o[k]
: ("00" + o[k]).substr(("" + o[k]).length));
}
}
return format;
}


function getTime(/** timestamp=0 **/) {
    var ts = arguments[0] || 0;
    var t,y,m,d,h,i,s;
    t = ts ? new Date(ts*1000) : new Date();
    y = t.getFullYear();
    m = t.getMonth()+1;
    d = t.getDate();
    h = t.getHours();
    i = t.getMinutes();
    s = t.getSeconds();
    // 可根据需要在这里定义时间格式
    return y+'-'+(m<10?'0'+m:m)+'-'+(d<10?'0'+d:d)+' '+(h<10?'0'+h:h)+':'+(i<10?'0'+i:i)+':'+(s<10?'0'+s:s);
}


