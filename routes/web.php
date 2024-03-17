<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChatBoxController;

Route::get('/login', [LoginController::class, 'login']);
Route::get('/auth/redirect', [LoginController::class, 'githubRedirect'])->name('auth.redirect');
Route::get('/auth/callback', [LoginController::class, 'githubCallback']);

Route::get('/chat-box', [ChatBoxController::class, 'chatBox'])->name('chatBox');
Route::post('/post-message', [ChatBoxController::class, 'postMessage'])->name('postMessage');

// Route::get('/', 'WebController@home')->name('home');
