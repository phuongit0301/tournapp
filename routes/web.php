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

/*Route::get('/', function () {
     return view('dashboard.login');
});*/


// Route::group(['domain' => getenv('TOURN_APP_DOMAIN'), 'namespace' => 'Dashboard'], function () {
Route::group(['namespace' => 'Dashboard'], function () {

    Route::get('/', function () {
        if( Auth::check() ){
            return redirect('organization');
        } else{
            return view('dashboard.login');
        }        
    });


    Route::get('prototype', 'PrototypeController@index');
    
    Route::get('get_prototype', 'PrototypeController@show_prototype');

    Route::get('preview', 'PrototypeController@preview');
    Route::get('get_preview', 'PrototypeController@show_preview');

    Route::get('organization', 'OrganizationController@index');
    Route::get('organization_start', 'OrganizationController@organization_start');

    Route::get('leagues', 'LeaguesController@index');

    Route::get('tournament', 'TournamentController@index');

    Route::get('competition_setup', 'CompetitionController@index');
    Route::get('competition_category', 'CompetitionController@competition_category');
    Route::get('competition_category_chart', 'CompetitionController@competition_category_chart');
    Route::get('competition_stages', 'CompetitionController@competition_stages');

    Route::post('login', 'RegisterController@login');
    Route::get('logout', 'RegisterController@logout');

    Route::post('storeOrganization', 'OrganizationController@storeOrganization');
    Route::post('storeSubOrganization', 'OrganizationController@storeSubOrganization');

    // COMPETITION
    Route::group(['prefix' => 'organization'], function () {
    	Route::resource('setup', 'OrganizationController');
    });    
    
    Route::get('signup', 'SignUpController@index');
    
});
// Auth::routes();

// Route::get('/home', 'HomeController@index');


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('sessions', ['uses' => 'SessionsController@index']);
    Route::get('session-planning', ['uses' => 'SessionPlanningController@index']);
});

Route::prefix('api')->namespace('Api')->group(function () { 
    Route::match(['get', 'post'], 'session/{session_id}', 'APIController@get_session' );  
    Route::get( 'match_status', 'APIController@get_match_status' );
    Route::post( 'update_player', 'APIController@update_player' );   
    Route::post( 'update_match', 'APIController@update_match' );  
    Route::post( 'update_team_status', 'APIController@update_team_status' );  
    Route::post( 'update_payment_status', 'APIController@update_payment_status' );
    
	Route::get( 'matches', 'APIController@get_matches' );
	Route::get( 'time_group', 'APIController@time_group' );
	Route::get( 'courts', 'APIController@courts' );

    Route::get('get_data', 'APIController@get_data');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

