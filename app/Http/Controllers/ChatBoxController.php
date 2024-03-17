<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBoxController extends Controller
{
    public function chatBox(){
        return view('chat-box');
    }

    public function postMessage(Request $request){
        
    }
}
