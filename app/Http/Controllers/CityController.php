<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function citiesList($id)
    {
        $cities= City::where('country_id','=',$id)->get();
        return response()->json(compact('cities'));
    }

    public function apiGetCityWithCountry($id)
    {
        $cityWithCountry= City::where('id','=',$id)->with('country')->get();
        return response()->json(compact('cityWithCountry'));
    }
}
