<div class="full m0a h100 zi999 bd-b-1">

    <div class="top all m0a pr m_oh m_o95">
        <img class="m_menu layui-hide m_w30r" src="picture/m_menu.png">
        <div class="logo">
            <h1 class="fs16 c4 m_fs16r">
                <img class="mr10 " src="picture/logo.png" alt="会声会影中文版官网" />
            </h1>
        </div>

        <div class="topSearch layui-hide hide-n-xs">
            <form method="post" action="javascript:searchUrl()">
                <i class="layui-icon layui-icon-close pa l6 t20 fs20 hand" onclick="$('.topSearch').addClass('layui-hide');$('.topSearchImg, .topMenuNaviList').removeClass('layui-hide');"></i>
                <input id="searchValueId" class="fs16 c9" type="text" name="searchInputValue" value="文章搜索" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" />
                <input class="searchButtom" type="image" src="picture/searchbtn.png" />
            </form>
        </div>

        <div class="topSearchImg hide-n-xs" onclick="$(this).addClass('layui-hide');$('.topMenuNaviList').addClass('layui-hide');$('.topSearch').removeClass('layui-hide');">
            <img class="hand" src="picture/searchbtn.png">
        </div>



        <ul class="topMenuNaviList mr50">
            @foreach ($nav as $value)
                @if ($value['url']==$name)
                    <li><a class="indexCurrent" href="{{ $value['url'] }}">{{ $value['name'] }}</a></li>
                @else
                    <li><a  href="{{ $value['url'] }}">{{ $value['name'] }}</a></li>
                @endif

            @endforeach
           {{-- <li><a class="indexCurrent" href="/">首页</a></li>
            <li class="pr" hoverShow="true" noHoverHide="true">
                <a href="{{ route('software') }}">产品<i class="layui-icon fs14 ml5">&#xe61a;</i></a>
                <div class="subNav layui-hide">
                    <a class="bd-b-1" href="{{ route('software') }}">会声会影2018</a>
                </div>
            </li>
            <li><a href="xiazai.html">下载</a></li>
            <li><a href="goumai.html">购买</a></li>
            <li><a href="jiaocheng.html">教程</a></li>--}}

        </ul>

    </div>

</div>