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
        $config=$this->system;
        $config['title_tag']='晨光PDF官网';
        return view('index')->with(compact('nav','name','seo','config'));
    }

    public function agreement(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='使用协议';
        return view('agreement')->with(compact('nav','name','seo','config'));
    }

    public function disclaimer(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='免责声明';
        return view('disclaimer')->with(compact('nav','name','seo','config'));
    }
}
