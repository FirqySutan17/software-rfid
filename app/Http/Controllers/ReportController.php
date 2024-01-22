<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock_balance()
    {
        return view('report.stock-balance');
    }

    public function detail_balance()
    {
        return view('report.detail-balance');
    }

    public function mapping_cs()
    {
        return view('report.mapping-cs');
    }
 
}
