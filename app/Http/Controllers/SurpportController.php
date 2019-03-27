<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurpportController extends Controller
{
    use BaseController;
    /**
     * 支持页
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('surpport')->with(compact('nav','name','seo','config'));
    }

    /**
     *帮助页
     */
    public function help(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('help')->with(compact('nav','name','seo','config'));
    }
}
