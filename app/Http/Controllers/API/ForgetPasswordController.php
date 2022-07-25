<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
   function forgotPassword(Request $request){
    $validate = $validator = Validator::make($request->all(),[
        'email' => 'required|string|max:255'
    ]);


    if($validator->fails()){
            
        return response()->json(["status"=>false, "data"=>$validator->errors()]);       
    }

    $user = User::where('email',$request->email)->get();
    if(count($user)==0){return response()->json(["status"=>false,"data"=>["message"=>"User not found"]]);}

    $token = Str::random(6);

    $updated = User::where("email",$request->email)->update(["pass_reset_code"=>$token]);

    $data = ["email"=>$request->email,"name"=>$user[0]->first_name,"body"=>"Your password reset code is $token"];      

    Mail::to($data['email'])->send(new TestMail($data));

    return response()->json(["status"=>true, "data"=>["message"=>"We have sent you password reset token in your email."]]);
   }



   function newPassword(Request $request){
    try {
        $validate = $validator = Validator::make($request->all(),[
            'reset_code'=>"required|string",
            'email' => 'required|string|max:255',
            "new_password"=>'required|string'
        ]);
    
    
        if($validator->fails()){
                
            return response()->json(["status"=>false, "data"=>$validator->errors()]);       
        }
    
        $user = User::where("email",$request->email)->get();
        if(count($user)==0){return response()->json(["status"=>false,"data"=>["message"=>"User not found"]]);}
        
        if($user[0]->pass_reset_code!==$request->reset_code){return response()->json(["status"=>false,"data"=>["message"=>"Invalid reset code"]]);}
    
        User::where("email",$user[0]->email)->update(["pass_reset_code"=>null,"password"=>Hash::make($request->new_password)]);
        return response()->json(["status"=>true,"data"=>["message"=>"Password changed"]]);
        
    } catch (\Throwable $th) {
        return $th;
        return response()->json(["status"=>false,"data"=>["message"=>"Something went wrong"]]);
        
    }
    }


}
