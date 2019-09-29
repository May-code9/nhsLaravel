<?php
use App\Transaction;
use App\Admin;
use App\User;
use Carbon\Carbon;

function transaction() {
    $checkTransaction = Transaction::where('user_id', Auth::id())->count();
    return $checkTransaction;
}
function transactionId($id) {
    $checkTransaction = Transaction::where('user_id', $id)->count();
    return $checkTransaction;
}
function checkAdmin() {
    $checkAdminStatus = Admin::where('user_id', Auth::id())->count();
    if($checkAdminStatus > 0) {
        $isAdmin = 1;
    }
    else {
        $isAdmin = 0;
    }

    return $isAdmin;
}
function adminStatus () {
    $checkAdminStatus = Admin::where('user_id', Auth::id())->get()->last();
    $adminStatus = $checkAdminStatus->slug;

    return $adminStatus;
}
function countAdmin() {
    $countAdmin = Admin::count();
    $getRole = $countAdmin;

    return $getRole;
}
function allUser() {
    $countUsers = User::count();
    return $countUsers;
}
function countTransaction() {
    $countTransaction = Transaction::count();
    return $countTransaction;
}
function amount() {
    $nowDate = Carbon::now()->toDateString();
    $early = '2019-10-04';
    $late = '2019-11-03';
    $onSite = '2019-11-04';
    $convertedNowDate = strtotime($nowDate);
    $convertedEarly = strtotime($early);
    $convertedLate = strtotime($late);
    $convertedOnSite = strtotime($onSite);
    if($convertedNowDate < $convertedEarly) {
        $amount = 20000;
    }
    elseif($convertedNowDate > $convertedEarly && $convertedNowDate < $convertedLate) {
        $amount = 25000;
    }
    elseif ($convertedNowDate >= $convertedOnSite) {
        $amount = 30000;
    }

    return $amount;
}

