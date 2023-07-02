<?php

use App\Models\Riwayat_Pengajuan_Garansi;
use App\Models\Riwayat_Tindakan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard.index');
})->name('admin');

Route::get('/admin/pembeli', function() {
    return view('admin.dashboard.pembeli');
})->name('dataPembeli');

Route::get('/admin/riwayat-pengajuan-garansi', function() {
    return view('admin.dashboard.riwayat_pengajuan_garansi', [
        'riwayat_pengajuan_garansi' => Riwayat_Pengajuan_Garansi::all()
    ]);
})->name('riwayatPengajuanGaransi');

Route::get('/admin/riwayat-tindakan', function() {
    return view('admin.dashboard.riwayat_tindakan', [
        'riwayat_tindakan' => Riwayat_Tindakan::all()
    ]);
})->name('riwayatTindakan');