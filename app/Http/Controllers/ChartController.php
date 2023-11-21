<?php

namespace App\Http\Controllers;

use App\Charts\CobaChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(CobaChart $chart){
        return view("index",[
            'chart' => $chart->build()
        ]);
    }
}
