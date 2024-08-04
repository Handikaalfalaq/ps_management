<?php

namespace App\Http\Controllers;

class DataPerangkatController extends Controller
{
    public function dataPerangkat()
    {
        return view('dataPerangkat', [
            'title' => "Data Perangkat Page"
        ]);
    }
}
