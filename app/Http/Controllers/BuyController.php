<?php

namespace App\Http\Controllers;


use App\Goods;
use App\PayOrder;
use Illuminate\Http\Request;
use Pay;
use test\Mockery\Fixtures\EmptyTestCaseV5;

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
        $goods=Goods::all()->toArray();
        $endgoods=end($goods);
        return view('buy')->with(compact('nav','name','seo','config','goods','endgoods'));
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
        if(empty($data)){
            $msg['code']=1001;
            $msg['message']='数据错误';
            return response()->json($msg);
        }
        $goods=Goods::find($data['package']);
        if(empty($goods)){
            $msg['code']=1002;
            $msg['message']='商品不存在';
            return response()->json($msg);
        }
        $ip=$request->getClientIp();
       $order_no=$this->createOrder($goods['name'],$goods['price'],$ip,$data['paymethod']);

        if($data['paymethod']=='alipay'){

            $order = [
                'out_trade_no' => $order_no,
                'total_amount' => $goods['price'],
                'subject'      => $goods['name'],
                'http_method'  => 'URL'
            ];

            $result = Pay::alipay()->web($order);
            $msg['message'] = $result;

        }else if($data['paymethod']=='wechat'){
            $order = [
                'out_trade_no' => $order_no,
                'body' =>  $goods['name'],
                'total_fee'      => $goods['price']*100,
            ];
            $result = Pay::wechat()->scan($order);
            $msg['message'] = $result["code_url"];
        }

        $msg['code'] = 1000;
        return response()->json($msg);


    }

    /**
     * 创建支付订单
     * @param $goods_name
     * @param $amount
     * @param $ip
     * @param $payway
     * @return string
     */
    private function createOrder($goods_name,$amount,$ip,$payway){
        $now_time = date('Y-m-d H:i:s',time());
        $order_no=date('YmdHis').uniqid();

        $ret=PayOrder::insert([
            'order_no' => $order_no,
            'goods_name' =>$goods_name,
            'amount' => $amount,
            'email' => '',
            'ip' => $ip,
            'payway' => $payway,
            'updated_at' => $now_time,
            'created_at' => $now_time,
            ]);
        if($ret){
            return $order_no;
        }

    }
}
