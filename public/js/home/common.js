//扩展设置

layui.config({

    base: '//resource.mairuan.com/cdn_old/layui_extend/' //扩展目录

});



/*加载layui模块*/

layui.use(['distpicker', 'cycle'], function(distpicker, cycle) {

    $(function() {

        var wd = $(window).width();



        /*----------省市联动 begin ----------*/

        $('.distpicker, .distpicker2').distpicker({

            province: '',

            city: '',

        });

        $('.distpicker select, .distpicker2 select').val('');

        layui.form.render('select');

        layui.form.on('select(province)', function(data) {

            $('[name*="province"]').trigger('change');

            layui.form.render('select');

        });

        /*----------省市联动 end ----------*/



        /***************cycle2 begin***************/

        $('.cycle2 .o30').hover(function() {

            $(this).removeClass('o30').addClass('o60');

        }, function() {

            $(this).addClass('o30').removeClass('o60');

        });



        /************加载 cycle2 begin************/

        $('.cycle2').cycle({

            log: false,

        });



        if (wd > 767) {

            $('.cycle2PC').cycle({

                log: false,

            });

        }

        /************加载 cycle2 end************/



        /************自定义  pager联动 cycle2************/

        $('[bindCycle2] > *').click(function() {

            var cycle2Box = $(this).parent().attr('bindCycle2');

            $('.cycle2[bindCycle2Filter="' + cycle2Box + '"]').cycle('goto', $(this).index());

        });

        $('[bindCycle2PC] > *').click(function() {

            var cycle2PCBox = $(this).parent().attr('bindCycle2PC');

            $('.cycle2PC[bindCycle2PCFilter="' + cycle2PCBox + '"]').cycle('goto', $(this).index());

        });

        /************自定义  cycle2联动 pager************/

        $('.cycle2').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {

            var pagerBox = $(this).attr('cycle2Bind');

            if (pagerBox) {

                var index = optionHash.nextSlide;

                var pagerBoxes = pagerBox.split(',');

                for (var i = 0; i < pagerBoxes.length; i++) {

                    $('[cycle2BindFilter="' + pagerBoxes[i] + '"] > *').eq(index).addClass('active').siblings().removeClass('active');

                }

            }

        });

        $('.cycle2PC').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {

            var pagerPCBox = $(this).attr('cycle2PCBind');

            if (pagerPCBox) {

                var index = optionHash.nextSlide;

                var pagerPCBoxes = pagerPCBox.split(',');

                for (var i = 0; i < pagerPCBoxes.length; i++) {

                    $('[cycle2PCBindFilter="' + pagerPCBoxes[i] + '"] > *').eq(index).addClass('active').siblings().removeClass('active');

                }

            }

        });

        /***************cycle2 end***************/

    });

});



/*----------表单验证 begin ----------*/

layui.form.verify({

    required: function(value, item) { //[重写源生required]

        value = $.trim(value);

        if (!new RegExp("[\\S]+").test(value)) {

            return $(item).attr('verify-title') + '不能为空！';

        }

    },

    checked: function(value, item) { //必选

        if (!$(item).prop('checked')) {

            return '必选项不能为空！';

        }

    },

    phone: function(value, item) { //[重写源生phone]

        value = $.trim(value);

        if (new RegExp("[\\S]+").test(value) && !new RegExp('^1\\d{10}$').test(value)) {

            return $(item).attr('verify-title') + '格式错误！';

        }

    },

    email: function(value, item) { //[重写源生email]

        value = $.trim(value);

        if (new RegExp("[\\S]+").test(value) && !new RegExp('^[a-zA-Z0-9_\\-\\.]+@([a-zA-Z0-9\\-]+\\.)+[a-zA-Z]{2,5}$').test(value)) {

            return $(item).attr('verify-title') + '格式错误！';

        }

    },

    number_len: function(value, item) { //value：表单的值、item：表单的DOM对象

        value = $.trim(value);

        var len = $(item).attr('verify-len');

        var lenMsg = '';

        var default_max = '';

        if (!len) {

            len = '2';

            default_max = ',', lenMsg = '以上';

        } else if (len.indexOf(",") > -1 && !new RegExp(",[\\d]+").test(len)) {

            len = len.replace(',', '');

            default_max = ',';

            lenMsg = '以上';

        }

        var regStr = '^[0-9]{' + len + default_max + '}$';

        if (new RegExp("[\\S]+").test(value) && !new RegExp(regStr).test(value)) {

            return $(item).attr('verify-title') + '必须' + len.replace(',', '到') + '位' + lenMsg + '数字！';

        }

    },

    word_len: function(value, item) {

        value = $.trim(value);

        var len = $(item).attr('verify-len');

        var lenMsg = '';

        var default_max = '';

        if (!len) {

            len = '2';

            default_max = ',', lenMsg = '以上';

        } else if (len.indexOf(",") > -1 && !new RegExp(",[\\d]+").test(len)) {

            len = len.replace(',', '');

            default_max = ',';

            lenMsg = '以上';

        }

        var regStr = '^[\\w]{' + len + default_max + '}';

        if (new RegExp("[\\S]+").test(value) && !new RegExp(regStr).test(value)) {

            return $(item).attr('verify-title') + '必须' + len.replace(',', '到') + '位' + lenMsg + '字母和数字！';

        }

    },

    str_len: function(value, item) {

        value = $.trim(value);

        var len = $(item).attr('verify-len');

        var lenMsg = '';

        var default_max = '';

        if (!len) {

            len = '2';

            default_max = ',', lenMsg = '以上';

        } else if (len.indexOf(",") > -1 && !new RegExp(",[\\d]+").test(len)) {

            len = len.replace(',', '');

            default_max = ',';

            lenMsg = '以上';

        }

        var regStr = '^[\\S]{' + len + default_max + '}';

        if (new RegExp("[\\S]+").test(value) && !new RegExp(regStr).test(value)) {

            return $(item).attr('verify-title') + '必须' + len.replace(',', '到') + '位' + lenMsg + '字符！';

        }

    },

    notNumber: function(value, item) {

        value = $.trim(value);

        if (new RegExp("[\\S]+").test(value) && !new RegExp('[\\D]+').test(value)) {

            return $(item).attr('verify-title') + '不能是数字';

        }

    },

    notEmail: function(value, item) {

        value = $.trim(value);

        if (new RegExp("[\\S]+").test(value) && new RegExp('^[a-zA-Z0-9_\\-\\.]+@([a-zA-Z0-9\\-]+\\.)+[a-zA-Z]{2,5}$').test(value)) {

            return $(item).attr('verify-title') + '不能是邮箱';

        }

    }

});

/*----------表单验证 end ----------*/



$(function() {

    var user_agent = navigator.userAgent.toLowerCase(); // detect the user agent

    var ios_devices = user_agent.match(/(iphone|ipod|ipad)/) ? "touchstart" : "click"; //check if the devices are ios devices



    /*********刷新验证码 begin*********/

    $('body').on('click', '.yzm, #yzm', function() {

        $(this).attr('src', 'yzm.php?t=' + Math.random());

    });

    /*********刷新验证码 end*********/



    /*********站点地图 begin*********/

    $('.openSitemap').click(function() {

        var id = $(this).attr('title');

        $('#' + id).fadeToggle();

        if ($(this).html() == '点击关闭') {

            $(this).html('点击展开');

        } else {

            $(this).html('点击关闭');

        }

    });

    /*********站点地图 end*********/



    /*********销量计数 begin*********/

    var baseNum = $("#saleNum").attr('baseNum');

    var topNum = $("#saleNum").attr('topNum');

    var baseGoods = $("#saleNum").attr('baseGoods');

    var type = $("#saleNum").attr('type');

    if (baseNum) {

        if (!baseGoods) { baseGoods = ''; }

        $.post("saleNumber.php", { goods_id: baseGoods }, function(data) {

            if (type == 'jian') {

                var sy = parseInt(baseNum) - parseInt(data);

                sy = sy < 1 ? 1 : sy;

            } else {

                var sy = parseInt(data) - parseInt(baseNum);

                sy = sy < 0 ? 0 : sy;

                if (topNum) {

                    topNum = parseInt(topNum);

                    sy = sy > topNum ? topNum - 1 : sy;

                }

            }

            $("#saleNum").html(sy);

        });

    }



    $(".saleNum").each(function() {

        var ele = $(this);

        var baseNum = ele.attr('baseNum');

        var topNum = ele.attr('topNum');

        var baseGoods = ele.attr('baseGoods');

        var type = ele.attr('type');

        if (!baseGoods) { baseGoods = ''; }

        if (!baseNum) { baseNum = 0; }

        $.post("saleNumber.php", { goods_id: baseGoods }, function(data) { console.log(data);

            if (type == 'jian') {

                var sy = parseInt(baseNum) - parseInt(data);

                sy = sy < 1 ? 1 : sy;

            } else {

                var sy = parseInt(data) - parseInt(baseNum);

                sy = sy < 0 ? 0 : sy;

                if (topNum) {

                    topNum = parseInt(topNum);

                    sy = sy > topNum ? topNum - 1 : sy;

                }

            }

            ele.html(sy);

        });

    });



    $(".saleNumC2").each(function() {

        var ele = $(this);

        var baseNum = ele.attr('baseNum');

        var topNum = ele.attr('topNum');

        var baseGoods = ele.attr('baseGoods');

        var type = ele.attr('type');

        if (!baseGoods) { baseGoods = ''; }

        if (!baseNum) { baseNum = 0; }

        $.post("http://api2.mairuan.com/api.php/web/getsalesnum", { id: baseGoods }, function(d) { console.log(d);

            if (type == 'jian') {

                var sy = parseInt(baseNum) - parseInt(d.data.salesnum);

                sy = sy < 1 ? 1 : sy;

            } else {

                var sy = parseInt(d.data.salesnum) - parseInt(baseNum);

                sy = sy < 0 ? 0 : sy;

                if (topNum) {

                    topNum = parseInt(topNum);

                    sy = sy > topNum ? topNum - 1 : sy;

                }

            }

            ele.html(sy);

        });

    });

    /*********销量计数 end*********/



    /*********倒计时 begin*********/

    $(".countdown").each(function() {

        var ele = $(this);

        var type = ele.attr('type');

        var endTime = new Date(ele.attr('endTime').replace(/-/g, '/')).getTime();

        $.ajax({

            complete: function (XMLHttpRequest, textStatus) {

                var serverTime = new Date(XMLHttpRequest.getResponseHeader("Date")).getTime();

                layui.util.countdown(endTime, serverTime, function(date, serverTime, timer) {

                    if (type == 'day') {

                        var str = date[0] + 1;

                    } else {

                        for (var i = 0; i < date.length; i++) {

                            date[i] = layui.util.digit(date[i], 2);

                        }

                        if(type == 'hour' && date[0] == '00'){

                            var str = date[1] + '时' + date[2] + '分' + date[3] + '秒';

                        }else{

                            var str = date[0] + '天' + date[1] + '时' + date[2] + '分' + date[3] + '秒';

                        }

                    }

                    ele.html(str);

                });

            }

        });

    });

    /*********倒计时 end*********/



    /*********placeholder IE9及以下提示 begin*********/

    if (navigator.appName == 'Microsoft Internet Explorer') {

        var version = (navigator.appVersion).split(";");

        var trim_Version = version[1].replace(/[ ]/g, "");

        if (trim_Version == "MSIE8.0" || trim_Version == "MSIE9.0") {

            $('[placeholder]').each(function(i) {

                $(this).val($(this).attr('placeholder')).addClass('c7');

            });

            $('[placeholder]').focus(function() {

                if ($(this).val() == $(this).attr('placeholder')) {

                    $(this).val('').removeClass('c7');

                }

            });

            $('[placeholder]').blur(function() {

                if ($(this).val() == $(this).attr('placeholder')) {

                    $(this).val($(this).attr('placeholder')).addClass('c7');

                } else {

                    $(this).removeClass('c7');

                }

            });

        }

    }

    /*********placeholder IE9及以下提示 end*********/



    /**********hoverShow / noHoverHide begin**********/

    $('[hoverShow]').hover(function() {

        var element = $(this).attr('hoverShowBind');

        if (!element) {

            $(this).addClass('hoverActive').find('.layui-hide').each(function(i, dom) {

                $(dom).addClass($(dom).attr('animated'));

            });

        } else {

            $('[hoverShowBindFilter="' + element + '"]').removeClass('layui-hide');

        }

        var toggle = $(this).attr('hoverShowToggleBind');

        if (toggle) {

            $('[hoverShowToggleFilter="' + toggle + '"]').addClass('layui-hide');

        }

    });

    $('[noHoverHide]').hover(function() {}, function() {

        var element = $(this).attr('noHoverHideBind');

        if (!element) {

            $(this).removeClass('hoverActive');

            $(this).not('[hoverShow]').addClass('layui-hide');

        } else {

            $('[noHoverHideBindFilter="' + element + '"]').addClass('layui-hide');

        }

        var toggle = $(this).attr('hoverShowToggleBind');

        if (toggle) {

            $('[hoverShowToggleFilter="' + toggle + '"]').removeClass('layui-hide');

        }

    });

    /**********hoverShow / noHoverHide end**********/



    /**********hoverHide / noHoverShow begin**********/

    $('[hoverHide]').hover(function() {

        $(this).removeClass('hoverActive')

    });

    $('[noHoverShow]').hover(function() {}, function() {

        $(this).addClass('hoverActive');

    });

    /**********hoverShow / noHoverHide end**********/



    /**********imgToggle begin**********/

    $('[imgSrcToggle]').hover(function() {

        var hoverImg = $(this).attr('hoverImg');

        $(this).attr('src', hoverImg);

    }, function() {

        var noHoverImg = $(this).attr('noHoverImg');

        $(this).attr('src', noHoverImg);

    });

    /**********imgToggle end**********/



    /**********clickShow begin**********/

    $('[clickShow]').click(function() {

        var element = $(this).attr('clickShowBind');

        var animated = $(this).attr('animated');

        $(this).addClass('active');

        if (element) {

            $('[clickShowBindFilter="' + element + '"]').removeClass('layui-hide').addClass(animated);

        }

    });

    /**********clickShow end**********/



    /**********clickToggle begin**********/

    $('[clickToggle]').click(function() {

        var element = $(this).attr('clickToggleBind');

        var animated = $(this).attr('animated');

        $(this).toggleClass('active');

        if (element) {

            $('[clickToggleBindFilter="' + element + '"]').toggleClass('layui-hide').addClass(animated);

        }

    });

    /**********clickToggle end**********/



    /**********clickHide begin**********/

    $('[clickHide]').click(function() {

        var element = $(this).attr('clickHideBind');

        if (element) {

            $('[clickHideBindFilter="' + element + '"]').addClass('layui-hide');

        }

    });

    /**********clickHide end**********/



    /**********tabShow begin**********/

    $('[tabShow] > *').not($('[noTab]')).bind(ios_devices, function() {

        var element = $(this).parent().attr('tabShowBind');

        var element2 = $(this).parent().attr('tabShowBind2');

        var animated = $(this).parent().attr('animated');

        $(this).addClass('active').siblings().removeClass('active');

        if (element) {

            $('[tabShowBindFilter="' + element + '"]').children().eq($(this).index()).removeClass('layui-hide').addClass(animated).siblings().addClass('layui-hide');

        }

        if (element2) {

            $('[tabShowBindFilter="' + element2 + '"]').children().eq($(this).index()).removeClass('layui-hide').addClass(animated).siblings().addClass('layui-hide');

        }

    });

    /**********tabShow end**********/



    /**********tabShowHover hover begin**********/

    $('[tabShowHover] > *').not($('[noTab]')).hover(function() {

        var element = $(this).parent().attr('tabShowHoverBind');

        var animated = $(this).parent().attr('animated');

        $(this).addClass('hoverActive').siblings().removeClass('hoverActive');

        if (element) {

            $('[tabShowHoverBindFilter="' + element + '"]').children().eq($(this).index()).removeClass('layui-hide').addClass(animated).siblings().addClass('layui-hide');

        }

    });

    /**********tabShow hover end**********/

});



function addCookie(objName, objValue, objHours) { //添加cookie

    var str = objName + "=" + escape(objValue);

    if (objHours > 0) { //为时不设定过期时间，浏览器关闭时cookie自动消失

        var date = new Date();

        var ms = objHours * 3600 * 1000;

        date.setTime(date.getTime() + ms);

        str += "; expires=" + date.toGMTString();

    }

    document.cookie = str + ";path=/";

}



function delCookie(name) { //删除cookie

    document.cookie = name + "=;expires=" + (new Date(0)).toGMTString() + ";path=/";

}



function getCookie(objName) { //获取指定名称的cookie的值

    var arrStr = document.cookie.split("; ");

    for (var i = 0; i < arrStr.length; i++) {

        var temp = arrStr[i].split("=");

        if (temp[0] == objName)

            return unescape(temp[1]);

    }

}



/*typeid 3申请下载 4申请购买 8购买验证【活动页】 11购买验证【购买页】20反馈*/

function sendverify(filter, typeid) {

    var smsuser = $('[sendverifyBindFilter="' + filter + '"][name^="userName"]');

    var userTel = $('[sendverifyBindFilter="' + filter + '"][name^="userTel"]');

    var yzm = $('[sendverifyBindFilter="' + filter + '"][name^="yzm"]');



    $('.layui-form-danger').removeClass('layui-form-danger');



    if (!CheckData(smsuser, "联系人", smsuser.val(), "pname", true)) {

        smsuser.addClass('layui-form-danger').focus();

        return false;

    }



    if (!CheckData(userTel, "联系电话", userTel.val(), "phone", true)) {

        userTel.addClass('layui-form-danger').focus();

        return false;

    }



    if (!CheckData(yzm, "验证码", yzm.val(), "pname", true)) {

        yzm.addClass('layui-form-danger').focus();

        return false;

    }



    $.post('verifysms.php', { smsuser: smsuser.val(), mobile: userTel.val(), yzm: yzm.val(), typeid: typeid, action: 'sendmsg' }, function(data) {

        if (data.code == 103) {

            sendverifySecond($('[sendverifyBind="' + filter + '"]'), 90, '获取手机验证码');

        } else if (data == 'yzm') {

            layui.layer.tips('验证码错误！', yzm, { tips: 1 });

            yzm.addClass('layui-form-danger').focus();

        } else {

            layui.layer.msg(data.msg, { icon: 5, shift: 6, time: 1500 });

        }

    });

}



function sendverifySecond(ele, time, txt) {

    ele.prop('disabled', true).addClass('layui-btn-disabled');

    t = setInterval(function() {

        if (time <= 0) {

            clearInterval(t);

            ele.removeProp('disabled').html(txt).removeClass('layui-btn-disabled');

            return;

        }

        ele.html(txt + '(' + time + 's)');

        --time;

    }, 1000);

}



function CheckData(dom, strTitle, strInput, strType, blNeed) { //js正则判断

    switch (strType) {

        case "pname":

            var pattern = /^.{2,200}$/;

            var msg = strTitle + "必须2位以上字符！";

            break;

        case "email":

            var pattern = /^[a-zA-Z0-9_\-\.]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,5}$/;

            var msg = strTitle + "格式错误！";

            break;

        case "phone":

            var pattern = /^1\d{10}$/;

            var msg = strTitle + "格式错误！";

            break;

    }



    strInput = strInput.replace(/(^\s*)|(\s*$)/g, "");

    if ((strInput == "") && blNeed) {

        layui.layer.tips(strTitle + "不能为空！", dom, { tips: 1 });

        return false;

    }



    if (strInput != "") {

        var result = strInput.match(pattern);

        if (result == null) {

            layui.layer.tips(msg, dom, { tips: 1 });

            return false;

        }

    }

    return true;

}



function checkType(strInput, strType) { //输入内容类型

    var flag = false;



    switch (strType) {

        case "company":

            var pattern = /[厂|公司|集团]+/;

            break;

    }



    if (strInput != "") {

        var result = strInput.match(pattern);

        if (result != null) {

            flag = true;

        }

    }

    return flag;

}



/*下载申请弹窗*/

function modalDownload(goodsid, width, height) {

    if (!width) { width = '800px'; }

    if (!height) { height = '530px'; }

    var w = $(window).width();

    if (w <= 767) {

        width = '90%';

        height = ($(window).height() - 20) + 'px';

    }

    layui.layer.open({

        type: 2,

        content: 'downloadForm.php?goodsid=' + goodsid,

        area: [width, height],

        title: false,

    });

}



/*购买申请弹窗*/

function modalXuqiu(goodsid, width, height) {

    if (!width) { width = '800px'; }

    if (!height) { height = '530px'; }

    var w = $(window).width();

    if (w <= 767) {

        width = '90%';

        height = ($(window).height() - 20) + 'px';

    }

    layui.layer.open({

        type: 2,

        content: 'xuqiuForm.php?goodsid=' + goodsid,

        area: [width, height],

        title: false,

    });

}



/*播放视频弹窗*/

function modalVideo(videoUrl, width, height) {

    if (!width) { width = '800px'; }

    if (!height) { height = '600px'; }

    var w = $(window).width();

    if (w <= 767) {

        width = '90%';

        height = ($(window).height() - 20) + 'px';

    }

    layui.layer.open({

        type: 2,

        title: false,

        area: [width, height],

        shade: 0.8,

        closeBtn: 1,

        shadeClose: false,

        content: videoUrl,

    });

}



/*自定弹窗*/

function modalAjax(tophp, goodsid, width, height) {

    if (!width) { width = '800px'; }

    if (!height) { height = '530px'; }

    var w = $(window).width();

    if (w <= 767) {

        width = '90%';

        height = ($(window).height() - 20) + 'px';

    }

    layui.layer.open({

        type: 2,

        content: tophp + '?goodsid=' + goodsid,

        area: [width, height],

        title: false,

    });

}

