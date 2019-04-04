@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>
@include('layouts.nav')



<main class="container">
    <section class="row wrapper">
        <div class="nav-bread"><div id="crumbs">当前位置： <a href="http://www.xjpdf.com">首页</a>  >  <span class="current">标签: 迅捷pdf转换器</span></div></div>
        <ul class="category-list-items">
            <li>
                <ul class="category-list">
                    @foreach ($data as $value)
                    <li>
                        <h1 class="title">
                            <a href="{{ route('detail',['id'=>$value['id']]) }}" rel="bookmark" title="{{ $value['title'] }}">{{ $value['title'] }}</a>
                        </h1>
                        <div rel="bookmark" title="{{ $value['title'] }}" class="excerpt">
                            <p>{{ $value['description'] }}</p>
                        </div>
                        <div class="article-tag">相关标签：
                            <a href="{{ route('tag',['id'=>$value['tag_id']]) }}" rel="tag">{{ $value['name'] }}</a>

                        </div>
                        <p class="learn-more"><a href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}">查看详情</a></p>
                    </li>
                    @endforeach
                        {{ $data->links('paginate') }}
                </ul>
            </li>
            <li>
                <div class="sidebar-post-wrapper">
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
                </div>
            </li>
        </ul>
    </section>
</main>


{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')

</body>
</html>