<?php

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

// ADMIN

Route::group(['prefix' => 'admin'], function () {

    // Admin Pergudangan
    Route::resource('pergudangan', 'AdminPergudanganController');

    // Admin E-Commerce

    // Admin Personalia

    // Admin Keuangan

    // Admin Login & register

    // Admin Simpan Pinjam
});




