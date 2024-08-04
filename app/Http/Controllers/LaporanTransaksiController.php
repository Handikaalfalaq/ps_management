<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanTransaksiController extends Controller
{
    public function laporanTransaksi()
    {
        return view('laporanTransaksi', [
            'title' => "Laporan Transaksi Page"
        ]);
    }
}
