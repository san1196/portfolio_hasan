<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index(){
        return view('upload_file');
    }

    public function upload(Request $request){
        $request->validate([
            'file_upload.*' => 'mimes:jpeg,jpg,png'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file_upload');
 
        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

                // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

                // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

                // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images';

            // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
}
