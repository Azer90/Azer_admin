<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\VisitorIp;
use Illuminate\Support\Facades\Request;


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
        $config=$this->system;
        $config['title_tag']='支持';
        return view('surpport')->with(compact('nav','name','seo','config','help','problems'));
    }

    /**
     *教程
     */
    public function help(){
        $help=Article::select('id','title','description')->where(['classify_id'=>1,'show'=>1])->paginate(1);
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='教程';
        return view('help')->with(compact('nav','name','seo','config','help'));
    }
    /**
     *常见问题
     */
    public function problems(){
        $problems=Article::select('id','title','description')->where(['classify_id'=>2,'show'=>1])->paginate(1);
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='常见问题';
        return view('problems')->with(compact('nav','name','seo','config','problems'));
    }
    /**
     *知识库
     */
    public function library(){
        $library=Article::select('id','title','description')->where(['classify_id'=>3,'show'=>1])->paginate(1);
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='知识库';
        return view('library')->with(compact('nav','name','seo','config','library'));
    }

    /**
     *内容详细
     */
    public function detail($id){

            $ip=Request::getClientIp();
            $time=date('Ymd',time());
            $visitor_ip=VisitorIp::where(['ip'=>$ip,'article_id'=>$id,'time'=>$time])->value('ip');//访客
            if(empty($visitor_ip)){
                VisitorIp::create([
                    'article_id' => $id,
                    'ip' => $ip,
                    'time' =>$time,
                ]);
                Article::increment('hits',1);
            }

            $hot=Article::select('id','title')->where(['type'=>'hot','show'=>1])->take(5)->get();//热门
            $new=Article::select('id','title')->where(['show'=>1])->orderBy('id', 'desc')->take(5)->get();//最新
            $article=Article::find($id);
            $up =Article::select('id','title')->whereRaw('id > ? and `show` = ? and classify_id = ?', [$id,1,$article['classify_id']])->orderBy('id', 'asc')->first();//上一篇
            $down =Article::select('id','title')->whereRaw('id < ? and `show` = ? and classify_id = ?', [$id,1,$article['classify_id']])->orderBy('id', 'desc')->first();//下一篇

            $tag=Tag::select('id','name')->take(15)->get();

            $article['class_name']= $article->classify['name'];
            $article['class_url']= $article->classify['url'];
            $article['hits']=number_format($article['hits']);
            $article['time']= date('Y-m-d',strtotime($article['created_at']));
            $nav=$this->nav;
            $name=$this->name;
            $seo=['keywords'=>$article['keywords'],'description'=>$article['description']];
            $config=$this->system;
            $config['title_tag']= $article['title'];
        return view('detail')->with(compact('nav','name','seo','config','article','hot','new','up','down','tag'));
    }


}
