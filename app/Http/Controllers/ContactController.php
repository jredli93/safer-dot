<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\DriverMail;
use App\Mail\OperatorMail;

class ContactController extends Controller
{
    public function ContactForm(Request $request) {
     Mail::to('application@westexpressllc.com')->send(new ContactMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');
    }

    public function DriverForm(Request $request) {
     Mail::to('application@westexpressllc.com')->send(new DriverMail($request->all()));
     return back()->with('success', 'Thanks for your application!');
    }

    public function OperatorForm(Request $request) {
     Mail::to('application@westexpressllc.com')->send(new OperatorMail($request->all()));
     return back()->with('success', 'Thanks for your application!');
    }
}
