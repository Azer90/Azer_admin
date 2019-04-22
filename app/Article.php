<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Article extends Model
{
    use Searchable;
    protected $table = 'article';
    public $asYouType = true;

    public function classify()
    {
        return $this->belongsTo(Classify::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * 索引的字段
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array=$this->only('id','title', 'keywords', 'description','content');
        $array['content']=strip_tags($array['content']);

        return $array;
    }
}
