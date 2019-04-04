@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>
@include('layouts.nav')


<section class="banner banner-help full"></section>
<section class="surpport-cat full">
    <div class="surpport-cat-list">
        <ul class="wrapper">
            <li class="category-help"><a href="{{ route('help') }}"><i class="i-01"></i>使用教程</a></li>
            <li class="category-problems"><a href="{{ route('problems') }}"><i class="i-02"></i>常见问题</a></li>
            <li class="category-library"><a href="{{ route('library') }}"><i class="i-03"></i>知识库</a></li>
            <script type="text/javascript">$(function(){$(".category-help").addClass("current");});</script>
            <div class="clearfix"></div>
        </ul>
    </div>
    <div class="surpport-cat-excerpt">
        <ul class="wrapper">
            @foreach ($help as $value)
            <li>
                <a href="{{ route('detail',['id'=>$value['id']]) }}" rel="bookmark" title="{{ $value['title'] }}">
                    <h1><i>{{ $loop->iteration }}</i><span>{{ $value['title'] }}</span></h1>
                    <div class="excerpt"><p>{{ $value['description'] }}</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            @endforeach
            <div class="clearfix"></div>
        </ul>
    </div>
    {{ $help->links('paginate') }}
</section>


{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


</body>
</html>