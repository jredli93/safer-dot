<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;

class ApplicationController extends Controller
{
    public function ApplicationForm(Request $request) {

    $this->validate($request,[
        'accept'=>'required'
    ]);

     Mail::to('application@westexpressllc.com')->send(new ApplicationMail($request->all()));
     return back()->with('success', 'Thanks for your application!');

    }
}
