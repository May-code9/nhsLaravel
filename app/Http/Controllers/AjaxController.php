<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function getAmount()
    {
        $nowDate = Carbon::now()->toDateString();
        $early = '2019-10-04';
        $late = '2019-11-03';
        $onSite = '2019-11-04';
        $convertedNowDate = strtotime($nowDate);
        $convertedEarly = strtotime($early);
        $convertedLate = strtotime($late);
        $convertedOnSite = strtotime($onSite);
        if($convertedNowDate < $convertedEarly) {
            $price = 20000;
        }
        elseif($convertedNowDate > $convertedEarly && $convertedNowDate < $convertedLate) {
            $price = 25000;
        }
        elseif ($convertedNowDate >= $convertedOnSite) {
            $price = 30000;
        }
        return response()->json($price);
    }
}
