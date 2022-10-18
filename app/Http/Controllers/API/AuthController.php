<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
                
            return response()->json(["status"=>false, "data"=>$validator->errors()]);       
        }

                
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'user_id'=>userId(),
            'password' => Hash::make($request->password),
            'refered_by'=>$request->refered_by
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['status'=>true,'data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(["status"=>false, 'data' =>["message"=>"Incorrect credentials"]]);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;
        $messages = Messages::where('user_id',$user->user_id)->get();

        return response()
            ->json(['status' => true, 'data' =>['access_token' => $token, 'token_type' => 'Bearer'], 'messages' => $messages]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

       
        return response()->json(["status"=>true,"data"=>["message"=>"Logged out successfully"]]);
    }
}