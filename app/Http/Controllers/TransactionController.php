<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransactionController extends Controller
{
    protected function transaction()
    {
        $regTickets = 'active';
        $price = amount();

        return view('pages.transaction', compact('regTickets', 'price'));
    }
    public function userPayment(Request $request)
    {
        //set reference to a variable @ref
        $reference = $request->reference;
        $secret_key = 'sk_test_eba9f474489dd5e17a48c3dbe01909c81793d101';

        //The parameter after verify/ is the transaction reference to be verified
        $url = 'https://api.paystack.co/transaction/verify/'.$reference;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.$secret_key,
                'Content-Type: application/json',
                'Connection: Keep-Alive'
            ]
        );
        //send request
        $request = curl_exec($ch);
        //close connection
        curl_close($ch);
        //declare an array that will contain the result
        $result = array();
        if ($request) {
            $result = json_decode($request, true);
        }

        if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {

            $transid = $result['data']['reference'];
            $email = $result['data']['customer']['email'];
            $first_name = $result['data']['customer']['first_name'];
            $last_name = $result['data']['customer']['last_name'];
            $amount = $result['data']['amount'];
            $converted = $amount/100;

            $compareUser = User::where([['first_name', $first_name], ['last_name', $last_name]])->get()->last();


            $payment = new Transaction();
            $payment->user_id = $compareUser->id;
            $payment->ref_no = $transid;
            $payment->amount = $converted;
            /* $payment->ref_no = $transid; */

            $payment->save();

            $response = array(
                'success' => true,
                'message' => $result,
            );


        }else{
            $response = array(
                'success' => false,
                'message' => $result,
            );
        }

        return response()->json($response);
    }
}
