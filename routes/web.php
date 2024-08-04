<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\LaporanTransaksiController;
use App\Http\Controllers\DataMemberController;
use App\Http\Controllers\DataPerangkatController;
use App\Http\Controllers\DataPetugasController;
use App\Http\Controllers\SettingAppController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/dataTransaksi', [DataTransaksiController::class, 'dataTransaksi']);

Route::get('/laporanTransaksi', [LaporanTransaksiController::class, 'laporanTransaksi']);

Route::get('/dataMember', [DataMemberController::class, 'dataMember']);

Route::get('/dataPerangkat', [DataPerangkatController::class, 'dataPerangkat']);

Route::get('/dataPetugas', [DataPetugasController::class, 'dataPetugas']);

Route::get('/settingApp', [SettingAppController::class, 'settingApp']);
