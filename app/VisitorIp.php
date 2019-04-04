<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorIp extends Model
{
    protected $fillable = ['article_id','ip','time'];
}
