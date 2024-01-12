<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function index($rack_no, Request $request) {
    	dd($rack_no);
    	$cold_storage 	= $rack_no[0].$rack_no[1];
    	$rack_position	= $rack_no[2].$rack_no[3];
    	$sequence 		= $rack_no[4];

    	$rack_data = [
    		"cold_storage" => 
    	];
        return view('placement.index');
    }

    // public function message(Request $request) {
    //     return view('message.index');
    // }
}
