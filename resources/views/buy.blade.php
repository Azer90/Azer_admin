@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>
@include('layouts.nav')


<section class="banner banner-buy full">
    <ul class="wrapper current">
        <li class="banner-cxt"></li>
    </ul>
</section>
<section class="buy-wrapper full">
    <form  class="formfmt">
        <div class="wrapper buy">
            <div class="buy-step"><span class="step-num"><em>1</em><i class="icon-step-diamond"></i></span>您要购买的软件</div>
            <dl class="goods">
                <dd class="goods-pics">
                        <div class="goods-pic goods-pic-1"></div>
                        <div class="goods-pic goods-pic-2"></div>
                        <div class="goods-pic goods-pic-3 current"></div>
                </dd>
                <dd class="goods-infor">

                    <div class="plan-titles">
                        @foreach ($goods as $value)
                            <h1 class="plan-title">{{ $value['title'] }}</h1>
                            @if($loop->last)
                                <h1 class="plan-title current">{{ $value['title'] }}</h1>
                            @endif
                        @endforeach
                    </div>
                    <div class="plan-title-tips">
                        @foreach ($goods as $value)
                            <p class="slogan">{{ $value['slogan'] }}</p>
                            @if($loop->last)
                                <p class="slogan current">{{ $value['slogan'] }}</p>
                            @endif
                        @endforeach


                    </div>
                    <h2 class="price-wrap">￥<span class="price"><span class="thePlanPrice">{{ $endgoods['price'] }}.00</span></span></h2>
                    <div class="plans">
                        <div class="plans-title">套餐：</div>
                        <div class="plan xjpdf-plans">
                            @foreach ($goods as $value)
                                <a value="{{ $value['id'] }}" data-type="{{ $loop->iteration }}"  data-price="{{ $value['price'] }}" class=" @if($loop->last) current @endif">
                                    <span>{{ $value['name'] }} </span>
                                    <em class="active-icon"></em>
                                    @if($loop->last)
                                    <em class="hot-icon"></em>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                </dd>
            </dl>
            <ul class="payment-wrapper">
                <div class="buy-step"><span class="step-num"><em>2</em><i class="icon-step-diamond"></i></span>请选择付款方式</div>
                <div class="payment">
                    <a value="alipay" id="aliPay" class="pay-ali current" ><span class="icon icon-tag"></span><img src="{{ asset('picture/pay-ali.png') }}"></a>
                    <a value="wechat" id="wechatPay" class="pay-wechat"><span class="icon icon-tag"></span><img src="{{ asset('picture/pay-wechat.png') }}"></a>
                </div>
                <div style="text-align: center; color:#FF0000;margin-top: 10px">Tips:支付成功后填写邮箱和软件机器码进行授权*请勿关闭当前页</div>
                <div class="pay-now" id="payNow">
                    立即购买
                </div>
            </ul>
        </div>
    </form>
</section>
<!-- 微信扫码支付弹出框开始 -->
<div class="wechat-pay-dialog-bg full"></div>
<div class="wechat-pay-dialog" id="show">
    <a class="close"></a>
    <ul>
        <li class="li-01">
            <h3>支付过程中，</h3>
            <h4>遇到问题，请联系客服。</h4>
            <p>客服热线：{{ $config['phone'] }}</p>
            <p>Q Q：{{ $config['qq'] }}</p>
        </li>
        <li class="li-02">
            <h3>微信扫码支付</h3>
            <h1 class="price-wechat">￥<span class="thePlanPrice">{{ $endgoods['price'] }}.00</span></h1>
            <div class="qr-code-wrapper" id="qrcode">

            </div>
            <div class="tips">
                <img src="{{ asset('picture/icon-scan.png') }}">
                <p>请使用微信扫一扫</p>
                <p>扫描二维码支付</p>
            </div>
        </li>
        <li class="li-03">
            <img src="{{ asset('picture/code-tips.png') }}">
        </li>
    </ul>
</div>
<!-- 微信扫码支付弹出框结束 -->
<!-- 验证码弹出框开始 -->
<div class="pay-success-bg  full"></div>
<div class="pay-success">
    <a class="success_close"></a>
    <ul class="user-infor">
        <div class="buy-step" style="text-align: center"><span class="step-num">  <p>支付成功,请填写邮箱和机器码</p></span>发送注册码</div>

        <dl class="buy-input">
            <dd class="dd-01">邮&emsp;箱：</dd>
            <dd class="dd-02"><input name="email" type="text" value="" placeholder="请输入邮箱" class="email" id="email"></dd>
            <div class="clearfix"></div>
        </dl>
        <dl class="buy-input">
            <dd class="dd-01 buy-input-cxt">机器码：</dd>
            <dd class="dd-02 contact-phones" id="mtel">
                <input name="pcode" type="text" value="" placeholder="请输入机器码" size="25" maxlength="15" id="pcode">
            </dd>
            <div class="clearfix"></div>
        </dl>
        <div class="form-error form-error-buy" style="color:#ff0030"></div>
        <div><input type="button" id="tj" value="提交"/></div>
    </ul>
</div>
<!-- 验证码弹出框结束 -->
<section class="wrapper full">
    <h3 class="plan-introduction-title">套餐介绍</h3>
    <ul class="plan-introduction">

        <li class="item item-1">
            <div class="item-title">
                <div>
                    <i class="icon icon-plan-device"></i>
                    <p>套餐类型</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <i class="icon icon-plan-time"></i>
                    <p>授权时间</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <i class="icon icon-plan-price"></i>
                    <p>套餐价格</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <i class="icon icon-plan-limit"></i>
                    <p>文档限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <i class="icon icon-plan-sevice"></i>
                        <p>人工服务</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div>
                        <i class="icon icon-plan-package"></i>
                        <p>套餐内容</p>
                    </div>
                </div>
            </div>
        </li>

        <li class="item item-2">
            <div class="item-title">
                <div>
                    <i class="icon icon-48"></i>
                    <p>48VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>半年</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>48</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>3次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【半年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-2">
            <div class="item-title">
                <div>
                    <i class="icon icon-68"></i>
                    <p>68VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>一年</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>68</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>20次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【一年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-3">
            <div class="item-title">
                <div>
                    <i class="icon icon-88"></i>
                    <p>88VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>终身</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>88</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>30次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【终身授权】</p>
                    </div>
                </div>
            </div>
        </li>

        <li class="item item-4">
            <div class="item-title">
                <div>
                    <i class="icon icon-118"></i>
                    <p>118VIP</p>
                </div>
            </div>
            <div class="item-time">
                <div>
                    <p>终身</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>118</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-sevice">
                <div>
                    <div>
                        <p>50次</p>
                    </div>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【终身授权】</p>
                    </div>
                    <div class="logo-pdf-online">
                        <h4>迅捷PDF在线转换</h4>
                        <p>【三年授权】</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="item item-5">
            <div class="item-title">
                <div>
                    <i class="icon icon-128"></i>
                    <p>128VIP</p>
                </div>
                <img src="{{ asset('picture/hot-rec-1.png') }}" class="hot-rec"/>
            </div>
            <div class="item-time">
                <div>
                    <p>终身</p>
                </div>
            </div>
            <div class="item-price">
                <div>
                    <p><span>￥</span>128</p>
                </div>
            </div>
            <div class="item-limit">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-note">
                <div>
                    <p>无限制</p>
                </div>
            </div>
            <div class="item-package">
                <div>
                    <div class="logo-pdf-zhuan">
                        <h4>迅捷PDF转换器</h4>
                        <p>【终身授权】</p>
                    </div>
                    <div class="logo-pdf-editor">
                        <h4>迅捷PDF编辑器</h4>
                        <p>【终身授权】</p>
                    </div>
                    <div class="logo-pdf-online">
                        <h4>迅捷PDF在线转换</h4>
                        <p>【三年授权】</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<section class="introduce buy-introduce-01 full">
    <div class="wrapper">
        <h2>产品介绍</h2>
        <p>迅捷PDF转换器是一款功能强大、界面简洁、操作简单的PDF转WORD软件，你只需把PDF文件拖拽到软件界面中，然后单击"转换"即可完成转换，经过不断地优化与升级，目前迅捷PDF转换器已经成功地实现了基于超线程技术的PDF文件批量转换技术，多个PDF文件实现批量一键转换，轻松快捷。</p>
    </div>
</section>
<section class="wrapper full">
    <ul class="features-page-buy">
        <li>
            <div><em class="icon icon-buy-feature-1"></em>支持多种格式转换</div>
        </li>
        <li>
            <div><em class="icon icon-buy-feature-2"></em>转换快速质量保证</div>
        </li>
        <li>
            <div><em class="icon icon-buy-feature-3"></em>操作界面体验良好</div>
        </li>
    </ul>
</section>


<p class="themeUrl" style="display:none;">{{ route('pay') }}</p>
<p class="wechatUrl" style="display:none;">{{ route('wechat_find') }}</p>
<p class="aliUrl" style="display:none;">{{ route('ali_find') }}</p>
<p class="token" style="display:none;">{{ csrf_token() }}</p>
<p class="order_no" style="display:none;"></p>
<p class="sendUrl" style="display:none;">{{ route('sendData') }}</p>
{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


</body>
</html>