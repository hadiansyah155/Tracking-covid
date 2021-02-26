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
/*
Route::get('/', function () {
    return view('layouts.dashboard.index');
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/i', function(){
    return view('layouts.master');
});
Route::get('/index', function(){
    return view('layouts.dashboard.index');
});

use App\Http\Controllers\DashboardController;
Route::resource('/',DashboardController::class);

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi',ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota',KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan',KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan',KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw',RwController::class);

use App\Http\Controllers\TrackingController;
Route::resource('tracking',TrackingController::class);

use App\Http\Controllers\NegaraController;
Route::resource('negara',NegaraController::class);

use App\Http\Controllers\KasusController;
Route::resource('kasus',KasusController::class);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'provinsi'])->name('dashboard');