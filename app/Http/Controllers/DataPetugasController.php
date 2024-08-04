<?php

namespace App\Http\Controllers;

class DataPetugasController extends Controller
{
    public function dataPetugas()
    {
        return view('dataPetugas', [
            'title' => "Data Petugas Page"
        ]);
    }
}
