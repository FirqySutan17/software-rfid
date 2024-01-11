<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function index(Request $request) {
        return view('placement.index');
    }

    // public function message(Request $request) {
    //     return view('message.index');
    // }
}
