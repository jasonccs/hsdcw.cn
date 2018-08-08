//author :石全松
//date   :2018-06-16
//update :2018-08-01

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
<a href="javascript:mobileSendCode();" class="verify-mobile-wrap js-verify-refresh" style="display: none">获取验证码</a>\
</div><div class="rlf-group  pr">\
<input type="password" name="password" data-validate="require-password" class="ipt ipt-pwd js-loginPassword \
js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off">\
<p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>\
</div>\
<div class="rlf-group clearfix form-control js-verify-row" style="display: none;">\
<input type="text" name="mobile-code" class="ipt ipt-verify l" data-validate="require-mobile-code" \
 maxlength="6" data-minlength="6" placeholder="请输入短信验证码">\
<p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>\
<input type="text" name="verify" class="ipt ipt-verify l" data-validate="require-string" placeholder="请输入图像验证码">\
<a href="javascript:void(0);" class="verify-img-wrap js-verify-refresh"><img src="/Member/Verify/verify" onclick="imgVerify(this)" width="87" height="36"></a>\
<p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>\
</div><div class="rlf-group rlf-appendix form-control  clearfix" style="display: block">\
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
    if (src.indexOf('?') > 0) {
        $(va).attr("src", src.replace(/\?.*$/, '') + '?' + Math.random());
    } else {
        $(va).attr('src',src+'?'+Math.random());
    }
}


let countdown=120,reg=/^[1][3,4,5,7,8][0-9]{9}$/,mobile=$("input[name='email']");
    // password=$("input[name='password']"),
    // mobile_code=$("input[name='mobile-code']"),
    // verify=$("input[name='verify']");
//发送验证码倒计时
function setTime(obj) {
    if (countdown === 0) {
        // obj.attr('disabled',false);
        obj.attr('href','javascript:mobileSendCode();');
        obj.html("获取验证码");
        obj.prev().prev().attr('disabled');
        countdown = 120;
        return;
    } else {
        // obj.attr('disabled',true);
        obj.removeAttr('href');
        obj.html("已发送(" + countdown + "s)");
        obj.prev().prev().removeAttr('disabled');
        countdown--;
    }
    setTimeout(function() {
            setTime(obj) }
        ,1000)
}

//短信验证码
function mobileSendCode() {
    // console.log(mobile.val());
    let reg=/^[1][3,4,5,7,8][0-9]{9}$/,mobile=$("input[name='email']");
    if (mobile.val()==='' || !reg.test(mobile.val())){
        $("input[name='email']").next().html('请输入正确的手机号！');
        sendSms(mobile.val());
    }else{
            let res=sendSms(mobile.val());
            if (res) {
                setTime($('.verify-mobile-wrap'));
                mobile.next().html('');
            }
    }
}

function sendSms(mobile) {
    let result=false;
    $.ajax({
        url:'/Member/Login/aliSMS',
        type:'POST',
        data:{'mobile':mobile},
        dataType:'json',
        // cache: false,
        // async : false,
        success:function(data){
            if (!data.status){//报错机制
                $("input[name='email']").next().html(data.msg);
                 result=false;
            }else{//短信发送成功
                $("input[name='email']").next().html(data.msg);
                 result=true;
            }
        }
    });
    return result
}

//登录tab
let login_tab=function (that) {
    $('.js-verify-row').css({'display':'none'});
    $('.xa-showSignup').removeClass('active-title');
    $('.rlf-group  .xa-register').css({'display':'none'});
    $('.rlf-group  .xa-login').css({'display':'block'});
    $('.verify-mobile-wrap').css({'display':'none'});
    $('.rlf-appendix').css({'display':'block'});
    $('#signup-form p').html('');
    that.addClass('active-title');

};

//注册tab
let register_tab=function (that) {
    $('.js-verify-row').css({'display':'block'});
    $('.xa-user_login').removeClass('active-title');
    $('.rlf-group .xa-register').css({'display':'block'});
    $('.rlf-group .xa-login').css({'display':'none'});
    $('.verify-mobile-wrap').css({'display':'block'});
    $('.rlf-appendix').css({'display':'none'});
    $('#signup-form p').html('');
    that.addClass('active-title');
};

let login = function () {
    $('.footer').after(loginhtml);
    let mobile=$("input[name='email']"),
        password=$("input[name='password']"),mobile_code=$("input[name='mobile-code']"),
        verify=$("input[name='verify']");

    mobile.blur(function () {
        if (mobile.val()==='' ){
            mobile.next().html('手机号必填！');
        }else if (!reg.test(mobile.val())) {
            mobile.next().html('请输入正确手机号！');
        }else {
            mobile.next().html('');
        }
    });
    password.blur(function () {
        if (password.val()===''){
            password.next().html('密码必填！');
        }else{
            password.next().html('');
        }
    });
    mobile_code.blur(function () {
        if (mobile_code.val()===''){
            mobile_code.next().html('短信验证码必填！');
        }else{
            mobile_code.next().html('');
        }
    });
    verify.blur(function () {
        if (verify.val()===''){
            verify.next().next().html('图像验证码必填！');
        }else{
            verify.next().next().html('');
        }
    })

};

let loginhide = function () {

    $('#signin').remove();
    $('.modal-backdrop').remove();
};

let viplogin = function () {
    // body...
    $('.xa-login').click(function () {

        $.post('' + user_login_url + '', {
            mobile: $("input[name='email']").val(),
            pwd: $("input[name='password']").val()
        }, function (data) {

            if (data.status === false) {

                $("#signin").addClass("rl-modal in shake");
                let set = setTimeout(function () {
                    $("#signin").removeClass('shake');
                }, 1500);

                $("input[name='email']").next().html('请输入正确的手机号');

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
            'mobile': $("input[name='email']").val(),
            'password': $("input[name='password']").val(),
            'mobile-code': $("input[name='mobile-code']").val(),
            'verify': $("input[name='verify']").val()
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
                    if ($("input[name='password']").next().html()!=='密码必填！'){
                        $("input[name='password']").next().html('');
                    }
                }

                if(data.msg==='短信验证码不正确！' || data.msg==='短信验证码必填！'){
                    $("input[name='mobile-code']").next().html(data.msg);
                }else{
                    if ($("input[name='mobile-code']").next().html()!=='短信验证码必填！'){
                        $("input[name='mobile-code']").next().html('');
                    }
                }

                if(data.msg==='图像验证码必填！' || data.msg==='图像验证码不正确！'){
                    imgVerify($('.verify-img-wrap'));
                    $("input[name='verify']").next().next().html(data.msg);
                }else{
                    if ($("input[name='verify']").next().next().html()!=='图像验证码必填！'){
                        $("input[name='verify']").next().next().html('');
                    }
                }

            }else{
                layui.use(['layer', 'element'], function(){ layer.msg('注册成功');});
                loginhide();
                $('#signup-form p ').html('');
            }

        }, 'json');
    })
};


$(function () {

    $('.userlogin').click(function () {

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
        $.post('/Member/Login/loginOut', {'id': 11}, function (data) {
            if (data.status) {
                window.location.reload();
            }
        }, 'json');
    })

});


