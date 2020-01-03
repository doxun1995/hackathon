<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //belongsTo設定
    public function user()
    {
        // return $this->belongsTo('App\User','id','id');
    }
}
