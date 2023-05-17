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

Route::get('/', 'CVController@index');
// Route::get('/', function () {
//     return view('halaman_utama');
// });

// Route::get('/', function () {
//     return view('auth/login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/about/tambah', 'AboutController@tambah')->name('about.tambah');
Route::post('/about/store', 'AboutController@store');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::put('/about/update/{id}', 'AboutController@update');


Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah')->name('mahasiswa.tambah');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('/mahasiswa/update/{id}', 'MahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');