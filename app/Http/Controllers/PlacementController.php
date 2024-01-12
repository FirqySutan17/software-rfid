<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function index($rack_no, Request $request) {
    	dd($rack_no);
        return view('placement.index');
    }

    // public function message(Request $request) {
    //     return view('message.index');
    // }
}
