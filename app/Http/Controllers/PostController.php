<?php
namespace App\Http\Controllers;

use App\Artist;
use App\Company;
use App\Competition;
use App\File;
use App\Post;
use App\Scouting;
use App\ScoutingParticipents;
use App\User;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Image;

class PostController extends Controller
{
    //
    public function apiPostContent(Request $request)
    {
        $files = $request->file('files');
        $videoFiles = $request->file('videoFiles');
//if($videoFiles){}

        $this->validate($request, [
            'videoFiles.*' => 'max:200000',
        ]);

        $post = new Post();
        $post->caption = $request->get('caption');
        $post->belongsTo = $request->get('belongsTo');
        $post->status = 'Approved';

        if($post->belongsTo == 'news')
        {
            $post->company_id = $request->get('company_id');
            $post->contentType = $request->get('contentType');
            $post->save();
            $last_added_post_id = $post->id;
            $i=0;
            if($request->hasFile('files'))
            {
                foreach($files as $file)
                {
                    $fileExtension = $file->getClientOriginalExtension();
                    $randomString = str_random(25);
                    $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
                    \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                    $file = new File();
                    if ($fileExtension ==='jpg' || $fileExtension ==='jpeg' || $fileExtension ==='png'){
                        $file->type = 'picture';
                    }
                    else
                        {
                        $file->type = 'video';
                    }
                    $file->url = $fileNewName.$fileExtension;
                    $file->post_id = $last_added_post_id;
                    $file->save();
                }

            }

            if($request->hasFile('videoFiles'))
            {
                foreach($videoFiles as $file)
                {

//                    return $file->getClientOriginalName();
                    $fileExtension = $file->getClientOriginalExtension();
                    $randomString = str_random(25);
                    $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
//                    return "abc";
                    $file->move(public_path('adImagesFolder/'),$fileNewName.$fileExtension);
//                  \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                    $file = new File();

                    $file->type = 'video';
                    $file->url = $fileNewName.$fileExtension;
                    $file->post_id = $last_added_post_id;
                    $file->save();
                }

            }


        } // Main If (belongsTo=news) ends


        $fileNewName=null;
        $fileExtension=null;
        $i=0;
        if($post->belongsTo=='scouting')
        {
            if($request->get('scouting_id')=='scouting')
            {
                $post->scouting_id = 1;
                $user_id = Auth::user()->id;
                $artist_id = Artist::where('user_id',$user_id)->pluck('id');
                $scouting_participent = ScoutingParticipents::where('artist_id',$artist_id[0])->where('scouting_id',$post->scouting_id)->get();

                if($scouting_participent == '[]')
                {
                    $joinFirst = "Join First";
                    return response()->json(compact('joinFirst'));
                }


            }

            $category_id = Scouting::where('id',$post->scouting_id)->pluck('category_id');
//            return $category_id;
            $post->category_id = $category_id[0];

            $post->artist_id = $request->get('artist_id');
            $post->contentType = $request->get('contentType');
            $post->save();

            $last_added_post_id = $post->id;
            if($request->hasFile('files'))
            {


                foreach($files as $file)
                {

                    $fileExtension = $file->getClientOriginalExtension();
                    $randomString = str_random(25);
                    $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
                    \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                    $file = new File();
                    if ($fileExtension ==='jpg' || $fileExtension ==='jpeg' || $fileExtension ==='png'){
                        $file->type = 'picture';
                    }
                    else{
                        $file->type = 'video';
                    }
                    $file->url = $fileNewName.$fileExtension;
                    $file->post_id = $last_added_post_id;
                    $file->save();
                }

            }

            if($request->hasFile('videoFiles'))
            {


                foreach($videoFiles as $file)
                {

//                    return $file->getClientOriginalName();
                    $fileExtension = $file->getClientOriginalExtension();
                    $randomString = str_random(25);
                    $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
//                    return "abc";
                    $file->move(public_path('adImagesFolder/'),$fileNewName.$fileExtension);
//                    \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                    $file = new File();

                    $file->type = 'video';
                    $file->url = $fileNewName.$fileExtension;
                    $file->post_id = $last_added_post_id;
                    $file->save();
                }
            }




        } // Main If (belongsTo = scouting) ends here.



        $fileNewName=null;
        $fileExtension=null;
        $i=0;
        if($post->belongsTo=='competition')
        {
            $post->competition_id = $request->get('competition_id');
            $category_id = Competition::where('id',$request->get('competition_id'))->pluck('category_id');
            $post->category_id = $category_id[0];
            $post->artist_id = $request->get('artist_id');
            $post->contentType = $request->get('contentType');
            $post->save();

            $last_added_post_id = $post->id;
            if($request->hasFile('files'))
            {
            foreach($files as $file)
            {

                $fileExtension = $file->getClientOriginalExtension();
                $randomString = str_random(25);
                $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
                \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                $file = new File();
                if ($fileExtension ==='jpg' || $fileExtension ==='jpeg' || $fileExtension ==='png'){
                    $file->type = 'picture';
                }
                else{
                    $file->type = 'video';
                }
                $file->url = $fileNewName.$fileExtension;
                $file->post_id = $last_added_post_id;
                $file->save();
            }

            }

            if($request->hasFile('videoFiles'))
            {
                foreach($videoFiles as $file)
                {
//                    return $file->getClientOriginalName();
                    $fileExtension = $file->getClientOriginalExtension();
                    $randomString = str_random(25);
                    $fileNewName = time().$randomString.'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[$i])[$i];
//                    return "abc";
                    $file->move(public_path('adImagesFolder/'),$fileNewName.$fileExtension);
//                    \Image::make($file)->save(public_path('adImagesFolder/').$fileNewName.$fileExtension);

                    $file = new File();

                    $file->type = 'video';
                    $file->url = $fileNewName.$fileExtension;
                    $file->post_id = $last_added_post_id;
                    $file->save();
                }
            }
        }

//        $last_added_post_id = $post->id;

        return response()->json(compact('post'),201);

    }

    public function apiGetAllPosts()
    {
        $allPosts = Post::with(array('user' => function($query) {
        $query->where('role', '=', 'artist');
            }))->with('category')->with('competition')->with('rating')->with('artist')->with('files')->orderBy('created_at', 'desc')->get();
//        return $allPosts;
        return response()->json(compact('allPosts'),201);
    }


    public function apiGetAllPostsForCompany()
    {
        $allPosts = Post::with(array('user' => function($query) {
            $query->where('role', '=', 'company');
        }))->orderBy('created_at', 'desc')->with('category')->with('rating')->with('company')->with('files')->get();
//        return $allPosts;
        return response()->json(compact('allPosts'),201);
    }


    public function apiGetAllScoutingPosts()
    {
//        $allScoutingPosts = Post::with(array('user' => function($query) {
//            $query->where('role', '=', 'company');
//        }))->where('belongsTo','=','scouting')->with('artist')->with('files')->with('rating')->get();
//        with('category')->
//        return $allPosts;
        $allScoutingPosts = Post::where('belongsTo','=','scouting')->with('artist')->with('files')->with('rating')->get();

        return response()->json(compact('allScoutingPosts'),201);
    }

//    public function apiGetTopRatedArtists(){
////        $artist1= array();
////        $artist2=[];
////        $artist3=[];
////        $artist3=[];
////        $artist5=[];
////        $maxRatingsUsers = Rating::where('rating','>=',4)->pluck('user_id');
//////        $artist = User::where('id','=',$maxRatings[0].user_id);
////        $array = json_decode( $maxRatingsUsers, true );
//////        return $array;
////        foreach($array as $userID)
////        { //foreach element in $arr
////            $user = User::find($userID);
////            if($user->role=='artist'){
////                $artist = Artist::where('user_id','=',$userID)->get();
////                $artist1[$userID] = $artist;
////
////
////            }
//////            return $artist1;
//////           print_r($artist1);
////        }
////
////
//////        return $artist1[2];
////        return response()->json(compact('artist1'),201);
//
//
//    }



}
