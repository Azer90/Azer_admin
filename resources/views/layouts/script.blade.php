
<script src="{{asset('js/home/31cada2e907c4bf8b68d23794f9714f8.js')}}"></script>
<div class="dn">
   {{-- 百度站长自动推送--}}
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>



  {{-- 百度统计--}}
    <script>
    /*    var _hmt = _hmt || [];(function() { var hm = document.createElement("script");
         hm.src = "//hm.baidu.com/hm.js?195f109cedab976fdd32b6e029360081"; var s = document.getElementsByTagName("script")[0];  s.parentNode.insertBefore(hm, s);})();*/
    </script>


</div>
<script type="text/javascript" src="{{asset('js/home/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/store.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/surpport.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/md5.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/jquery.qrcode.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/qrcode.js')}}"></script>
<script type="text/javascript" src="{{asset('js/home/pay.js')}}"></script>
<script>layui.form.render();layui.flow.lazyimg();</script>
<script type="text/javascript">
    window.easemobim = window.easemobim || {};
    window.easemobim.config = {
        dialogWidth: "450px",//聊天窗口宽度
        dialogHeight: "550px",//聊天窗口高度, H5不支持
        dialogPosition: { x: "10px", y: "10px" },//聊天窗口初始位置，坐标以视口右边距和下边距为基准, H5不支持
        hide: true,//是否隐藏小的悬浮按钮
        autoConnect: true,//自动连接
        visitor: {userNickname:location.host},
    };
    function kefu() {
        window.open('http://wpa.qq.com/msgrd?v=3&uin=2638897163&site=qq&menu=yes','_blank');
    }
    function xiazai() {
        window.open('http://xiazai.ipdftoword.net/CGPDF6.6.1.exe','_blank');
    }
</script>
<script>
    (function(){
        var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?e5112e66224a7d1829e8e68beaf1508f":"https://jspassport.ssl.qhimg.com/11.0.1.js?e5112e66224a7d1829e8e68beaf1508f";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
</script>
<!--[if lt IE 9]>
<script src="{{asset('js/home/html5shiv.min.js')}}"></script>
<script src="{{asset('js/home/respond.min.js')}}"></script>
<![endif]-->