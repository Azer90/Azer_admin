<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if ($name === '/')
        <title>{{ $config['title_tag'] }}-{{ $config['title'] }}</title>
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

    <!-- TinyMCE Session vars empty -->
</head>