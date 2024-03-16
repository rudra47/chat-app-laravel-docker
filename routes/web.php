<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatBoxController;

Route::get('/login', [LoginController::class, 'login']);
Route::get('/chat-box', [ChatBoxController::class, 'chatBox']);


// Route::get('/', 'WebController@home')->name('home');
