<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $table = 'nav';


    public function seo()
    {
        return $this->hasOne(Seo::class);
    }
}