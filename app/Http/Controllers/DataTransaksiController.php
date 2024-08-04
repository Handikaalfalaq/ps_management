<?php

namespace App\Http\Controllers;

class DataTransaksiController extends Controller
{
    public function dataTransaksi()
    {
        return view('dataTransaksi', [
            'title' => "Data Transaksi Page"
        ]);
    }
}
