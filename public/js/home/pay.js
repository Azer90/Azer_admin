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
    $(".success_close").click(function (event) {
        var buyUrl =$('.buyUrl').text();
        $(".pay-success-bg").css("display", "none");
        $(".pay-success").css("display", "none");
        window.location.href=buyUrl;
    });
});

function paySuccess(){
    $(".pay-success-bg").css({ display: "block", height: $(document).height() });
    $(".pay-success").css("display", "block");
};
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
        $('.thePlanPrice').text(price);
        $('.price-wechat').text(price);
    })
})

/**
 * 购买商品
 */

function payWay() {
    var paymethod = $('.payment a.current').attr('value');
    var package = $('.xjpdf-plans a.current').attr('value');


  /*  if ( $('#aliPay').hasClass('current')) {
        var newTab = window.open('/loading','_blank');
    }*/
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
            /*console.log(data.order_no);*/
            if (data.code == 1000) {
                $('.order_no').html(data.order_no);
                if (paymethod == 'alipay') {
                   // newTab.location = data.message;
                    window.open(data.message,'_self');
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
});

var checkedcode = false;
function checkEmail(id) {
    var email = document.getElementById(id).value;
    if (!(/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/.test(email))) {
        errorMsgShow_();
        checkedcode = false;
        return false;
    } else {
        checkedcode = true;
    }
}

function errorMsgShow_() {
    $(".form-error-buy").text('请正确填写邮箱格式');
    $(".form-error-buy").css({ display: 'block' });
    errorMsgHide(".form-error-buy");
}
$(function () {
    chaxun = setInterval(function () {
        check()
    }, 3000);


    $('#email').blur(function (event) {
        checkEmail('email');
    });

    $('#tj').click(function () {
         if (checkedcode) {
             codeTJ();
         } else {
             errorMsgShow_();
         };
    })
});

function check() {
    var paymethod = $('.payment a.current').attr('value');
    if (paymethod == 'alipay') {
        var url =$('.aliUrl').text();
    }
    if (paymethod == 'wechat') {
        var url =$('.wechatUrl').text();
    }
    var order_no = $('.order_no').text();
    var param = {'order_no': order_no, '_token':$('.token').text()};
    if(order_no !=''){
        $.post(url, param, function (data) {

            if(paymethod == 'alipay'){
               // console.log(data['trade_status']);
                if (data['trade_status'] == 'TRADE_SUCCESS') {
                    paySuccess();
                    clearInterval(chaxun);
                }
            }else if(paymethod == 'wechat'){
                //console.log(data['trade_state']);
                if (data['trade_state'] == 'SUCCESS') {
                    $(".wechat-pay-dialog-bg").css("display", "none");
                    $(".wechat-pay-dialog").css("display", "none");
                    paySuccess();
                    clearInterval(chaxun);
                }
            }

        });
    }

}


function codeTJ() {
    var email = $("input[name='email']").val();
    var pcode = $("input[name='pcode']").val();
    var order_no = $('.order_no').text();
    var url =$('.sendUrl').text();
    var buyUrl =$('.buyUrl').text();

    if (email != '' && pcode != ''&&order_no!='') {
       var code = generate();
       /* console.log(activecode);*/
        var param = {'email': email, 'code': code, 'order_no': order_no,'_token':$('.token').text()};
        $.post(url, param, function (data) {
             //console.log(data);
             if(data['code']==1000){
                 alert('发送成功');
                 $(".pay-success-bg").css("display", "none");
                 $(".pay-success").css("display", "none");
                 if(data['payway']=='wechat'){
                     location.reload()
                 }else if(data['payway']=='alipay'){
                     window.location.href=buyUrl;
                 }
             }else {
                 alert('发送失败');
             }

        });
    } else {
        alert('请填写完整！');
    }
}

function generate() {
    let m_code = document.getElementById('pcode').value;
    let num = parseInt(m_code);
    let text = undefined;
    for (let i = 0; i < 100; i++) {
        text = '' + (num * 3);
        if (text.length <= 12) {
            num = parseInt(text);
        } else {
            num = parseInt(text.slice(0, 12));
        }
    }
    return num;
}