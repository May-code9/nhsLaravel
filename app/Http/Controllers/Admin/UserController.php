<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use QrCode;
use App\User;
use Alert;
use App\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUsers = 'active';
        $indexUser = 'active';
        $listUsers = User::paginate(30);
        return view('dashboard.body.user.list', compact('indexUser', 'allUsers', 'listUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allUsers = 'active';
        $createUser = 'active';

        $amount = amount();

        return view('dashboard.body.user.create', compact('createUser', 'allUsers', 'amount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $getUserId = User::where([['first_name', $request->first_name], ['last_name', $request->last_name], ['email', $request->email]])->get()->last();

        $num = rand(108956, 287903876);
        $amount = amount();

        $user = new Transaction();
        $user->user_id = $getUserId->id;
        $user->amount = $amount;
        $user->ref_no = 'T' . $num;
        $user->save();

        return redirect('/users')->with('success_status', 'User Payment Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allUsers = 'active';
        $indexUser = 'active';
        $checkTransaction = Transaction::where('user_id', $id)->count();

        if($checkTransaction == 1) {
          $user = User::where('id', $id)->get()->last();
          $username = $user->first_name . ' ' . $user->last_name . ', ' . $user->email;
          $link = 'https://nmanationalhealthsummit.com/users/' . $id;
          $qrcode = QrCode::size(400)->generate($link);
          $qrcode2 = QrCode::size(300)->generate($link);
          $status = transactionId($id);
          $getHalls = Hall::get();
          return view('dashboard.body.user.iList', compact('allUsers', 'indexUser', 'qrcode', 'qrcode2', 'username', 'status', 'user', 'getHalls'));
        }
        else {
          return redirect('/users')->with('warning_status', 'User has not completed transaction');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $allUsers = 'active';
      $createUser = 'active';

      $user = User::findOrFail($id);

      return view('dashboard.body.user.edit', compact('createUser', 'allUsers', 'user'));
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
        $user = User::findOrFail($id);
        $user->update(['first_name'=>$request->first_name, 'last_name'=>$request->last_name,
        'phone'=>$request->phone, 'email'=>$request->email]);

        return redirect('/users')->with('success_status', 'User Updated');
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
