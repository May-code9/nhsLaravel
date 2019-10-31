<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Hall;

class HallController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $hall = 'active';
    $viewHall = 'active';
    $getHalls = Hall::get();

    return view('dashboard.body.hall.list', compact('hall', 'viewHall', 'getHalls'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $hall = 'active';
    $addHall = 'active';

    return view('dashboard.body.hall.create', compact('hall', 'addHall'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $hall = new Hall();
    $hall->user_id = Auth::id();
    $hall->hall = $request->hall;
    $hall->save();

    return back()->with('success_status', 'Hall Added');
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
    $hall = 'active';
    $viewHall = 'active';
    $editHall = Hall::findOrFail($id);

    return view('dashboard.body.hall.edit', compact('hall', 'viewHall', 'editHall'));
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
    $editHall = Hall::findOrFail($id);
    $editHall->update(['hall'=>$request->hall, 'user_id'=>Auth::id()]);
    return redirect('/hall')->with('success_status', 'Hall Updated');
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
