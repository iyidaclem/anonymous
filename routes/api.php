<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//API route for login user
Route::post('/sendmail', [App\Http\Controllers\MailSender::class, 'sendMail']);

// forgetpassword
Route::post('/forgot-password', [App\Http\Controllers\API\ForgetPasswordController::class, 'forgotPassword']);

// addNewPassword
Route::post('/new-password', [App\Http\Controllers\API\ForgetPasswordController::class, 'newPassword']);

// Post Message 
Route::post('/send-message', [App\Http\Controllers\API\MessageController::class, 'sendMessage']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

    // Fetch Message
    Route::post('/fetch-message', [App\Http\Controllers\API\MessageController::class, 'fetchMessage']);
});
