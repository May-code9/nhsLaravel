<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Pdf;
use Auth;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $docs = 'active';
      $viewDocs = 'active';

      $listDocs = Pdf::get();
      return view('dashboard.body.docs.list', compact('docs', 'viewDocs', 'listDocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $docs = 'active';
      $addDocs = 'active';

      return view('dashboard.body.docs.create', compact('docs', 'addDocs'));
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
          'title' => ['required', 'string'],
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->passes()) {
          $pdf = $request->file('pdf');

          $uniqueFileName = uniqid() . $pdf->getClientOriginalName();
          $pdfPath = public_path('docs');
              $pdf->move($pdfPath, $uniqueFileName);

          $content = $request->all();
          $content['pdf'] = $uniqueFileName;
          $content['user_id'] = Auth::id();

          Pdf::create($content);
          return redirect()->back()->with('success_status', 'Document Uploaded Successfully');
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
