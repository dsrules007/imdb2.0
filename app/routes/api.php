<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// create
Route::post('/insertUser','userController@create');
Route::post('/createMovie','movieController@create');
Route::post('/createReview','reviewController@create');

//delete
Route::delete('/deleteUser','userController@delete');
Route::delete('/deleteMovie','movieController@delete');
Route::delete('/deleteReview','reviewController@delete');

// get and get all
Route::get('/getUser','userController@get');
Route::get('/listUsers','userController@list');

Route::get('/getMovie','movieController@get');
Route::get('/listMovie','movieController@list');

Route::get('/getReview','reviewController@get');
Route::get('/listReview','reviewController@list');

//Get Average rating of movie

//Get Average rating of user
