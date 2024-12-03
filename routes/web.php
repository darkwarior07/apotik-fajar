<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\FakturPenjualanController;
use App\Http\Controllers\FakturSupplyController;

 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    // Route untuk Dashboard dan Profile
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(function () {
    Route::get('', 'index')->name('karyawan');
    Route::get('create', 'create')->name('karyawan.create');
    Route::post('store', 'store')->name('karyawan.store');
    Route::get('show/{id}', 'show')->name('karyawan.show');
    Route::get('edit/{id}', 'edit')->name('karyawan.edit');
    Route::put('update/{id}', 'update')->name('karyawan.update');
    Route::delete('destroy/{id}', 'destroy')->name('karyawan.destroy');
});

Route::controller(FakturPenjualanController::class)->prefix('faktur-penjualan')->group(function () {
    Route::get('', 'index')->name('faktur_penjualan.index');
    Route::get('create', 'create')->name('faktur_penjualan.create');
    Route::post('store', 'store')->name('faktur_penjualan.store');
    Route::get('edit/{id}', 'edit')->name('faktur_penjualan.edit');
    Route::put('update/{id}', 'update')->name('faktur_penjualan.update');
    Route::delete('destroy/{id}', 'destroy')->name('faktur_penjualan.destroy');
});


// routes/web.php

Route::controller(FakturSupplyController::class)->prefix('faktur')->group(function () {
    Route::get('', 'index')->name('faktur.index');
    Route::get('create', 'create')->name('faktur.create');
    Route::post('store', 'store')->name('faktur.store');
    Route::get('show/{id}', 'show')->name('faktur.show');
    Route::get('edit/{id}', 'edit')->name('faktur.edit');
    Route::put('update/{id}', 'update')->name('faktur.update');
    Route::delete('destroy/{id}', 'destroy')->name('faktur.destroy');
});



Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
    Route::get('', 'index')->name('pelanggan'); // Rute untuk daftar pelanggan
    Route::get('create', 'create')->name('pelanggan.create'); // Rute untuk form tambah pelanggan
    Route::post('store', 'store')->name('pelanggan.store'); // Rute untuk menyimpan pelanggan
    Route::get('show/{id}', 'show')->name('pelanggan.show'); // Rute untuk detail pelanggan
    Route::get('edit/{id}', 'edit')->name('pelanggan.edit'); // Rute untuk form edit pelanggan
    Route::put('update/{id}', 'update')->name('pelanggan.update'); // Rute untuk update pelanggan
    Route::delete('destroy/{id}', 'destroy')->name('pelanggan.destroy'); // Rute untuk hapus pelanggan
});

 
    // Routes untuk Obat
    Route::controller(ObatController::class)->prefix('obat')->group(function () {
        Route::get('', 'index')->name('obat');
        Route::get('create', 'create')->name('obat.create');
        Route::post('store', 'store')->name('obat.store');
        Route::get('show/{id}', 'show')->name('obat.show');
        Route::get('edit/{id}', 'edit')->name('obat.edit');
        Route::put('update/{id}', 'update')->name('obat.update');
        Route::delete('destroy/{id}', 'destroy')->name('obat.destroy');
    });
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('suppliers/show/{id}', [SupplierController::class, 'show'])->name('suppliers.show');


    // Routes untuk Supplier
    Route::controller(SupplierController::class)->prefix('suppliers')->group(function () {
        Route::get('', 'index')->name('suppliers'); // Menampilkan daftar supplier
        Route::get('create', 'create')->name('suppliers.create'); // Halaman untuk membuat supplier baru
        Route::post('store', 'store')->name('suppliers.store'); // Menyimpan supplier baru
        Route::get('show/{id}', 'show')->name('suppliers.show'); // Halaman detail supplier
        Route::get('edit/{id}', 'edit')->name('suppliers.edit'); // Halaman edit supplier
        Route::put('update/{id}', 'update')->name('suppliers.update'); // Proses update supplier
        Route::delete('destroy/{id}', 'destroy')->name('suppliers.destroy'); // Menghapus supplier
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
