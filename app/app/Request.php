<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['phone','email','detail','DueDate'];
    
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
