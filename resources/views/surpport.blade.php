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
                <img src="picture/icon-006.png">
                <p>使用教程</p>
                <div class="more"><i>查看更多>></i></div>
            </a>
        </li>
        @foreach ($help as $value)

            <li class="category-list-help">
                <div class="item-wrap">
                    <h1 class="title"><a href="http://www.xjpdf.com/1323.html" title="{{ $value['title'] }}" rel="bookmark">{{ $value['title'] }}</a></h1>
                    <div class="excerpt">{{ $value['description'] }}</div>
                    <p class="more">
                        <a href="http://www.xjpdf.com/1323.html" title="{{ $value['title'] }}" rel="bookmark">更多>></a>
                    </p>
                </div>
            </li>

        @endforeach


    </ul>

    <ul class="the-category-list the-category-list-problems">
        <li class="the-category-name the-category-prblems">
            <a href="{{ route('problems') }}">
                <img src="picture/icon-007.png">
                <p>常见问题</p>
                <div class="more"><i>查看更多>></i></div>
            </a>
        </li>
        <li>
            <div class="category-list-problems">

                @foreach ($problems as $value)
                    <div class="item-wrap">
                        <dl>
                            <dd class="item-title"><h1><i>{{ $loop->iteration }}</i><span> question</span></h1></dd>
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
<section class="banner-surpport-02 full">
    <ul class="wrapper">
        <li class="left cxt">
            <h2>迅捷PDF转换器</h2>
            <h1>为您创建轻应用</h1>
            <p>软件具备快速转换、批量转换,高质量识别等功能。迅捷PDF转换器提供免费版本，可终身使用。</p>
        </li>
        <li class="right pic">
            <img src="picture/banner-pic-04.png">
        </li>
        <div class="clearfix"></div>
    </ul>
</section>
<section class="wrapper support-tips surpport-reg-guide full">
    <h1 class="title"><i class="i-01"></i>注册购买<i class="i-02"></i></h1>
    <div class="title-02">如何购买迅捷PDF转换器注册码?</div>
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
            <img src="picture/end-01.png">
        </div>
        <div class="clearfix"></div>
    </ul>
    <div class="title-02">迅捷PDF转换器注册激活教程</div>
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
            <img src="picture/end-02.png">
        </div>
        <div class="clearfix"></div>
    </ul>
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