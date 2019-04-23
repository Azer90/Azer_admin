<?php

namespace App\Http\Controllers;

use App\Article;
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
        $config['title_tag']='下载';
        $help=Article::select('id','title','description')->where(['classify_id'=>1,'show'=>1])->take(4)->get();//教程
        return view('download')->with(compact('nav','name','seo','config','help'));
    }
}
