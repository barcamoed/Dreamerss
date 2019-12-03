<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionParticipents extends Model
{
    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function artist()
    {
        return $this->belongsTo('App\Artist')->with('artistCompPosts');
    }

}
