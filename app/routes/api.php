<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;


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

// create
Route::post('/createUser',[UserController::class, 'create']);
Route::post('/createMovie',[MovieController::class, 'create']);
Route::post('/createReview',[ReviewController::class, 'create']);

//delete
Route::delete('/deleteUser',[UserController::class, 'delete']);
Route::delete('/deleteMovie',[MovieController::class, 'delete']);
Route::delete('/deleteReview',[ReviewController::class, 'delete']);

// get and get all
Route::get('/getUser',[UserController::class, 'get']);
Route::get('/listUsers',[UserController::class, 'list']);

Route::get('/getMovie',[MovieController::class, 'get']);
Route::get('/listMovies',[MovieController::class, 'list']);

Route::get('/getReview',[ReviewController::class, 'get']);
Route::get('/listReviews',[ReviewController::class, 'list']);



//Get Average rating of movie

//Get Average rating of user

