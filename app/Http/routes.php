<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
	Route::get('/', function () {
		$logged=Auth::check();
		if($logged){
			Auth::user()->name; 
			return redirect("home");
		}
		else{
			return redirect('login');
		}
	});

	Route::get('login', 'LoginController@loadLogin');
	Route::post('login', 'LoginController@doLogin');
	Route::get('destroysession','LoginController@closeSession');

	Route::get('home', 'HomeController@loadHome');

	Route::get('aux','HomeController@aux');

	Route::get('profile','ProfileController@myprofile');
	Route::get('profile/edit','ProfileController@edit');
	Route::get('profile/{id}','ProfileController@view');


});
