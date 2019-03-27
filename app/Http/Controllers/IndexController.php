<?php

namespace App\Http\Controllers;



class IndexController extends Controller
{
    use BaseController;
    /**
     * 网站首页
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('index')->with(compact('nav','name','seo','config'));
    }
}
