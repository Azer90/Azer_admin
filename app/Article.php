<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';


    public function classify()
    {
        return $this->belongsTo(Classify::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
