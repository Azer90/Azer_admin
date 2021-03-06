@include('layouts.header')
<body>
@include('layouts.nav')


<div class="position pt20 pb20 all m0a m_pt20r m_pb20r m_fs20r"><a href="/">{{ $config['title'] }}</a> > 免责声明</div>

<div class="all m0a pb30 layui-row m_pb30r">
    <div class="layui-col-sm2 layui-col-xs12">
        <ul class="aboutusMenu fs20 m_fs0r">
            <li class="">
                <a class="aboutus" href="{{ route('agreement') }}">使用协议</a>
            </li>
            <li class="active">
                <a class="shouhou" href="{{ route('disclaimer') }}">免责声明</a>
            </li>
        </ul>
    </div>
    <div class="layui-col-sm10 pl80 layui-col-xs12 m_pl0 m_pt50r m_fs26r">
        <div class="tac fs20 pb20 m_fs36r m_pb20r"><b>晨光PDF转换器免责声明</b></div>
        <p class="pb20 ti2 m_pb20r">本站会员及访问者在使用本站所提供的服务前，收确保您已经仔细阅读并同意本声明所有同款访问者访问本站或以各种方式利用本站进行其他方面的行为，都将被视作对本声明内容无异议，无条件认可并声明。如果异议，请及时 同本站协商，并取得本站书面同意。</p>
        <p class="ti2">一、访问者在从事与本站相关的浏览访问、利用、转载、宣传介绍等行为时，必须以善意且谨慎的态度行事，不得故意损坏或者弱化本站的各类合法权利与利益，不得利用本站以任何形式从事任何违反法律法规、国际公约以及社会公德的行为，严格恪守以下承诺：</p>
        <p>1、传输和利用的信息必须符合中国法律法规、国际公约的规定，不会对良好的社会风气造成影响。</p>
        <p>2、不得将本站、本站论坛及本站所提供的网络服务用于任何的非法用途及其他非正当途径，一旦发现必将严惩。</p>
        <p>3、不扰乱本站的正常运行，不得干扰本站提供的网络服务。</p>
        <p class="pb20 m_pb20r">4、遵守与本站、本站论坛和其他版块相关的网络服务协议。</p>
        <p class="pb20 ti2 m_pb20r">二、用户在转载、上传或下载有关作品时请尊重作品的版权，著作权，如果您在浏览本站是发现有您未署名的作品，请及时与我们联系。本站禁止制作、发布、传播任何具有单送、色情、暴力、淫秽等内容信息，一经发现，立即删除。</p>
        <p class="pb20 ti2 m_pb20r">三、我们明确的提到：除了中国法律强制规定外，本站用户的原创作品，本站和作者共同享有该作品版权，其他网站或媒体如需使用该作品，需取得本站或原作者的授权，否则不得转载或用于其他的商业用途。</p>
        <p class="pb20 ti2 m_pb20r">四、本站用户上传的内容仅代表作者本人观点，与本站立场无关，一旦发生问题，相关责任由作者本人负责。</p>
        <p class="pb20 ti2 m_pb20r">五、除附带版权的声明外，本站有权将本站内其他作者发表的作品用于其他的用途，包括论坛、手机站及电子杂志等。</p>
        <p class="pb20 ti2 m_pb20r">六、当本站以友情链接或其他链接的形式推荐其他网站内容时，本站不对该网站及其资源的可用性负责，且不保证从这些网站获取的内容的真实性合法性，对于从该站上获取的内容、产品或服务导致的任何直接或间接的损失，本网站不承担任何法律责任。</p>
        <p class="pb20 ti2 m_pb20r">七、除政府部门、司法机关要求本站提供用户的个人资料外，访问者在本站提供的个人资料，本站不会以任何方式进行泄露。</p>
        <p class="pb20 ti2 m_pb20r">八、本站内部分内容来自互联网，如触犯您的知识产权，请来电或致函告知，本站将在规定时间内将该内容进行删除，如果涉及版权费用问题，请及时提供相应证明材料与我们联系、协商。</p>
        <p class="pb20 ti2 m_pb20r">九、以上声明最终解释权归苏州图可互联网信息有限公司所有。</p>
    </div>
</div>
{{--底部--}}
@extends('layouts.footer')

{{--侧边栏--}}
@include('layouts.side')
{{--js--}}
@extends('layouts.script')
