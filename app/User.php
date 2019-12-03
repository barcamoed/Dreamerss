<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    public function ad()
    {
        return $this->hasMany('App\Ad');
    }
    public function artist()
    {
        return $this->hasOne('App\Artist');
    }
    public function company()
    {
        return $this->hasOne('App\Company');
    }
    public function rating()
    {
        return $this->hasOne('App\Rating');
    }
    public function oontact(){

        return $this->hasMany('App\Contact');
    }
    public function claps(){
        return $this->hasMany('App\User');
    }

    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
