<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollupTransController extends Controller
{
    public function index(Request $request) {
        return view('follow-up.potentialmarket');
    }

    public function transaction(Request $request) {
        return view('follow-up.transaction');
    }

    public function aftersale(Request $request) {
        return view('follow-up.aftersale');
    }
}
