<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('saveMessage', 'MessageController@saveMessage');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::group([
//
//    'middleware' => 'api',
//    'prefix' => 'auth'
//
//], function ($router) {
//
//    Route::post('login', 'AuthController@login');
//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');
//
//});



//Route::post('login', 'UserController@authenticate');
Route::get('categories', 'CategoryController@categoriesList');
Route::get('countries', 'CountryController@countriesList');
Route::get('cities/{id}', 'CityController@citiesList');
Route::post('registerArtist', 'UserController@registerArtist');
Route::post('login', 'UserController@authenticate');
Route::get('getTopRatedArtists', 'PostController@apiGetTopRatedArtists');
Route::get('getAllScoutingPosts', 'PostController@apiGetAllScoutingPosts');


//Route::post('joinCompetition', 'CompetitionController@apiJoinCompetition');
//Route::get('getAllCompetitions', 'UserController@apiGetAllCompetitions');
Route::post('registerCompany', 'UserController@registerCompany');
Route::get('getUserDetail/{id}', 'UserController@apiGetUserDetail');
Route::get('getPostRating/{id}', 'UserController@apiGetPostRating');
Route::get('getCityWithCountry/{id}', 'CityController@apiGetCityWithCountry');
Route::get('getCategory/{id}', 'CategoryController@apiGetCategory');
Route::get('getUsersProfilePicsForNewsFeed/{id}', 'UserController@apiGetUsersProfilePicsForNewsFeed');
Route::post('setRating', 'RatingController@apiSetRating');

Route::post('setClaps', 'RatingController@apiSetClaps');

Route::post('contact', 'ContactController@apiContact');

Route::get('password/reset','Api\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('forgot/password', 'Api\Auth\ForgotPasswordController')->name('forgot.password');
Route::get('rest/public/home','ResetPasswordController@logOut');



Route::get('stripeRequests', 'CompetitionController@stripeRequests');
Route::get('competitions', 'UserController@apiGetAllCompetitions');
Route::group(['middleware' => ['jwt.verify']], function(){

    Route::get('user', 'UserController@getAuthenticatedUser');
//    Route::post('postAd', 'AdController@apiPostAd');
//    Route::get('getAllPosts', 'PostController@apiGetAllPosts');
    Route::get('getAllPosts', 'PostController@apiGetAllPosts');
    Route::get('getAllPostsForCompany', 'PostController@apiGetAllPostsForCompany');

    Route::get('getUserPosts/{id}','UserController@apiGetUserPosts');
    Route::get('getCompanyPosts/{id}','CompanyController@apiGetCompanyPosts');
    Route::get('getCompetitions/{id}','CompetitionController@apiGetCompetitions');
//    Route::get('artistCompetitionCount/{id}','CompetitionController@artistCompetitionCount');
    Route::post('editCoverPic/{id}','UserController@apiEditCoverPic');
    Route::post('editProfilePic/{id}','UserController@apiEditProfilePic');
    Route::get('getArtistAlbumFiles/{id}','UserController@apiGetArtistAlbumFiles');
    Route::get('getCompanyAlbumFiles/{id}','UserController@apiGetCompanyAlbumFiles');
    Route::get('logout-user','UserController@apiLogoutUser');
    Route::post('postContent', 'PostController@apiPostContent');
    Route::post('joinCompetition', 'CompetitionController@apiJoinCompetition');
//    Route::get('getAllCompetitions', 'UserController@apiGetAllCompetitions');
    Route::get('getUserAboutDetail/{id}', 'UserController@apiGetUserAboutDetail');
    Route::get('getUserAlbumFiles/{id}', 'UserController@apiGetUserAlbumFiles');
    Route::post('joinScouting', 'CompetitionController@apiJoinScouting');
    Route::get('getArtistOrCompanyDetail/{id}', 'UserController@apiGetArtistOrCompanyDetail');
//    Route::post('saveMessage', 'MessageController@saveMessage');
    Route::post('getUserConversation', 'MessageController@getUserMessagesById');


    Route::get('artistCompetitionCount/{id}','CompetitionController@artistCompetitionCount');
    Route::get('getCompanyCompetitionsCount/{id}','CompetitionController@getCompanyCompetitionsCount');
    Route::get('competitionWithPosts/{id}','CompetitionController@competitionWithPosts');
    Route::get('competitionParticipants/{id}','CompetitionController@competitionParticipants');
    Route::get('scoutingCheck/{id}','ScoutingController@scoutingCheck');
    Route::get('recentCompetitions','CompetitionController@recentCompetitions');



//    NEW End points
    Route::post('competitionOpenRequest','CompetitionController@competitionOpenRequest');
    Route::get('competitions/{id}','CompetitionController@categoryCompetitions');
    Route::get('competitions/{id}','CompetitionController@categoryCompetitions');
    Route::get('categoryDetail/{id}','CompetitionController@categoryDetail');
//    Route::get('allFeedPosts/{id}','CompetitionController@allFeedPosts');
    Route::get('allFeedPosts','CompetitionController@allFeedPosts');
    Route::get('userClap/{id}','CompetitionController@hasUserClapped');
    Route::get('topPerformers/{id}','CompetitionController@topPerformers');
    Route::get('userTotalClaps/{id}','CompetitionController@userTotalClaps');




});

