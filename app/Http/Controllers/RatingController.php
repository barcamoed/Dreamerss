<?php

namespace App\Http\Controllers;

use App\Clap;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function apiSetRating(Request $request)
    {
        $data = $request->all();
        $rating = new Rating();
        $rating->rating = $request->get('rating');
        $rating->post_id = $request->get('post_id');

        $rating1 = Rating::where('artist_id',$request->get('artist_id'))->where('post_id',$request->get('post_id'))->first();
        $rating2 = Rating::where('company_id',$request->get('company_id'))->where('post_id',$request->get('post_id'))->first();
        if($rating1!==null)
        {
            $rating1->rating = $request->get('rating');
            $rating1->save();
//           return $rating1;
        }

        else if($rating2!==null)
        {
            $rating2->rating = $request->get('rating');
            $rating2->save();
        }

        else if( $rating1==null && $rating2==null && $request->get('company_id')!==null)
        {
            $rating->company_id = $request->get('company_id');
            $rating->save();
        }
        else if($rating1==null && $rating2==null && $request->get('artist_id')!==null)
        {
            $rating->artist_id = $request->get('artist_id');
            $rating->save();
        }

        return response()->json(compact('Done'),201);
    }




    public function apiSetClaps(Request $request)
    {
        $data = $request->all();
        $rating = new Clap();
        $rating->count = $request->get('count');
        $rating->user_id = $request->get('user_id');
        $rating->post_id = $request->get('post_id');

        $rating1 = Clap::where('user_id',$request->get('user_id'))->where('post_id',$request->get('post_id'))->first();

//        $rating2 = Rating::where('company_id',$request->get('company_id'))->where('post_id',$request->get('post_id'))->first();
        if($rating1!= null)
        {
//            return "Inside";
            $rating1->count = $rating1->count+1;
            $rating1->save();
//           return $rating1;
        }
        else if($rating1== null)
        {
        if($request->get('competition_id')!==null)
        {
            $rating->competition_id = $request->get('competition_id');
            $rating->save();
        }
        else
        $rating->save();

        }
        return response()->json(compact('Done'),201);
    }

}
