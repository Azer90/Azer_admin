<?php

namespace App\Http\Controllers;


class SoftwareController extends Controller
{
    use BaseController;
    /**
     * 产品
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='产品';
        return view('software')->with(compact('nav','name','seo','config'));
    }
}
