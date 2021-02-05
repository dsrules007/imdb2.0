<?php

namespace App\Http\Controllers;

use App\Http\Requests\reviewRequest;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Review;

class ReviewController extends Controller
{
   /*     private $user;
        private $movie;

        public function __construct(User $user, Movie $movie){
            $this->$user = $user;
            $this->$movie = $movie;
        }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $reviewList =  Review::all();
        return response()->json($reviewList, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $review = Review::create($request->all());

        return response()->json(array(
            'userId' => $review->id_user,
            'movieId' => $review->id_movie,
            'rating' => $review->rating,
            'review' => $review->review,
            'option' => 'get',
            'status' => 'success'),
            200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(reviewRequest $request)
    {
        $id =  $request->id;
        $review =  Review::find($id);

        return response()->json(array(
            'userId' => $review->id_user,
            'movieId' => $review->id_movie,
            'rating' => $review->rating,
            'review' => $review->review,
            'option' => 'get',
            'status' => 'success'),
            200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(reviewRequest $request)
    {
        $status = false;
        $code = 404;
        $review = Review::findOrFail($request->id);

        if($review){
            $review->delete();
            $status = true;
            $code = 200;
        }

        return response()->json(array(
            'userId' => $review->id_user,
            'movieId' => $review->id_movie,
            'rating' => $review->rating,
            'review' => $review->review,
            'option' => 'get',
            'status' => $status),
            $code);
    }
}
