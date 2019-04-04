/*var checkednum = false;
function checkPhone(id) {
    var phone = document.getElementById(id).value;
    if (!(/^1[34578]\d{9}$/.test(phone))) {
        errorMsgShow();
        checkednum = false;
        return false;
    } else {
        checkednum = true;
    }
}*/

function isIE(){
    var theUA = window.navigator.userAgent.toLowerCase();
    if ((theUA.match(/msie\s\d+/) && theUA.match(/msie\s\d+/)[0]) || (theUA.match(/trident\s?\d+/) && theUA.match(/trident\s?\d+/)[0])) {
        var ieVersion = theUA.match(/msie\s\d+/)[0].match(/\d+/)[0] || theUA.match(/trident\s?\d+/)[0];
        if (ieVersion < 9) {
            return true;
        }
    }
}
/**
 * 手机号验证
 */

/*$(function () {
    $('#mobilenum').blur(function (event) {
        checkPhone('mobilenum');
    });
});*/


/**
 * 支付方式
 */
$(function () {
    $('.payment a').click(function () {
        $(this).addClass("current").siblings().removeClass("current");
    });
});


/**
 * 微信扫码支付弹出框显示
 */
function weChatDialogShow() {
    $(".wechat-pay-dialog-bg").css({ display: "block", height: $(document).height() });
    $(".wechat-pay-dialog").css("display", "block");
};
/**
 * 微信扫码支付弹出框隐藏
 */
$(function () {
    $(".close").click(function (event) {
        $(".wechat-pay-dialog-bg").css("display", "none");
        $(".wechat-pay-dialog").css("display", "none");
    });
});
/**
 * 错误信息提示
 */
function errorMsgHide(id) {
    var errorMsgHide = setInterval(function () { $(id).css({ display: 'none' }); }, 5000);
    setInterval(function () { clearInterval(errorMsgHide); }, 5010);
}
function errorMsgShow() {
    $(".form-error-buy").text('请正确填写11位手机号');
    $(".form-error-buy").css({ display: 'block' })
    errorMsgHide(".form-error-buy");
}
function erroCode() {
    $(".form-error-code").css({ display: 'block' });
    if ($("#oraddcode").val() == "") {
        errorMsgHide(".form-error-code");
    }
}


$(function () {
    $('.xjpdf-plans a').click(function (event) {
        var _index = $(this).attr('data-type')-1;
        var price = $(this).attr('data-price');
        $(this).addClass('current').siblings().removeClass('current');
        $('.plan-titles .plan-title').eq(_index).addClass('current').siblings().removeClass('current');
        $('.goods-pics .goods-pic').eq(_index).addClass('current').siblings().removeClass('current'); 
        $('.plan-title-tips .slogan').eq(_index).addClass('current').siblings().removeClass('current'); 
        $('.thePlanPrice').text(price+'.00');
        $('.price-wechat').text(price+'.00');
    })
})

/**
 * 购买商品
 */

function payWay() {
    var paymethod = $('.payment a.current').attr('value');
    var package = $('.xjpdf-plans a.current').attr('value');


    if ( $('#aliPay').hasClass('current')) {
        var newTab = window.open('/loading', '_blank');
    }
    $.ajax({
        url: $('.themeUrl').text(),
        type: 'post',
        dataType: 'json',
        data: {
            "paymethod": paymethod,
            "package": package,
            '_token':$('.token').text(),
        },
        success: function (data) {
           /* console.log(data);*/
            if (data.code == 1000) {
                if (paymethod == 'alipay') {
                    newTab.location = data.message;
                } else if (paymethod == 'wechat') {
                    var render;
                    if (isIE()) {
                        render = 'table';
                    }else{
                        render = 'canvas';
                    };
                    weChatDialogShow();
                    $('.qr-code-wrapper').empty();
                    $('.qr-code-wrapper').qrcode({
                        render: render,
                        width: 120,
                        height: 120,
                        text: data.message
                    });
                };
            };
        }
    })
}
$(function () {
    $('#payNow').click(function () {
       // if (checkednum) {
            payWay();
       // } else {
         //   errorMsgShow();
       // };
    });
})