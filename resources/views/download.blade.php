@include('layouts.header')
<style>
    @media (min-width: 1024px) {
        .hero-index-step {
            width: 1000px;
            margin: 0 auto;
        }
    }
    @media (max-width: 1024px) {
        .hero-index-step {
            text-align: center;
        }
    }

    .hero-index-step > div {
        position: relative;
        display: inline-block;
        width: 19.5%;
        vertical-align: top;
    }
    .hero-index-step > div:after {
        font-size: 30px;
        position: absolute;
        top: 25%;
        right: 0;
        display: block;
        width: 30px;
        height: 30px;
        content: '>';
    }
    .hero-index-step > div:last-child:after {
        display: none;
    }
</style>
<body>
@include('layouts.nav')


<div class="full m0a xiazaiBanner pr">
    <div class="all m0a pr" style="padding-top: 40px">
        <h1 class="fs35">晨光PDF转换器(官方客户端)</h1>
        <p class="fs18 pt12 pb6">支持系统：Winxp/Win7/Win8/Win10(32位/64位下载)</p>
        <p class="fs18">更新日期：2019.04.08</p>
        <p class="fs18">文件大小：39.5MB</p>
        <p class="fs18">版本：V3.3</p>
        <p style="padding-bottom: 20px;">更新内容：<br/>
            1. 加入“极速内核”，更快效率完成识别.<br/>
            2. 新版本提供不安装OfficeOneNote也能正常使用软件.<br/>
            3. 界面进行简洁优化<br/>
            4. 系统兼容主流windowsXp、7、8、10。<br/>
           </p>
        <p><a class="a-2 w170 h50 lh50 fs20 tac" href="http://xiazai.ipdftoword.net/CGPDF6.6.1.exe">立即下载</a> </p>

    </div>

</div>
<div class="all m0a">
    <h2 class="fs32 tac  pt90 hborder">操作引导</h2>
    <ul class="oh tac yingdaoList pt30 pb90">
        <li class="fl w18p"><img src="picture/xiazai1_1.png" />
            <p class="fs16 pt20">下载软件</p>
        </li>
        <li class="fl">
            <hr />
        </li>
        <li class="fl w18p"><img src="picture/xiazai1_2.png" />
            <p class="fs16 pt20">点击安装包进行安装</p>
        </li>
        <li class="fl">
            <hr />
        </li>
        <li class="fl w18p"><img src="picture/xiazai1_3.png" />
            <p class="fs16 pt20">购买获取注册码</p>
        </li>
        <li class="fl">
            <hr />
        </li>
        <li class="fl w18p"><img src="picture/xiazai1_4.png" />
            <p class="fs16 pt20">输入注册码激活软件</p>
        </li>
    </ul>
    <div>
        <h2 class="fs30 tac hborder">必备转换技巧</h2>
        <p class="fs18 c9 tac pt18 pb20">PDF转换成word文件方法教程</p>
        <div>
            <div class="text-center hero-index-step">
                <div>
                    <img src="{{asset('picture/item-001.png')}}" alt="">
                    <p>下载软件“双击打开”</p>
                </div>
                <div>
                    <img src="{{asset('picture/item-002.png')}}" alt="">
                    <p>点击左侧“文件转Word”</p>
                </div>
                <div>
                    <img src="{{asset('picture/item-003.png')}}" alt="">
                    <p>点击“添加文件”，选择转换的pdf文档。</p>
                </div>
                <div>
                    <img src="{{asset('picture/item-004.png')}}" alt="">
                    <p>点击“浏览”按钮，为文档选择一个存储路径。</p>
                </div>
                <div>
                    <img src="{{asset('picture/item-005.png')}}" alt="">
                    <p>点击“开始转换”， 进入格式转换状态。</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="tac fs30 pt100 hborder">相关知识</h2>
    <ul class="layui-row mt50 mb50">
        @foreach ($help as $value)
            <li class="layui-col-xs6 oh pr15">
                <div>
                    <h2 class="fs22 fwn overSL"><a style="color:#666" href="{{ route('detail',['id'=>$value['id']]) }}" target="_blank">{{ $value['title'] }}</a></h2>
                    <p class="c6 pt10 pb2">{{ $value['description'] }}</p>
                    <a href="{{ route('detail',['id'=>$value['id']]) }}" target="_blank">查看详情</a></div>
            </li>
        @endforeach

    </ul>

</div>

{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')

