<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;

class EmailController extends BaseController
{
    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'message' => 'required|string|min:2|max:1000',
        ]);

        if ($validator->fails()) {
            return View(
                'contact', 
                [
                    'message' => '',
                    'errors' => $validator->errors()->getMessages(),
                    'hasValidationError' => true,
                ]
            );
        }

        $data = array (
            'bodyMessage' => $request->message,
            'bodyName' => $request->name,
            'email'    => $request->email
        );
    
        Mail::send ( 'email', $data, function ($message) {
            $message->from ( env('MAIL_FROM_ADDRESS'), 'School mail' );
            $message->to ( env('MAIL_TO') )->subject ( 'New Holy Trinity email' );
        } );

        return View('contact', 
            [
                'message' => 'Successfully send the message. We will get back to you soon!',
                'hasValidationError' => false,
            ]
        );

    }
}
