@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>
@include('layouts.nav')

<section class="banner banner-surpport full">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt"></li>
        <div class="clearfix"></div>
    </ul>
</section>

<article class="wrapper full">
    <ul class="the-category-list the-category-list-help">
        <li class="the-category-name the-category-help">
            <a href="{{ route('help')  }}">
                <img src="picture/icon-006.png" alt="使用教程">
                <p>使用教程</p>
                <div class="more"><i>查看更多>></i></div>
            </a>
        </li>
        @foreach ($help as $value)

            <li class="category-list-help">
                <div class="item-wrap">
                    <div class="title"><a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}" rel="bookmark">{{ $value['title'] }}</a></div>
                    <div class="excerpt">{{ $value['description'] }}</div>
                    <p class="more">
                        <a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}" rel="bookmark">更多>></a>
                    </p>
                </div>
            </li>

        @endforeach


    </ul>

    <ul class="the-category-list the-category-list-problems">
        <li class="the-category-name the-category-prblems">
            <a href="{{ route('problems') }}">
                <img src="picture/icon-007.png" alt="常见问题">
                <p>常见问题</p>
                <div class="more"><i>查看更多>></i></div>
            </a>
        </li>
        <li>
            <div class="category-list-problems">

                @foreach ($problems as $value)
                    <div class="item-wrap">
                        <dl>
                            <dd class="item-title"><div><i>{{ $loop->iteration }}</i><span> question</span></div></dd>
                            <dd class="item-excerpt">
                                <div title="{{ $value['title'] }}" rel="bookmark">
                                    <h2><a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}" rel="bookmark">{{ $value['title'] }}</a></h2>
                                    <div class="excerpt">{{ $value['description'] }}</div>
                                    <a class="more" href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}" rel="bookmark">更多>></a>
                                </div>
                            </dd>
                        </dl>
                    </div>
                @endforeach


            </div>
        </li>
    </ul>
</article>

<section class="wrapper support-tips surpport-reg-guide full">
    <div class="title"><i class="i-01"></i>注册购买<i class="i-02"></i></div>
    <div class="title-02">如何购买晨光PDF转换器注册码?</div>
    <ul class="wrapper">
        <div class="left cxt">
            <a class="a-01">
                <li><p>点击软件界面上方的“购买”按钮</p></li>
                <li><p>在购买界面中，填写好个人信息，并选择付款方式</p></li>
                <li><p>3分钟内将软件注册码发送给用户，注册成功</p></li>
                <div class="clearfix"></div>
            </a>
            <a>
                <li><h3>STEP 01</h3></li>
                <li><h3>STEP 02</h3></li>
                <li><h3>STEP 03</h3></li>
                <div class="clearfix"></div>
            </a>
        </div>
        <div class="right pic">
            <img src="picture/end-01.png" alt="箭头标识">
        </div>
        <div class="clearfix"></div>
    </ul>
    <div class="title-02">晨光PDF转换器注册激活教程</div>
    <ul class="wrapper ul-02">
        <div class="right cxt">
            <a class="a-01">
                <li><p>点击“注册”按钮，成功激活软件</p></li>
                <li><p>在弹出的软件注册窗口中，填写注册码</p></li>
                <li><p>收到注册码后点击注册按钮</p></li>
                <div class="clearfix"></div>
            </a>
            <a>
                <li><h3>STEP 03</h3></li>
                <li><h3>STEP 02</h3></li>
                <li><h3>STEP 01</h3></li>
                <div class="clearfix"></div>
            </a>
        </div>
        <div class="left pic">
            <img src="picture/end-02.png" alt="箭头标识">
        </div>
        <div class="clearfix"></div>
    </ul>
</section>



{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


