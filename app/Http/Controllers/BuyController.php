<?php

namespace App\Http\Controllers;


use App\Goods;
use App\PayOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
                //'total_amount' => 0.01,
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
                //'total_fee'      =>1,
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

    /*
     * 支付宝回调
     */
    public function alipay_notify(){

        $alipay = Pay::alipay();
        try{
            $data = $alipay->verify(); // 是的，验签就这么简单！

            // 请自行对 trade_status 进行判断及其它逻辑进行判断，在支付宝的业务通知中，只有交易通知状态为 TRADE_SUCCESS 或 TRADE_FINISHED 时，支付宝才会认定为买家付款成功。
            // 1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号；
            // 2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额）；
            // 3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）；
            // 4、验证app_id是否为该商户本身。
            // 5、其它业务逻辑情况

            Log::debug('Alipay notify', $data->all());
            // 支付宝交易号：$data->trade_no
           //还需要验证appid 和 写入 支付宝交易号 到数据库
            if($data->trade_status=='TRADE_SUCCESS'){
                //$amount=PayOrder::where(['order_no'=>$data->out_trade_no])->value('amount');
               // if((int)$amount==(int)($data->total_amount)){
                    PayOrder::where(['order_no'=>$data->out_trade_no])->update(['status' => 1]);
              //  }

            }
        } catch (\Exception $e) {
             //$e->getMessage();
        }

        return $alipay->success();
    }

    /*
    * 微信回调
    */
    public function wechat_notify(){
        $pay = Pay::wechat();

        try{
            $data = $pay->verify(); // 是的，验签就这么简单！

            Log::debug('Wechat notify', $data->all());
            //$data->appid;
            //$data->openid;
            if($data->result_code=='SUCCESS'){
                $amount=PayOrder::where(['order_no'=>$data->out_trade_no])->value('amount');
                if((int)$amount==($data->total_fee/100)){
                    PayOrder::where(['order_no'=>$data->out_trade_no])->update(['status' => 1]);
                }
            }


        } catch (\Exception $e) {
            // $e->getMessage();
        }

        return $pay->success();
    }

}
