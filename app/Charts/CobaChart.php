<?php

namespace App\Charts;

use App\Models\Pribadi;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class CobaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // read transaksi by year
        $lunas = DB::table('transaksi_pribadi')
        ->select(DB::raw('month(created_at) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        // input data in array
        $yaxist = []; //-> by thn
        foreach ($lunas as $key => $value) {
            array_push($yaxist, $value->total);
        }

        $xaxist = []; //-> by bln
        foreach ($lunas as $key => $value) {
            array_push($xaxist, $value->month);
        }

        return $this->chart->lineChart()
            ->setTitle('Grafik Pesanan Tiket Bus.')
            ->setSubtitle('Tiket Tervalidasi dan Menunggu Proses.')
            ->addData('Transaksi Tervalidasi', $yaxist)
            ->setXAxis($xaxist);
    }
}
