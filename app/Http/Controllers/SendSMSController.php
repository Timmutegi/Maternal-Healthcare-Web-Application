<?php

namespace App\Http\Controllers;


use AfricasTalking\SDK\AfricasTalking;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function index()
    {
        return view('sms.sendsms');
    }

    public function send(Request $request){
        $this->validate($request, [
            'phone' => 'required',
            'date' => 'required'
        ]);

        $username = 'sandbox';
        $apiKey   = '26965282baca5f07ff0296900ffa1771efa51637033026d86c34129716897188';
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $phone = $request->phone;
        $date = $request->date;
        $sms->send([
            'to'      => $phone ,
            'message' => 'This is a reminder to visit the hospital on: '.$date,
        ]);

        return back()->with('success', 'SMS Sent');
       
    }   
}
