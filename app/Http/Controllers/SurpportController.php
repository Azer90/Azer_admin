<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SurpportController extends Controller
{
    use BaseController;
    /**
     * 支持页
     */
    public function index(){
        $help=Article::select('id','title','description')->where(['classify_id'=>1,'show'=>1])->take(4)->get();//教程
        $problems=Article::select('id','title','description')->where(['classify_id'=>2,'show'=>1])->take(4)->get();//常见问题

        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('surpport')->with(compact('nav','name','seo','config','help','problems'));
    }

    /**
     *教程
     */
    public function help(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('help')->with(compact('nav','name','seo','config'));
    }
    /**
     *常见问题
     */
    public function problems(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('problems')->with(compact('nav','name','seo','config'));
    }
    /**
     *知识库
     */
    public function library(){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->config;
        return view('library')->with(compact('nav','name','seo','config'));
    }

    /**
     *内容详细
     */
    public function detail($id){
            $article=Article::find($id);
            $article['class_name']= $article->classify['name'];
            $article['class_url']= $article->classify['url'];
            $article['hits']=number_format($article['hits']);
            $article['time']= date('Y-m-d',strtotime($article['created_at']));
            $nav=$this->nav;
            $name=$this->name;
            $seo=['keywords'=>$article['keywords'],'description'=>$article['description']];
            $config=$this->config;
        $config['title']= $config['title'].'-'.$article['title'];
        return view('detail')->with(compact('nav','name','seo','config','article'));
    }


}
