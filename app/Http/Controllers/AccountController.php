<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;
use QrCode;
use Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function account()
    {
        $account = 'active';
        $share = Share::page('https://www.nationalnma.org')
            ->facebook()
            ->twitter()
            ->linkedin('Plan to attend')
            ->whatsapp();
        $username = Auth::user()->first_name . ' ' . Auth::user()->last_name . ', ' . Auth::user()->email;
        $qrcode = QrCode::size(300)->generate($username);
        return view('pages.account', compact('account', 'share', 'qrcode'));
    }
}
