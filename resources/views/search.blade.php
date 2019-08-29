@include('layouts.header')
<body>
@include('layouts.nav')



<div class="position pt20 pb20 all m0a m_pt20r m_pb20r m_fs20r"><a href="/">{{ $config['title'] }}</a> > 搜索 > {{ $tag }}</div>

<div class="all m0a layui-row pb50 m_pb50r">
    <div class="layui-col-sm8 pr20 m_pr0">
        <div class="searchResult">
            <span class="fs16 bg-3 pr pl20 hborder-1 h40 lh40 m_fs36r m_pr20r m_h80r m_lh80r">"{{ $tag }}"搜索结果：</span>
            <ul class="">
                @isset($article_index)
                    @foreach ($article_index as $value)
                        <li class='mt30 oh pb30 bd-b-1 m_mt40r m_pb40r'>
                            <div class='w70p fl m_w100p'>
                                <a class='fs20 m_fs30r' target='_blank' href='{{ route('detail',['id'=>$value['id']]) }}'>{!! $highlighter->highlight($value['title'], $tag,'span') !!}</a>
                                <p class='pt5 lh25 o80 m_fs26r m_pt10r m_lh36r'>{!! $highlighter->highlight($value['description'], $tag,'span') !!}</p>
                            </div>
                        </li>
                    @endforeach
                @endisset

            </ul>
        </div>


    </div>
    <div class="layui-col-sm4 pl40 hide-xs">
        <div class="bg-3 pt20 pb20 pl20 pr20">

            <h4 class="fs18 hborder-1 pr  pl15 h36 lh36 mb10">热门推荐</h4>
            <div class="bg-5 pt20 pl20 pb10 pr20 sousuoTuijian">
                @foreach ($hot as $value)
                    <a target="_blank" href="{{ route('detail',['id'=>$value['id']]) }}" title="{{ $value['title'] }}">{{ $value['title'] }}</a>
                @endforeach


            </div>
            <h4 class="fs18 hborder-1 pr mt50 pl15 h36 lh36 mb10">快速入口</h4>
            <div class="bg-5 pl13 pt25 pb25 pr20">
                <ul class="sousuoTuijianJianList layui-row c-1">
                    <li><a href="{{ route('help') }}" target="_blank">使用教程</a></li>
                    <li><a href="{{ route('problems') }}" target="_blank">常见问题</a></li>
                    <li><a href="{{ route('library') }}" target="_blank">知识库</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>


{{--底部--}}
@extends('layouts.footer')
{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@include('layouts.script')



