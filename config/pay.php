<?php

return [
    'alipay' => [
        // 支付宝分配的 APPID
        'app_id' => env('ALI_APP_ID', '2019040463781539'),

        // 支付宝异步通知地址
        'notify_url' => 'http://www.ipdftoword.net/alipay_notify',

        // 支付成功后同步通知地址
        'return_url' => 'http://www.ipdftoword.net/buy',

        // 阿里公共密钥，验证签名时使用
        'ali_public_key' => env('ALI_PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlJMAT0cNQBYX3xONv519rN5JDNeQPY+i4ZXpE1uC1OxMPpiRRN6yYrnyCxNNQZYOS28MSKNb5WqwXo0YBqc91ZI3qH9p1SCuiFg47bbbPf+7DxHMXcV1OOQns17zqZlpftaZph3VOd9wEKgT06ld78YaEn7OV+wWHEX/fohguOFJ+7EVpUcervglFglS/ZagOGsDjoOjvUxgnXoyl9+6qa9XZXOJhfCjyVmLWEk/RAtXKzRk2oEVnxkBHPM7ciG0ObuLuZv2A7hQe95bMNhTMTbh/puQ33Pv34+W/UKiQFv3Jksv/RO4vtvvDKTi65s+iWHm9ZX87mmq/xZMyhiyXQIDAQAB'),

        // 自己的私钥，签名时使用
        'private_key' => env('ALI_PRIVATE_KEY', 'MIIEogIBAAKCAQEAoWFxU8IrVeH3S0hLtngkLamX7x/1rcgjA+Wm6jS6YGWj+5Y7dtrf6QxSJaR31kPDA6u+EAmCLy7DR48s8HBBrihxUbPhWRoyj3Ayz64HZN+8p8vAHDOpw1AqgxwByPIGM7KuFRwQZnUzSto+VMh+a12tm/9uZm/MPxmpsF9xqxey3LL8qv180S8kd7ETrEyrvBruf1Py5sQAM+1UiJZMoLKQMb82hrAWEQuQraa2pBHD4CFKw+SNWTreTR+c8vX9RiZSeBhZDiTbc25nnIBOaX4qcberFl3x5N6C+g6VGH7dFkAxB1rjyMbZsz8W/sr4TXetS9mKO48aDe2eJQhR3QIDAQABAoIBAGsuElw0ix+A8gLXwyEu7ag+CKBSM5L1ZvwBnDfUSSwYlS5Ueq3Xc/qNqklB0C1H188qUxLHneTERAHUv1340EZgqdI/i5zn30iQlc6EoHiId/1hPvf7//Wt2m41PaI9y4yuURvIBcRmdmhyRg99ESkxkEoY/TOfcKE/5Ak1eoLMLorXtbQF0pZoFvSWfmV5n/+5xWmLYCrLnw/b4s/F5fyi0av6uTYzU84gCaPNBzIny7IqJRvox4axnEyCSBUsLTpqm6Qvc+CjVucw3x+wcvlaAiSypmxbJndmIFeYBGQaHyRkX7jTtTH/Clj7bEUe7d+NySeqw4hQmovJRlQlasECgYEAzDsLIUW4HrkuCFhx0L+D7Qu0gw5rG9pjEv2k9QPTu5iGmG3kARBixmhbb/Glqa/yEJwTZMTlyF4Y/FPspLKbebyKWYmT0hLwRJK+FXWdbk4Y4PWCeWozObc0St/eCkBIw/S9lX1d7gPkq7STaChNa4g9FK6W6R3VZ/DGosqgopUCgYEAyknFr1suV/a/AUxZmt2uI87wOrLoVf6a9GoC3HHONqElWuxUqt0wxh3NXEq1vMsBimOspUByFhcuPWg9PETMadTq4Po3LECHprUqqrmA+qhPxnzBiGVVA8DCQK3igZMWouisfshxEsRORMScAdXBCmW284jOA81S6qgfVc2LKCkCgYAHHuPjdBfYUmKNfe/x9Et4P1k63IzVesbLibZvqIOAXfALboFtnBGlk0vk2ksJYI4TEC4I7GiKlOVQHuj4URXkp7M3LfnOcESaT3d7Lg+gIe7yIP08mHxSvdV/6tBGETm4Q1c82BMnUlFtvy0Ii6cvYZ+nkfLHC/g92IJEeMYjBQKBgExXbQiRs7q0vz7hLovYj2iqJ1Uvwaj6jkYhX/UL6hQJ2swmlolpMogCJUdoVo/qWSl+FmDDIosdsnCwTzPYjwB9vyqqo3nK3KbYhkKqAXgXXwv8dxlfjKb+7xBzzyCxfwB6KOcsBChd91/Sh0HWBqVC37mm7oDW0y0Fx9Wc3aCJAoGAZU4PGpCZx1lIlFBxv54qRWFLQWSQHYsr1iqIVUCZbclXlZtB1Ij83ZW7T2sgRaCzIZysBAnbxdzVoXqHGtW4YjURl7U93sNa77eqsHvKFUd9x4pKFAMHmW8TfkPrVZUX/+7TX2389GYqx5atfqb28n6dGywOVe3TPpoGF6GHv8o='),

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
