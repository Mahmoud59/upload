<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressBarUploadFileController extends Controller
{
    public function index()
    {
        return view('progress-bar-file-upload');
    }
 
    public function upload(Request $request) {
        $request->validate([
            'file' => 'required',
        ]);



        $title = time() . '.' . request()->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $title);



        $storeFile = new Post;

        print_r($storeFile);
        $storeFile->title = $title;
        $storeFile->save();

        return response()->json(['success' => 'File Uploaded Successfully']);
    }


}
