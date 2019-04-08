<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    use BaseController;

    /**
     * 下载
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        return view('download')->with(compact('nav','name','seo','config'));
    }
}
