@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>
@include('layouts.nav')

<section class="wrapper full">
    <div class="hero-post">
        <div id="crumbs">当前位置：
            <a href="{{ route('/') }}">首页</a>  >
            <a href ="{{ route($article['class_url']) }}">{{ $article['class_name'] }}</a>
            > {{ $article['title'] }}
        </div>
        <ul class="article-content">

            <h1><a href="http://www.xjpdf.com/1222.html">{{ $article['title'] }}</a></h1>
            <h6 class="post-update-time">
                <span class="post-time">发布于：{{ $article['time'] }}</span>
                <span class="post-cat">分类：<a href="http://www.xjpdf.com/category/library" rel="category tag">{{ $article['class_name'] }}</a></span>
                <span class="view-count">浏览：{{ $article['hits'] }}次</span>
            </h6>
            <div class="post-content">
                {!! $article['content'] !!}
            </div>
            <div class="single-pagination">
                @if (!empty($up))
                    <div class="prev">上一篇: <a href="{{ route('detail',['id'=>$up['id']]) }}" rel="prev">{{ $up['title'] }}</a></div>
                @endif
                @if (!empty($down))
                    <div class="next">下一篇: <a href="{{ route('detail',['id'=>$down['id']]) }}" rel="prev">{{ $down['title'] }}</a></div>
                @endif

            </div>
            <div class="article-tag">推荐阅读：<a href="http://www.xjpdf.com/tag/excelzhuanpdf" rel="tag">excel转pdf</a><a href="http://www.xjpdf.com/tag/pdfzhuanhuanqi" rel="tag">pdf转换器</a></div>

        </ul>
        <aside class="hero-aside">
            <div class="hero-aside-wrapper">
                <div class="hero-aside-content">
                    <h3 class="article-relate">快速访问</h3>
                    <div class="article-relate-tags">
                        <ul class="wp-cat-items">
                            <li class="cat-item cat-item-3"><a href="{{ route('help') }}" >使用教程</a>
                            </li>
                            <li class="cat-item cat-item-2"><a href="{{ route('problems') }}" >常见问题</a>
                            </li>
                            <li class="cat-item cat-item-4"><a href="{{ route('library') }}" >知识库</a>
                            </li>
                        </ul>
                        <ul class='wp-tag-cloud' role='list'>
                            @foreach ($tag as $value)
                            <li><a href="{{ route('tag',['id'=>$value['id']]) }}" class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 8px;">{{ $value['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="hero-aside-content">
                    <h3 class="article-relate">热门文章推荐</h3>
                    <div class="article-relate-list">
                        @foreach ($hot as $value)
                        <a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}"><em></em><span>{{ $value['title'] }}</span></a>

                        @endforeach
                    </div>
                </div>
                <div class="hero-aside-content">
                    <h3 class="article-relate">最新文章推荐</h3>
                    <div class="article-relate-list">
                        @foreach ($new as $value)
                        <a href="{{ route('detail',['id'=>$value['id']]) }}" rel="bookmark" title="{{ $value['title'] }}"><em></em><span>{{ $value['title'] }}</span></a>
                        @endforeach
                    </div>
                </div>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=2638897163&site=qq&menu=yes" target="_blank" class="aside-qq"><img src="{{asset('picture/qq.png')}}" alt="">联系客服...</a>

                <div class="hero-aside-content">
                    <p><span style="color: #084b24">{{ $config['title'] }}</span>功能强大、界面简洁、操作简单的PDF转换成Word或者Word转换成PDF的软件</p>
                    <a href="http://218.98.24.73/softdl.360tpcdn.com/auto/20190408/1900060976_110552f78b8161acafdda17e9e0f001c.exe" class="hero-download"><img src="{{asset('picture/icon-hero-download.png')}}" alt="">立即下载</a>
                </div>
            </div>
        </aside>
    </div>
</section>


{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')

</body>
</html>