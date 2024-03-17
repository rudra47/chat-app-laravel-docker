<?php

use App\Http\Middleware\AuthVerification;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConversationController;

Route::get('/login', [LoginController::class, 'login']);
Route::get('/auth/redirect', [LoginController::class, 'githubRedirect'])->name('auth.redirect');
Route::get('/auth/callback', [LoginController::class, 'githubCallback']);

Route::middleware([AuthVerification::class])->group(function () {
    Route::get('/conversation', [ConversationController::class, 'conversation'])->name('conversation');
    Route::post('/post-message', [ConversationController::class, 'postMessage'])->name('postMessage');
});

// Route::get('/', 'WebController@home')->name('home');
