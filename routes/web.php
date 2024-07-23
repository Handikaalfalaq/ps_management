<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/dataTransaksi', function () {
    return view('dataTransaksi', ['title' => 'Data Transaksi Page']);
});

Route::get('/laporanTransaksi', function () {
    return view('laporanTransaksi', ['title' => 'Laporan Transaksi Page']);
});

Route::get('/dataMember', function () {
    return view('dataMember', ['title' => 'Data Member Page']);
});

Route::get('/dataPerangkat', function () {
    return view('dataPerangkat', ['title' => 'Data Perangkat Page']);
});

Route::get('/dataPetugas', function () {
    return view('dataPetugas', ['title' => 'Data Petugas Page']);
});

Route::get('/settingApp', function () {
    return view('settingApp', ['title' => 'Setting App Page']);
});
