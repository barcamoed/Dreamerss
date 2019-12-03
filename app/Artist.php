<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Post')->with('postClaps');
    }

    public function artistCompPosts()
    {
        return $this->hasMany('App\Post')->with('postClaps');
    }

    public function competitionParticipents()
    {
        return $this->belongsTo('App\CompetitionParticipents');
    }



}
