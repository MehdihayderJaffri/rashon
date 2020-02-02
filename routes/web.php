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

// Route::any('/home', ['middleware' => ['auth', 'revalidate', 'user'], 'uses' => 'HomeController@index',])->name('home');

Route::get('/', function () {
    return view('auth/login');
    
});

Route::get('/requisition_form', 'PersonViewController@RequisitForm');
Route::get('/rejected_persons', 'PersonViewController@RejectedPersons');
Route::get('/pending_persons', 'PersonViewController@PendingPersons');

Route::get('/approve/{id}','PersonViewController@Approved');
Route::get('/reject/{id}','PersonViewController@Rejected');
Route::get('/pending/{id}','PersonViewController@Pending');
Route::get('/detailview/{id}','PersonViewController@ViewInDetail');

// Route::get('/person', function () {
//     return view('person');

// });

Route::get('/uds/{id}', 'PersonViewController@EditDS');
Route::post('/updating_due_survey/{id}','PersonViewController@UpdateDS');  


// Route::get('/person', function () {
//     return view('person');

// });
Route::get('person', ['middleware' => ['auth'], 'uses' => 'PersonViewController@viewpeople',])->name('person');
Route::post('/inserting','PersonViewController@insert');

Route::get('experson','PersonViewController@expeople');


Route::get('deleting/{id}','PersonViewController@deleteRec');

Route::get('/up/{id}', 'PersonViewController@updateRec');
Route::post('/updating/{id}','PersonViewController@update_recs');

Route::get('/stop/{id}','PersonViewController@StopRec');
Route::post('/discardcomment/{id}','PersonViewController@stoprecords');	

// Route::post('/stopping/{id}', 'PersonViewController@StopRecs');

Route::get('/commit/{id}','PersonViewController@showcomment');
Route::post('/addingcomments/{id}','PersonViewController@AddComment');

//Survey 

Route::get('upcomingsurvey','PersonViewController@UpSurvey');

Route::get('duesurvey','PersonViewController@DueSurvey');

Route::get('/dashboard', ['middleware' => ['auth'], 'uses' => 'PersonViewController@DashboardFunc',])->name('dashboard');


Route::get('export','PersonViewController@export')->name('export');

//
// Route::any('/search','PersonViewController@Search');
// Route::get('', 'PersonViewController@export')->name('person');

Route::get('surveypayroll','PersonViewController@surveypayroll');
//
Route::get('rationpayroll','PersonViewController@rationpayroll');
Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('dashboard');

// Route::get('/logout', 'HomeController@logoout');
