<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if ($name === '/')
        <title>{{ $config['title'] }}</title>
    @else
        <title>{{ $config['title_tag'] }}|{{ $config['title'] }}</title>
    @endif

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    {{--google-analytics 看是否需要--}}

    <meta name="description" content="{{ !empty($seo['description']) ? $seo['description'] : 'pdf'  }}" />
    <meta name="keywords" content="{{ !empty($seo['keywords']) ? $seo['keywords'] : 'pdf' }}" />
     <link rel="icon" href="{{asset('images/icon-logo.ico')}}" />
     @include('layouts.css')

    <script type="text/javascript" src="{{asset('js/home/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/layui.all.js')}}"></script>
    <script>
       let host= "{{ get_host()}}";
    </script>
        <script type="application/ld+json">
    {
        "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
        "@id": "http://www.ipdftoword.net/",
        "appid": "1632142710156602",
        "title": "晨光PDF转换器",
        "images": [
        "http://www.ipdftoword.net/picture/1.png",

        ], //请在此处添加希望在搜索结果中展示图片的url，可以添加1个或3个url
        "pubDate": "2019-05-13T08:00:01" // 需按照yyyy-mm-ddThh:mm:ss格式编写时间，字母T不能省去
    }
</script>
    <!-- TinyMCE Session vars empty -->
</head>