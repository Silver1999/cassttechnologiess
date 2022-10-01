<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\RespondMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function mail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()])->setStatusCode(400);
        }
        $data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message') ];

//        Mail::send('emails.respond', [
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'phone' => $request->get('phone'),
//            'message' => $request->get('message') ],
//            function ($message) use ($request) {
//                $message->from($request->get('email'));
//                $message->to('casstechnologies@gmail.com')
//                    ->subject('New message from casstechnologies!');
//            });
        Mail::to($request->email)->queue(new ContactMail());
        Mail::to('casstechnolgies@gmail.com')->queue(new RespondMail($data));
        return response()->json(['success' => 'Message send successfully!!'])->setStatusCode(201);
    }

}
