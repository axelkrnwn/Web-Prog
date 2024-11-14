<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\guestMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    if (Auth::check()){
        return redirect()->route('chat.index');
    }
    return view('home.landing');
})->name('home');

// Routes untuk Autentikasi
Route::middleware(guestMiddleware::class)->group(function(){
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    // Socialite Google
    Route::get('auth/google', [UserController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);

    // Socialite Facebook
    Route::get('auth/facebook', [UserController::class, 'redirectToFacebook'])->name('facebook.login');
    Route::get('auth/facebook/callback', [UserController::class, 'handleFacebookCallback']);
});

// Routes untuk fitur Chat (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/chat/{id?}', [ChatRoomController::class, 'index'])->name('chat.index');
    Route::post('/chat/{id?}', [ChatController::class, 'add'])->name('chat.add');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
