<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Define extends Model
{
    protected $fillable = ['title','content1','connect_id','content2','user_id'];

    public function connect(){
        return $this->belongsTo('App\Connect');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
