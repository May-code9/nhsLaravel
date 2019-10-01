<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function getAmount()
    {
        $price = amount();
        return response()->json($price);
    }
}
