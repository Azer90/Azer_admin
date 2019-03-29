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

}
