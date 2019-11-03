<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Certificate;
use App\User;

class CertificateController extends Controller
{
    public function create($id)
    {
      $allUsers = 'active';
      $indexUser = 'active';
      $userId = $id;
      $getCertificate = Certificate::where('user_id', $userId)->get()->last();

      $user = User::where('id', $userId)->get()->last();

      return view('dashboard.body.certificate.create', compact('userId', 'allUsers', 'indexUser', 'user', 'getCertificate'));
    }
    public function store(Request $request)
    {
      $imageFile = $request->file('certificate');
      $imageName = time().'.'.$imageFile->getClientOriginalExtension();

      $destinationPath = public_path('/certificates');
      Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

      $certificate = $request->all();

      $certificate['certificate'] = $imageName;
      $certificate['user_id'] = $request->user_id;

      Certificate::create($certificate);

      return redirect()->back()->with('success_status', 'Certificate Added');
    }
    public function edit($id)
    {
      $allUsers = 'active';
      $indexUser = 'active';
      $userId = $id;
      $getCertificate = Certificate::where('user_id', $userId)->get()->last();

      $user = User::where('id', $userId)->get()->last();

      return view('dashboard.body.certificate.edit', compact('userId', 'allUsers', 'indexUser', 'user', 'getCertificate'));
    }
    public function update(Request $request, $id)
    {
      $imageFile = $request->file('certificate');
      $imageName = time().'.'.$imageFile->getClientOriginalExtension();

      $destinationPath = public_path('/certificates');
      Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

      $update = Certificate::findOrFail($id);
      $update->update(['user_id'=>$id, 'certificate'=>$imageName]);

      return redirect()->back()->with('success_status', 'Certificate Updated');
    }
}
