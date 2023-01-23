<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;

Route::get('/', [FrontendController::class, 'home']);
Route::get('/service', [FrontendController::class, 'service']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/contact', [FrontendController::class, 'contact']);

Route::get('register', [UserController::class, 'register']);
Route::post('register-proses', [UserController::class, 'registerProses']);
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login-proses', [UserController::class, 'loginProses']);
Route::get('logout', [UserController::class, 'logout']);

Route::get('/beranda',[BerandaController::class, 'index']) -> name('beranda');

// MAHASISWA
Route::get('/data-mahasiswa',[MahasiswaController::class, 'index']) -> name('data-mahasiswa');
Route::get('/create-mahasiswa',[MahasiswaController::class, 'create']) -> name('create-mahasiswa');
Route::post('/store-mahasiswa',[MahasiswaController::class, 'store']);
Route::get('/edit-mahasiswa/{id}',[MahasiswaController::class, 'edit']) -> name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}',[MahasiswaController::class, 'update']) -> name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}',[MahasiswaController::class, 'destroy']) -> name('delete-mahasiswa');

// CUSTOMER
Route::get('/data-customer',[CustomerController::class, 'index']) -> name('data-customer');
Route::get('/create-customer',[CustomerController::class, 'create']) -> name('create-customer');
Route::post('/store-customer',[CustomerController::class, 'store']);
Route::get('/edit-customer/{id}',[CustomerController::class, 'edit']) -> name('edit-customer');
Route::post('/update-customer/{id}',[CustomerController::class, 'update']) -> name('update-customer');
Route::get('/delete-customer/{id}',[CustomerController::class, 'destroy']) -> name('delete-customer');

// KARYAWAN
Route::get('/data-karyawan',[KaryawanController::class, 'index']) -> name('data-karyawan');
Route::get('/create-karyawan',[KaryawanController::class, 'create']) -> name('create-karyawan');
Route::post('/store-karyawan',[KaryawanController::class, 'store']);
Route::get('/edit-karyawan/{id}',[KaryawanController::class, 'edit']) -> name('edit-customer');
Route::post('/update-karyawan/{id}',[KaryawanController::class, 'update']) -> name('update-karyawan');
Route::get('/delete-karyawan/{id}',[KaryawanController::class, 'destroy']) -> name('delete-karyawan');

// RESERVASI
Route::get('/data-reservasi',[ReservasiController::class, 'index']) -> name('data-reservasi');
Route::get('/create-reservasi',[ReservasiController::class, 'create']) -> name('create-reservasi');
Route::post('/store-reservasi',[ReservasiController::class, 'store']);
Route::get('/edit-reservasi/{id}',[ReservasiController::class, 'edit']) -> name('edit-reservasi');
Route::post('/update-reservasi/{id}',[ReservasiController::class, 'update']) -> name('update-reservasi');
Route::get('/delete-reservasi/{id}',[ReservasiController::class, 'destroy']) -> name('delete-reservasi');

// SERVICE
Route::get('/data-service',[ServiceController::class, 'index']) -> name('data-service');
Route::get('/create-service',[ServiceController::class, 'create']) -> name('create-service');
Route::post('/store-service',[ServiceController::class, 'store']);
Route::get('/edit-service/{id}',[ServiceController::class, 'edit']) -> name('edit-service');
Route::post('/update-service/{id}',[ServiceController::class, 'update']) -> name('update-service');
Route::get('/delete-service/{id}',[ServiceController::class, 'destroy']) -> name('delete-service');

// TRANSAKSI
Route::get('/data-transaksi',[TransaksiController::class, 'index']) -> name('data-transaksi');
Route::get('/create-transaksi',[TransaksiController::class, 'create']) -> name('create-transaksi');
Route::post('/store-transaksi',[TransaksiController::class, 'store']) -> name('simpan-data');
Route::post('/update-transaksi/{id}',[TransaksiController::class, 'update']) -> name('update-transaksi');
Route::get('/edit-transaksi/{id}',[TransaksiController::class, 'edit']) -> name('edit-transaksi');
Route::get('/delete-transaksi/{id}',[TransaksiController::class, 'destroy']) -> name('delete-transaksi');
