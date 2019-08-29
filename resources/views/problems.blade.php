@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>

@include('layouts.nav')

<section class="banner  banner-problems full">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt">
            <div class="Problems">
                <i>常见问题</i><img src="{{asset('picture/banner-cxt-box.png')}}">
                <span>Common Problems</span>
            </div>
            <p>1、成功支付后，多长时间能够收到注册码？应如何激活软件？<br>2、购买一次软件能够使用多长时间？可在几台电脑上使用？<br>3、免费试用版软件和注册版软件有何不同之处？</p>
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<div class="surpport-cat-list full">
    <ul class="wrapper">
        <li class="category-help"><a href="{{ route('help') }}"><i class="i-01"></i>使用教程</a></li>
        <li class="category-problems"><a href="{{ route('problems') }}"><i class="i-02"></i>常见问题</a></li>
        <li class="category-library"><a href="{{ route('library') }}"><i class="i-03"></i>知识库</a></li>
        <script type="text/javascript">$(function(){$(".category-problems").addClass("current");});</script>
        <div class="clearfix"></div>
    </ul>
</div>
<section class="surpport-cat full">
    <div class="surpport-cat-excerpt">
        <ul class="wrapper">
            @foreach ($problems as $value)
            <li>
                <a href="{{ route('detail',['id'=>$value['id']]) }}" rel="bookmark" title="{{ $value['title'] }}">
                    <div class="help_title"><i>{{ $loop->iteration }}</i><span>{{ $value['title'] }}</span></div>
                    <div class="excerpt"><p>{{ $value['description'] }}</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    {{ $problems->links('paginate') }}
</section>



{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


