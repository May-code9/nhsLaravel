<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search_users(Request $request)
    {
        $allUsers = 'active';
        $indexUser = 'active';

        $search = $request->search_item;
        $listUsers = User::where('first_name', 'like', '%' . $search . '%')
        ->orWhere('last_name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->get();

        return view('dashboard.body.user.list', compact('indexUser', 'allUsers', 'listUsers'));
    }
}
