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
    private $config;
    public function __construct()
    {
        $this->nav=Nav::select('name','url')->where('show',1)->get();
        $this->name = Route::currentRouteName();
        $this->seo=Seo::select('keywords','description')->join('nav', 'nav.id', '=', 'seo.nav_id')->where('url',$this->name )->first();
        $this->config=Config::find(1);
    }

}