<div class="footer full m0a">
    <div class="all m0a">

            @yield('link')


        <div class="layui-row pt50 pb30 bd-b-2 m_n_pt5 m_n_pb5 m_n_bn">
            <div class="layui-col-xs2 col-12 pr">
                <img class="jia layui-hide" src="picture/jia.png">
                <p class="fs20 pb20 m_n_pb10r m_n_fs32r">会声会影</p>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    <li><a target="_blank" href="jiaocheng.html">功能特性</a></li>
                    <li><a rel="nofollow" target="_blank" href="http://center.cjmakeding.com/orderinfo.php">正版下载地址</a></li>
                    <li><a target="_blank" href="goumai.html">软件激活码</a></li>
                    <li><a target="_blank" href="videostudio_sq.pdf">正版授权</a></li>
                </ul>
            </div>
            <div class="layui-col-xs2 col-12 pr">
                <img class="jia layui-hide" src="picture/jia.png">
                <p class="fs20 pb20  m_n_pb10r m_n_fs32r">支持</p>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    <li><a target="_blank" href="rumen/">新手入门</a></li>
                    <li><a target="_blank" href="faq/">常见问题</a></li>
                    <li><a target="_blank" href="video/">视频案例</a></li>
                    <li><a rel="nofollow" target="_blank" href="zhuanxiang.html">模板素材</a></li>
                </ul>
            </div>
            <div class="layui-col-xs2 col-12 pr">
                <img class="jia layui-hide" src="picture/jia.png">
                <p class="fs20 pb20  m_n_pb10r m_n_fs32r">关于</p>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    <li><a target="_blank" href="aboutus.html">关于我们</a></li>
                    <li><a target="_blank" href="mianze.html">隐私条款</a></li>
                    <li><a target="_blank" href="sitemap.html">网站地图</a></li>
                    <li><a target="_blank" href="shouhou-tiaokuan.html">售后服务</a></li>

                </ul>
            </div>
            <div class="layui-col-xs2 col-12">
                <h3 class="fs20 pb20 m_n_pb10r m_n_fs32r"><a target="_blank" href="lianxiwomen.html">联系我们</a></h3>
                <ul class="lh32 hide-n-xs m_n_lh40r m_n_fs24r">
                    @if (isset($config['phone']))
                        <li><img src="picture/footertel.png" class="mr15">{{ $config['phone'] }}</li>
                    @endif

                    @if (isset($config['email']))
                        <li><img src="picture/footermail.png" class="mr15"><a href="mailto:{{ $config['email'] }}" rel="nofollow">{{ $config['email'] }}</a></li>
                    @endif


                </ul>
            </div>
            <div class="layui-col-xs4 col-12 pl100">
                <img src="picture/logo.png">
                <div class="oh pt20">
                    <p class="fl fs16 c6 pt30">扫一扫<br>关注微课堂</p>
                    <img class="fl ml10" src="picture/erweima.jpg" alt="会声会影官方微信">
                </div>
            </div>
        </div>
        <p class="pt10 pb5" align="center">
            <img src="picture/szwj.png" alt="苏州网警">
            <script id="jsgovicon" src="js/home/govicon.js" type="text/javascript" charset="utf-8"></script>
        </p>
        @if (isset($config['qq']))
            <center class="pt10">【友链交换要求：百度权重≥6，友链QQ：{{ $config['qq'] }}】</center>
        @endif



                @if (isset($config['bln']))
            <p class="c6 tac pt20 pb20 m_n_pt10r m_n_pb30r m_n_fs24r m_n_lh40r">
                <span class="ml30 m_n_ml0 show-xs-n-block">经营许可证编号：<a href="dxywxkz.jpg" target="_blank">{{ $config['bln'] }}</a> </span>
            </p>
                @endif



        <p align="center" class="c8 f12 pb20">

            @if (isset($config['copyright']))
                版权所有 Copyright &copy; {{ date('Y',time()) }}  -
                <span>{{ $config['copyright'] }}</span>&nbsp
            @endif

            @if (isset($config['icp']))
                <a class="show-xs-n-block" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank" rel="nofollow">{{ $config['icp'] }}</a>
            @endif

        </p>
    </div>
</div>