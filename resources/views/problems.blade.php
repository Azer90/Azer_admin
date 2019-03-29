@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('css/home/surpport.css')}}">
<body>

@include('layouts.nav')

<section class="banner banner-surpport banner-problems full">
    <ul class="wrapper current">
        <li class="left banner-pic banner-pic"></li>
        <li class="right banner-cxt">
            <h1>
                <i>常见问题</i><img src="{{asset('picture/banner-cxt-box.png')}}">
                <span>Common Problems</span>
            </h1>
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
            <li>
                <a href="http://www.xjpdf.com/132.html" rel="bookmark" title="为什么有些文档转换后出现乱码？">
                    <h1><i>1</i><span>为什么有些文档转换后出现乱码？</span></h1>
                    <div class="excerpt"><p>答：转换后的文档出现乱码，主要原因是在制作PDF文档时，用户使用了非常用的内嵌字体，出现空白则是由于PDF文档的格式过于复杂和不够标准。</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            <li>
                <a href="http://www.xjpdf.com/130.html" rel="bookmark" title="转换的文件太大对转换效果有影响吗？">
                    <h1><i>2</i><span>转换的文件太大对转换效果有影响吗？</span></h1>
                    <div class="excerpt"><p>答：当转换的PDF文件越大，转换过程中就需要消耗越长的时间，这是正常的现象。新版本的迅捷PDF转换器，独创超线程转换技术，可大幅度提高文档转换速度。</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            <li>
                <a href="http://www.xjpdf.com/128.html" rel="bookmark" title="迅捷PDF转换器能为我做什么？">
                    <h1><i>3</i><span>迅捷PDF转换器能为我做什么？</span></h1>
                    <div class="excerpt"><p>答：迅捷PDF转换器可以实现多种办公文档格式的转换，包括将PDF转换成Word、PPT、Excel、HTML、TXT、图片；将Word、图片、Excel、PPT等转换成PDF；分割合并PDF、压缩PDF文件、获取PDF文件图片、PDF解除密码以及多种电子书格式转换等。同时还可批量转换文档，实现一键轻 [&hellip;]</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            <li>
                <a href="http://www.xjpdf.com/126.html" rel="bookmark" title="注册账号丢失了如何找回？">
                    <h1><i>4</i><span>注册账号丢失了如何找回？</span></h1>
                    <div class="excerpt"><p>答：用户若是需要找回之前购买软件的账号及密码，只需在登录页面选择忘记密码，就可以找回。或联系在线客服帮忙找回。</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            <li>
                <a href="http://www.xjpdf.com/124.html" rel="bookmark" title="注册后使用有时间限制吗？">
                    <h1><i>5</i><span>注册后使用有时间限制吗？</span></h1>
                    <div class="excerpt"><p>答：迅捷PDF转换器采取会员制，用户在注册购买时可自主选择套餐，套餐不同，可使用的时间也不同。</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
            <li>
                <a href="http://www.xjpdf.com/122.html" rel="bookmark" title="试用版软件和注册版软件有何不同？">
                    <h1><i>6</i><span>试用版软件和注册版软件有何不同？</span></h1>
                    <div class="excerpt"><p>答：迅捷PDF转化器试用版软件，只提供文档前五页的转换，而注册版软件可以使用软件的全部功能，同时支持批量转换。</p>
                    </div>
                    <h3>查看详细...</h3>
                </a>
            </li>
        </ul>
    </div>
    <div class="page_navi"><a href='http://www.xjpdf.com/problems' class='current'>1</a><a href='http://www.xjpdf.com/problems/page/2'>2</a><a href="http://www.xjpdf.com/problems/page/2" > 下一页 </a><a href='http://www.xjpdf.com/problems/page/2' class='extend' title='跳转到最后一页'> 最后一页 </a></div>
</section>
<section  class="wrapper support-tips full">
    <h1 class="title"><i class="i-01"></i>教程推荐<i class="i-02"></i></h1>
</section>
<ul class="wrapper recommend full">
    <li class="recommend-list">
        <dl>
            <dd class="left"><h1><i>1</i><span> The tutorial</span></h1><hr></dd>
            <dd class="right">
                <a href="http://www.xjpdf.com/1323.html" rel="bookmark" title="PPT幻灯片文档转换成Word文档怎么转">
                    <h1>PPT幻灯片文档转换成Word文档怎么转</h1>
                    <div class="excerpt"><p>PPT幻灯片文档和Word文档都是常用的文档格式，如果我们在使用PPT幻灯片文档时，想要将PPT转换成Word文档，那么应该怎么进行转换？PPT幻灯片文档转换成Word文档怎么转？ 解决问题： 想要将PPT幻灯片文档转换成Word文档，那么需要使用迅捷PDF转换器这款软件进行转换，这是一款功能多样的 [&hellip;]</p>
                    </div>
                    <a class="more" href="http://www.xjpdf.com/1323.html" rel="bookmark" title="PPT幻灯片文档转换成Word文档怎么转">查看详情 >></a>
                </a>
            </dd>
            <div class="clearfix"></div>
        </dl>
    </li>
    <li class="recommend-list">
        <dl>
            <dd class="left"><h1><i>2</i><span> The tutorial</span></h1><hr></dd>
            <dd class="right">
                <a href="http://www.xjpdf.com/1368.html" rel="bookmark" title="用电脑如何将电子书MOBI转TXT">
                    <h1>用电脑如何将电子书MOBI转TXT</h1>
                    <div class="excerpt"><p>网上其实有不少的电子书格式是MOBU格式的，如果想要将下载的MOBI电子书转换成TXT应该怎么进行转换？用电脑如何将电子书MOBI转TXT？ 一、原材料 迅捷PDF转换器 电子书MOBI 二、软件实际运用 1、首先运行迅捷PDF转换器，软件打开之后，需要点击软件界面左侧的“电子书格式转换”选项，之后 [&hellip;]</p>
                    </div>
                    <a class="more" href="http://www.xjpdf.com/1368.html" rel="bookmark" title="用电脑如何将电子书MOBI转TXT">查看详情 >></a>
                </a>
            </dd>
            <div class="clearfix"></div>
        </dl>
    </li>
    <li class="recommend-list">
        <dl>
            <dd class="left"><h1><i>3</i><span> The tutorial</span></h1><hr></dd>
            <dd class="right">
                <a href="http://www.xjpdf.com/1375.html" rel="bookmark" title="电脑上将PPT转换成PDF格式的两种方法">
                    <h1>电脑上将PPT转换成PDF格式的两种方法</h1>
                    <div class="excerpt"><p>PPT格式文件是在会议当中经常会使用的文件格式，如果我们想要将PPT转换成PDF格式那么应该怎么进行转换，电脑上如何将PPT转换成PDF格式？其实电脑上有两种方法可以将PPT转换成PDF格式，接下来就告诉大家电脑上将PPT转换成PDF格式的两种方法。 一、PPT转PDF在线免费 1、通过浏览器搜索， [&hellip;]</p>
                    </div>
                    <a class="more" href="http://www.xjpdf.com/1375.html" rel="bookmark" title="电脑上将PPT转换成PDF格式的两种方法">查看详情 >></a>
                </a>
            </dd>
            <div class="clearfix"></div>
        </dl>
    </li>
    <li class="recommend-list">
        <dl>
            <dd class="left"><h1><i>4</i><span> The tutorial</span></h1><hr></dd>
            <dd class="right">
                <a href="http://www.xjpdf.com/1228.html" rel="bookmark" title="电子书MOBI转换成Word格式怎么转">
                    <h1>电子书MOBI转换成Word格式怎么转</h1>
                    <div class="excerpt"><p>网上很多电子书都是MOBI格式，有时候在下载电子书后，我们需要将MOBI电子书转换成更容易打开编辑的Word，那么如何将电子书MOBI转换成Word格式？电子书MOBI转换成Word格式怎么转？ 解决方法： 想要将电子书MOBI转换成Word格式，那么就需要使用到功能丰富的文件转换器进行转换，因此选 [&hellip;]</p>
                    </div>
                    <a class="more" href="http://www.xjpdf.com/1228.html" rel="bookmark" title="电子书MOBI转换成Word格式怎么转">查看详情 >></a>
                </a>
            </dd>
            <div class="clearfix"></div>
        </dl>
    </li>
    <div class="clearfix"></div>
</ul>


{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')


</body>
</html>