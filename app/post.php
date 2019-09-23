<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function user(){
        return $this->belongsTo('\App\User','id','author');
    }
    public function comments(){
        return $this->hasMany('\App\Comment','post','id');
    }
}
