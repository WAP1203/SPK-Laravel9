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

// Route::get('/greeting', function () {
//     return view('welcome');
// });


// Route::get('/greeting', function () {
//     return view('greeting');
// });

// // contoh route baru
// Route::get('/about', function () {
//     return view();
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
// Route::get('/studio', [App\Http\Controllers\studioController::class, 'index']);







use App\Http\Controllers\studioController;

Route::controller(studioController::class)->group(function () {
    Route::get('studio/', 'index');
    Route::get('studio/add', 'add');
    Route::post('studio/store', 'store');
    Route::get('studio/edit/{id}', 'edit');
    Route::post('studio/update/{id}', 'update');
    Route::get('studio/delete/{id}', 'delete');
    Route::get('/studio', function () {
        return view('layout/datastudio');
    });
});
use App\Http\Controllers\kriteriaController;

Route::controller(kriteriaController::class)->group(function () {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
    Route::get('/kriteria', function () {
        return view('kriteria');
    });
});
use App\Http\Controllers\alternatifController;

Route::controller(alternatifController::class)->group(function () {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
    Route::get('/alternatif', function () {
        return view('alternatif');
    });
});
use App\Http\Controllers\hitungController;

Route::get('/hitung', [hitungController::class, 'hitung']);
Route::get('/hitung', function () {
    return view('hitung');
});
// ->name('hitung')


// Route::get('/user', 'App\Http\Controllers\UserController@index');
