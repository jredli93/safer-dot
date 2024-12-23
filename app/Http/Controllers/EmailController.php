<?php

namespace App\Http\Controllers;

use App\Models\UserEmail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $userComment = new UserEmail();
        $userComment->email = $request->input('email');
        $userComment->save();

        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('success', 'Subscribed successfully!');
    }
}
