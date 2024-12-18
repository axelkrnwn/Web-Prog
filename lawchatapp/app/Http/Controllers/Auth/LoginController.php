<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
    use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where('email', $user->getEmail())->first();
            dd($findUser);

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
                return redirect()->route('chat.index');
            }
        } catch (Exception $e) {
            return redirect()->route('login');
        }
    }

}
