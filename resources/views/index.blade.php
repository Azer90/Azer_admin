@include('layouts.header')
<style>
    .banner {
        position: relative;
        width: 100%;
        color: #fff;
        background: no-repeat 50% 50% #008c8c;
    }

    .banner ul.current {
         display: block;
    }
    .banner-download .banner-pic {
        line-height: 490px;
        height: 490px;
        text-align: left;
    }

    .banner-download .banner-pic img {
        margin: 0 0 0 -5%;
    }

    .banner ul.current {
        display: block;
    }

    .banner-cxt {
        width: 47%;
    }

    .banner-cxt h1 i {
        font-size: 32px;
        line-height: 1;
    }

    .banner-cxt p {
        font-size: 16px;
        line-height: 1.8;
        width: 94%;
        margin: 30px 0;
    }

    .banner-cxt p span {
        display: block;
        padding: 10px 10px 0;
    }

    .banner-cxt p span i {
        display: block;
        padding: 3px 0;
        font-style: normal;
    }

    .banner-cxt p span s {
        font-size: 18px;
        margin-right: 10px;
        text-decoration: none;
    }

    .banner-cxt p span s img {
        margin-top: -4px;
    }

    .banner-cxt .btn-wrapper a {
        margin-right: 20px;
    }

    .banner dl {
        position: absolute;
        bottom: 40px;
        left: 50%;
        display: inline;
    }

    .banner dl dd {
        display: block;
        float: left;
        width: 72px;
        height: 14px;
        margin-right: 22px;
        cursor: pointer;
        background: #fff;
    }

    .banner dl dd.current {
        background: #0380ff;
    }


    .banner-index .banner-pic {
        line-height: 510px;
        width: 53%;
        height: 510px;
    }

    .banner-index .banner-pic img {
        margin-left: -10%;
    }

    .right {
        float: right;
    }
    .left {
        float: left;
    }
    .wrapper {
        width: 1170px;
        margin: 0 auto;
    }
    .btn {
        font-size: 24px;
        line-height: 50px;
        display: block;
        width: 184px;
        height: 50px;
        text-align: center;
        color: #fff;
        background: #ff2121d4;
    }
    .btn-yellow:hover {
         color: #f5f5f5;
         text-decoration: none;
         cursor: pointer;
    }

    .dd-00 {
        position: relative;
        width: 33.3%;
        margin-left: 70px;
    }


    .dd-00 i {
        position: absolute;
        top: 0;
        right: -180%;
        display: block;
        width: 90px;
        height: 90px;
        background: url({{asset('images/icon-arrow.png')}}) no-repeat 50% 50%;
    }

    .dd-00 a {
        font-size: 50px;
        line-height: 80px;
        display: block;
        width: 80px;
        height: 80px;
        text-align: center;
        color: #fff;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        background: #aaa;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
    }
    .dd-00 p {
        font-size: 16px;
        line-height: 1.6;
        padding: 30px 0;
    }
    @media (min-width: 1024px) {
       .jiaochen{
           width: 530px;
           margin: 0 auto;
           display: block;
       }
    }


    @media (min-width: 1024px) {
        .cj_list{
            width: 900px;
            margin: 0 auto;
        }
    }

    .cj_list ul li {
        margin-bottom: 40px;
    }
    .cj_list ul li i {
        display: block;
        float: left;
        margin-right: 15px;
        margin-top: 1px;
    }
    .cj_list ul li h3 {
        font-size: 18px;
        color: #333;
        font-weight: 700;
        margin-bottom: 14px;
    }
    .icon-u4 {
        background-image: url({{asset('images/sprite.png')}});
        background-position: -56px -101px;
        width: 24px;
        height: 24px;
    }
    .jiaochen  >li {
        line-height: 40px;
        border-bottom: 1px dashed #084b24;
    }
    .jiaochen >li span {
         float: right;
    }
</style>
<body>
@include('layouts.nav')

<div class="GA2018-b full m0a bd">
    <ul>
        <li>
            <section class="banner banner-index">
                <ul class="wrapper current">
                    <li class="left banner-pic">
                        <img src="{{asset('images/banner-pic.png')}}">
                    </li>
                    <li class="right banner-cxt">
                        <h1><i>晨光PDF转换器</i></h1>
                        <p>一款功能强大、操作简单的PDF处理转换器，支持PDF电子格式和word, ppt，图片及txt等多种格式之间的转换恢复，转换恢复率高，转换质量好。同时兼顾PDF合并分割解密提取等多种功能于一体的的新一代文件格式处理工具。

                        </p>
                        <div class="btn-wrapper">
                            <a class="btn btn-yellow" href="http://xiazai.ipdftoword.net/cgpdf.exe" target="_blank">立即下载<img
                                        src="{{asset('images/icon-download.png')}}"></a>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </section>
        </li>
    </ul>
</div>

<div class="all m0a">
    <h2 class="fs36 pt90 tac hborder">功能强大的PDF处理软件</h2>
    <p class="fs18 c9 tac pt18 pb40">极速处理PDF文件和源文件互转，批量实现PDF合并分割等功能。无需专业的PDF转换知识，任何人都能快速上手</p>
    <ul class="layui-row tac indexGongnen">
        <li class="layui-col-xs3 pt10 pb30 bd-r-1" >
            <img alt="一键转换" src="{{asset('picture/ico_gn1.png')}}" />
            <h3 class="fs18 pt20"><a>PDF合并</a></h3>
        </li>
        <li class="layui-col-xs3 pt10 pb30 bd-r-1" >
            <img alt="PDF转Word" src="{{asset('picture/ico_gn2.png')}}" />
            <h3 class="fs18 pt20"><a>PDF互转</a></h3>
        </li>
        <li class="layui-col-xs3 pt10 pb30 bd-r-1" >
            <img alt="转换快速" src="{{asset('picture/ico_gn3.png')}}" />
            <h3 class="fs18 pt20"><a>PDF分割</a></h3>
        </li>
        <li class="layui-col-xs3 pt10 pb30 bd-r-1" >
            <img alt="格式转换" src="{{asset('picture/ico_gn4.png')}}" />
            <h3 class="fs18 pt20"><a>PDF压缩</a></h3>
        </li>
    </ul>
</div>
<div class="full m0a">
    <h2 class="fs36 pt90 tac hborder mb30">快速开始</h2>
    <div class="start-img tac">
        <img src="{{asset('picture/kuaisu.png')}}" alt="快速开始">
    </div>

</div>
<div class="full m0a tutorial-cxt">
    <h2 class="fs36 pt90 tac hborder">使用教程</h2>
    <div class="fs18 c9  pt18 pb20">
        <ul class="jiaochen">
            @foreach ($help as $value)
                @if ($loop->last)
                    <li><a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}">{{ $loop->iteration }}、{{ $value['title'] }}<span>{{ $value['created_at'] }}</span></a> </li>
                @else
                    <li><a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}">{{ $loop->iteration }}、{{ $value['title'] }}<span>{{ $value['created_at'] }}</span></a></li>
                @endif

            @endforeach
        </ul>

    </div>

    <ul style="width:800px" class="dn indexGongxiangTab  c-1 tac fs24 m40a pb40 " tabshow="true" tabshowbind="ziyuan">
        <li>
            <dd class="dd-00 current">
                <i></i>
                <a>1</a>
                <p>选择功能</p>
            </dd>
        </li>
        <li>
            <dd class="dd-00">
                <i></i>
                <a>2</a>
                <p>添加文件</p>
            </dd>
        </li>
        <li>
            <dd class="dd-00">
                <a>3</a>
                <p>开始转换</p>
            </dd>
        </li>
    </ul>

</div>
<div class="full m0a" style="display: none">
    <h2 class="fs36 pt90 tac hborder mb30">常见问题</h2>
    <div class="cj_list">
        <ul>
            <li>
                <i class="icon-u4"></i>
                <h3>PDF文档资料会遭到泄露吗？</h3>
                <p>{{ $config['title'] }}是一种本地PDF转换器，没有将PDF文档发送至网络，因此不会泄露PDF文件内容，请您放心使用。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>PDF转Word文档如何收费？</h3>
                <p>5页以内的PDF转换免费，大于5页的PDF可以购买年费会员。年费会员可无限次PDF转换，适合有长期使用需求的用户。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>如何使用{{ $config['title'] }}?</h3>
                <p>您可以到{{ $config['title'] }}官网下载，下载后安装即可免费使用。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>PDF转Word偶尔会有乱码？</h3>
                <p>复杂的表达式、不常见的语言、特殊字符等都是导致PDF转换器无法正确识别的原因，这种情况下转换多少次的结果都是一样的。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>如何选择PDF转换成Word转换器？</h3>
                <p>如果你对转换的质量要求比较高，例如不要出现错别字、尽可能不出现乱码等，那么建议选择更为专业的PDF转换工具；如果您对文件保密性要求比较高，那么建议选择大品牌有保障的PDF转换工具。例如{{ $config['title'] }}</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>图片格式的PDF能转换成Word吗？</h3>
                <p>不能，图片格式的PDF转换成Word，依旧是图片格式，无法进行编辑。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>如果要转换的文件太大有影响吗？</h3>
                <p>转换效果没有影响，当然转换时间可能会长一些。目前{{ $config['title'] }}采用了全新研发的转换技术，提供飞一般的转换效率。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>如果转换出来的Word无法打开怎么办？</h3>
                <p>首先确保转换的时候PDF文件不要处于打开的状态。如果不存在上述情况，那么可以尝试重新转换即可解决。</p>
            </li>
            <li>
                <i class="icon-u4"></i>
                <h3>{{ $config['title'] }}可以批量PDF转换成Word吗？</h3>
                <p>可以的，{{ $config['title'] }}支持批量PDF转换。</p>
            </li>
        </ul>

    </div>

</div>
{{--底部--}}
@extends('layouts.footer')
@section('link')
    <p class="friendLinks bd-b-2 pt20 pb20 hide-n-xs">
        友情链接：
    @foreach ($link as $value)
            <a href="{{ $value['url'] }}" target="_blank">{{ $value['name'] }}</a>
    @endforeach

    </p>
@endsection


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
@include('layouts.script')

</body>
</html>