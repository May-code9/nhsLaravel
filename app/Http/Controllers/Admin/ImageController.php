<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Picture;
use Auth;
use Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = 'active';
        $viewimages = 'active';
        $listpictures = Picture::get();

        return view('dashboard.body.picture.list', compact('listpictures', 'images', 'viewimages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = 'active';
        $addimages = 'active';

        return view('dashboard.body.picture.create', compact('images', 'addimages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rule = [
          'image' => 'required|mimes:jpeg,png|max:5000'
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->passes()) {
            $imageFile = $request->file('image');
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();

            $destinationPath = public_path('/picture');
            Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

            $pictures = $request->all();

            $pictures['image'] = $imageName;
            $pictures['user_id'] = Auth::id();

            Picture::create($pictures);

            return redirect()->back()->with('success_status', 'Picture Added');
        } else {
          return redirect()->back()->with('failure_status', 'Oops Something went wrong');
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
        //
    }
}
