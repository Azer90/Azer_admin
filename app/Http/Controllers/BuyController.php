<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pay;
class BuyController extends Controller
{
    use BaseController;

    /**
     * 购买
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('buy')->with(compact('nav','name','seo','config'));
    }

    /**
     * 加载
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function load(){

        return view('loading');
    }

    /*
     * 支付
     */
    public function pay(Request $request){
        $data=$request->all();
        if($data['package']=='vip128m120m120m36'){
            $total_fee=1;
        }

        if($data['paymethod']=='alipay'){

            $order = [
                'out_trade_no' => time(),
                'total_amount' => '0.01',
                'subject'      => 'hkz-测试',
                'http_method'  => 'URL'
            ];

            $result = Pay::alipay()->web($order);
            $msg['message'] = $result;

        }else if($data['paymethod']=='wechat'){
            $order = [
                'out_trade_no' => time(),
                'body' => 'hkz-测试',
                'total_fee'      => $total_fee,
            ];
            $result = Pay::wechat()->scan($order);
            $msg['message'] = $result["code_url"];
        }

        $msg['code'] = 1000;
        return response()->json($msg);



    }
}
