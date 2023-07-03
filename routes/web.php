<?php

use App\Models\Riwayat_Pengajuan_Garansi;
use App\Models\Riwayat_Tindakan;
use App\Http\Controllers\pembeli\ComplainController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'Pembeli',
    'nameaspace' => 'App\Http\Controllers\Pembeli',
    'middleware' => ['Auth', 'Pembeli'],
    'as' => 'Pembeli.',
], function(){
    Route::resource('ComplainController', ComplainController::class)->except(['create', 'edit']);
});
