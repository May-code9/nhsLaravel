<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Login;
use App\Http\Resources\UserLogin as UserResource;
use Illuminate\Support\Facades\Hash;

class UserLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $userCount = User::where('email', $request->email)->count();
        if($userCount == 0) {
            $response = array(
                'success' => false,
                'message' => 'User does not exist, please register',
            );
        }
        else {
            $user = User::where('email', $request->email)->get()->last();
            $loggedIn = Login::where('user_id', $user->id)->count();
            if($loggedIn == 0) {
                $check = Hash::check($request->password, $user->password);
                if($check) {
                    $userId = $user->id;

                    new UserResource(Login::create([
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
                        'message' => 'Password incorrect',
                    );
                }
            }
            else {
                Login::where('user_id', $user->id)->delete();

                $check = Hash::check($request->password, $user->password);
                if($check) {
                    $userId = $user->id;

                    new UserResource(Login::create([
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
                        'message' => 'Password incorrect',
                    );
                }
            }
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
        Login::where('user_id', $id)->delete();
    }
}
