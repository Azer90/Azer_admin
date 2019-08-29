@include('layouts.header')
<body>
@include('layouts.nav')


<div  style="margin:0 auto;width: 1000px">
    <div class="tac fs20 pb20 m_fs36r m_pb20r"><b>公司简介</b></div>
    <p class="ti2 pb12 m_pb20r">苏州图可互联网信息有限公司核心人员进驻pdf技术处理领域多年，应中国软件市场正规化需求，正式成立该信息有限公司。新创立此公司旨在推行中国市场常规场景PC端应用级软件。</p>
    <p class="ti2 pb12 m_pb20r">软件市场存在于大量的参差不齐的产品，本公司旨在于发行绿色纯净的正版软件。</p>
    <p class="ti2 pb12 m_pb20r">坚定丰富客户体验感的承诺，我们的产品始终贯穿用户思维，一路走来，始终如一。同时，我们也希望您能与我们携手，在这条路上共创更多的机会、精彩与想象。</p>
    <p class="ti2 pb12 m_pb20r">We need your thought！</p>
    <p class="ti2 pb12 fwb m_pb20r">可以通过以下方式联系我们：</p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">邮箱：</span>admin@ipdftoword.com
    </p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">客服：</span>{{ $config['email'] }}
    </p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">QQ：</span>{{ $config['qq'] }}
    </p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">邮政编码：</span>025000
    </p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">地址：</span>苏州市中博科技园
    </p>
    <p class="ti2 pb12 m_pb20r">
        <span class="fwb">技术服务时间：</span>周一至周五【9:00-18:00】
    </p>
</div>

{{--底部--}}
@extends('layouts.footer')

{{--优惠券--}}
<div class="fullFix choujiang layui-hide">
    <div class="choujiangBox pr">
        <span class="choujiangClose" onclick="$(this).parents('.choujiang').addClass('layui-hide')"></span>
        <span class="choujiangBtn"></span>
    </div>
    <div class="choujiangRes pr layui-hide">
        <span class="choujiangClose" onclick="$(this).parents('.choujiang').addClass('layui-hide')"></span>
        <p class="choujiangMoney tac fs40 fwb"></p>
        <p class="choujiangCode tac fs24 fwb"></p>
        <p class="choujiangEnd tac fs18 c-7 fwb">截止日期：2018年11月9日</p>
        <a class="choujiangGoPay" href="purchase.html?oid=1521018265" target="_blank"></a>
    </div>
</div>
{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@extends('layouts.script')
