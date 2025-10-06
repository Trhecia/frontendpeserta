<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/home', [PageController::class, 'home']);
    Route::get('/peserta', [PageController::class, 'peserta']);
    Route::get('/peserta/detail', [PageController::class, 'detailpeserta']);
    Route::get('/peserta/keluarga', [PageController::class, 'keluargapeserta']);
    Route::get('/peserta/ahliwaris', [PageController::class, 'ahliwariskeluarga']);

    Route::post('/peserta/keluarga/tambahkeluarga', [PageController::class, 'simpankeluarga']);
    Route::get('/peserta/keluarga/tambahkeluarga', [PageController::class, 'formtambahkeluarga']);

    // Halaman form ubah keluarga
    Route::get('/peserta/keluarga/ubahkeluarga', [PageController::class, 'formubahkeluarga']);

    // Proses simpan ubah keluarga
    Route::post('/peserta/keluarga/ubahkeluarga', [PageController::class, 'updatekeluarga']);

    // Halaman form ubah ahli waris
    Route::get('/peserta/ahliwaris/ubahahliwaris', [PageController::class, 'formubahahliwaris']);

    // Proses simpan ubah keluarga
    Route::post('/peserta/ahliwaris/ubahahliwaris', [PageController::class, 'updateahliwaris']);

    Route::get('/peserta/tambahpeserta', [PageController::class, 'formtambahpeserta']);
    Route::get('/peserta/ubahpeserta', [PageController::class, 'formubahpeserta']);

    