<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $data = Chart::all();
        
        return view('chart', compact('data'));
    }
}
