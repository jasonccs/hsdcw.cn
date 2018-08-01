let loginhtml = '<div id="signin" class="rl-modal in" aria-hidden="false">\
<div class="rl-modal-header">\
<h1>\
<span class="active-title xa-user_login">登录</span>\
<span data-fromto="signin:signup" class="xa-showSignup">注册</span>\
</h1>\
<button type="button" class="rl-close" id="aaaa"></button>\
</div>\
<div class="rl-modal-body js-loginWrap">\
<div class="clearfix">\
<div class="l-left-wrap l">\
<form id="signup-form" autocomplete="off">\
<p class="rlf-tip-globle color-red" id="signin-globle-error"></p>\
<div class="rlf-group pr has-error">\
<input type="text" value="" maxlength="37" name="email" data-validate="require-mobile-phone" autocomplete="off" \
class="xa-emailOrPhone ipt ipt-email js-own-name" placeholder="请输入手机号">\
<p class="rlf-tip-wrap errorHint color-red"></p>\
<a href="javascript:mobileSendCode();" class="verify-mobile-wrap js-verify-refresh" style="display: none">发送验证码</a>\
</div><div class="rlf-group  pr">\
<input type="password" name="password" data-validate="require-password" class="ipt ipt-pwd js-loginPassword \
js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off">\
<p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>\
</div>\
<div class="rlf-group clearfix form-control js-verify-row" style="display: none;">\
<input type="text" name="mobile-code" class="ipt ipt-verify l" data-validate="require-mobile-code" \
 maxlength="4" data-minlength="4" placeholder="请输入短信验证码">\
<p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>\
<input type="text" name="verify" class="ipt ipt-verify l" data-validate="require-string" placeholder="请输入图像验证码">\
<a href="javascript:void(0);" class="verify-img-wrap js-verify-refresh"><img src="/Admin/Login/verify" onclick="imgVerify(this)" width="87" height="36"></a>\
<p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>\
</div><div class="rlf-group rlf-appendix form-control  clearfix">\
<label for="auto-signin" class="rlf-autoin l" hidefocus="true">\
<input type="checkbox" checked="checked" class="auto-cbx" id="auto-signin">下次自动登录</label>\
<a href="/user/newforgot" class="rlf-forget r" target="_blank" hidefocus="true">忘记密码 </a>\
</div><div class="rlf-group clearfix">\
<input type="button" value="登录"  class="btn-red btn-full xa-login" >\
<input type="button" value="注册"  class="btn-red btn-full xa-register" style="display: none">\
</div>\
</form>\
</div>\
</div>\
</div>\
<div class="rl-model-footer">\
<div class="pop-login-sns clearfix">\
<span class="l " style="color:#666">其他方式登录</span>\
<a href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weibo" class="pop-sns-weibo r mr60">\
<i class="icon-weibo"></i></a>\
<a href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weixin" class="pop-sns-weixin r">\
<i class="icon-weixin"></i></a>\
<a href="/Home/Qlogin/qqlogin"  hidefocus="true" data-login-sns="/Home/Qlogin/qqlogin" class="pop-sns-qq r">\
<i class="icon-qq"></i>     </a>\
</div>\
</div>\
</div><div class="modal-backdrop  in"></div>';


function imgVerify(va) {
    let src=$(va).attr('src');
    $(va).attr('src',src+'?'+Math.random());
}

//短信验证码
function mobileSendCode() {
    $.ajax({
        url:'/Member/Login/aliSMS',
        type:'POST',
        data:{'mobile':13554078820},
        dataType:'json',
        // cache: false,
        // contentType: false,
        // processData: false,
        success:function(s){
            $this.removeClass('lock-form');//解锁表单
            var html = (s.code != 1 ? '错误代码：' : '')+s.msg;
            $('.panel-footer').html(html);
            return false;
        }
    });
}

let login = function () {
    $('.footer').after(loginhtml);
};

let loginhide = function () {

    $('#signin').remove();
    $('.modal-backdrop').remove();
};

let viplogin = function () {
    // body...
    $('.xa-login').click(function () {

        $.post('' + userloginurl + '', {
            mobile: $("input[name='email']").val(),
            pwd: $("input[name='password']").val()
        }, function (data) {

            if (data.status === false) {

                $("#signin").addClass("rl-modal in shake");
                let set = setTimeout(function () {
                    $("#signin").removeClass('shake');
                }, 1500);

                $("input[name='email']").next().html('请输入正确的邮箱或手机号');

            } else {
                if (data.status && data.pwderr == 'error') {
                    $("#signin").addClass("rl-modal in shake");
                    var set = setTimeout(function () {
                        $("#signin").removeClass('shake');
                    }, 1500);
                    $("input[name='password']").next().html('请输入正确的密码');
                    $("input[name='email']").next().html('');

                }
                if (data.status && data.pwderr == 'true') {
                    $("input[name='password']").next().html('');
                    $("input[name='email']").next().html('');
                    $('.top_login .login i').css({'display': 'block'});
                    $('.top_login .login a').css({'display': 'none'});
                    window.location.href = curenturl;

                }

            }

        }, 'json');
    });

    //注册
    $('.xa-register').click(function () {

        $.post('' + user_register_url + '', {
            mobile: $("input[name='email']").val(),
            password: $("input[name='password']").val()
        }, function (data) {

            if (!data.status) {

                $("#signin").addClass("rl-modal in shake");
                let set = setTimeout(function () {
                    $("#signin").removeClass('shake');
                }, 1500);
                if (data.msg==='手机号已经存在！'|| data.msg==='手机号必填！' || data.msg==='手机格式不正确！'){
                    $("input[name='email']").next().html(data.msg);
                }else{
                    $("input[name='email']").next().html('');
                }
                if(data.msg==='密码必填！' || data.msg==='6-16位密码，区分大小写，不能用空格！'){
                    $("input[name='password']").next().html(data.msg);
                }else{
                    $("input[name='password']").next().html('');
                }

            }else{
                $('#signup-form p ').html('');
            }

        }, 'json');
    })
};


$(function () {

    $('.userlogin').click(function () {

        login();

        $('.xa-showSignup').click(function () {
            $('.js-verify-row').css({'display':'block'});
            $('.xa-user_login').removeClass('active-title');
            $('.rlf-group .xa-register').css({'display':'block'});
            $('.rlf-group .xa-login').css({'display':'none'});
            $('.verify-mobile-wrap').css({'display':'block'});
            $('#signup-form p').html('');
            $(this).addClass('active-title');
        });

        $('.xa-user_login').click(function () {
            $('.js-verify-row').css({'display':'none'});
            $('.xa-showSignup').removeClass('active-title');
            $('.rlf-group  .xa-register').css({'display':'none'});
            $('.rlf-group  .xa-login').css({'display':'block'});
            $('.verify-mobile-wrap').css({'display':'none'});
            $('#signup-form p').html('');
            $(this).addClass('active-title');
        });

        $('.rl-close').click(function () {

            loginhide();

        });

        viplogin();
        $('.pop-sns-qq').click(function () {
            if (curenturl == '/') {
                $.cookie('lbsnet_cur_redircturl', document.domain, {path: '/'});
                // debugger;
            } else {
                $.cookie('lbsnet_cur_redircturl', curenturl, {path: '/'});
            }

        })
    });
    //会员退出
    $('.user_center .outlogin').click(function () {
        $.post('/Member/Login/loginout', {'id': 11}, function (data) {
            if (data.status) {
                window.location.reload();
            }
        }, 'json');
    })

});


