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
        return view('auth.new_login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
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
                    'email' => $user->getEmail(),
                    'email_verified_at' => Carbon::now(),
                    'google_id' => $user->getId(),
                    'password' => Hash::make($token),
                    'avatar'=> $user->getAvatar(),
                    'slug' => Str::lower($user->user['given_name'].'-'.$user->user['family_name'].'-'.Str::random(9)),
                ]);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $usr = new User;
        $usr->first_name = $request->first_name;
        $usr->last_name = $request->last_name;
        $usr->slug = Str::lower($request->first_name.'-'.$request->last_name.'-'.Str::random(9));
        $usr->email = $request->email;
        $usr->phone = $request->phone;
        $usr->password = Hash::make($request->password);
        $usr->save();

        return redirect()->route('auth.login')->with([
            'msgs' => 'succesfully!'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
