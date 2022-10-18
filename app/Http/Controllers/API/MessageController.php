<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request) {
        $validated = $request->validate([
            "user_id" => "string|required",
            "message" => "string|required"
        ]);

        $message = Messages::create([
            "user_id" => $request->user_id,
            "message" => $request->message
        ]);

        return response()->json(["status" => true, "data" => $message]);
    }

    public function fetchMessage(Request $request) {
        if(Auth::user())
        {
            $messages = Messages::where("user_id", Auth::user()->user_id)->get();
            return response()->json(["status" => true, "messages" => $messages]);
        }
        else {
            return response()->json(["status" => false, "messages" => []]);
        }
    }
}
