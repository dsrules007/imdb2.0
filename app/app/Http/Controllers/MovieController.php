<?php

namespace App\Http\Controllers;

use App\Http\Requests\movieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\JsonResponse
 */
    public function list()
    {
        $movieList =  Movie::all();
        return response()->json($movieList, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $movie = Movie::create($request->all());

        return response()->json($movie, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(movieRequest $request)
    {
        $id =  $request->input('id');
        $movie =  Movie::find($id);

        return response()->json($movie, 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(movieRequest $request)
    {
        $movie = Movie::findOrFail($request->input('id'));

        $movie->delete();

        return response()->json($movie,200);
    }
}
