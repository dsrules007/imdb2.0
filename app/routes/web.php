<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// create
Route::post('/insertUser','userController@create');
Route::post('/createMovie','movieController@create');
Route::post('/createReview','reviewController@create');

//delete
Route::post('/deleteUser','userController@delete');
Route::post('/deleteMovie','movieController@delete');
Route::post('/deleteReview','reviewController@delete');

// get and get all
Route::get('/getUser','userController@get');
Route::get('/listUsers','userController@list');

Route::get('/getMovie','movieController@get');
Route::get('/listMovie','movieController@list');

Route::get('/getReview','reviewController@get');
Route::get('/listReview','reviewController@list');

//Get Average rating of movie

//Get Average rating of user
