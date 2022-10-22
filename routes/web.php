<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs', function () {
    return view('docs.docs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send/{user_id}', [App\Http\Controllers\MessageController::class, 'index'])->name('send');

Route::post('/send-message', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('send-message');
