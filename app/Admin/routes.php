<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('nav', 'NavController');
    $router->resource('seo', 'SeoController');
    $router->resource('config', 'ConfigController');
    $router->resource('link', 'LinkController');
    $router->resource('article', 'ArticleController');
    $router->resource('classify', 'ClassifyController');
    $router->resource('payorder', 'PayOrderController',['only' => ['index']]);
    $router->resource('goods', 'GoodsController');
    $router->resource('tag', 'TagController');
    $router->resource('refundOrder', 'RefundOrderController',['only' => ['index']]);
    $router->post('refund', 'RefundController@init')->name('refund');

    $router->post('linkImport', 'ImportController@linkImport')->name('linkImport');
});
