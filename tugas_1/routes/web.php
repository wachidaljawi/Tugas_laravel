<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('importir')->group(function () {
    Route::get('/desain', function () {
        $karyawan = ['Erik jayadi', 'Adobe Ilustrator', '089123445678'];
        $staff = ['Ani', 'UI Design', '085677890'];
        $kontrak = ['Ina', 'UX Design', '085765342890'];
        return view('pegawai.desain', compact('karyawan', 'staff', 'kontrak'));
    });
    Route::get('/digital_marketing', function () {
        $karyawan = ['Erik jayadi', 'SEO', '089123445678'];
        $staff = ['Ani', 'Google Analytic', '085677890'];
        $kontrak = ['Ina', 'Media Social', '085765342890'];
        return view('pegawai.digital_marketing', compact('karyawan', 'staff', 'kontrak'));
    });
    Route::get('/pengembang', function () {
        $karyawan = ['Erik jayadi', 'SEO', '089123445678'];
        $staff = ['Ani', 'Google Analytic', '085677890'];
        $kontrak = ['Ina', 'Media Social', '085765342890'];
        return view('pegawai.pengembang', compact('karyawan', 'staff', 'kontrak'));
    });
});
