<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index(Request $request) {
        // $validated = $request->validate([
        //     "user_id" => "string|required"
        // ]);

       
        $user = User::firstWhere("user_id", $request->user_id);
        if($user)
        {
            return view("message.send-message")->with("data", ["user" => $user, "reciever" => $request->user_id]);
        }
        else{
            return redirect("home");
        }
    }
    public function sendMessage(Request $request) {
        $validated = $request->validate([
            "user_id" => "string|required",
            "message" => "string|required"
        ]);

        $message = Messages::create([
            "user_id" => $request->user_id,
            "message" => $request->message
        ]);

        return back()->with("success", "Message sent");
    }

    // public function fetchMessage(Request $request) {
    //     if(Auth::user())
    //     {
    //         $messages = Messages::where("user_id", Auth::user()->user_id)->get();
    //         return response()->json(["status" => true, "messages" => $messages]);
    //     }
    //     else {
    //         return response()->json(["status" => false, "messages" => []]);
    //     }
    // }
}