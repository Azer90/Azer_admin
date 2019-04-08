<?php

namespace App\Http\Controllers;

use App\Config;
use App\Nav;
use App\Seo;
use Illuminate\Support\Facades\Route;

trait BaseController
{
    private $nav;
    private $name;
    private $seo;
    private $system;

    protected $ali_config = [
        'app_id' => '',
        'notify_url' => 'http://www.ipdftoword.net/alipay_notify',
        'return_url' => 'http://www.ipdftoword.net/buy',
        'ali_public_key' => '',
        // 加密方式： **RSA2**
        'private_key' => '',
        'log' => [ // optional
            'file' => './logs/alipay.log',
            'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
            'type' => 'single', // optional, 可选 daily.
            'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
        ],


    ];
    protected $wechat_config = [
        'appid' => '', // APP APPID
        'app_id' => '', // 公众号 APPID
        'miniapp_id' => '', // 小程序 APPID
        'mch_id' => '',
        'key' => '',
        'notify_url' => 'http://www.ipdftoword.net/wechat_notify',
       // 'cert_client' => './cert/apiclient_cert.pem', // optional，退款等情况时用到
        //'cert_key' => './cert/apiclient_key.pem',// optional，退款等情况时用到
        'log' => [ // optional
            'file' => './logs/wechat.log',
            'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
            'type' => 'single', // optional, 可选 daily.
            'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
        ],


    ];

    public function __construct()
    {
        $this->nav=Nav::select('name','url')->where('show',1)->get();
        $this->name = Route::currentRouteName();
        $this->seo=Seo::select('keywords','description')->join('nav', 'nav.id', '=', 'seo.nav_id')->where('url',$this->name )->first();
        $system=Config::select('name','value')->where(['type'=>'system'])->get()->toArray();
        $this->system= array_column($system,'value','name');

        $system=Config::select('name','value')->where(['type'=>'pay'])->get()->toArray();
        $pay_config= array_column($system,'value','name');
        $this->ali_config['app_id']=$pay_config['ali_appid'];
        $this->ali_config['ali_public_key']=$pay_config['ali_public_key'];
        $this->ali_config['private_key']=$pay_config['private_key'];

        $this->wechat_config['app_id']=$pay_config['wechat_appid'];
        $this->wechat_config['mch_id']=$pay_config['mch_id'];
        $this->wechat_config['key']=$pay_config['wechat_key'];

    }



}