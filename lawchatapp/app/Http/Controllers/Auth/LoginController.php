<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
    use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginController extends Controller
{
    // Redirect to Google for authentication
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle the callback from Google
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user(); // Hilangkan stateless()
    
            // Proses login seperti biasa
            $findUser = User::where('email', $user->getEmail())->first();
    
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => encrypt('dummy_password'),
                ]);
    
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }

    // Redirect to Facebook for authentication
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Handle the callback from Facebook
    public function handleFacebookCallback()
    {
        try {
            // Mengambil user dari Facebook menggunakan Socialite
            $user = Socialite::driver('facebook')->user();
    
            // Cek apakah user dengan email ini sudah ada di database
            $findUser = User::where('email', $user->getEmail())->first();
    
            if ($findUser) {
                // Jika user sudah ada, login dan redirect ke dashboard
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {
                // Jika user belum ada, buat user baru di database
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'facebook_id' => $user->getId(),
                    'password' => encrypt('dummy_password'),
                ]);
    
                // Login user baru dan redirect ke dashboard
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            // Jika ada error, redirect ke halaman login
            return redirect()->route('login');
        }
    }
}