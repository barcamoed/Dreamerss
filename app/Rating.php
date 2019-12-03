<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function post()
    {
        return $this->hasOne('App\Post');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }

}
