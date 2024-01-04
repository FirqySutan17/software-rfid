<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request) {
        return view('setting.profile-info');
    }

    public function company(Request $request) {
        return view('setting.company-info');
    }

    public function tag(Request $request) {
        return view('setting.tag');
    }

    public function integration(Request $request) {
        return view('setting.integration');
    }

    public function subscription(Request $request) {
        return view('setting.subscription');
    }

    public function checkout(Request $request) {
        return view('setting.checkout');
    }

    public function invoice(Request $request) {
        return view('setting.invoice');
    }
}
