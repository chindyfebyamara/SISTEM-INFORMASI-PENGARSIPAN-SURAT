<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\KategoriSuratController;
use app\Http\Controllers\SuratController;
use app\Http\Controllers\JenisSuratController;

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
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::put('/surat/{id}', [SuratController::class, 'update'])->name('surat.update');
    Route::get('/surat', 'App\Http\Controllers\SuratController@index')->name('surat.index');
    Route::get('/surat/create', 'App\Http\Controllers\SuratController@create')->name('surat.create');
    Route::post('/surat', 'App\Http\Controllers\SuratController@store')->name('surat.store');
    Route::get('/surat/{id}', 'App\Http\Controllers\SuratController@show')->name('surat.show');
    Route::get('/surat/{id}/edit', 'App\Http\Controllers\SuratController@edit')->name('surat.edit');
    Route::put('/surat/{id}', 'App\Http\Controllers\SuratController@update')->name('surat.update');
    Route::delete('/surat/{id}', 'App\Http\Controllers\SuratController@destroy')->name('surat.destroy');

    Route::put('/surat/{id}', [SuratController::class, 'update'])->name('surat.update');

    Route::resource('kategori_surat', KategoriSuratController::class);
    Route::get('/kategori-surat', 'App\Http\Controllers\KategoriSuratController@index')->name('kategori_surat.index');
    Route::get('/kategori-surat/create', 'App\Http\Controllers\KategoriSuratController@create')->name('kategori_surat.create');
    Route::post('/kategori-surat', 'App\Http\Controllers\KategoriSuratController@store')->name('kategori_surat.store');
    Route::get('/kategori-surat/{id}', 'App\Http\Controllers\KategoriSuratController@show')->name('kategori_surat.show');
    Route::get('/kategori-surat/{id}/edit', 'App\Http\Controllers\KategoriSuratController@edit')->name('kategori_surat.edit');
    Route::put('/kategori-surat/{id}', 'App\Http\Controllers\KategoriSuratController@update')->name('kategori_surat.update');
    Route::delete('/kategori-surat/{id}', 'App\Http\Controllers\KategoriSuratController@destroy')->name('kategori_surat.destroy');


    Route::resource('jenis_surat', JenisSuratController::class);
    Route::get('/jenis-surat', 'App\Http\Controllers\JenisSuratController@index')->name('jenis_surat.index');
    Route::get('/jenis-surat/create', 'App\Http\Controllers\JenisSuratController@create')->name('jenis_surat.create');
    Route::post('/jenis-surat', 'App\Http\Controllers\JenisSuratController@store')->name('jenis_surat.store');
    Route::get('/jenis-surat/{id}', 'App\Http\Controllers\JenisSuratController@show')->name('jenis_surat.show');
    Route::get('/jenis-surat/{id}/edit', 'App\Http\Controllers\JenisSuratController@edit')->name('jenis_surat.edit');
    Route::put('/jenis-surat/{id}', 'App\Http\Controllers\JenisSuratController@update')->name('jenis_surat.update');
    Route::delete('/jenis-surat/{id}', 'App\Http\Controllers\JenisSuratController@destroy')->name('jenis_surat.destroy');
});
