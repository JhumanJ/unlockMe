<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        if(Auth::user()->isVerified()){
            return redirect('/home');
        } else{
            return redirect('/verify');
        }
    } else {
        // not logged-in
        return view('welcome');
    }
});
Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/verify', 'UserController@verify');
    Route::get('/verify/resend', 'UserController@resendSMS');
    Route::post('/verify/', 'UserController@confirmSMS');


});

Route::group(['middleware' => ['verified']], function () {

    Route::get('/home', 'HomeController@index');
    Route::get('/search/{slot}','SearchController@search');
    Route::get('/chat/{number}','HomeController@chat');
    Route::get('/test','SearchController@test');


});


