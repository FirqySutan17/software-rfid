<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request) {
        return view('chat.index');
    }

    public function message(Request $request) {
        return view('message.index');
    }
}
