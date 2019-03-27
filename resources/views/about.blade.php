@include('layouts.header')
<body>
@include('layouts.nav')

关于页面

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
</body>
</html>