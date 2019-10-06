<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Login;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetController extends Controller
{
    public function getUser($email)
    {
        $countUser = User::where('email', $email)->count();

        if($countUser == 0) {
            $response = array(
                'success' => false,
                'message' => 'User Does not Exist',
            );
        }
        else {
            $getUser = User::where('email', $email)->get()->last();
            $checkTransaction = Transaction::where('user_id', $getUser->id)->count();
            if($checkTransaction == 0) {
                $response = array(
                    'success' => true,
                    'message' => 'User Found',
                    'email' => $getUser->email,
                    'paid' => false,
                );
            }
            else {
                $response = array(
                    'success' => true,
                    'message' => 'User Found',
                    'email' => $getUser->email,
                    'paid' => true,
                );
            }
        }

        return response($response);
    }

    public function deleteLogin(Request $request, $email)
    {
        $getUser = User::where('email', $email)->get()->last();
        Login::where('user_id', $getUser->id)->delete();

        $response = array(
            'success' => true,
            'message' => 'User Logged Out',
        );
        return response($response);
    }
}
