function updateShopcart(e, t) {
    var a = '<li>                        <a class="left" target="_blank"><img></a>                        <div class="center">                            <a class="good" target="_blank"></a>                            <p class="price rmb-symbol"></p>                        </div>                        <span class="delete"></span>                    </li>';
    e.removeClass("empty error").addClass("loading"), $.ajax({
        type: "post",
        url: "/shoppingcart/cartView",
        dataType: "json",
        success: function (o, n) {
            var i = 0;
            "success" === n && 200 === o.retCode ? ($(document).trigger("updateShopcartNum"), e.removeClass("loading empty"), o.cartList.length ? (e.children("ul").empty(), $.each(o.cartList, function () {
                var t = $(a).attr("data-uniquecode", this.uniqueCode),
                    o = webCtx + "/product/" + this.skuUnit.spuId + "?colorSkuid=" + this.skuUnit.skuId,
                    n = this.skuUnit.salePrice, s = "";
                switch (t.find(".left").attr("href", o).find("img").attr("src", IMGHOSTURL + this.skuUnit.thumbnailPic), $.each(this.skuUnit.selUnits, function () {
                    n = n.compute("+", this.salePrice)
                }), this.cartType) {
                    case 1:
                        n = n.compute("*", this.num), t.find(".good").attr({href: o}).append('<span class="name">' + this.skuUnit.name + "</span>").append('<span class="num">' + this.num + "</span>").end().find(".price").text(n.toFixed(2));
                        break;
                    case 2:
                        $.each(this.bundleUnits, function () {
                            n = n.compute("+", this.salePrice), s += "；" + this.name
                        }), n = n.compute("*", this.num), t.find(".center").addClass("combo").find(".good").attr({
                            "data-num": this.num,
                            href: o
                        }).text(this.skuUnit.name + s).end().find(".price").text(n.toFixed(2))
                }
                e.children("ul").append(t.data("price", n)), i = i.compute("+", n), 2 === this.cartType && $clamp(t.find(".good")[0], {
                    clamp: 3,
                    useNativeClamp: !1
                })
            }), e.find(".result p").eq(1).text(i.toFixed(2)).data("price", i), e.find("ul").niceScroll({
                cursorcolor: "#e6e4e1",
                cursorborder: "none",
                cursorwidth: "3px",
                horizrailenabled: !1
            })) : e.addClass("empty")) : e.removeClass("loading empty").addClass("error"), "function" == typeof t && t()
        },
        error: function () {
            e.removeClass("loading empty").addClass("error"), "function" == typeof t && t()
        }
    })
}

function Footer() {
    var e = ($("#vivo-foot-wrap"), $("#follow-mask"), $("#lang-mask"), $(".gb-foot-copyright")),
        t = ($(".other"), $(".global"), e.find(".follow-list")), a = t.find("li"), o = e.find(".follow_btn"),
        n = e.find(".lang_btn"), i = e.find(".lang-list"), s = (i.find("li"), $(".wechat-follow")),
        r = $(".ali-follow"), c = $(".vivo-follow-toast");
    return {
        init: function () {
            var e = this;
            e.followAnt = new TimelineMax({paused: !0}), e.followAnt.staggerFrom(a, .1, {
                y: 50,
                autoAlpha: 0,
                ease: Ease.easeOut
            }, .02, "-=0.01"), e.langAnt = new TimelineMax({paused: !0}), e.langAnt.staggerFrom(a, .1, {
                y: 50,
                autoAlpha: 0,
                ease: Ease.easeOut
            }, .02, "-=0.01"), s.mouseenter(function () {
                c.removeClass("openAli").addClass("openWechat"), TweenMax.to(c, .2, {autoAlpha: 1, ease: Ease.easeOut})
            }), s.mouseleave(function () {
                TweenMax.to(c, .1, {autoAlpha: 0, ease: Ease.easeOut})
            }), r.mouseenter(function () {
                c.removeClass("openWechat").addClass("openAli"), TweenMax.to(c, .2, {autoAlpha: 1, ease: Ease.easeOut})
            }), r.mouseleave(function () {
                TweenMax.to(c, .1, {autoAlpha: 0, ease: Ease.easeOut})
            }), o.mouseenter(function () {
                e.FollowAntControl(!1)
            }), o.mouseleave(function () {
                e.FollowAntControl(!0)
            }), t.mouseleave(function () {
                e.FollowAntControl(!0)
            }), n.mouseenter(function () {
                e.LangAntControl(!1)
            }), n.mouseleave(function () {
                e.LangAntControl(!0)
            }), i.mouseleave(function () {
                e.LangAntControl(!0)
            }), e.FollowAntControl(!0), e.LangAntControl(!0)
        }, FollowAntControl: function (e) {
            var a = this;
            e ? (TweenMax.to(t, .2, {
                autoAlpha: 0, ease: Ease.easeOut, onComplete: function () {
                    t.hide(), c.removeClass("openAli openWechat")
                }
            }), a.followAnt.reverse()) : (TweenMax.to(t, .2, {
                display: "block",
                autoAlpha: 1,
                ease: Ease.easeOut
            }), a.followAnt.play())
        }, LangAntControl: function (e) {
            var t = this;
            e ? (TweenMax.to(i, .2, {
                autoAlpha: 0, ease: Ease.easeOut, onComplete: function () {
                    i.hide()
                }
            }), t.langAnt.reverse()) : (TweenMax.to(i, .2, {
                display: "block",
                autoAlpha: 1,
                ease: Ease.easeOut
            }), t.langAnt.play())
        }
    }
}

function Search() {
    var e = $("#vivo-head-wrap .gb-vivo-head"), t = e.find(document.getElementsByClassName ? ".nav-gb" : ".nav-gb a"),
        a = e.find(".v_h_search"), o = e.find(".nav-t-search"), n = a.find(".search-close"), i = a.find(".results"),
        s = (e.find(".nav-t-user"), a.find("input")), r = $(".nav-t-user"),
        c = (e.find(".gb-vivo-head"), a.find("form")), l = new TimelineMax({paused: !0}),
        u = new TimelineMax({paused: !0});
    l.from(a, .7, {autoAlpha: 0}, 0).to(o.parent(), .5, {right: "8%", width: "3%"}, .2).from(n, .3, {
        scale: 0,
        rotation: -180
    }, .2).to(r, .1, {autoAlpha: 0}, 0).from(s, .2, {x: 40, autoAlpha: 0}, .6);
    for (var d = t.size(), m = d; m >= 0; m--) l.add(TweenMax.to(t.eq(m), .2, {scale: 0}), .04 * (d - m));
    return {
        allowSubmit: !1, init: function () {
            function r(t) {
                if (!e.hasClass("openSearch")) return !1;
                t = window.event || t;
                var a = $(t.srcElement || t.target);
                $(a).is(s) || $(a).parent().is(f) || $(a).is(o) || $(a).parents("section").is(i) || p.close()
            }

            var m = $("#gb-mask-layer");
            TweenMax.set(a, {display: "block"}), TweenMax.set(m, {display: "none", autoAlpha: 0});
            var p = this;
            p.play = !1;
            var f = $("#vivo-high-switch");
            o.mouseleave(function () {
                o.removeClass("leave")
            }), o.click(function () {
                if (o.addClass("leave"), e.hasClass("openSearch")) return s.val().length > 0 && c.submit(), !1;
                var a = e.find(".vivo-head").hasClass("openUser");
                if (a && Header.UserControl(a), p.play = !0, s.val(""), l.timeScale(1.5).play(), TweenMax.to(m, .2, {
                    display: "block",
                    autoAlpha: .2
                }, 0), u.seek(0).timeScale(1.5).play(), !document.getElementsByClassName) for (var n = d; n >= 0; n--) TweenMax.to(t.eq(n), .2, {
                    height: 0,
                    autoAlpha: 0,
                    ease: Ease.easeIn
                }, .3);
                setTimeout(function () {
                    e.addClass("openSearch"), document.getElementsByClassName && s.focus(), $(document).on("click", function (t) {
                        e.hasClass("openSearch") && r(t)
                    })
                }, 500)
            }), n.click(function () {
                o.removeClass("leave"), $(document).off("click"), e.removeClass("openSearch"), l.timeScale(1.5).reverse(), TweenMax.to(m, .2, {
                    display: "none",
                    autoAlpha: 0
                }, 0), document.getElementsByClassName || setTimeout(function () {
                    for (var e = d; e >= 0; e--) TweenMax.to(t.eq(e), .3, {
                        height: 20,
                        autoAlpha: 1,
                        ease: Ease.easeIn
                    }, .3)
                }, 300), p.play = !1, $(document).off("click")
            }), c.submit(function (e) {
                $.trim(s.val()).length < 1 && e.preventDefault()
            })
        }, open: function () {
            o.click()
        }, close: function () {
            n.click()
        }, Recovery: function () {
            n.click(), o.off("click"), n.off("click"), $(document).off("click")
        }
    }
}

function Header() {
    var e = location.href.match(new RegExp("http[s]?://" + location.hostname + "/\\S+/([a-zA-Z0-9-]+)[?#]?", "i")) || [!1, ""],
        t = $(".nav-gb");
    switch (e[1].toLowerCase()) {
        case"phone":
            t.eq(1).find("a").addClass("current");
            break;
        case"parts":
            t.eq(2).find("a").addClass("current");
            break;
        case"service-promise":
            t.eq(3).find("a").addClass("current")
    }
    var a = $("#vivo-head-wrap"), o = a.find(".gb-vivo-head"), n = $(".nav-t-user"), i = $(".v_h_usercenter"),
        s = (new TimelineMax({paused: !0}), new TimelineMax({paused: !0})), r = !0,
        c = document.getElementsByClassName ? 210 : 150, l = null;
    return {
        init: function () {
            var e = this;
            n.mouseenter(function () {
                return o.hasClass("openSearch") ? !1 : (clearTimeout(l), clearTimeout(e.anTimer), void(n.timer = setTimeout(function () {
                    r && e.UserControl(!1)
                }, c + 190)))
            }), n.mouseleave(function () {
                l = setTimeout(function () {
                    clearTimeout(n.timer), e.UserControl(!0)
                }, c)
            }), i.mouseenter(function () {
                clearTimeout(e.anTimer), clearTimeout(l), e.isplay = !0
            }), i.mouseleave(function () {
                l = setTimeout(function () {
                    clearTimeout(n.timer), e.UserControl(!0)
                }, c)
            }), s.staggerFrom(i.find("li"), .2, {y: -25, autoAlpha: 0, ease: Ease.easeInOut}, .2, "+=1")
        }, UserControl: function (e) {
            var t = this, a = $("#gb-mask-layer");
            e ? (r = !0, t.anTimer = setTimeout(function () {
                o.removeClass("openUser"), TweenMax.to(a, .3, {
                    display: "none",
                    autoAlpha: 0
                }, .2), TweenMax.to(i, .1, {autoAlpha: 0}), setTimeout(function () {
                    s.seek(0).pause(), $(document).off("click")
                }, 180)
            }, 90)) : (clearTimeout(t.anTimer), o.addClass("openUser"), TweenMax.to(a, .3, {
                display: "block",
                autoAlpha: .2
            }, .2), TweenMax.to(i, .1, {autoAlpha: 1, ease: Ease.easeIn}), r && s.seek(0).timeScale(3).play(), r = !1)
        }
    }
}

function sideBarTrack(e, t) {
    var a = $("#side-bar").children().size();
    $(document).on("mouseup", "#side-bar li", function () {
        a > 4 ? e.setCustomParam({
            cfrom: t,
            position: $(this).index() + 1
        }).send() : $(this).index() < 3 ? e.setCustomParam({
            cfrom: t,
            position: $(this).index() + 1
        }).send() : e.setCustomParam({cfrom: t, position: 5}).send()
    })
}

function initLogin(e) {
    e.length <= 0 || $.ajax({
        url: webCtx + "/tool/cookie?t=" + (new Date).getTime(),
        type: "get",
        dataType: "json",
        success: function (t) {
            e[0]._isLogin = !!t.vivo_account_cookie_iqoo_openid, e.html(e[0]._isLogin ? "退出登录" : "登录/注册"), e.on("click", function () {
                this._isLogin ? location.href = webCtx + "/member/logout" : LoginConfirm.redirect()
            })
        }
    })
}

function getParameter(e, t) {
    var a = t || document.location.search, o = new RegExp("[?&]" + e + "=([^&]+)", "g"), n = o.exec(a), i = null;
    return null != n && (i = decodeURIComponent(n[1])), i
}

function getLocalDataFromCookie(e) {
    var t = document.cookie.match(new RegExp("(?:^|;\\s)" + encodeURIComponent(e) + "=(.*?)(?:;\\s|$)"));
    return t = t ? decodeURIComponent(t[1]) : ""
}

function setLocalDataInCookie(e, t, a) {
    var o = {"com.cn": 1, "js.cn": 1, "net.cn": 1, "gov.cn": 1, "com.hk": 1, "co.nz": 1}, n = window.location.hostname,
        i = n.split(".");
    i.length > 2 && (i = i.slice(o[i.slice(-2).join(".")] ? -3 : -2)), i = i.join("."), document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + "; path=/; domain=" + i + (a ? "; expires=" + a : ""), localStorage.setItem(e, t)
}

var VIVO_UI = {};
window.jQuery && !function (e) {
    VIVO_UI.mask = function () {
        e("body > .mask").length || e("body").append("<div class='mask'></div>"), e("body > .mask").show()
    }, VIVO_UI.unmask = function () {
        e("body > .mask").hide()
    }, VIVO_UI.middle = function (e) {
        e && e.length && e.css({top: "50%", "margin-top": -(e.outerHeight() / 2)})
    }, VIVO_UI.HighLightNav = function (t) {
        "undefined" != typeof ISHOMEHEAD && ISHOMEHEAD || e(".gb-vivo-h-nav li").removeClass("on").eq(t).addClass("on")
    }, VIVO_UI.HighLightMyCenterNav = function (t) {
        e(".menu-bar .menu-item a").each(function (a, o) {
            return e.trim(e(o).text()) === t ? (e(this).parent().addClass("on"), !1) : void 0
        })
    }
}(window.jQuery), Number.prototype.compute = function (e, t) {
    var a, o, n, i = this, s = t, r = i.toString().split("."), c = s.toString().split("."), l = r[1] ? r[1].length : 0,
        u = c[1] ? c[1].length : 0;
    switch (u > l && (l = [u, u = l][0], i = [s, s = i][0], o = !0), a = l, i = i.toString().replace(".", ""), s = function () {
        var t = 0, a = s.toString().replace(".", "");
        if ("+" === e || "-" === e) for (; l - u > t; t++) a += "0";
        return a
    }(), o && (l = [u, u = l][0], i = [s, s = i][0]), e) {
        case"+":
            n = (Number(i) + Number(s)) / Math.pow(10, a);
            break;
        case"-":
            n = (Number(i) - Number(s)) / Math.pow(10, a);
            break;
        case"*":
            n = Number(i) * Number(s) / Math.pow(10, l + u);
            break;
        case"/":
            n = l > u ? Number(i) / (Number(s) * Math.pow(10, l - u)) : Number(i) * Math.pow(10, u - l) / Number(s);
            break;
        default:
            throw"不支持的运算符：" + e
    }
    return n
}, $(function () {
    !function () {
        if ("undefined" == typeof ISHOMEHEAD || !ISHOMEHEAD) {
            var e = $("#search-curtain"), t = $("#vivo-head-wrap"), a = '<i id="gb-mask-layer"></i>';
            e.size() > 0 ? (e.remove(), t.parent().append(a)) : t.parent().append(a), Search().init(), Header().init(), Footer().init()
        }
    }(), function () {
        var e = null;
        $("#header .shopcart").on("mouseenter", function () {
            clearTimeout(e);
            var t = $(this);
            e = setTimeout(function () {
                t.addClass("hover"), updateShopcart(t.find(".shopcart-fixbox"))
            }, 300)
        }).on("mouseleave", function () {
            clearTimeout(e), $(this).removeClass("hover")
        })
    }(), function () {
        var e = $(".shopcart-fixbox");
        e.on("click", ".delete", function () {
            var t = $(this).parent(), a = t.parent().next().find(".rmb-symbol"), o = t.outerHeight();
            $.ajax({
                type: "post",
                url: "/shoppingcart/cartDel",
                data: {uniqueCodes: t.attr("data-uniquecode")},
                dataType: "json",
                success: function (n, i) {
                    var s;
                    "success" === i && 200 === n.retCode && (s = a.data("price").compute("-", t.data("price")), $(document).trigger("updateShopcartNum"), 1 === t.parent().children().length ? t.animate({left: "-100%"}, function () {
                        t.remove(), e.addClass("empty")
                    }) : t.animate({left: "-100%"}).animate({marginBottom: -o}, function () {
                        t.remove(), a.text(s.toFixed(2)).data("price", s)
                    }))
                }
            })
        })
    }(), function () {
        function e() {
            n.data("id", setTimeout(function () {
                i.data("hover") || (n.removeClass("active"), !s.hasClass("active") && o.addClass("nolocked"))
            }, 5e3))
        }

        var t = $(document.documentElement), a = $(document.body), o = $("#side-bar"), n = o.find(".shopcart"),
            i = o.find(".shopcart-fixbox"), s = o.find(".feedback"), r = s.find(".close"), c = o.find(".backtop");
        $(window).on("scroll", function () {
            $(this).scrollTop() > 500 ? c.fadeIn("fast") && o.addClass("backtopShow") : c.fadeOut("fast", function () {
                o.removeClass("backtopShow")
            })
        }).trigger("scroll"), c.on("click", function () {
            a.animate({scrollTop: 0}, 500), t.animate({scrollTop: 0}, 500)
        }), s.on("click", function (e) {
            -1 !== $.inArray(e.target, [this, r[0]]) && (s.hasClass("active") ? (s.removeClass("active"), o.addClass("nolocked")) : (s.addClass("active"), o.removeClass("nolocked"), a.trigger("click", ["feedback"])))
        }), a.on("click", function (e, t) {
            switch (t) {
                case"shopcart":
                    s.hasClass("active") && s.removeClass("active");
                    break;
                case"feedback":
                    n.hasClass("active") && n.removeClass("active");
                    break;
                default:
                    n.hasClass("active") && n.removeClass("active"), s.hasClass("active") && s.removeClass("active")
            }
            !n.hasClass("active") && !s.hasClass("active") && o.addClass("nolocked")
        }), n.add(s).on("click", function (e) {
            e.stopPropagation()
        }), n.on("click", function (t, i) {
            -1 !== $.inArray(t.target, [this, n.find(".prodnum")[0]]) && (void 0 !== n.data("id") && clearTimeout(n.data("id")), i ? n.addClass("active") : n.toggleClass("active"), i ? o.removeClass("nolocked") : n.hasClass("active") ? o.removeClass("nolocked") : o.addClass("nolocked"), !i && n.hasClass("active") && a.trigger("click", ["shopcart"]), n.hasClass("active") && updateShopcart(n.find(".shopcart-fixbox"), i && e))
        }), i[0].onmouseenter = function () {
            i.data("hover", !0)
        }, i[0].onmouseleave = function () {
            i.data("hover", !1)
        }
    }(), function () {
        $(".pagination .j_go_ajax").length && $(".pagination .j_go_ajax").on("click.go", function () {
            var e = $(this).attr("data-url"), t = $(this).attr("data-total"), a = $(this).parent().find("input").val();
            a && /^\d+$/.test(a) && parseInt(a) <= t && (location.href = e.replace("PAGENUM", a))
        })
    }(), $("[data-src]").length && $.fn.lazyload && $("[data-src]").lazyload({
        skip_invisible: !0,
        data_attribute: "src",
        placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxQjYzNEEyOTBGNzQxMUU3OTkwNTlEQkU2NjJGMzVBNyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxQjYzNEEyQTBGNzQxMUU3OTkwNTlEQkU2NjJGMzVBNyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjFCNjM0QTI3MEY3NDExRTc5OTA1OURCRTY2MkYzNUE3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjFCNjM0QTI4MEY3NDExRTc5OTA1OURCRTY2MkYzNUE3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+r2fvmQAAABBJREFUeNpi+P//PwNAgAEACPwC/tuiTRYAAAAASUVORK5CYII=",
        load: function () {
            $(this).removeAttr("data-src")
        }
    }), $("input, textarea").placeholder({customClass: "my-placeholder"})
}), ~function (_export) {
    function serial(e) {
        var t = [];
        for (var a in e) !isEmpty(e[a]) && t.push(a + "=" + encode(e[a]));
        return t.join("&")
    }

    function isEmpty(e) {
        return "undefined" == typeof e || null === e || "" === e || isArray(e) && 0 === e.length ? !0 : isObject(e) && 1 == isOwnEmpty(e) ? !0 : !1
    }

    function isArray(e) {
        return "[object Array]" === toString.call(e)
    }

    function isObject(e) {
        return "[object Object]" === toString.call(null) ? null !== e && void 0 !== e && "[object Object]" === toString.call(e) && void 0 === e.ownerDocument : "[object Object]" === toString.call(e)
    }

    function isOwnEmpty(e) {
        for (var t in e) if (e[has](t)) return !1;
        return !0
    }

    function isDOM(e) {
        return e ? "object" == typeof HTMLElement ? e instanceof HTMLElement : "object" == typeof e && 1 === e.nodeType && "string" == typeof e.nodeName : !1
    }

    function setCookie(e, t, a) {
        if (a !== !1) {
            var o = new Date;
            o.setDate(o.getDate() + a + 1), o.setHours(0, 0, 0, 0), document.cookie = e + "=" + t + ";expires=" + o + ";path=/"
        } else document.cookie = e + "=" + t
    }

    function getCookie(e) {
        var t = document.cookie.split("; "), a = 0;
        for (a = 0; a < t.length; a++) {
            var o = t[a].split("=");
            if (o[0] == e) return o[1]
        }
        return ""
    }

    function getParameter(e, t) {
        var a = t || document.location.search, o = new RegExp("[?&]" + e + "=([^&]+)", "g"), n = o.exec(a), i = null;
        return null != n && (i = decodeURIComponent(n[1])), i
    }

    function getHash(t) {
        var a = new RegExp(t + "=([^&]+)", "g").exec(document.location.hash.substr(1));
        return null != a && (e = decodeURIComponent(a[1]))
    }

    var proto = "prototype", has = "hasOwnProperty", slice = Array.prototype.slice,
        toString = Object.prototype.toString, encode = encodeURIComponent, LOCAL_TRACK_KEY = "vvs_",
        param = {sessionid: "", visittime: +(new Date).getTime(), version: "1.5.4", visittype: "pc"},
        logMap = [{source_type: "", source_from: ""}], getCommonLog = null, Track = function () {
            var e = slice.call(arguments[0], 0), t = e[1], a = this;
            a.sendPath = e[0], a.customParam = {}, a.param = param, a.getRemoteParam(), t && t.apply(a)
        };
    Track[proto].logMap = logMap, Track[proto].getRemoteParam = function () {
        var e = this, t = (getCookie(LOCAL_TRACK_KEY + "ua"), e.param);
        $.ajax({
            url: webCtx + "/tool/cookie", async: !1, type: "get", success: function (e) {
                t.cookid = getCookie("cookieId") || e.cookieId, t.sessionid = e.fakeSessionId, e.vivo_account_cookie_iqoo_openid && (t.openid = e.vivo_account_cookie_iqoo_openid)
            }
        })
    }, Track[proto].getLocalParam = function (e) {
        var t = this;
        e = e || getCookie(LOCAL_TRACK_KEY + "ua"), e.replace(/(cookid\:\S+)/gi, function (e) {
            var a = e.split(":");
            "cookid" != a[0] || isEmpty(a[1]) || (t.param[a[0]] = a[1].split("&")[0], t.param.sessionid = t.param[a[0]].replace(/\d{13}$/, ""))
        })
    }, Track[proto].setCustomParam = function (e) {
        var t, a;
        for (var o in e) this.customParam[o] = e[o];
        return e.cfrom && (t = +String(e.cfrom).charAt(1), a = e.cfrom.substring(2), $.extend(this.customParam, getCommonLog(a, t))), this
    }, Track[proto].send = function () {
        this.customParam.is_done || (this.customParam.staytime = +(new Date).getTime() - this.param.visittime);
        var e = this.sendPath + "?random=" + +new Date + "&" + serial(this.param) + "&" + serial(this.customParam);
        return this.customParam = {}, (new Image).src = e, e
    }, Track[proto].plantCache = function (e) {
        switch (e.toUpperCase()) {
            case"C_UA":
                setCookie(LOCAL_TRACK_KEY + "ua", serial({
                    cookid: this.param.cookid,
                    openid: this.param.openid
                }).replace(/\=/g, ":"), 7);
                break;
            case"C_SOURCE":
                if ("string" == typeof arguments[2]) {
                    var t = getCookie(LOCAL_TRACK_KEY + "sourcetype") || "{}";
                    t = JSONparse(t), t["spu_" + arguments[2]] = t["spu_" + arguments[2]] || [], t["spu_" + arguments[2]].push(encode(arguments[1])), setCookie(LOCAL_TRACK_KEY + "sourcetype", JSONstringify(t))
                } else if (isDOM(arguments[2])) {
                    var a = getHash("source_type") || arguments[1];
                    arguments[2].href = arguments[2].href.replace(/\#source_type\=\S+[&]?/gi, ""), arguments[2].href += "#source_type=" + encode(a)
                }
                break;
            case"C_HOT_KEY":
                var o = getHash("searchKeywordStr") || encode(arguments[1]);
                arguments[2].href = arguments[2].href.replace(/\#searchKeywordStr\=\S+[&]?/gi, ""), arguments[2].href += "#searchKeywordStr=" + o
        }
    }, _export.Track_Conf = function (e) {
        e && (getCommonLog = e.apply(logMap))
    }, _export.Track = function () {
        return new Track(slice.call(arguments, 0))
    }, _export.Track.isEmpty = isEmpty, _export.Track.getHash = getHash, isEmpty(getParameter("cid")) || setCookie(LOCAL_TRACK_KEY + "cid", encode(getParameter("cid"))), JSON = window.JSON || {}, JSONstringify = JSON.stringify || function (e) {
        var t = typeof e;
        if ("object" != t || null === e) return "string" == t && (e = '"' + e + '"'), String(e);
        var a, o, n = [], i = e && e.constructor == Array;
        for (a in e) o = e[a], t = typeof o, "string" == t ? o = '"' + o + '"' : "object" == t && null !== o && (o = JSON.stringify(o)), n.push((i ? "" : '"' + a + '":') + String(o));
        return (i ? "[" : "{") + String(n) + (i ? "]" : "}")
    }, JSONparse = JSON.parse || function (json) {
        return eval("1," + json)
    }
}(window.VIVO_UI || {}), initLogin($("#J_login_hook_head"));
var cid = getParameter("cid") || getLocalDataFromCookie("vfe-cid") || "";
cid && (setLocalDataInCookie("vfe-cid", cid), getParameter("cid") && setLocalDataInCookie("cid_eff_ts", +new Date, !1, !0));