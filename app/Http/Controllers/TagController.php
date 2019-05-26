<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    use BaseController;

    public function index($id){
        $nav=$this->nav;
        $name=$this->name;
        $seo=$this->seo;
        $config=$this->system;
        $config['title_tag']='标签';
        $data= Tag::select('tags.name','tags.id as tag_id','ar.title','ar.description','ar.id')->join('article_tag as at', 'at.tag_id', '=', 'tags.id')->join('article as ar', 'at.article_id', '=', 'ar.id')->where(['tags.id'=>$id])->paginate(8);
        $tag=Tag::select('id','name')->take(15)->get();
    /*   $ids = array_column($tag['data'], 'id');
        $article_tag = DB::table('article_tag as at')
            ->join('tags as t', 't.id', '=', 'at.tag_id')
            ->select('t.name', 't.id','at.article_id')
            ->whereIn('at.article_id', $ids)
            ->get()->toArray();
        $tag_names = array_column($article_tag, 'article_id','name');*/
      //dd($tag_names);
        return view('tag')->with(compact('nav','name','seo','config','tag','data'));
    }
}
