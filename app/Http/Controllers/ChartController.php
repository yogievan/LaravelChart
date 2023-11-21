<?php

namespace App\Http\Controllers;

use App\Charts\CobaChart;
use App\Models\Pribadi;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(CobaChart $chart){
        // $transaksi_pribadi = Pribadi::get();

        return view("index",[
            'chart' => $chart->build(),
            // 'transaksi_pribadi' => $transaksi_pribadi,
        ]);
    }
}
