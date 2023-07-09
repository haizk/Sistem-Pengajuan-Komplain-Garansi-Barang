<?php

use App\Http\Controllers\admin\DataPengajuanGaransiController;
use App\Models\Riwayat_Pengajuan_Garansi;
use App\Models\Riwayat_Tindakan;
use App\Models\Merk;
use App\Models\Barang;
use App\Http\Controllers\administrator\DashboardController;
use App\Http\Controllers\administrator\UserController;
use App\Http\Controllers\administrator\MerkController;
use App\Http\Controllers\administrator\BarangController;
use App\Http\Controllers\pembeli\ComplainController;
use App\Http\Controllers\pembeli\StatusAjuanController;
use App\Http\Controllers\pembeli\AjukanComplainController;
use App\Http\Controllers\PembeliController;
use App\Http\Middleware\PembeliMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');

Route::middleware(['auth', 'pembeli'])->group(function () {
    Route::get('/pembeli', function () {
        return view('pages.pembeli.index');
    })->name('pembeli.index');
    
    Route::get('/pembeli/status_ajuan', [StatusAjuanController::class, 'index'])->name('pembeli.status_ajuan.index');
    Route::get('/pembeli/ajukan_komplain', [AjukanComplainController::class, 'index'])->name('pembeli.ajukan_komplain.index');

    Route::post('/pembeli/ajukan_komplain', [AjukanComplainController::class, 'store'])->name('pembeli.ajukan_komplain.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/data-riwayat-tindakan', [DataRiwayatTindakanController::class, 'index'])->name('admin.dataRiwayatTindakan.index');
});

Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/manager', function () {
        return view('pages.manager.index');
    })->name('manager.index');
});

Route::middleware(['auth', 'administrator'])->prefix('administrator')->name('administrator.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('administrator.index');
    Route::get('/dataPembeli', [UserController::class, 'showPembeli'])->name('administrator.dataPembeli');
    Route::get('/merk', [MerkController::class, 'index'])->name('merk.index');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
});


Auth::routes([
    'reset' => false,
    'verify' => false,
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/data-pengajuan-garansi', [DataPengajuanGaransiController::class, 'index'])->name('admin.dataPengajuanGaransi.index');
