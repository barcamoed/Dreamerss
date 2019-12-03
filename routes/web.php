<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('admin/activity');
//});

Route::get('/datatables', function () {
    return view('admin/datatables');
});

//Route::get('/artistsTable', function () {
//    return view('admin/artistDataTable');
//})->name('artistsTable');



//Route::get('/companiesTable', function () {
//    return view('admin/companiesDataTable');
//})->name('companiesTable');

//Route::get('/competitionsTable', function () {
//    return view('admin/competitionsTable');
//})->name('competitionsTable');

//Route::get('/scoutingsTable', function () {
//    return view('admin/scoutingsTable');
//})->name('scoutingsTable');

Route::get('/signin', function () {
    return view('admin/signin');
})->name('signin');


Route::Post('/loginEnter','AdminController@adminLogin')->name('loginEnter');
Route::post('/postContactInfo','ContactController@sendContactFormDataToAdminPanelAndAdminEmail')->name('postContactInfo');//Not working Jb middleware k andar rakho
Route::get('/replyEmail/{id}','ContactController@showReplyEmail')->name('replyEmail');
Route::get('/logout','AdminController@adminLogout')->name('logout');
//Route::get('/loggedInUser','AdminController@loggedInUser')->name('loggedInUser');
Route::post('/changeAdminInfo','AdminController@changeAdminInfo')->name('changeAdminInfo');
Route::post('/postCompetition','CompetitionController@postCompetitionRequest')->name('postCompetition');
Route::get('/getCompetitionDetail/{id}','CompetitionController@getCompetitionDetail')->name('getCompetitionDetail');
Route::post('/addDateToCompetition','CompetitionController@addDateToCompetition')->name('addDateToCompetition');


Route::post('/sendMessage/{id}','AdminController@sendMessage')->name('sendMessage');
Route::group(['middleware' => 'auth'], function () {

    Route::get('/artistsTable','ArtistController@showArtists')->name('artistsTable');
    Route::get('/companiesTable','CompanyController@showCompanies')->name('companiesTable');
    Route::get('/competitionsTable','CompetitionController@showCompetitions')->name('competitionsTable');
    Route::get('/scoutingsTable','ScoutingController@showScoutings')->name('scoutingsTable');
    Route::get('/acceptedCompetitions','CompetitionController@showAcceptedCompetitions')->name('acceptedCompetitions');
    Route::get('/rejectedCompetitions','CompetitionController@showRejectedCompetitions')->name('rejectedCompetitions');
    Route::get('/ongoingCompetitions','CompetitionController@showOngoingCompetitions')->name('ongoingCompetitions');
    Route::get('/completedCompetitions','CompetitionController@showCompletedCompetitions')->name('completedCompetitions');
    Route::get('/contactsTable','ContactController@showContactsTable')->name('contactsTable');
    Route::get('/acceptCompetition/{id}','CompetitionController@acceptCompetition')->name('acceptCompetition');
    Route::get('/rejectCompetition/{id}','CompetitionController@rejectCompetition')->name('rejectCompetition');
    Route::Post('/sendReplyEmail','ContactController@sendReplyEmail')->name('sendReplyEmail');
    Route::get('/newRequests','CompetitionController@showNewRequests')->name('newRequests');
    Route::get('/getAdminProfilePic','CompetitionController@getAdminProfilePic')->name('getAdminProfilePic');
    Route::get('/adminProfile','AdminController@showAdminProfileInfo')->name('adminProfile');
    Route::get('/messenger','AdminController@showMessengerPage')->name('messenger');
    Route::get('/getMessages/{id}','AdminController@getMessages')->name('getMessages');
    Route::get('/categories','CategoryController@getCategories')->name('categories');
    Route::get('/add-category','CategoryController@addCategoryView')->name('add-category');
    Route::post('/addCategory','CategoryController@addCategory')->name('addCategory');

//    Route::post('/sendMessage/{id}','AdminController@sendMessage')->name('sendMessage');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
