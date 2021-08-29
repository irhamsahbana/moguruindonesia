<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
Use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser = User::where('google_id', $user->getId())->first();

            if($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {

                $token = Str::random(64);
                $newUser = User::Create([
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'username' => $user->getEmail(),
                    'email' => $user->getEmail(),
                    'email_verified_at' => Carbon::now(),
                    'google_id' => $user->getId(),
                    'password' => Hash::make($token),
                    'avatar'=> $user->getAvatar(),
                ]);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
