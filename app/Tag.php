<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        //return $this->morphedByMany('\App\post','taggable','taggables','post_id');
        return $this->belongsToMany('\App\post');
    }
}
