<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request) {
        return view('transaction.index');
    }

    public function detail(Request $request) {
        return view('transaction.detail');
    }
}
