@include('layouts.header')
<body>
@include('layouts.nav')


<div tabshowbindfilter="x2018Content">
    <div class="x2018Content1">
        <h2 class="fs36 tac pt100 pb60">为什么使用晨光PDF转换器？</h2>
        <div class="all m0a pr">
            <h3 class="fs22"><span class="numBG">1</span>文档转换成功率高</h3>
            <p class="fs16 c6 w31p pl35  lh25 pt5 pb20">文档转换不改变原本排版，转换成功率高。</p>
            <h3 class="fs22"><span class="numBG">2</span>安全转换隐私保护</h3>
            <p class="fs16 c6 w31p pl35  lh25 pt5 pb20">绿色安全软件，文档转换全程加密，用户隐私0侵犯。</p>
            <h3 class="fs22"><span class="numBG">3</span>限制更少</h3>
            <p class="fs16 c6 w31p pl35  lh25 pt5 pb20">全面支持源电子pdf格式的文件恢复。</p>
            <h3 class="fs22"><span class="numBG">4</span>简单直观</h3>
            <p class="fs16 c6 w31p pl35  lh25 pt5 pb20">软件简化了繁琐的转换过程，为用户提供傻瓜式的一键转换模式。</p>
            <h3 class="fs22"><span class="numBG">5</span>深受喜爱</h3>
            <p class="fs16 c6 w31p pl35  lh25 pt5 pb20">{{ $config['title'] }}凭借其简单易用的功能而广受用户认可。</p>
            <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe"><img width="790px" height="422px" src="{{asset('picture/1.png')}}" class="pa r0 t0" /></a>
        </div>


        <div class="all m50a">
            <h2 class="fs36 tac pb20">晨光PDF转换器功能简介</h2>
            <div class="layui-row pt30 pb30">
                <div class="layui-col-xs6 pr30">
                    <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe"> <img width="560px" height="306px" src="{{asset('picture/1.png')}}" alt="PDF转换其他文件" /></a>
                    <h3 class="xinTitle pt20 pb10 fs22">PDF转换其他文件</h3>
                    <p class="fs16 c6 ">PDF转换其他文件支持转换Word、PPT、Excel、html、TXT、图片，支持多种方法用户可随意选择自己适用的</p>
                </div>
                <div class="layui-col-xs6 pl30">
                    <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe"> <img width="560px" height="306px"  src="{{asset('picture/2.png')}}" alt="其他文件转换成PDF" /></a>
                    <h3 class="xinTitle pt20 pb10 fs22">其他文件转换成PDF</h3>
                    <p class="fs16 c6 ">其他文件转换成PDF支持：图片转PDF、Word转PDF、PPT转PDF、Excel转PDF，支持多种方法</p>
                </div>
            </div>
            <div class="layui-row pt30 pb30">
                <div class="layui-col-xs6 pr30">
                    <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe">  <img width="560px" height="306px"  src="{{asset('picture/3.png')}}" alt="PDF的其他操作" /></a>
                    <h3 class="xinTitle pt20 pb10 fs22">PDF的其他操作</h3>
                    <p class="fs16 c6 ">PDF的其他操作支持：PDF分割、PDF合并、PDF压缩、PDF解除密码、PDF图片获取。</p>
                </div>
                <div class="layui-col-xs6 pl30">
                    <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe">  <img width="560px" height="306px"  src="{{asset('picture/4.png')}}" alt="电子书格式转换" /></a>
                    <h3 class="xinTitle pt20 pb10 fs22">电子书格式转换</h3>
                    <p class="fs16 c6 ">电子书格式转换支持：转换成PDF、转换成Word、转换成TXT、转换成EPUB、转换成MOBL。</p>
                </div>
            </div>

        </div>
    </div>

</div>
{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


