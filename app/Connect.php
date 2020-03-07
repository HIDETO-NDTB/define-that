<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connect extends Model
{
    public function defines(){
        return $this->hasMany('App\Define');
    }
}
