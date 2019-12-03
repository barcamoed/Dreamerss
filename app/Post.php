<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function rating()
    {
        return $this->hasOne('App\Rating');
    }

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function competition()
    {
        return $this->belongsTo('App\Competition');
    }

    public function claps()
    {
        return $this->hasMany('App\Clap')->selectRaw('claps.post_id,SUM(claps.count) as total')->groupBy('claps.post_id')->with('userClapped');
    }

    public function postClaps()
    {
        return $this->hasMany('App\Clap')->selectRaw('claps.post_id,SUM(claps.count) as total')->groupBy('claps.post_id');
    }

    public function userPostClapped()
    {
        return $this->hasMany('App\Clap')->selectRaw('claps.post_id,SUM(claps.count) as total')->groupBy('claps.post_id')->with('userClapped');
    }

    public function artistPost()
    {
        return $this->belongsTo('App\Artist');
    }

    public function clapped()
    {
//      return $this->hasManyThrough(User::class,Clap::class);
        return $this->hasMany('App\Clap')->with('userClapped');
    }





}
