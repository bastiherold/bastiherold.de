<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('singlepage.index');
    }

    public function sendContactMail(Request $request)
    {
        return new \App\Mail\Contact();
    }
}
