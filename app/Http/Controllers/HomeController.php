<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        toastr()->success('ok Message');
        return view('home');
    }



    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        // $request->file->move(public_path('uploads'), '1.png');
        $request->file->storePubliclyAs('/public/images/' , 'test.png' );  
        // $request->file->move(public_path('uploads'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }



}
