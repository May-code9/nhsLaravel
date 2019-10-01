<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addAdmin = 'active';
        $addAdminIndex = 'active';
        $listAdmins = Admin::with('user')->get();

        return view('dashboard.body.admin.list', compact('listAdmins', 'addAdmin', 'addAdminIndex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addAdminCreate = 'active';
        $addAdmin = 'active';
        $users = User::get();
        return view('dashboard.body.admin.add', compact('users', 'addAdmin', 'addAdminCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkAdmin = Admin::where('user_id', $request->user_id)->count();
        if($checkAdmin == 0) {
            Admin::create($request->all());
            return redirect('/addAdmin');
        }
        else {
            return back()->with('warning_status', 'Admin Already exist');
        }

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
        Admin::findOrFail($id)->delete();

        return back()->with('success_status', 'User removed from Admin');
    }
}
