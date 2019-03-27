$(function() {
    //产品图切换
    $("#selectImg > img").hover(
        function() {
            $('#boxImg').attr('src', 'images/' + $(this).attr('imgname'));
        }
    );

    $('.rightBtn').click(function() {
        var position = $('#selectImg').position();
        var maxLeft = -($('#selectImg img').length - 3) * ($('#selectImg img').width() + 22);
        if (position.left > maxLeft) {
            $('#selectImg').finish().animate({ left: (position.left - ($('#selectImg img').width() + 22)) + 'px' }, 100);
        }
    });
    $('.leftBtn').click(function() {
        var position = $('#selectImg').position();
        if (position.left < 0) {
            $('#selectImg').finish().animate({ left: (position.left + ($('#selectImg img').width() + 22)) + 'px' }, 100);
        }
    });

    $(window).scroll(function() {
        var infoOffset = $('.buyProductsInfo').offset()
        if (infoOffset != undefined) {
            var nowScroll = $(window).scrollTop();
            var maxTop = $('.buyProductsInfo').height() - $('.buyProductsImg').height() - 30;
            if (nowScroll > infoOffset.top && nowScroll < infoOffset.top + maxTop) {
                $('.buyProductsImg').css('top', (nowScroll - infoOffset.top) + 'px');
            } else if (nowScroll < infoOffset.top) {
                $('.buyProductsImg').css('top', 0);
            }
        }
    });


    if ($('.cuxiaoList').length < 2) {
        $('.cuxiaoList .infoDis').removeClass('layui-hide');
    }
    if ($('.xinxiList').length < 2) {
        $('.xinxiList .infoDis').removeClass('layui-hide');
    }

    if ($('.cuxiaoList').length < 2 && $('.xinxiList').length < 2) {
        $('.openInfo').not('.layui-hide').addClass('layui-hide');
    }else{
        $('.openInfo').removeClass('layui-hide');
    }

    $('#productMoney').hover(function() {
        if ($('.cuxiaoList').length > 1) {
            $('.cuxiaoList').removeClass('fl');
            $('.cuxiaoList .infoDis ').removeClass('layui-hide');
        }
        if ($('.xinxiList').length > 1) {
            $('.xinxiList').removeClass('fl');
            $('.xinxiList .infoDis ').removeClass('layui-hide');
        }
        $('.openInfo').not('.layui-hide').addClass('layui-hide');
    }, function() {
        if ($('.cuxiaoList').length > 1) {
            $('.cuxiaoList').addClass('fl');
            $('.cuxiaoList .infoDis ').addClass('layui-hide');
        }
        if ($('.xinxiList').length > 1) {
            $('.xinxiList').addClass('fl');
            $('.xinxiList .infoDis ').addClass('layui-hide');
        }

        if ($('.cuxiaoList').length > 1 || $('.xinxiList').length > 1) {
            $('.openInfo').removeClass('layui-hide');
        }

    });


    var selPrice;
    //选择产品
    $('.selProducts').on('click', '.products', function() {
        $('.products').removeClass('active');
        $(this).addClass('active');
        selPrice = $(this).attr('price');

        resetSelOS();
        calcTotalPrice();
    });

    //选择操作系统
    $('.selOS').on('click', 'input', function() {
        $(this).parent().addClass('active2').siblings().removeClass('active2');
        resetBaozhuang();
        calcTotalPrice();
    });
    //选择下载盒装
    $('.selBaozhuang').on('click', 'input', function() {
        $(this).parent().addClass('active2').siblings().removeClass('active2');
        setRealGoods();
        calcTotalPrice();
    });
    //选择附加产品
    layui.form.on('checkbox(fujia)', function(data) {
        // $(data.elem).siblings('input').prop('checked', false);
        // $(data.othis).siblings('.layui-form-checkbox').removeClass('layui-form-checked');
        calcTotalPrice();
    });
    //选择购买类型 个人/公司
    $('#goumaiType').on('click', 'input', function() {
        $(this).parent().addClass('active2').siblings().removeClass('active2');
        var goumaiType = $(this).val();
        if (goumaiType == 'geren') {
            $('.gongsi').addClass('layui-hide');
        } else {
            $('.gongsi').removeClass('layui-hide');
        }
    });

    var selgoods, proId, baoZhunagId;

    //得到产品号
    function getGoodsInfo() {
        selgoods = $('.selProducts .active');
        proId = selgoods.attr('id')
        baoZhunagId;
        if (false && selgoods.attr('goodstype') == 'goods') {
            goodsId = proId + $('.selBaozhuang .active2 input').val() + $('.selOS .active2 input').val();
            baoZhunagId = proId + $('.selOS .active2 input').val();
        } else {
            goodsId = proId;
            baoZhunagId = proId;
        }
    }

    //操作系统
    function resetSelOS() {
        getGoodsInfo();
        var first = true;
        var systemStr = '';
        var systemCK = oslist[proId];
        $.each(systemCK, function(o, n){
            if (first) {
                systemStr += '<label class="active2 m_fs46r"><input value="' + systemCK[o] + '" checked="checked" lay-ignore="true" class="l-99999" type="radio">' + osType[systemCK[o]] + '</label>';
                first = false;
            } else {
                systemStr += '<label class="m_fs46r"><input value="' + systemCK[o] + '" lay-ignore="true" class="l-99999" type="radio">' + osType[systemCK[o]] + '</label>';
            }
        });

        if(systemCK.length > 1){
            $('.selOS').parent().removeClass('layui-hide');
        }else{
            $('.selOS').parent().addClass('layui-hide');
        }
        $('.selOS').html(systemStr);
        resetBaozhuang();
    }

    //包装盒
    function resetBaozhuang() {
        getGoodsInfo();
        var first = true;
        var baozhuangStr = '';
        var baozhuangCK = supplylist[baoZhunagId];
        $.each(baozhuangCK, function(o, n){
            if (first) {
                baozhuangStr += '<label class="active2"><input value="' + baozhuangCK[o] + '" checked="checked" lay-ignore="true" class="l-99999" type="radio">' + supplyType[baozhuangCK[o]] + '</label>';
                first = false;
            } else {
                baozhuangStr += '<label><input value="' + baozhuangCK[o] + '" lay-ignore="true" class="l-99999" type="radio">' + supplyType[baozhuangCK[o]] + '</label>';
            }
        });

        if(baozhuangCK.length > 1){
            $('.selBaozhuang').parent().removeClass('layui-hide');
        }else{
            $('.selBaozhuang').parent().addClass('layui-hide');
        }
        $('.selBaozhuang').html(baozhuangStr);
        setRealGoods();
    }

    function setRealGoods() {
        getGoodsInfo();
        $('#realgoodsid').val(goodsId);
        $('#hiddengoodsid').val(goodslist[goodsId][selPrice]['id']);

        //附属产品
        if (fujiaList == null || fujiaList[goodsId] == undefined) {
            $('.fujiaCheckbox').not('.layui-hide').addClass('layui-hide');
            $('.selFujia').html('');
        } else {
            $('.fujiaCheckbox').removeClass('layui-hide');
            var fujiaStr = '';
            var fujiaCK = fujiaList[goodsId];
            $.each(fujiaCK, function(o, n){
                fujiaCK[o]['price'] == 0 ? fujiaPrice = ' 免费赠送' : fujiaPrice = ' ￥' + fujiaCK[o]['price'] + '/套';
                fujiaStr += '<input lay-filter="fujia" value="' + fujiaCK[o]['id'] + '" name="fujia_goods[]" lay-skin="primary" type="checkbox" price="' + fujiaCK[o]['price'] + '" title="' + fujiaCK[o]['subject'] + fujiaPrice + '"><br>';
            });
            $('.selFujia').html(fujiaStr);
            layui.form.render('checkbox');
        }

        if (goodslist[goodsId][selPrice]['sale_type'] != 2) {
            $('.saleOnline').removeClass('layui-hide');
            $('.noSaleOnline').not('.layui-hide').addClass('layui-hide');
        } else {
            $('.saleOnline').not('.layui-hide').addClass('layui-hide');
            $('.noSaleOnline').removeClass('layui-hide');
        }
    }

    var Minus = $('.Minus');
    var Plus = $('.Plus');
    var selNum = $('#selNum');
    var nowNum;
    var sumPrice;

    Minus.click(function() {
        nowNum = parseInt(selNum.val());
        if (--nowNum <= 0) {
            return;
        } else {
            selNum.val(nowNum);
        }
        calcTotalPrice();
    });

    Plus.click(function() {
        nowNum = parseInt(selNum.val());
        if (++nowNum > 99) {
            return;
        } else {
            selNum.val(nowNum);
        }
        calcTotalPrice();
    });

    layui.form.on('checkbox(needVoice)', function(data) {
        if (data.elem.checked) {
            $('.pu').trigger('click');
            $('.voiceInfo, .chequeFront').removeClass('layui-hide');
            calcTotalPrice()
        } else {
            calcTotalPrice()
            $('.voiceInfo, .chequeFront').addClass('layui-hide');
        }
    });

    $('.voiceInfo').on('click', 'input', function() {
        $(this).parent().addClass('active2').siblings().removeClass('active2');
        if ($(this).val() == 'pu') {
            $('.chequeFrontInfo').removeClass('layui-hide');
            $('.chequeFrontInfo2').addClass('layui-hide');
        } else {
            $('.chequeFrontInfo2').removeClass('layui-hide');
            $('.chequeFrontInfo').addClass('layui-hide');
        }
        calcTotalPrice()
    });

    //数值转换
    function ForDight(Dight, How) {
        Dight = Math.round(Dight * Math.pow(10, How)) / Math.pow(10, How);
        return Dight;
    }
    //计算总价
    function calcTotalPrice() {
        needVoiceCheck();
        getGoodsInfo();
        var goodsId = $('#realgoodsid').val();
        var num = parseInt(selNum.val());
        var price, allPrice;
        var cd = parseInt($('.selBaozhuang .active2 input').prop('value'));
        var voice = $('input[name="needinvoice"]').prop('checked');

        $('.showAddress').not('.layui-hide').addClass('layui-hide');
        $('.showAddress2').not('.layui-hide').addClass('layui-hide');
        $('.showHDFK').not('.layui-hide').addClass('layui-hide');

        var fromProPage = $('#fromProPage').val();
        if (fromProPage == 'goumai') {
            /*根据产品号设置相应信息*/
            //产品图
            $('#boxImg, #boxImg2').attr('src', 'images/' + goodslist[goodsId][selPrice]['img_name']);
            //标题
            $('#prodTitle').html(selgoods.html());
            //描述
            $('.prodDis').html(goodslist[goodsId][selPrice]['description']);
            //价格
            if(selPrice.indexOf(',') == -1 ){
                price = parseInt(selPrice);
            }else{
                price = parseInt(goodslist[goodsId][selPrice]['price']);
            }
            //原价
            if (goodslist[goodsId][selPrice]['old_price'] > 0) {
                $('#yuanjiaNum').html(goodslist[goodsId][selPrice]['old_price']);
                $('.yuanjia').removeClass('layui-hide');
            } else {
                $('.yuanjia').not('.layui-hide').addClass('layui-hide');
            }
            //注册码信息
            $('#proInfo, #proInfo2').html(goodslist[goodsId][selPrice]['reg_tip']);

            //附属产品
            $('.fujiaCheckbox :checked').each(function(){
                price += parseInt($(this).attr('price'));
            });

            //升级申请
            if(goodslist[goodsId][selPrice]['supplyId'] == 13 || goodslist[goodsId][selPrice]['supplyId'] == 14){
                $('.yanzhenghidden').addClass('yanzhengHui').find('input, button').prop('disabled', true);
                $('.notYanzehngBox').addClass('layui-hide');
                $('.yanzehngBox').removeClass('layui-hide');
            }else{
                $('.yanzhenghidden').removeClass('yanzhengHui').find('input, button').prop('disabled', false);
                $('.notYanzehngBox').removeClass('layui-hide');
                $('.yanzehngBox').addClass('layui-hide');
            }
        }
        allPrice = price * num;

        //七夕优惠券
        if(goodsId == 101818710211111111 || goodsId == 101818710211111211){
            $('.couponBox').removeClass('layui-hide');
            var couponMoney = $('.couponMoney[price]').attr('price');
            if(couponMoney){
                $('.couponMoney[price]').html('已减￥' + couponMoney + ', 合计：￥' + (allPrice-couponMoney));
            }
        }else{
            $('.couponBox').addClass('layui-hide');
        }


        if (cd != 12 && voice == true && $('.voiceInfo :checked').val() == 'zeng') {
            allPrice += 30;
            $('.kdf30').removeClass('layui-hide')
        }

        if (cd == 12) {
            $('.showAddress').removeClass('layui-hide');
            $('.showHDFK').removeClass('layui-hide');
        } else {
            if (voice && $('.voiceInfo :checked').val() == 'zeng' && $('.showAddress').hasClass('layui-hide')) {
                $('.showAddress2').removeClass('layui-hide')
            } else {
                $('.showAddress2').not('.layui-hide').addClass('layui-hide');
            }

            $('.showHDFK').addClass('layui-hide');
            if ($('#hdfk').prop('checked')) {
                $('.disanfangzhifu').removeClass('layui-hide');
                $('.selPayType span').eq(0).click();
            }
        }

        $('#totalPriceNum').html(ForDight(allPrice, 2));
        $("#totalPriceNum2").html(ForDight(allPrice, 2));        //手机购买
    }
    //选择支付方式
    $('.selPayType span').click(function() {
        $('.disanfangzhifu').addClass('layui-hide');
        $('.huikuanInfo').addClass('layui-hide');
        $('.daofuInfo').addClass('layui-hide');

        if ($(this).index() == 1) {
            document.getElementById('orderForm').action = 'huikuan.html';
            $('.huikuanInfo').removeClass('layui-hide');
            $('#proInfo2').addClass('layui-hide');//手机购买
        } else if ($(this).index() == 2) {
            document.getElementById('orderForm').action = 'huodaofukuan.html';
            $('.daofuInfo').removeClass('layui-hide');
            $('#proInfo2').addClass('layui-hide');//手机购买
        } else {
            $('.disanfangzhifu').removeClass('layui-hide');
            $('.disanfangzhifu').find('.layui-form-radioed').trigger('click');
            $('#proInfo2').removeClass('layui-hide');//手机购买
        }
        $(this).addClass('active2').siblings().removeClass('active2');
    });
    //提交订单
    $('#btnSubmitOrder').click(function() {
        jsactionBuyForm();
    });

    var soft = window.location.hash;
    if (soft.indexOf("#") > -1) {
        var selectSoft = soft.split('#');
        $('.products').eq(selectSoft[1]).trigger('click'); //默认产品
    } else {
        $('.products').eq(0).trigger('click'); //默认产品
    }


    function needVoiceCheck(){
        if(false && $(window).width() < 768){
            $('.goumaiInfo input[verify-title]').each(function(i){
                $(this).attr('placeholder', '请输入' + $(this).attr('verify-title'));
            });

            $('div[lay-skin="primary"]').addClass('layui-hide');
            $('div[lay-skin="_switch"]').removeClass('layui-hide');

            $('[lay-vertype]').attr('lay-vertype', 'msg');
        }else{
            $('div[lay-skin="primary"]').removeClass('layui-hide');
            $('div[lay-skin="_switch"]').addClass('layui-hide');
        }
    }


    layui.form.on('switch(needVoice2)', function(data) {
        $(':checkbox[name="needinvoice"]').prop('checked', data.elem.checked);
        if (data.elem.checked) {
            $('.pu').trigger('click');
            $('.voiceInfo, .chequeFront').removeClass('layui-hide');
            calcTotalPrice()
        } else {
            calcTotalPrice()
            $('.voiceInfo, .chequeFront').addClass('layui-hide');
        }
    });

});

layui.form.on('submit(goumai)', function(data) {
    $('.buyStep').attr('src', 'images/buystep2.jpg');
    showStep();
    document.orderForm.submit();
});

layui.form.on('radio(payType)', function(data) {
    var getid = data.value;
    if ('wy' == getid) {
        document.getElementById('orderForm').action = './pay/bank.php';
    } else if ('zfb' == getid) {
        document.getElementById('orderForm').action = './pay/alipay.php';
    } else if ('wx' == getid) {
        document.getElementById('orderForm').action = './pay/weixin.php';
    } else if ('hdfk' == getid) {
        document.getElementById('orderForm').action = 'huodaofukuan.html';
    } else {
        document.getElementById('orderForm').action = 'huikuan.html';
    }
});

layui.form.on('submit(goumaiSQ)', function(data) {
    data.field.action = 'submitinfo'; //verifysms.php
    data.field.smsuser = data.field.userName; //verifysms.php
    data.field.mobile = data.field.userTel; //verifysms.php

    data.field.ly_type = 'xuqiu'; //liuyan.php
    data.field.os = $('.selOS :checked').val();
    data.field.goodsid = $('#realgoodsid').val();


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



function showStep() {
    addCookie('gopay', 'gopay', 0);
    $('.all').animate({ opacity: 0.3 });
    $(".hander").show();
    $(window).scrollTop(0);
}

function showpage(val) {
    $('.all').animate({ opacity: 1 });
    $('.hander').hide();
    if (val == 'payed') {
        var goumaiKey = encodeURIComponent(document.getElementById('goumaiKey').value);
        location.href = 'orders/' + goumaiKey + '.html';
        $('.buyStep').attr('src', 'images/buystep3.jpg');
    } else {
        $('.buyStep').attr('src', 'images/buystep1.jpg');
    }
}

/*购买验证*/
function jsactionBuyForm() {
    //重置验证机制
    $('.gongsi, .showAddress, .showAddress2, .chequeFront').find('select, input').each(function() {
        if ($(this).attr('lay-verify')) {
            $(this).attr('lay-verify', $(this).attr('lay-verify').replace(/(required\|?)+/, ''));
        }
    });

    //验证机制
    if (!$('.gongsi').hasClass('layui-hide')) {
        $('.gongsi').find('input').attr('lay-verify', 'required|' + $('.gongsi').find('input').attr('lay-verify'));
    }

    if (!$('.showAddress').hasClass('layui-hide')) {
        $('.showAddress').find('select, input').each(function() {
            $(this).attr('lay-verify', 'required|' + $(this).attr('lay-verify'));
        });
    }

    var voice = $('input[name="needinvoice"]').prop('checked');
    var chequeFront = $('input[name="chequeFront"]').val();
    if (voice) {
        $('input[name="chequeFront"]').attr('lay-verify', 'required|' + $('input[name="chequeFront"]').attr('lay-verify'));

        if ($('.voiceInfo :checked').val() == 'pu') {
            if (checkType(chequeFront, 'company')) {
                $('input[name="invoice_tax_account"]').attr('lay-verify', 'required|' + $('input[name="invoice_tax_account"]').attr('lay-verify'));
            } else {
                $('input[name="invoice_tax_account"]').attr('lay-verify', $('input[name="invoice_tax_account"]').attr('lay-verify'));
            }
        } else {
            $('.chequeFront').find('select, input').each(function() {
                $(this).attr('lay-verify', 'required|' + $(this).attr('lay-verify'));
            });
        }
    }

    if ($('.showAddress2').hasClass('layui-hide')) {
        $('.showAddress2').find('select, input').each(function() {
            if ($(this).attr('lay-verify')) {
                $(this).attr('lay-verify', $(this).attr('lay-verify').replace(/(required\|?)+/, ''));
            }
        });
    }
}


/*优惠券*/
function use_coupon() {
    var coupon = $('#coupon');
    if (!CheckData(coupon, "优惠券", coupon.val(), "pname", true)) {
        coupon.focus();
        return false;
    }

    layui.layer.load();

    $.post('diyongquan.php', { coupon: coupon.val() }, function(d) {
        console.log(d);
        layui.layer.closeAll();
        if (d == 'fail') {
            layui.layer.msg('无效优惠券号！！！', { icon: 5 });
        } else if (d == 'end') {
            layui.layer.msg('优惠券已过期！！！', { icon: 5 });
        } else {
            $('#usecoupon').addClass('yanzhengHui').prop('disabled', true);

            var payPirce = $('#totalPriceNum').html();
            var payMoney = parseInt(payPirce) - d;
            $('.couponMoney[price]').html('已减￥' + d + ', 合计：￥' + payMoney).removeClass('layui-hide').attr('price', d);

            layui.layer.msg('成功使用优惠券', { time:1000,icon: 1 });

        }
    });
}


function ckIsUpdateMail() {
    var updateMail = $('[name="updateMail"]');

    $('.layui-form-danger').removeClass('layui-form-danger');

    if (!CheckData(updateMail, "购买邮箱", updateMail.val(), "email", true)) {
        updateMail.addClass('layui-form-danger').focus();
        return false;
    }

    layui.layer.load();
    $.post('ckIsUpdateUser.php', {regmail:updateMail.val()}, function(data){
        layui.layer.closeAll();
        if(data != 1){
            layui.layer.msg('验证成功！！！',{icon:6, time:1000});
            $('.yanzehngBox').addClass('layui-hide');
            $('.yanzhenghidden').removeClass('yanzhengHui').find('input, button').prop('disabled', false);
        }else{
            layui.layer.msg('验证失败！！！',{icon:5});
        }
    })
};
