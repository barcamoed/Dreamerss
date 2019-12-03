<?php

namespace App\Http\Controllers;

use App\Scouting;
use App\ScoutingParticipents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class ScoutingController extends Controller
{
    public function showScoutings()
    {
        $scoutings = Scouting::all();
        return View::make("admin/scoutingsTable")->with('scoutings',$scoutings);
    }

    public function scoutingCheck($id)
    {
        $scoutingCheck = ScoutingParticipents::where('artist_id',$id)->get();
        return response()->json(compact('scoutingCheck'),201);

    }

}
