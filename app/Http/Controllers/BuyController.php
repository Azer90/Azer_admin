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

    public function pay(Request $request){
        $data=$request->all();
        if($data['package']=='vip128m120m120m36'){
            $total_fee=1;
        }
        $order = [
            'out_trade_no' => time(),
            'body' => 'hkz-测试',
            'total_fee'      => '1',
        ];
        if($data['paymethod']=='alipay'){

           // return Pay::alipay()->web($order);
            $wechat['message'] = 'https://openapi.alipay.com/gateway.do?alipay_sdk=alipay-sdk-php-20161101&app_id=2019030363442826&biz_content=%7B%22product_code%22%3A%22FAST_INSTANT_TRADE_PAY%22%2C%22subject%22%3A%22%E8%AE%A2%E5%8D%95%E5%8F%B7%3Af7286c%22%2C%22total_amount%22%3A%22128%22%2C%22out_trade_no%22%3A%22c59d810f4ea34fada3175eae99f7286c%22%7D&charset=UTF-8&format=json&method=alipay.trade.page.pay&notify_url=https%3A%2F%2Fiosdatarecovery.api.huduntech.com%2Fver3_pay%2Fpc%2FnotifyWithAlipay%2Fid%2F110&return_url=https%3A%2F%2Fiosdatarecovery.api.huduntech.com%2Fver3%2Freturn&sign=UlmXnL25apQtjpyU8A9ns7irN4IIuEHFGYzYXy4XyJSunXP4PpZFUL883xZUZ2SIgd4ihMZMCZVswhq9gqBDQl2Tg5A4MI%2BYEiHqkxtbvm9pXGAKI8K6Y7C0R8XqAAV8WeLeJ8%2F5xp47KaleNBZ2F6XYbvE6PeAdK2gGE0r1JWV4NZrKdQl%2B8QUWBzJLUOwoEbrMh3Lg%2Bi%2ByINQCP9niakHvjGn6LrF4AyIRHSaIP9kC0cFdoxR69C3alYBfn%2F6GVeBnZX7TEbDG2vPTx1og37KaTxI3hhfqzU88ahCO3p2TAYG0%2Fz7BtNPh8xGgLC8XVDf4Yr0%2F9wt%2FIw9Uf9eT5w%3D%3D&sign_type=RSA2&timestamp=2019-04-01+17%3A50%3A34&version=1.0';
            $wechat['code'] = 1000;
            return response()->json($wechat);
        }else if($data['paymethod']=='wechat'){
            $result = Pay::wechat()->scan($order);
            $wechat['message'] = $result["code_url"];
            $wechat['code'] = 1000;
            return response()->json($wechat);
        }






    }
}
