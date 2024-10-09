<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.landing');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/chat/{id?}', [ChatRoomController::class, 'index']);
Route::post('/chat/{id?}', [ChatController::class, 'add']);
