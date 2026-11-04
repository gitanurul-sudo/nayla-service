
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\customer\homeController;


/*
|--------------------------------------------------------------------------
| CUSTOMER
|--------------------------------------------------------------------------
| Menggunakan konsep One Page Website.
| Semua section ditampilkan melalui customer.home.
|--------------------------------------------------------------------------
*/

// Halaman utama Customer
Route::get('/beranda', function () {
    return view('customer.home');
})->name('customer.home');

Route::view('/', 'pilih-akses')->name('pilih-akses');

// Dashboard Customer
Route::get('/customer/dashboard', [homeController::class, 'index'])
    ->name('customer.dashboard');

// Navigasi menuju section di halaman utama
Route::redirect('/customer/layanan', '/#layanan')
    ->name('customer.layanan');

Route::redirect('/customer/lokasi', '/#lokasi')
    ->name('customer.lokasi');

Route::redirect('/customer/konsultasi', '/#konsultasi')
    ->name('customer.konsultasi');

Route::redirect('/customer/status', '/#cek-status')
    ->name('customer.status');


// Memproses formulir konsultasi
Route::post('/customer/konsultasi', function (Request $request) {

    $request->validate([
        'nama' => ['required', 'string', 'max:100'],

        'whatsapp' => [
            'required',
            'regex:/^(?:\+62|62|0)[0-9]{9,13}$/'
        ],

        'model_hp' => ['required', 'string', 'max:100'],

        'keluhan' => ['required', 'string', 'max:500'],

        'foto' => [
            'nullable',
            'file',
            'mimes:jpg,jpeg,png',
            'max:5120'
        ],

        'persetujuan' => ['accepted'],
    ]);

    // Demo: belum menyimpan data konsultasi
    return redirect()
        ->route('customer.konsultasi.sukses');

})->name('customer.konsultasi.submit');


// Halaman konfirmasi konsultasi
Route::get('/customer/konsultasi/sukses', function () {
    return view('customer.konsultasi-sukses');
})->name('customer.konsultasi.sukses');


// ======================================
// FRONTEND LOGIN DAN REGISTER
// ======================================

Route::view('/login', 'auth.login')->name('login');

Route::view('/register', 'auth.register')->name('register');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/admin/pesanan', function () {
    return view('admin.pesanan');
})->name('admin.pesanan');


Route::get('/admin/pelanggan', function () {
    return view('admin.pelanggan');
})->name('admin.pelanggan');


Route::get('/admin/laporan', function () {
    return view('admin.laporan');
})->name('admin.laporan');

// Halaman Update Status Admin
Route::view('/admin/update-status', 'admin.update-status')
    ->name('admin.update-status');


/*
|--------------------------------------------------------------------------
| TEKNISI
|--------------------------------------------------------------------------
*/

Route::view('/teknisi/dashboard', 'teknisi.dashboard')
    ->name('teknisi.dashboard');

Route::view('/teknisi/antrean', 'teknisi.antrean')
    ->name('teknisi.antrean');

Route::view('/teknisi/riwayat', 'teknisi.riwayat')
    ->name('teknisi.riwayat');

Route::view('/teknisi/diagnosis', 'teknisi.diagnosis')
    ->name('teknisi.diagnosis');
