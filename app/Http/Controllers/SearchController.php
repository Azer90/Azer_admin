<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    use BaseController;
    public function index($tag){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']=$tag;
        $hot=Article::select('id','title')->where(['type'=>'hot','show'=>1])->take(5)->get();//热门
        $article_index= Article::search($tag)->get();

       return view('search')->with(compact('nav','name','seo','config','article_index','tag','hot'));
    }
}
