<?php

namespace App\Http\Controllers\Api;

use App\Login;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Register as UserResource;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return UserResource
     */
    public function store(Request $request)
    {
        $checkEmail = Test::where('email', $request->email)->count();
        if($checkEmail == 0){
            new UserResource(Test::create([
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]));

            $user = Test::where('email', $request->email)->get()->last();
            $userId = $user->id;
            new \App\Http\Resources\UserLogin(Login::create([
                'user_id' => $userId,
                'slug' => 1,
            ]));

            $response = array(
                'success' => true,
                'message' => 'Login Successful',
            );
        }
        else {
            $response = array(
                'success' => false,
                'message' => 'User Already Exist',
            );
        }

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
