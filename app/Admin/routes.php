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
    $router->resource('payorder', 'PayOrderController',['except' => ['create']]);
    $router->resource('goods', 'GoodsController');
    $router->resource('tag', 'TagController');
});
