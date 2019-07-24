<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendReminder;

class sendEmailController extends Controller
{
    public function index()
    {
        return view('emails.sendreminder');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $data = array(
            'name' => $request->name,
            'date' => $request->date
        );

        $email =$request->email;
        Mail::to($email)->send(new SendReminder($data));
        return back()->with('success', 'Email Sent');
    }
}
