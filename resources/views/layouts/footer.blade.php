<div class="footer full m0a">
    <div class="all m0a">

            @yield('link')


        <div class="layui-row pt50 pb30 bd-b-2 m_n_pt5 m_n_pb5 m_n_bn" style="width: 550px;margin: 0 auto;">

            <div class="layui-col-xs4 col-12 pr">
                <p class="fs20 pb20  m_n_pb10r m_n_fs32r">支持</p>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    <li><a target="_blank" href="{{ route('help') }}">新手入门</a></li>
                    <li><a target="_blank" href="{{ route('problems') }}">常见问题</a></li>
                </ul>
            </div>
            <div class="layui-col-xs4 col-12 pr">
                <p class="fs20 pb20  m_n_pb10r m_n_fs32r">关于</p>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    <li><a target="_blank" href="{{ route('agreement') }}">使用协议</a></li>
                    <li><a target="_blank" href="{{ route('disclaimer') }}">免责声明</a></li>
                </ul>
            </div>
            <div class="layui-col-xs4 col-12">
                <h3 class="fs20 pb20 m_n_pb10r m_n_fs32r"><a target="_blank" href="lianxiwomen.html">联系我们</a></h3>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r" style="width: 500px;">
                    @if (isset($config['qq']))
                        <li><img width="30" height="30" src="{{asset('picture/qq.png')}}" class="mr15">{{ $config['qq'] }}</li>
                    @endif

                    @if (isset($config['email']))
                        <li><img src="{{asset('picture/footermail.png')}}" class="mr15"><a href="mailto:{{ $config['email'] }}" rel="nofollow">{{ $config['email'] }}</a></li>
                    @endif


                </ul>
            </div>

        </div>
        <p class="dn pt10 pb5" align="center">
            <img src="{{asset('picture/szwj.png')}}" alt="苏州网警">
            <script id="jsgovicon" src="{{asset('js/home/govicon.js')}}" type="text/javascript" charset="utf-8"></script>
        </p>
        @if (isset($config['qq']))
            <div class="dn pt10" style="text-align: center">【友链交换要求：百度权重≥2，友链QQ：{{ $config['qq'] }}】</div>
        @endif



                @if (isset($config['bln']))
            <p class="c6 tac pt20 pb20 m_n_pt10r m_n_pb30r m_n_fs24r m_n_lh40r">
                <span class="ml30 m_n_ml0 show-xs-n-block">经营许可证编号：<a href="{{asset('dxywxkz.jpg')}}" target="_blank">{{ $config['bln'] }}</a> </span>
            </p>
                @endif



        <p align="center" class="c8 f12 pb20">

            @if (isset($config['copyright']))
                版权所有 Copyright &copy; {{ date('Y',time()) }}  -
                <span>{{ $config['copyright'] }}</span>&nbsp
            @endif

            @if (isset($config['icp']))
                <a class="show-xs-n-block" href="http://www.beian.miit.gov.cn" target="_blank" rel="nofollow">{{ $config['icp'] }}</a>
            @endif

        </p>
    </div>
</div>