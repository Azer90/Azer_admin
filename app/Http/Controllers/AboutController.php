<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    use BaseController;
    /**
     * 关于页
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='关于';
        return view('about')->with(compact('nav','name','seo','config'));
    }
}
