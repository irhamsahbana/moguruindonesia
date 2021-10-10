<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManualRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
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
        $message = [
            'required' => 'kolom :attribute dibutuhkan.',
            'email' => 'email tidak valid.'
        ];

        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ], $message);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }

        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
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
                return redirect()->intended('welcome');
            } else {
                $newUser = User::Create([
                    'first_name' => $user->user['given_name'],
                    'last_name' => $user->user['family_name'],
                    'email' => $user->getEmail(),
                    'email_verified_at' => Carbon::now(),
                    'google_id' => $user->getId(),
                    'password' => 'not set',
                    'avatar'=> $user->getAvatar(),
                    'slug' => Str::lower($user->user['given_name'].'-'.$user->user['family_name'].'-'.Str::random(9)),
                ]);

                Auth::login($newUser);
                return redirect()->intended('welcome');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(ManualRegisterRequest $request)
    {
        $usr = new User;
        $usr->first_name = $request->first_name;
        $usr->last_name = $request->last_name;
        $usr->slug = Str::lower($request->first_name.'-'.$request->last_name.'-'.Str::random(9));
        $usr->email = $request->email;
        $usr->phone = $request->phone;
        $usr->password = Hash::make($request->password);
        $usr->save();

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Auth::login($usr);

        Mail::send('email.confirm_email', ['token' => $token], function($message){
            $message->to(Auth::user()->email);
            $message->subject('Konfirmasi Email');
        });

        return redirect()->route('welcome');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function confirmEmailSend() 
    {
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => Auth::user()->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.confirm_email', ['token' => $token], function($message){
            $message->to(Auth::user()->email);
            $message->subject('Konfirmasi Email');
        });

        return redirect()->route('verification.notice');
    }

    public function confirmEmail($token)
    {
        $email_confirm = DB::table('password_resets')->where('token', $token)->first();
 
        if(!empty($email_confirm)){
            DB::table('users')
            ->where('email', $email_confirm->email)
            ->update(['email_verified_at' => Carbon::now()]);

            DB::table('password_resets')->where('email', $email_confirm->email)->delete();
            $user = DB::table('users')->where('email', $email_confirm->email)->first();
            $user = User::find($user->id);

            Auth::login($user);
            return redirect()->route('verification.success');
        } else {
            return redirect()->route('verification.invalid');
        }
    }

    

}
