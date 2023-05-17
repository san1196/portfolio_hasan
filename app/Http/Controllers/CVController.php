<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class CVController extends Controller
{
    public function index(Request $request)
    {
        $data['about_data'] = About::get();
        return view('halaman_utama', $data);
    }
}