<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(){
        Mail::to("hasansulistyo96@gmail.com")->send(new Email());
        return "Email berhasil dikirim";
    }

    public function view_form(){
        return view('form_send_email');
    }

    public function send(Request $request){
        $email = $request->email;
        $nama = $request->nama;
        Mail::to($email)->send(new Email($nama));
        return "Email berhasil dikirim dari form input.";
    }
}
