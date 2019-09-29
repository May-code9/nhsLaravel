<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdatePaymentController extends Controller
{
    public function updatePayment($id)
    {
        $allUsers = 'active';
        $indexUser = 'active';
        $user = User::findOrFail($id);

        return view('dashboard.body.user.update', compact('user', 'allUsers', 'indexUser'));
    }
    public function updatePayment_post(Request $request)
    {
        $num = rand(108956, 287903876);

        $amount = amount();

        $user = new Transaction();
        $user->user_id = $request->user_id;
        $user->amount = $amount;
        $user->ref_no = 'T' . $num;
        $user->save();

        return response()->json(array('message' => 'success'));
    }
}
