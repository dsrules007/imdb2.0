<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $userList =  User::all();
        return response()->json($userList, 200 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(userRequest $request)
    {
        $user = User::create($request->all());

        return response()->json(array(
            'user' => $user->username,
            'option' => 'create',
            'status' => 'success'),
            200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(userRequest $request)
    {

        $id =  $request->id;
        $user =  User::find($id);

        return response()->json(array(
            'user' => $user->username,
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
    public function delete(userRequest $request)
    {
        $status = false;
        $code = 404;
        $user = User::findOrFail($request->id);

        if(User::findOrFail($request->id)){
            $user->delete();
            $status = true;
            $code = 200;
        }

        return response()->json(array(
            'user' => $user,
            'option' => 'delete',
            'status' => $status),
            $code);
    }
}
