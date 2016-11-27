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

Route::post(
    '/token',
    ['uses' => 'TokenController@generate', 'as' => 'token-generate']
);



Route::post('/chat/message/add', 'MatchController@addMessage');
Route::post('/unlock', 'QuestionController@unlock');
//Route::get('/getUnlock/{id}','QuestionController@getUnlock');
Route::get('/answer/get/{match_id}/{id}', 'QuestionController@getAnswer');


