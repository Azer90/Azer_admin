<?php

return [
    'alipay' => [
        // 支付宝分配的 APPID
        'app_id' => env('ALI_APP_ID', '2018060560299786'),

        // 支付宝异步通知地址
        'notify_url' => 'http://www.ipdftoword.net/alipay_notify',

        // 支付成功后同步通知地址
        'return_url' => 'http://www.ipdftoword.net/buy',

        // 阿里公共密钥，验证签名时使用
        'ali_public_key' => env('ALI_PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt/XsB/iEouFXzRAhT2YbJ9r4cZl/D2N3ErC6+tdq4zjA4fjfuA+w9v21/XduQej9odn2t7qfsVZaIeOGrXQPWzp0aFNnFRn1YlozHiFVEeCEAybyzyWmGB2eSuvbfbTz3Qwe/cxpf+OkOjuzOSajMQvejx1ZdkbP1yfjqLqqmCJqFfSXMFnbFGwhuCzV1Wn5Ku02/ILXONVvSZsCvLdZYlnRKBnwgUjWBUhco5MkOpDBd5sEVeIVc0nmZgNRmKJFoO02NjSr88y52QW8jxTFU/GMnByMcPhSm8ylztTo2p/PjwnzuGGCIsTIsxVSj53nXQ98WJhpZ3DyVQnV/SOSpQIDAQAB'),

        // 自己的私钥，签名时使用
        'private_key' => env('ALI_PRIVATE_KEY', 'MIIEowIBAAKCAQEAt/XsB/iEouFXzRAhT2YbJ9r4cZl/D2N3ErC6+tdq4zjA4fjfuA+w9v21/XduQej9odn2t7qfsVZaIeOGrXQPWzp0aFNnFRn1YlozHiFVEeCEAybyzyWmGB2eSuvbfbTz3Qwe/cxpf+OkOjuzOSajMQvejx1ZdkbP1yfjqLqqmCJqFfSXMFnbFGwhuCzV1Wn5Ku02/ILXONVvSZsCvLdZYlnRKBnwgUjWBUhco5MkOpDBd5sEVeIVc0nmZgNRmKJFoO02NjSr88y52QW8jxTFU/GMnByMcPhSm8ylztTo2p/PjwnzuGGCIsTIsxVSj53nXQ98WJhpZ3DyVQnV/SOSpQIDAQABAoIBAE1zNFSGxRDuXtDvIZcUHgrBnif1wBDyh4dO8On7F/1iP5Lj/Qy5ToAugRid18XYGjCyW7Uu1V0MRhZOfL06R9zY13m044l2zGEEKNFepzpHlEzfcQrVhwBQN/zDID3kmWdPWxzvmttFNDdwOxysr7hOjv0iFjA9z/N9z9OSA5DY9Yq6r7lQXu3Xh2z7S//r1zPsS4RcSLvtplOV+V3OZr7xgGmnUMQTGVFCaZ41owrZDIYly/eGJA4uDQr36/2i3a0O8qMa7Vsja1V97GTzaMdeehZQT7aQevzLSa7P5KXZUJOt8K+jxXB0/58u+gdzSJVbwQ9IbIz97njdrGb1dWECgYEA4H23PVGVxf55rvwZP/UyHnTa3QzrW6s2SoOey2cTuTICJDZrp7/2WTZkykylXoVQ44fotkmbrHJphhSDVLHqG4EJ3wmW6wRzYfrTGXtJyZ28rpxf3BF0RpeeX157uC/yi/zkrgwudNXFy7L5m7nJoRYXTtfn+n2MAL/vFerzPS8CgYEA0cfjvUs0+baoP8ZeUgE/4PLBOq5srp4dTeHai+pQFL7s32MsJXeU3kxxKkVrMy88iFzu7TW/NtyiqnWG5oIU6hHRFYp1Xw0IFOi52z0QQXT4XFvTyoKyRjvKdRtFyRIEHwGR+G1wPW7k3E2JjhnE++X9+19/QtkruLzZrknXAGsCgYBDXTYpTlwVR+GX4spo6NkbTpGGl6PgpCXsgkaaXtoKTrlZyILRmccAylPAaPOOw46cWGI6oSf3vXVw6KLoPWM00an2pdgFuhYtpqjGErr3pz/BXedeEFbGACVkFOQnRywPWdn9aGZgZO2vzIseccfRcOGZpSxVfGsQpofGGfTXvQKBgQC3MZbYhGejtfXhk4pklIDDIVrKsu1n4931WEkwrBL4uu5B+engYjgXlKuyXWLLFPIIpxdjAO+VqkFHGFEQ1QIMkjiDViE/OzMWh1FeeknKz6nfhbVDALVMDgS0FXfwqhH9PbLKPk+o5kFnfTKlbC2QSH1uWivZJas/rXNu9z6RNwKBgFWcu4uiw1XxZJ0DOQLiCBsP3+mnGDLtzP6dc2FAHDF1Ds9iRAj77P47WCWO9VxYgSsPHV4vETDA7jq1lkgb1wMJTYVMVlKFFt9mxev3/ihh7LsCLF8nHci+qKaoiFdcVwG5sCSHrdnSO+zJWPsye7FfPqp53H4PB/VTadGeF2dO'),

        // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        //  'level' => 'debug'
        //  'type' => 'single', // optional, 可选 daily.
        //  'max_file' => 30,
        ],

        // optional，设置此参数，将进入沙箱模式
        // 'mode' => 'dev',
    ],

    'wechat' => [
        // 公众号 APPID
        'app_id' => env('WECHAT_APP_ID', 'wx867b64cb0a2776e8'),

        // 小程序 APPID
        'miniapp_id' => env('WECHAT_MINIAPP_ID', ''),

        // APP 引用的 appid
        'appid' => env('WECHAT_APPID', ''),

        // 微信支付分配的微信商户号
        'mch_id' => env('WECHAT_MCH_ID', '1502952071'),

        // 微信支付异步通知地址
        'notify_url' => 'http://www.ipdftoword.net/wechat_notify',

        // 微信支付签名秘钥
        'key' => env('WECHAT_KEY', 'loi83ujdmwejau8Jfie9kaJuejJDjkef'),

        // 客户端证书路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_client' => '',

        // 客户端秘钥路径，退款、红包等需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_key' => '',

        // optional，默认 warning；日志路径为：sys_get_temp_dir().'/logs/yansongda.pay.log'
        'log' => [
            'file' => storage_path('logs/wechat.log'),
        //  'level' => 'debug'
        //  'type' => 'single', // optional, 可选 daily.
        //  'max_file' => 30,
        ],

        // optional
        // 'dev' 时为沙箱模式
        // 'hk' 时为东南亚节点
        // 'mode' => 'dev',
    ],
];
