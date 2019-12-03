<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    //
    public function countriesList(){

        $countries= Country::all();
        return response()->json(compact('countries'));
    }
}
