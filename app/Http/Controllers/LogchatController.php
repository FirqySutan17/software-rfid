<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogchatController extends Controller
{
    public function index(Request $request) {
        return view('log-chat.index');
    }
}
