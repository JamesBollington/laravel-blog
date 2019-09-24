<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function comments(){
        return $this->hasMany('\App\Comment','post','id');
    }
    public function tags(){
        //return $this->morphToMany('\App\Tag','taggable','taggables','tag_id');
        return $this->belongsToMany('\App\Tag');
    }
}
