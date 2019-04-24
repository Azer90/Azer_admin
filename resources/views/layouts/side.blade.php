<div class="toolbar hide-n-xs">
    <div class="toolbarbox">
        <div class="mobel" imgname="zx"  onclick='kefu()'>
            <img id="msg" class="animated tada10" src="{{asset('images/zx_h.png')}}">
            <div class="mobelBox">
                <div class="shan"> </div>
                <p>购买咨询</p>
                <div class="triangle"> </div>
            </div>
        </div>

        <div class="mobel" imgname="sh" onclick='kefu()'>
            <div class="tool-line"></div>
            <img class="imghover" src="{{asset('images/sh.png')}}">
            <div class="hidemobelBox" style="width:100px;">
                <p>售后服务</p>
                <div class="triangle"> </div>
            </div>
        </div>

        <div class="dn mobel" imgname="tel">
            <div class="tool-line"></div>
            <img class="imghover" src="{{asset('images/tel.png')}}">
            <div class="hidemobelBox">
                <p>客服热线 400-8765-888</p>
                <div class="triangle"> </div>
            </div>
        </div>

        <div class="mobel" imgname="mail">
            <div class="tool-line"></div>
            <a href="mailto:kefu@makeding.com"><img class="imghover" src="{{asset('images/mail.png')}}"></a>
            <div class="hidemobelBox">
                <p><a rel="nofollow" href="mailto:kefu@makeding.com">{{ $config['email'] }}</a></p>
                <div class="triangle"> </div>

            </div>
        </div>


        <div class="Rtop dn" imgname="top">
            <div class="tool-line"></div>
            <a href="#"><img class="imghover" src="{{asset('images/top.png')}}"></a>
        </div>
    </div>
</div>
