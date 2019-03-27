$(function() {

    /***********侧边栏优化改版0511 start******************************/

    /*在线联系动画初始化*/

    _rotate_start("msg");

    $('.showQRcodeBtn').click(function(event) {
        layer.open({
            type: 1,
            title: false,
            closeBtn: 1,
            area: ["193px", "261px"],
            skin: 'layui-layer-nobg', //没有背景色
            shadeClose: true,
            content: '<div class="pr"><img class="pa" src="'+'http://pic.mairuan.com/huishenghuiying/public/qrcode_hh.png!p75'+'"/></div>'
        }); 
    });


    //当点击跳转链接后，回到页面顶部位置

    $(".Rtop").click(function() {

        $('body,html').animate({ scrollTop: 0 }, 500);

        return false;

    });



    var scrollHeight = $(window).scrollTop()

    if (scrollHeight > 100) {

        $('.Rtop').removeClass('dn');

        $('.tool-line:last').removeClass('dn');

    }

    $(window).scroll(function() {

        scrollHeight = $(this).scrollTop();

        if (scrollHeight > 100) {

            $('.Rtop').removeClass('dn');

            $('.tool-line:last').removeClass('dn');

        } else {

            $('.Rtop').addClass('dn');

            $('.tool-line:last').addClass('dn');

        }



        if (scrollHeight > 720) {

            $('.x2018Banner2BG, .x10Banner2BG, .x9Banner2BG').addClass('x2018BannerMenuFixed').find('.x2018BannerMenu').addClass('x2018BannerMenu2').children().last().removeClass('layui-hide');

        } else {

            $('.x2018Banner2BG, .x10Banner2BG, .x9Banner2BG').removeClass('x2018BannerMenuFixed').find('.x2018BannerMenu').removeClass('x2018BannerMenu2').children().last().addClass('layui-hide');

        }







        var duibiOffset = $('.duibiTable').offset();

        if (duibiOffset && scrollHeight > duibiOffset.top - 1) {

            $('.duibiTable').find('thead').find('tr').addClass('duibiFidex');

        } else {

            $('.duibiFidex').removeClass('duibiFidex');

        }

    });



    $('.mobel, .Rtop').hover(function() {

        $(this).find('.imghover').attr('src', 'images/' + $(this).attr('imgname') + '_h.png');

        $(this).find('.hidemobelBox').css("display", "block");

    }, function() {

        $(this).find('.imghover').attr('src', 'images/' + $(this).attr('imgname') + '.png');

        $(this).find('.hidemobelBox').css("display", "none");

    });

    /***********侧边栏优化改版0511 end******************************/



    /***********index.html start******************************/

    setTimeout(alsList, 500);

    /***********index.html end******************************/







    /***********videostudio  menu start******************************/

    $('.x2018BannerMenu li, .x10BannerMenu li').click(function() {

        var index = $(this).index();

        if (index == 0) {

            $('.x2019Banner, .u2019Banner, .x2018Banner').height('auto');

            $('.x10Banner').height('auto');

        } else {

            $('.x2019Banner, .u2019Banner, .x2018Banner').height(620);

            $('.x10Banner').height(620);

        }



        $(window).scrollTop(500);

        $('.duibiFidex').removeClass('duibiFidex');

    });

    /***********videostudio  menu end******************************/





    /***********support  menu start******************************/

    $('[tabShowSupport] > *').not($('[noTab]')).click(function() {

        $('[tabShowSupport] > .active').removeClass('active');

        $(this).addClass('active');



        $('[tabShowBindFilter]').children().addClass('layui-hide');



        var element = $(this).parent().attr('tabShowBind');

        var animated = $(this).parent().attr('animated');

        if (element) {

            $('[tabShowBindFilter="' + element + '"]').children().eq($(this).index()).removeClass('layui-hide').addClass(animated).siblings().addClass('layui-hide');

        }



    });

    /***********support  menu end******************************/



    /***********biyeji start******************************/

    if(location.pathname == '/biyeji.html'){

        calc_chosePrice();

    }

    /***********biyeji end******************************/



    /***********zhuanxiang start******************************/

    if(location.pathname == '/zhuanxiang.html'){

        calc_chosePrice_zhuanxiang();

    }

    /***********zhuanxiang end******************************/





    //抽奖---begin

    $('.choujiangBtn').click(function(){

        var quanType = '2018+SJ';



        layer.load();

        $.post('diyongquan.php', { quanType: quanType}, function(d) {

            console.log(d);

            var res = $.parseJSON(d);

            layer.closeAll();

            if (res.code == 'fail') {

                layer.msg('抽取失败，请联系管理员！！！', { icon: 5 });

            }else {

                setQuanNumInfo(d);

            }

        });

    });



    //抽奖---end



    /*手机*/

    $('.m_menu').click(function() {

        if ($('.top').hasClass('m_o95')) {

            $('.top').removeClass('m_o95').animate({ height: $(window).height() }, 300);

        } else {

            $('.top').addClass('m_o95').animate({ height: '1.267rem' }, 100);

        }

    });



    $('.footer .jia').click(function() {

        if ($(this).nextAll('ul').css('display') == 'none') {

            // $(this).nextAll('ul').removeClass('hide-xs');

            // $(this).attr('src', './uploads/images/photozoom/jian.png');

        } else {

            // $(this).nextAll('ul').addClass('hide-xs');

            // $(this).attr('src', './uploads/images/photozoom/jia.png');

        }

    });



});



/*页面js*/



function showChouJiangBox(){

    var quanNumInfo = getCookie('quanNumInfo_1029');

    if(quanNumInfo != '' && quanNumInfo != undefined){

        console.log('sended');

        setQuanNumInfo(quanNumInfo);

    }

    $('.choujiang').removeClass('layui-hide');

}



function setQuanNumInfo(quanNumInfo){

    var res = $.parseJSON(quanNumInfo);



    $('.choujiangBox').addClass('layui-hide');

    $('.choujiangMoney').html('立减' + res.money + '元');

    $('.choujiangCode').html(res.code);

    $('.choujiangRes').removeClass('layui-hide');



    if(location.href.indexOf('purchase') > -1){

        $('.choujiangGoPay').attr('target', '');

    }else{

        $('.choujiangGoPay').attr('target', '_blank');

    }

}





function alsList() {

    layui.use(['als'], function(als) {

        $("#my-als-list").als({

            visible_items: 5, //可见个数

            scrolling_items: 1, //每次滚动个数

            orientation: "horizontal", //滚动方向

            circular: "yes", //是否循环滚动

            autoscroll: "no", //自动播放

            interval: 5000, //滚动间隔时间

            speed: 500, //滚动动画速度

            easing: "linear", //动画效果

            direction: "left", //滚动方向

            start_from: 0 //初始化索引，从0开始

        });

    });

}





//问题反馈 fankui.html

layui.form.on('submit(fankuixinxi)', function(data) {

    data.field.action = 'submitinfo'; //verifysms.php

    data.field.smsuser = data.field.userName; //verifysms.php

    data.field.mobile = data.field.userTel; //verifysms.php



    data.field.ly_type = 'fankui'; //liuyan.php



    layui.layer.load();

    $.post('verifysms.php', data.field, function(d) {

        if (d.code == 105) {

            $.post('liuyan.php', data.field, function(d) {

                console.log(d);

                layui.layer.closeAll();

                layui.layer.msg('感谢您的支持！<br>我们会尽快为您回复。', { icon: 1 }, function() { window.location.reload(); });

            });

        } else {

            layui.layer.closeAll();

            layui.layer.msg(d.msg, { icon: 5, time: 1000 });

            $(this).parents('.layui-form').find('input[name^="verify"]').addClass('layui-form-danger').focus();

        }

    });

});





//新闻子类

function showMubanJiaocheng(page, str) {

    console.log(page);

    addCookie('showWhat', str);

    if (page.indexOf('sousuo') > -1) {

        window.location.href = page + '.html';

    } else {

        window.location.href = page + '/';

    }

}





function openVideoBox(img, url, title, number, type, format, size, downloadUrl, price) {

    layer.open({

        type: 2,

        title: false,

        area: ['800px', '600px'],

        shade: 0.8,

        closeBtn: 1,

        shadeClose: false,

        content: 'downloadVideoBox.php?img=' + img + '&url=' + url + '&title=' + title + '&number=' + number + '&type=' + type + '&format=' + format + '&size=' + size + '&downloadUrl=' + downloadUrl + '&price=' + price,

    });

}



function openBuyVideoBox(img, url, title, customId, price) {

    layer.open({

        type: 2,

        title: false,

        area: ['800px', '600px'],

        shade: 0.8,

        closeBtn: 1,

        shadeClose: false,

        content: 'buyVideoBox.php?img=' + img + '&url=' + url + '&title=' + title + '&customId=' + customId  + '&price=' + price,

    });

}



function openBuyVideoBox_sd(img, url, title, customId, price) {

    layer.open({

        type: 2,

        title: false,

        area: ['800px', '600px'],

        shade: 0.8,

        closeBtn: 1,

        shadeClose: false,

        content: 'buyVideoBox_sd.php?img=' + img + '&url=' + url + '&title=' + title + '&customId=' + customId  + '&price=' + price,

    });

}





/*biyeji.html 选购买模板*/

function calc_chosePrice() {

    var selAll = true;

    var selPrice = 0;



    $("[name='oid']").val(1528791121);



    $("[lay-filter='byjMB']").each(function() {

        if ($(this).prop('checked')) {

            selPrice += parseInt($(this).attr('price'));

        } else {

            selAll = false;

        }

    });



    if (selAll) {

        if ($("[lay-filter='byjMBchose']").eq(1).prop('checked') == false) {

            $("[lay-filter='byjMBchose']").eq(0).prop('checked', true);

        }

    }else{

        $("[lay-filter='byjMBchose']").prop('checked', false);

    }



    $("[lay-filter='byjMBchose']").each(function() {

        if ($(this).prop('checked')) {

            selPrice = parseInt($(this).attr('price'));

            $("[name='oid']").val($(this).val());

        }

    });



    $('#choseMoney').html(selPrice);



    layui.form.render();

}



layui.form.on('checkbox(byjMB)', function(data) {

    calc_chosePrice();

});



layui.form.on('checkbox(byjMBchose)', function(data) {

    if (data.elem.checked) {

        $("[lay-filter='byjMBchose']").prop('checked', false);

        $(data.elem).prop('checked', true);



        $("[lay-filter='byjMB']").prop('checked', true);

    } else {

        $("[lay-filter='byjMB']").prop('checked', false);

    }



    calc_chosePrice();

});



layui.form.on('submit(goumaiMB)', function(data) {

    var flag = false;

    $("[lay-filter='byjMB']").each(function() {

        if ($(this).prop('checked')) {

            flag = true;

        }

    });

    if (!flag) {

        layui.layer.msg('至少选择一个模板！！！', { icon: 5 });

        return false;

    }

});





/*zhuanxiang.html 选购买模板*/

function calc_chosePrice_zhuanxiang() {

    var selAll = true;

    var selPrice = 0;

    var old_price = 0;



    $("[name='oid']").val(1531300526);



    $("[lay-filter='zhuanxiangMB']").each(function() {

        if ($(this).prop('checked')) {

            selPrice += parseInt($(this).attr('price'));

            old_price += parseInt($(this).attr('old_price'));

        } else {

            selAll = false;

        }

    });



    if (selAll) {

        $("[lay-filter='allZhuanxiangMB']").prop('checked', true);

        $("[name='oid']").val(1531300526);

        selPrice = 199;

    }else{

        $("[lay-filter='allZhuanxiangMB']").prop('checked', false);

        $("[name='oid']").val(1531298230);

    }



    $('#choseMoney').html(selPrice);

    $('#oldMoney').html(old_price);



    layui.form.render();

}



layui.form.on('checkbox(zhuanxiangMB)', function(data) {

    calc_chosePrice_zhuanxiang();

});



layui.form.on('checkbox(allZhuanxiangMB)', function(data) {

    if (data.elem.checked) {

        $("[lay-filter='zhuanxiangMB']").prop('checked', true);

    } else {

        $("[lay-filter='zhuanxiangMB']").prop('checked', false);

    }



    calc_chosePrice_zhuanxiang();

});



layui.form.on('submit(goumaiZhuanxiangMB)', function(data) {

    var flag = false;

    $("[lay-filter='zhuanxiangMB']").each(function() {

        if ($(this).prop('checked')) {

            flag = true;

        }

    });

    if (!flag) {

        layui.layer.msg('至少选择一个模板！！！', { icon: 5 });

        return false;

    }

});





/*shengdian.html 选购买模板*/

function calc_chosePrice_shengdian() {

    var selPrice = 0;



    $("[lay-filter='shengdianMB']").each(function() {

        if ($(this).prop('checked')) {

            selPrice += parseInt($(this).attr('price'));

        }

    });



    $('#choseMoney').html(selPrice);

}



layui.form.on('checkbox(shengdianMB)', function(data) {

    calc_chosePrice_shengdian();

});





layui.form.on('submit(goumaiShengdianMB)', function(data) {

    var flag = false;

    $("[lay-filter='shengdianMB']").each(function() {

        if ($(this).prop('checked')) {

            flag = true;

        }

    });

    if (!flag) {

        layui.layer.msg('至少选择一个模板！！！', { icon: 5 });

        return false;

    }

});





/*公共js代码 begin*/



/***********侧边栏优化改版在线客服动效 start******************************/

function _rotate_rotate(item) {

    $("#" + item).removeClass("tada10");

    setTimeout(function() { $("#" + item).addClass("tada10") }, 100);

}



function _rotate_start(item) {

    _rotate_timer = setInterval("_rotate_rotate('" + item + "')", 5000);

}



function _rotate_stop() {

    clearInterval(_rotate_timer);

}

/***********侧边栏优化改版在线客服动效 end******************************/



function searchUrl() {

    var reg = /^(\s*)$/g;

    if (reg.test(document.getElementById("searchValueId").value))

        var res = '\'\'';

    else

        res = document.getElementById("searchValueId").value;



    window.location.href = 'http://' + location.hostname + '/biaoqian/' + res;

}



function searchUrl2() {

    var reg = /^(\s*)$/g;

    if (reg.test(document.getElementById("searchSupport").value))

        var res = '\'\'';

    else

        res = document.getElementById("searchSupport").value;



    window.location.href = 'http://' + location.hostname + '/biaoqian/' + res;

}



/*公共js代码 end*/

