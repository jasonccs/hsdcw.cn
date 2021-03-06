$(function () {
    $.fn.extend({
        slideFocus: function(){
            let This = $(this);
            let sWidth = $(This).width(),
                len    =$(This).find('.fangchan_focus ul').length,
                index  = 0,
                Timer;
            // alert(len);
            let btn = "<div class='btn'>";
            for(let i=0; i < len; i++) {
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
                if(index === len){index = 0;}
                Tony(index);
            });

            $(This).find('.pre').click(function(){
                index--;
                if(index === -1){index = len - 1;}
                Tony(index);
            });


            // start setInterval
            $(This).find('.fangchan_focus').css("width",sWidth * (len));
            $(This).hover(function(){
                clearInterval(Timer);
                show($(This).find('.preNext'));
            },function(){
                hide($(This).find('.preNext'));
                Timer=setInterval(function(){
                    Tony(index);
                    index++;
                    if(len === index){index = 0;}
                }, 2000)
            }).trigger("mouseleave");

            function Tony(index){
                let new_width = -index * sWidth;
                $(This).find('.fangchan_focus').stop(true,false).animate({'left' : new_width},300);
                $(This).find('.btn span').stop(true,false).eq(index).addClass('on').siblings().removeClass('on');
            };


            // show hide
            function show(obj){ $(obj).stop(true,false).fadeIn();}
            function hide(obj){ $(obj).stop(true,false).fadeOut();}
        }
    });
});
