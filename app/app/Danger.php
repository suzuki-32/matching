<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danger extends Model
{   
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function post(){
        return $this->belongsTo('App\Post','post_id','id');
    }
}
