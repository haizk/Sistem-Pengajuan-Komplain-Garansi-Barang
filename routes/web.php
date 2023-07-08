<?php

use App\Models\Riwayat_Pengajuan_Garansi;
use App\Models\Riwayat_Tindakan;
use App\Http\Controllers\pembeli\ComplainController;
use App\Http\Controllers\pembeli\AjukanComplainController as AjukanComplainController;
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
    
    Route::get('/pembeli/ajukan_komplain', function () {
        return view('pages.pembeli.ajukan_komplain.index');
    })->name('pembeli.ajukan_komplain.index');
    
    Route::get('/pembeli/status_ajuan', function () {
        return view('pages.pembeli.status_ajuan.index');
    })->name('pembeli.status_ajuan.index');

    Route::post('/pembeli/ajukan_komplain', [AjukanComplainController::class, 'store'])->name('pembeli.ajukan_komplain.store');
});

Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/manager', function () {
        return view('pages.manager.index');
    })->name('manager.index');
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



/*Route::group([
    'prefix' => 'Pembeli',
    'nameaspace' => 'App\Http\Controllers\Pembeli',
    'middleware' => ['Auth', 'Pembeli'],
    'as' => 'Pembeli.',
], function(){
    Route::resource('ComplainController', ComplainController::class)->except(['create', 'edit']);
});
*/