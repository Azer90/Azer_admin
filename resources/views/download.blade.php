@include('layouts.header')

<body>
@include('layouts.nav')


<div class="full m0a xiazaiBanner pr">
    <div class="all m0a pr" style="padding-top: 40px">
        <h1 class="fs35">{{ $config['title'] }}(官方客户端)</h1>
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
        <p><a class="a-2 w170 h50 lh50 fs20 tac" href="http://xiazai.huishenghuiying.com.cn/full/huishenghuiying2018new_64bit.zip">立即下载</a> </p>

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
    <h2 class="tac fs30 pt100 hborder">相关知识</h2>
    <ul class="layui-row mt50 mb50">
        @foreach ($help as $value)
            <li class="layui-col-xs6 oh pr15">
                <div class="fr">
                    <h2 class="fs22 fwn overSL"><a style="color:#666" href="ruhepanduandnsjiwei-2.html" target="_blank">{{ $value['title'] }}</a></h2>
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

</body>
</html>