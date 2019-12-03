<?php

namespace App\Http\Controllers;

use App\ArtistTransaction;
use App\Category;
use App\Competition;
use App\Admin;
use App\CompetitionParticipents;
use App\Post;
use App\CompanyTransaction;
use App\ScoutingParticipents;
use App\User;
use App\Clap;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class CompetitionController extends Controller
{

    public function apiJoinCompetition(Request $request)
    {

        $comp_participants = CompetitionParticipents::where('competition_id', '=', $request->get('competition_id'))->where('artist_id', '=', $request->get('artist_id'))->get();
//    return $comp_participants;
//
        if($comp_participants != '[]')
    {
        return response()->json(compact('comp_participants'), 201);
    }

        else if ($comp_participants == '[]')
        {
            $competition_participents = new CompetitionParticipents();
//        if()
            $competition_participents->competition_id = $request->get('competition_id');
            $competition_participents->artist_id = $request->get('artist_id');
            $competition_participents->save();

            $artist_transaction = new ArtistTransaction();
//        $request->get('payment_id')
            $artist_transaction->payment_id = 111111;
            $artist_transaction->amount = 10;

            $artist_transaction->type = 'competition';
            $artist_transaction->artist_id = $request->get('artist_id');
            $artist_transaction->competition_id = $request->get('competition_id');
//        $artist_transaction->scouting_id = $request->get('scouting_id');
            $artist_transaction->save();


            return response()->json(compact('competition_participents', 'artist_transaction'), 201);
        }

    }


    public function apiJoinScouting(Request $request){

        $scout_participants = ScoutingParticipents::where('scouting_id', '=', 1)->where('artist_id', '=', $request->get('artist_id'))->get();
//    return $comp_participants;
//
        if($scout_participants != '[]')
        {
            return response()->json(compact('scout_participants'), 201);
        }
        elseif ($scout_participants == '[]')
        {
        $scouting_participents= new ScoutingParticipents();
        $scouting_participents->scouting_id = 1;
        $scouting_participents->artist_id = $request->get('artist_id');
        $scouting_participents->save();

        $artist_transaction = new ArtistTransaction();
        $artist_transaction->payment_id = 9191919199;
        $artist_transaction->amount = 1000;
        $artist_transaction->type = 'scouting';
        $artist_transaction->artist_id = $request->get('artist_id');
//        $artist_transaction->competition_id = $request->get('competition_id');
        $artist_transaction->scouting_id = 1;
        $artist_transaction->save();

        return response()->json(compact('scouting_participents','artist_transaction'),201);
        }
    }

    public function apiGetCompetitions($id){
        $competition_participents = CompetitionParticipents::where('artist_id',$id)->get();
//        $competition_ids = $competition_participents->competition_id;
        $COMP_ID=[];
        $i=0;
        $COMPETITIONS=[];
        foreach($competition_participents as $compPar){
            $competition_id = $compPar->competition_id;
            $COMP_ID[$i] = $competition_id;
            $competition = Competition::find($COMP_ID[$i]);

            $COMPETITIONS[$i] = $competition;

            $i++;

//            return $COMP_ID;
        }


//        return $COMPETITIONS;
        return response()->json(compact('COMPETITIONS'),201);
    }


    public function artistCompetitionCount($id)
    {
        $srtist_competition = CompetitionParticipents::where('artist_id',$id)->get();
        $competitionCount = $srtist_competition->count();
        return response()->json(compact('competitionCount'),201);

    }

    public function getCompanyCompetitionsCount($id)
    {
        $company_competitions = Competition::where('company_id',$id)->get();
        $competitionCount = $company_competitions->count();
        return response()->json(compact('competitionCount'),201);
    }

    public function recentCompetitions()
    {
        $recentCompetitions = Competition::orderBy('created_at','desc')->with('company')->take(3)->get();
        return response()->json(compact('recentCompetitions'),201);
    }

    public function competitionWithPosts($id)
    {
        $competiion = Competition::where('id',$id)->with('posts')->with('company')->with('category')->get();
        return response()->json(compact('competiion'),201);
    }

    public function competitionParticipants($id)
    {
        $compettionPartic = CompetitionParticipents::where('competition_id',$id)->pluck('artist_id');
        $competiionParticipants = $compettionPartic->count();
        return response()->json(compact('competiionParticipants'),201);
    }

    public function competitionOpenRequest(Request $request)
    {

        $data = $request->all();
        $newCompetition = new Competition();
        $newCompetition->title = $data['title'];
        $newCompetition->description = $data['description'];
        $newCompetition->category_id = $data['category_id'];
        $newCompetition->fromDate = $data['fromDate'];
        $newCompetition->toDate = $data['toDate'];
        $newCompetition->company_id = $data['company_id'];
        $newCompetition->status = 'pending';

        if ($request->image)
        {
            $randomString = str_random(25);
            $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('adImagesFolder/') . $name1);
            $newCompetition->imageUrl = $name1;


        }
        $newCompetition->save();

        $company_transaction = new CompanyTransaction();
//        $request->get('payment_id')
        $company_transaction->payment_id = 222222;
        $company_transaction->amount = 100;

        $company_transaction->type = 'competition';
        $company_transaction->user_id = $request->get('company_id');
        $company_transaction->competition_id = $request->get('competition_id');
//        $artist_transaction->scouting_id = $request->get('scouting_id');
        $company_transaction->save();


        return response()->json(compact('newCompetition'),201);
    }

    public function categoryCompetitions($id)
    {
        $competitions = Competition::where('category_id',$id)->with('company')->get();
        return response()->json(compact('competitions'),201);
    }

    public function categoryDetail($id)
    {
        $categoryDetail = Category::find($id);
        return response()->json(compact('categoryDetail'),201);
    }


    public function showCompetitions()
    {
        $competitions = Competition::all();
        return View::make("admin/competitionsTable")->with('competitions',$competitions);
    }

    public function showAcceptedCompetitions()
    {
        $accepted_competitions = Competition::where('status','=','accepted')->get();
        return View::make("admin/acceptedCompetitions")->with('accepted_competitions',$accepted_competitions);
    }

    public function showRejectedCompetitions()
    {
        $rejected_competitions = Competition::where('status','=','rejected')->get();
        return View::make("admin/rejectedCompetitions")->with('rejected_competitions',$rejected_competitions);
    }

    public function showOngoingCompetitions()
    {
        $ongoing_competitions = Competition::where('status','=','ongoing')->get();
        return View::make("admin/ongoingCompetitions")->with('ongoing_competitions',$ongoing_competitions);
    }

    public function showCompletedCompetitions()
    {
        $completed_competitions = Competition::where('status','=','completed')->get();
        return View::make("admin/completedCompetitions")->with('completed_competitions',$completed_competitions);
    }

    public function acceptCompetition($id)
    {
        $competition = Competition::find($id);
        $competition -> status='accepted';
        $competition->save();
        return redirect('/competitionsTable');
    }

    public function rejectCompetition($id)
    {
        $competition = Competition::find($id);
        $competition -> status='rejected';
        $competition->save();
        return redirect('/competitionsTable');
    }

    public function showNewRequests()
    {
        $newCompetitions = Competition::where('status','=','new')->get();
        return View::make("admin/requestedCompetitions")->with('newCompetitions',$newCompetitions);
    }

    public function postCompetitionRequest(Request $request)
    {
        $competition = new Competition();
        $competition->title = $request->get('title');
        $competition->description = $request->get('description');
//    $competition->imageUrl = $request->get('imageUrl');
        if($request->file('newCompPic')!= null)
        {
            if ($request->file('newCompPic')->isValid())
            {
                $adminPicPath =  AdminController::uploadMedia($request->file('newCompPic'),"adImagesFolder");
                $competition->imageUrl = $adminPicPath;
            }
        }

        $competition->category_id = $request->get('category_id');
        $competition->fee = $request->get('fee');
        $competition->status = $request->get('status');
        $competition->company_id = $request->get('company_id');
        $competition->save();
    }
    public function getCompetitionDetail($id)
    {
        $competition = Competition::find($id);
        return View::make("admin/competitionDetail")->with('competition',$competition);
    }

    public function addDateToCompetition(Request $request)
    {
        $competition_id = $request->get('competition_id');

        $competition = Competition::find($competition_id);
        $date1 = Carbon::parse($request->get('fromDate'));
        $date2 = Carbon::parse($request->get('toDate'));
        $competition->fromDate = $date1->format("y-m-d");
        $competition->toDate = $date2->format("y-m-d");
        $competition->status = 'accepted';
        $competition->save();
        return redirect('/newRequests');
    }

    public function addCompetitionView(Request $request)
    {
        return View::make("admin/addCompetition");
    }


    public function allFeedPosts()
    {
        $allPosts = Post::orderby('created_at','desc')->whereNotNull('artist_id')->with('artist')->with('competition')->with('files')->with('claps')
            ->orwhereNotNull('company_id')->with('company')->with('files')->with('claps')->get();
//            (['claps' => function($query){
//                $query->select(DB::raw('SUM(count)'));
//            }])->get();
        return response()->json(compact('allPosts'),201);
    }

    public function hasUserClapped($id)
    {
        $posts = Post::with('userPostClapped')->get();
        return $posts;
    }

    public function topPerformers($id)
    {

        $topPerformers = DB::select('SELECT artists.username,artists.user_id,artists.profilePicUrl,sum(claps.count) as claps from posts,artists,claps where posts.competition_id='.$id.' And artists.id=posts.artist_id And claps.post_id = posts.id group by posts.artist_id ORDER BY claps Desc');

//            CompetitionParticipents::where('competition_id',$id)->with('artist')->get();
//        return $topPerformers[0];
//        $artistPosts = Post::with('artistPost')->get();
        return response()->json(compact('topPerformers'),201);
    }

    public function userTotalClaps($id)
    {
        $sum = Clap::where('user_id',$id)->get()->pluck('count');
        $totalClaps = $sum->sum();
        return response()->json(compact('totalClaps'),201);
    }

    public function stripeRequests()
    {
//        $curl https:api.stripe.com/v1/charges \
//      -u sk_test_tA8zlOU159VrkDrPU2NaIzvm00sMHYxY68: \
//    -d amount=2000 \
//    -d currency=eur \
//    -d source=tok_mastercard \
//    -d description="Charge for jenny.rosen@example.com"



//        $fields = array
//        (
//            'pk_test_4fyoM0ThJX7HTamrVyaRaqvW00VKRnuTsm',
//            'amount' 	=> 100,
//            'currency'			=> 'usd',
//            'source'			=> 'src_1ElJ3BAFk7YmzK4yoiZhDpcr',
//            'description'		=> 'Charge for jenny.rosen@example.com',
//            'token'             => 'src_1ElJ3BAFk7YmzK4yoiZhDpcr'
//        );
//
//        $url = 'https:api.stripe.com/v1/charges';
//        $headers = array
//        (
////            'Authorization: key=' . $API_ACCESS_KEY,
//            'Content-Type: application/json'
//        );
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
//        $newresult = curl_exec($ch);
//        $err = curl_error($ch);




//        if ($err) {
//            return "cURL Error #:" . $err;
//        } else {
//            return (json_decode($newresult));
//        }

        \Stripe\Stripe::setApiKey('sk_test_tA8zlOU159VrkDrPU2NaIzvm00sMHYxY68');

        $token = 'tok_1Elbn0LB8k95A7tiY8KrZ3zW';
        $charge = \Stripe\Charge::create([
            'amount' => 999,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        return $charge;

    }



}
