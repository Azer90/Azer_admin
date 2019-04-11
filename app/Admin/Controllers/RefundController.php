<?php
namespace App\Admin\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\PayOrder;
use App\RefundOrder;
use Illuminate\Http\Request;
use Yansongda\Pay\Pay;

class RefundController extends Controller
{
    use BaseController;
    public function init(Request $request){

        $data=$request->all();
        $order=PayOrder::find($data['id']);
        $refund_fee=$data['refund_fee'];
        $refund_desc='测试退款';

        if(empty($order['status'])){
            $msg['code'] = 1001;
            $msg['message'] = '该订单未支付,不能退款';

        }else{
            $out_refund_no=$this->createOrder($refund_fee,$order['order_no'],$refund_desc,$order['amount']);
            switch ($order['payway']){
                case 'alipay':
                    $order = [
                        'out_trade_no' => $order['order_no'],
                        'out_request_no' => $out_refund_no,
                        'refund_amount' => $refund_fee,
                        'refund_reason' => $refund_desc,
                    ];

                    $result = Pay::alipay($this->ali_config)->refund($order);
                    break;
                case 'wechat':
                    $order = [
                        'out_trade_no' => $order['order_no'],
                        'out_refund_no' => $out_refund_no,
                        'total_fee' => (int)$order['amount']*100,
                        'refund_fee' => $refund_fee,
                        'refund_desc' => $refund_desc,
                    ];

                    $result =Pay::wechat($this->wechat_config)->refund($order);
                    break;
            }
        }

        return response()->json($result);
    }


    /**
     * 创建退款订单
     * @param $goods_name
     * @param $amount
     * @param $ip
     * @param $payway
     * @return string
     */
    private function createOrder($refund_fee,$order_no,$refund_desc,$total_fee){
        $now_time = date('Y-m-d H:i:s',time());
        $out_refund_no=date('YmdHis').mt_rand(10000,99999);

        $ret=RefundOrder::insert([
            'refund_fee' => $refund_fee,
            'out_refund_no' =>$out_refund_no,
            'order_no' => $order_no,
            'refund_desc' => $refund_desc,
            'total_fee' => $total_fee,
            'updated_at' => $now_time,
            'created_at' => $now_time,
        ]);
        if($ret){
            return $out_refund_no;
        }

    }

}