<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\City;
use App\Company;
use App\Competition;
use App\Country;
use App\File;
use App\Post;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
//use Intervention\Image\Facades\Image as Image;
use phpDocumentor\Reflection\Types\Integer;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request,[

            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
//        if($credentials)
//        {
//            $credentials = $request->only('name', 'password');
//        }

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

      if(JWTAuth::user()->role=="artist")
        {
            $artist = Auth::user()->artist;
//            $artist=JWTAuth::parseToken()->authenticate()->artist;
            return response()->json(compact('token','artist'));

        }
        else if(JWTAuth::user()->role=="company")
        {
            $company = Auth::user()->company;
            return response()->json(compact('token', 'company'));
        }

    }

    public function registerArtist(Request $request)
    {
//        $this->validate($request,[
//            'username' => 'required|string|unique:artists',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//            'age' => 'required',
//            'gender' => 'required',
//            'city_id'=> 'required',
//            'category_id' => 'required',
//            'profilePicUrl' => 'required',
//            'coverPicUrl' => 'required',
//        ],['city_id.required' => 'The :attribute field can not be empty.','username.required' => 'The :attribute field can not be empty.','email.required' => 'The :attribute field can not be empty.','password.required' => 'The :attribute field can not be empty.','category_id.required' => 'The :attribute field can not be empty.','profilePicUrl.required' => 'The :attribute field can not be empty.','coverPicUrl.required' => 'The :attribute field can not be empty.','age.required' => 'The :attribute field can not be empty.','gender.required' => 'The :attribute field can not be empty.']
//
//        );


        $user = User::create([
//            ." ".$request->get('last_name')
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'role' => 'artist',
            'password' => Hash::make($request->get('password')),
        ]);

        $artist = new Artist();

        $artist->username = $request->get('username');
        $artist->email =$request->get('email');
        $artist->age = $request->get('age');
        $artist->gender = $request->get('gender');
        $artist->city_id = $request->get('city_id');
        $artist->category_id = $request->get('category_id');
        $artist->user_id = $user->id;

        if($request->profilePicUrl)
        {
            $randomString = str_random(25);
            $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->profilePicUrl, 0, strpos($request->profilePicUrl, ';')))[1])[1];
            \Image::make($request->profilePicUrl)->save(public_path('adImagesFolder/') . $name1);
            $artist->profilePicUrl = $name1;

        }

        if ($request->coverPicUrl)
        {
            $randomString = str_random(25);
            $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->coverPicUrl, 0, strpos($request->coverPicUrl, ';')))[1])[1];
            \Image::make($request->coverPicUrl)->save(public_path('adImagesFolder/') . $name1);
            $artist->coverPicUrl = $name1;

//            $artist->save();

        }

        $artist->status ="active";
        $artist->save();

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('artist','token'),201);
    }

    public function registerCompany(Request $request)
    {
//        return $incomeFrom[0];
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//
//        if($validator->fails()){
//            return response()->json($validator->errors()->toJson(), 400);
//        }
//        return"Abc";


//        $this->validate($request,[
//            'username' => 'required|string',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//            'city_id'=> 'required',
//            'category_id' => 'required',
//            'profilePicUrl' => 'required',
//            'coverPicUrl' => 'required',
//            'incomeFrom' => 'required',
//        ],['city_id.required' => 'The :attribute field can not be empty.','username.required' => 'The :attribute field can not be empty.','email.required' => 'The :attribute field can not be empty.','password.required' => 'The :attribute field can not be empty.','category_id.required' => 'The :attribute field can not be empty.','profilePicUrl.required' => 'The :attribute field can not be empty.','coverPicUrl.required' => 'The :attribute field can not be empty.','incomeFrom.required' => 'The :attribute field can not be empty.']);


        $user = User::create([
            'name' => $request->get('first_name')." ".$request->get('last_name'),
            'email' => $request->get('email'),
            'role' => 'company',
            'password' => Hash::make($request->get('password')),
        ]);

        $company= new Company();
        $company->username = $request->get('username');

        $incomeRequest = $request->get('incomeFrom');
        $incomeFromAndTo = $keywords = preg_split("/[\-,]+/", $incomeRequest);
        $company->incomeFrom = $incomeFromAndTo[0];
        $company->incomeTo = $incomeFromAndTo[1];
        $company->city_id = $request->get('city_id');
        $company->category_id = $request->get('category_id');
        $company->user_id = $user->id;
        if($request->profilePicUrl)
        {
            $randomString = str_random(25);
            $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->profilePicUrl, 0, strpos($request->profilePicUrl, ';')))[1])[1];
            \Image::make($request->profilePicUrl)->save(public_path('adImagesFolder/') . $name1);
            $company->profilePicUrl = $name1;

//            $artist->save();
        }

        if ($request->coverPicUrl)
        {
            $randomString = str_random(25);

            $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->coverPicUrl, 0, strpos($request->coverPicUrl, ';')))[1])[1];

            \Image::make($request->coverPicUrl)->save(public_path('adImagesFolder/') . $name1);
            $company->coverPicUrl = $name1;

//            $artist->save();

        }
        $company->status = $request->get('registered');
        $company->email =$request->get('email');
        $company->save();
//        return "Abc";

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('company','token'),201);
    }


    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        return response()->json(compact('user'));
    }

    public function apiGetAllCompetitions(){

        $competitions = Competition::with('company')->get();
        return response()->json(compact('competitions'));

    }

    public function apiGetUserDetail($id)
    {

    $user = User::find($id);
    if($user->role=='artist')
    {
        $artist = Artist::where('user_id','=',$user->id)->get();
        return response()->json(compact('artist'));
    }

    if($user->role=='company')
    {
            $company = Company::where('user_id','=',$user->id)->get();
            return response()->json(compact('company'));
    }

    }


    public function apiGetUserPosts($id)
    {
        $userPosts = Post::orderBy('id', 'DESC')->where('artist_id','=',$id)->with('competition')->with('category')->with('rating')->with('claps')->with('files')->with('artist')->get();
        return response()->json(compact( 'userPosts'));
    }

    public function apiGetPostRating($id)
    {
        $rating = Rating::where('post_id','=',$id)->get();
//        return $rating;
        $calculate = 0;
        $countCheck = 0;
//        return $rating;
        $result=0;
        foreach ($rating as $singleRate)
        {
            $result += $singleRate->rating;
//            return $result;
            $countCheck +=1;
        }
        if($countCheck!==0){
        $finalRating = $result/($countCheck);
        }
//        return $finalRating;
//
//        return $countCheck;
        return response()->json(compact( 'finalRating','countCheck'));
    }

    public function apiGetUsersProfilePicsForNewsFeed(Request $request,$id){

        if(User::find($id)->role=="artist"){
            $artist = User::find($id)->artist;
        return response()->json(compact( 'artist'));
        }
        else

        $company = User::find($id)->company;
        return response()->json(compact( 'company'));


    }

    public function apiEditCoverPic(Request $request,$id)
    {

        if(User::find($id)->role=="artist")
        {
            $artist = Artist::where('user_id','=',$id)->get();
            if ($request->coverPic)
            {
                $randomString = str_random(25);
                $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->coverPic, 0, strpos($request->coverPic, ';')))[1])[1];

                \Image::make($request->coverPic)->save(public_path('adImagesFolder/') . $name1);
                $artist[0]->coverPicUrl = $name1;
                $artist[0]->save();

            }

            $newCoverPicUrl = $artist[0]->coverPicUrl;
            return response()->json(compact( 'newCoverPicUrl'));
        }

        elseif (User::find($id)->role=="company")
        {
            $company = Company::where('user_id','=',$id)->get();

            if ($request->coverPic)
            {
                $randomString = str_random(25);
                $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->coverPic, 0, strpos($request->coverPic, ';')))[1])[1];

                \Image::make($request->coverPic)->save(public_path('adImagesFolder/') . $name1);
                $company[0]->coverPicUrl = $name1;
                $company[0]->save();

            }

            $newCoverPicUrl = $company[0]->coverPicUrl;
            return response()->json(compact( 'newCoverPicUrl'));
        }

    }



    public function apiEditProfilePic(Request $request,$id)
    {

        if(User::find($id)->role=="artist")
        {
            $artist = Artist::where('user_id','=',$id)->get();
            if ($request->profilePic)
            {
                $randomString = str_random(25);
                $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->profilePic, 0, strpos($request->profilePic, ';')))[1])[1];

                \Image::make($request->profilePic)->save(public_path('adImagesFolder/') . $name1);
                $artist[0]->profilePicUrl = $name1;
                $artist[0]->save();
            }

            $newProfilePicUrl = $artist[0]->profilePicUrl;
            return response()->json(compact( 'newProfilePicUrl'));
        }

        elseif (User::find($id)->role=="company")
        {
            $company = Company::where('user_id','=',$id)->get();

            if ($request->profilePic)
            {
                $randomString = str_random(25);
                $name1 =  + time().$randomString.'.' . explode('/', explode(':', substr($request->profilePic, 0, strpos($request->profilePic, ';')))[1])[1];

                \Image::make($request->profilePic)->save(public_path('adImagesFolder/') . $name1);
                $company[0]->profilePicUrl = $name1;
                $company[0]->save();
            }

            $newProfilePicUrl = $company[0]->profilePicUrl;
            return response()->json(compact( 'newProfilePicUrl'));
        }

    }

    public function apiGetArtistAlbumFiles($id)
    {

            $artist = Artist::find($id);

            $artist_id = $artist->id;

            $filesUrl = DB::select('select f.url from files as f, posts as p where p.artist_id = '.$artist_id.' and f.post_id = p.id');

            return response()->json(compact( 'filesUrl'));

    }

    public function apiGetCompanyAlbumFiles($id)
    {

        $company = Company::find($id);

        $company_id = $company->id;

        $filesUrl = DB::select('select f.url from files as f, posts as p where p.company_id = '.$company_id.' and f.post_id=p.id');

        return response()->json(compact( 'filesUrl'));
    }


    public function apiLogoutUser()
    {
        Auth::logout();
        $success = 'Successfully Logged out';
        return response()->json(compact('success'),201);
    }

    public function apiGetArtistOrCompanyDetail($id)
    {
        $user = User::find($id);
        if($user->role=='artist')
        {
            $artist = Artist::where('user_id',$id)->get();

            $userPosts = Post::where('artist_id','=',$artist[0]->id)->with('artist')->with('company')->with('category')->with('competition')->with('rating')->with('claps')->with('files')->get();
            return response()->json(compact( 'userPosts'));
        }
        else if($user->role=='company')
        {
            $company = Company::where('user_id',$id)->get();
            $userPosts = Post::where('company_id','=',$company[0]->id)->with('artist')->with('company')->with('category')->with('rating')->with('claps')->with('files')->get();
            return response()->json(compact( 'userPosts'));
        }

    }

    public function apiGetUserAboutDetail($id)
    {

        $user = User::find($id);
//        return $user->role;
        if($user->role == 'artist')
        {
            $artist = Artist::where('user_id',$id)->get();
            $artistEmail = $artist[0]->email;

            $artistCatId = $artist[0]->category_id;
            $category = Category::find($artistCatId);
            $categoryName = $category->name;

            $artistCityId = $artist[0]->city_id;
            $city = City::find($artistCityId);
            $cityName = $city->name;
            $country_id = $city->country_id;
            $country = Country::find($country_id);
            $countryName = $country->name;
            return response()->json(compact( 'artistEmail','categoryName','cityName','countryName'));
        }
        elseif($user->role == 'company')
        {
            $company = Company::where('user_id',$id)->get();
            $companyEmail = $company[0]->email;

            $companyCatId = $company[0]->category_id;
            $category = Category::find($companyCatId);
            $categoryName = $category->name;

            $companyCityId = $company[0]->city_id;
            $city = City::find($companyCityId);
            $cityName = $city->name;
            $country_id = $city->country_id;
            $country = Country::find($country_id);
            $countryName = $country->name;
            return response()->json(compact( 'companyEmail','categoryName','cityName','countryName'));


        }


    }

    public function apiGetUserAlbumFiles($id)
    {
        $user = User::find($id);

        if($user->role=='artist')
        {
         $artist = Artist::where('user_id',$user->id)->get();

         $artist_id = $artist[0]->id;

         $filesUrl = DB::select('select f.url from files as f, posts as p where p.artist_id = '.$artist_id.' and f.post_id=p.id');

         return response()->json(compact( 'filesUrl'));

        }
        else if($user->role=='company')
        {
            $company = Company::where('user_id',$user->id)->get();
//            return $company;

            $company_id = $company[0]->id;

            $filesUrl = DB::select('select f.url from files as f, posts as p where p.company_id = '.$company_id.' and f.post_id=p.id');

            return response()->json(compact( 'filesUrl'));
        }

    }


}