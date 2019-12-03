<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function getAdminProfilePic()
    {
        $profilePicUrl = Admin::where('user_id',Auth::user()->id)->get()->pluck('profilePicUrl');
        return $profilePicUrl[0];
    }
}
