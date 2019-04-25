<div class="full m0a h100 zi999 bd-b-1">

    <div class="top all m0a pr m_oh m_o95">
        <img class="m_menu layui-hide m_w30r" src="{{asset('picture/m_menu.png')}}">
        <div class="logo">
            <h1 class="fs16 c4 m_fs16r">
                <img style="margin-bottom: 5px" src="{{asset('picture/logo.png')}}" alt=""><span style="padding-left:10px;font-size: 20px;color: #0a4b3e;height: 40px;line-height: 40px;display: inline-block">{{ $config['title'] }}</span>
            </h1>
        </div>

        <div class="topSearch layui-hide hide-n-xs">
            <form method="post" action="javascript:searchUrl()">
                <i class="layui-icon layui-icon-close pa l6 t20 fs20 hand" onclick="$('.topSearch').addClass('layui-hide');$('.topSearchImg, .topMenuNaviList').removeClass('layui-hide');"></i>
                <input id="searchValueId" class="fs16 c9" type="text" name="searchInputValue" value="文章搜索" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" />
                <input class="searchButtom" type="image" src="{{asset('picture/searchbtn.png')}}" />
            </form>
        </div>

        <div class="topSearchImg hide-n-xs" onclick="$(this).addClass('layui-hide');$('.topMenuNaviList').addClass('layui-hide');$('.topSearch').removeClass('layui-hide');">
            <img class="hand" src="{{asset('picture/searchbtn.png')}}">
        </div>



        <ul class="topMenuNaviList mr50">
            @foreach ($nav as $value)
                @if ($value['url']==$name)
                    <li><a class="indexCurrent" href="{{ route($value['url'])  }}">{{ $value['name'] }}</a></li>
                @else
                    <li><a  href="{{ route($value['url']) }}">{{ $value['name'] }}</a></li>
                @endif

            @endforeach
           {{-- <li><a class="indexCurrent" href="/">首页</a></li>
            <li class="pr" hoverShow="true" noHoverHide="true">
                <a href="{{ route('software') }}">产品<i class="layui-icon fs14 ml5">&#xe61a;</i></a>
                <div class="subNav layui-hide">
                    <a class="bd-b-1" href="{{ route('software') }}"></a>
                </div>
            </li>
            <li><a href="xiazai.html">下载</a></li>
            <li><a href="goumai.html">购买</a></li>
            <li><a href="jiaocheng.html">教程</a></li>--}}

        </ul>

    </div>

</div>