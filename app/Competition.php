<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public function competition_participents()
    {
        return $this->hasMany('App\CompetitionParticipents');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function posts()
    {
        return $this->hasMany('App\Post')->with('files')->with('artist')->with('claps');
    }

}
