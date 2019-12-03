<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
   public function showArtists()
   {
       $artists = Artist::all();
       return View::make("admin/artistDataTable")->with('artists',$artists);
   }

}
