<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function people(){
        return $this->belongsTo('App\People', 'author_id');
    }
}
