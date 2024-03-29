<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
                // $request->session()->put('user', $user);
            Auth::login($user);

            return redirect()->route('conversation');

        } else {
            return redirect()->route('web.login');
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback(){
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'email' => $githubUser->email,
        ], [
            'name' => $githubUser->name,
            'password' => "password",
        ]);

        Auth::login($user);

        return redirect()->route('conversation');
    }
}
