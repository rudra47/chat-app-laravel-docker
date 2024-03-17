<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function conversation(){
        // dd(auth()->user());
        return view('conversation');
    }

    public function postMessage(Request $request){
        
    }
}
