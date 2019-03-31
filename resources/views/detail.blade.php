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
                <div class="prev">上一篇: <a href="http://www.xjpdf.com/1235.html" rel="prev">如何获取PDF文档中的图片内容</a></div>
                <div class="next"></div>
            </div>
            <div class="article-tag">推荐阅读：<a href="http://www.xjpdf.com/tag/excelzhuanpdf" rel="tag">excel转pdf</a><a href="http://www.xjpdf.com/tag/pdfzhuanhuanqi" rel="tag">pdf转换器</a></div>
            <div class="arcitle-list-sticky">
                <div class="list-items">
                    <div>
                        <h3 class="title">excel转pdf 相关：</h3>
                        <li>
                            <a href="http://www.xjpdf.com/386.html" rel="bookmark" title="两种方法教你怎么把Excel转换成PDF"> 两种方法教你怎么把Excel转换成PDF</a>
                        </li>
                        <li>
                            <a href="http://www.xjpdf.com/1005.html" rel="bookmark" title="Excel表格转换成PDF文档的图文教程"> Excel表格转换成PDF文档的图文教程</a>
                        </li>
                        <li>
                            <a href="http://www.xjpdf.com/1525.html" rel="bookmark" title="将表格文件Excel转换成PDF格式的方法"> 将表格文件Excel转换成PDF格式的方法</a>
                        </li>
                    </div>
                </div>
                <div class="list-items">
                    <div>
                        <h3 class="title">好文推荐：</h3>
                        <ul>
                            <li><a href="http://www.xjpdf.com/128.html" title="迅捷PDF转换器能为我做什么？" rel="bookmark">迅捷PDF转换器能为我做什么？</a></li>
                            <li><a href="http://www.xjpdf.com/126.html" title="注册账号丢失了如何找回？" rel="bookmark">注册账号丢失了如何找回？</a></li>
                        </ul>
                    </div>
                </div>
            </div>        </ul>
        <aside class="hero-aside">
            <div class="hero-aside-wrapper">
                <div class="hero-aside-content">
                    <h3 class="article-relate">快速访问</h3>
                    <div class="article-relate-tags">
                        <ul class="wp-cat-items">
                            <li class="cat-item cat-item-3"><a href="http://www.xjpdf.com/category/help" >使用教程</a>
                            </li>
                            <li class="cat-item cat-item-2"><a href="http://www.xjpdf.com/category/problems" >常见问题</a>
                            </li>
                            <li class="cat-item cat-item-4"><a href="http://www.xjpdf.com/category/library" >知识库</a>
                            </li>
                        </ul>
                        <ul class='wp-tag-cloud' role='list'>
                            <li><a href="http://www.xjpdf.com/tag/pdffenge" class="tag-cloud-link tag-link-34 tag-link-position-1" style="font-size: 8px;">pdf分割</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pdfyasuo" class="tag-cloud-link tag-link-23 tag-link-position-2" style="font-size: 8px;">pdf压缩</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pdftupianhuoqu" class="tag-cloud-link tag-link-10 tag-link-position-3" style="font-size: 8px;">pdf图片获取</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pdfzhuanppt" class="tag-cloud-link tag-link-18 tag-link-position-4" style="font-size: 8px;">pdf转ppt</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pdfzhuanword" class="tag-cloud-link tag-link-13 tag-link-position-5" style="font-size: 8px;">pdf转word</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pdfzhuanhuanqi" class="tag-cloud-link tag-link-37 tag-link-position-6" style="font-size: 8px;">pdf转换器</a></li>
                            <li><a href="http://www.xjpdf.com/tag/pptzhuanword" class="tag-cloud-link tag-link-17 tag-link-position-7" style="font-size: 8px;">ppt转word</a></li>
                            <li><a href="http://www.xjpdf.com/tag/wordzhuanpdf" class="tag-cloud-link tag-link-15 tag-link-position-8" style="font-size: 8px;">word转pdf</a></li>
                            <li><a href="http://www.xjpdf.com/tag/tupianzhuanpdf" class="tag-cloud-link tag-link-27 tag-link-position-9" style="font-size: 8px;">图片转PDF</a></li>
                            <li><a href="http://www.xjpdf.com/tag/xunjiepdfzhuanhuanqi" class="tag-cloud-link tag-link-8 tag-link-position-10" style="font-size: 8px;">迅捷pdf转换器</a></li>
                        </ul>
                    </div>
                </div>                <div class="hero-aside-content">
                    <h3 class="article-relate">热门文章推荐</h3>
                    <div class="article-relate-list">
                        <a href="http://www.xjpdf.com/28.html" title="文件转换成Excel格式文档教程"><em></em><span>文件转换成Excel格式文档教程</span></a>
                        <a href="http://www.xjpdf.com/26.html" title="其他格式文件转换成PDF图文教程"><em></em><span>其他格式文件转换成PDF图文教程</span></a>
                        <a href="http://www.xjpdf.com/48.html" title="迅捷PDF转换器特点、功能、优势"><em></em><span>迅捷PDF转换器特点、功能、优势</span></a>
                        <a href="http://www.xjpdf.com/50.html" title="如何注册激活迅捷PDF转换器"><em></em><span>如何注册激活迅捷PDF转换器</span></a>
                        <a href="http://www.xjpdf.com/88.html" title="电子书转换成word格式文件方法教程"><em></em><span>电子书转换成word格式文件方法教程</span></a>
                    </div>
                </div>                <div class="hero-aside-content">
                    <h3 class="article-relate">最新文章推荐</h3>
                    <div class="article-relate-list">
                        <a href="http://www.xjpdf.com/48.html" rel="bookmark" title="迅捷PDF转换器特点、功能、优势"><em></em><span>迅捷PDF转换器特点、功能、优势</span></a>
                        <a href="http://www.xjpdf.com/227.html" rel="bookmark" title="迅捷pdf转换器如何将jpg转换成pdf"><em></em><span>迅捷pdf转换器如何将jpg转换成pdf</span></a>
                        <a href="http://www.xjpdf.com/452.html" rel="bookmark" title="epub电子书格式怎么转换成pdf"><em></em><span>epub电子书格式怎么转换成pdf</span></a>
                        <a href="http://www.xjpdf.com/462.html" rel="bookmark" title="epub怎么转换成mobi"><em></em><span>epub怎么转换成mobi</span></a>
                        <a href="http://www.xjpdf.com/386.html" rel="bookmark" title="两种方法教你怎么把Excel转换成PDF"><em></em><span>两种方法教你怎么把Excel转换成PDF</span></a>
                    </div>
                </div>
                <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODAyMDY2NV80NDQwMzhfNDAwNjY4NTU3Ml8yXw" target="_blank" class="aside-qq"><img src="{{asset('picture/qq.png')}}" alt="">联系客服...</a>
                <div class="hero-aside-content">
                    <a><img src="{{asset('picture/logo.png')}}" alt="功能强大、界面简洁、操作简单的PDF转换成Word或者Word转换成PDF的软件"></a>
                    <p>功能强大、界面简洁、操作简单的PDF转换成Word或者Word转换成PDF的软件</p>
                    <a href="http://download.xunjiepdf.com/download/pdf_setup_6_0_s.exe" class="hero-download"><img src="{{asset('picture/icon-hero-download.png')}}" alt="">立即下载</a>
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