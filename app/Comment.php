<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function people(){
        return $this->belongsTo('App\People', 'author_id');
    }

    public function articles(){
        return $this->belongsTo('App\Article', 'article_id');
    }

}
