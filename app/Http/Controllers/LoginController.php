<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login(){
        return view('login');
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

        return redirect()->route('chatBox');
    }
}
