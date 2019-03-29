<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class IndexController extends Controller
{
    use BaseController;
    /**
     * 首页
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('index')->with(compact('nav','name','seo','config'));
    }
}
