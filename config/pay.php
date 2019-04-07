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
        'private_key' => env('ALI_PRIVATE_KEY', 'MIIEpAIBAAKCAQEA9+rqdsXHJg9+h8KiNRYgjlulLY2OmYfnV5aB7GFrWJFuXtne/hKSJY9bbCEAD2WNUSqgxVNCmCII7aNmJLyKGvcGqPHt/KHIJrmoVzvHyopmKV1mTXszOKz30bCU2h9wrw2jdz9O00leyWWEsoWNlBGoW0ZsMXD9O5VDixwy0DWhyTjdqgq6IpG2Ek9q01R0Q8LzPKuTMrWeYhM/BjquGXgehcKmshnHc5p7NLVIDpkYJtaCnz4SHWN581STTJNMBl2dpBVcG5fGN0G/noKJEEoOnsj0sTPnb+8Ym69qtBuR4ynI1GkxH8uyBr2Q+CbzgbuDPTo+h1rQ6mwB+9ZLQQIDAQABAoIBAFBYImohiHvOM6xdqGHZ7O0VyD8uDBO3loKtNSfdHoPShdlZdEoUzKY9glxViYZz28t9LCMm64MQLKKO/NBVBdDdU5w243CnIY1jR6oVppb+KUOokDn1/lCUxa+AMY1K+SLSIbLIoowY0A4mx01vuMVOv6fs961CN98ybXRMzC7rP1woNO7UQcxUiau/rWQSwm16InYLdrHOT3DJe7WRyswki69Zkn3YdImiqpTEW91OY3x63kApKFOe2vgrIq/mncS0AhErAYiyzj+EQtgPPc28GMDh+b1elCtnaYc82JZQ3BfiQzASiJDlw+Id9qj/c3ulBptyglMTKNdTE9C6gx0CgYEA/Gk9j56YPvKy6QC+SCezfQgxXNA69P1rgEFNgaPVlMJg6CwvfPi5TXxjtomPpVNJDg3J4iTllnpI9h3LMCVsrTMHxUTGUjxXYAJ7DMeAa5qyqFia8yPtQVNCA3o0GShIqC/nRsTog44VMyA2a93/SOYkr63GPyWwEBA/rTIwfncCgYEA+3FRzFnNqzyFsOWIM8btfHFhQS41qyBEvSuMinh4c8C1p60gDk9VJEcWtC+76Ji9oWqiQn98yy30k323DxrXPcrpq2xl0qjTqsYDJDvCwKY0HFC6x/UAuKBHcBnrduvoSl7rKCzR0z4bcdkjd4LTDvyKLfE9eKFyfVLmZXKbWgcCgYAA/GhBJ11w4YHRZy9XGNCarG2E70tLqbHBzn9/AiTTb+7w+Ts2QcJ3iwTYsbDd9HVUmLkxKPO8or2mOHeSuJK0Gn7tRld/+rxco6XXZvAZe4E3JyFz0bAbkTewy8loT7/46Db/D8XYvbVXfci4oyVcI4oBJaygkoUdivK0un12AQKBgQDySNlXHdmOfP0d3a8GpVLFrMLX+d0BDlDuL353F2qJr1HbRnkzEMKr+EwqSCy7DiL73TKI/SuU5K1dSbARP/3TryjGY+chvEhpr+/rBCK/W+euuSOh9bVCMj9kB7Xam6rzrs7NoZJ2CMyNQXxpdohFUpcbee+Pw5H8rNsROgP0FQKBgQDOtgYZnkw4kjrtGHbPLcGd2+GoEWICeOco6uFJCSJT/3D6zS32vrF/4uZzrAhCpQlLpcRwsjLccTNrXdpnCB6s7S1Al87MSYeCUs0VBpS1zYOy5kaAoFqKnKZ/wQPREX65y4C5anHTINXa5lGzU0YJuAxP4fF/zHeeJssdNHF9QA=='),

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
