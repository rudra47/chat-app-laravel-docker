<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatBoxController;

Route::get('/chat-box', [ChatBoxController::class, 'chatBox']);


// Route::get('/', 'WebController@home')->name('home');
