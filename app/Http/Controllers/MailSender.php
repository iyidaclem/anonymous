<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Mail\MyTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class MailSender extends Controller
{
    function sendMail(Request $request){

        $validate = $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'body' => "required|string"
        ]);


        if($validator->fails()){
                
            return response()->json(["status"=>false, "data"=>$validator->errors()]);       
        }

        $testMail = $request->toArray();
       
 
        // Ship the order...
 
        Mail::to($testMail['email'])->send(new TestMail($testMail));
    }
}
