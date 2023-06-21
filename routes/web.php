<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStatus;
use App\Http\Controllers\SubscriberController;

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

Route::get('/kirimemail', 'SendEmailController@index');
Route::get('/send_mail', 'SendEmailController@view_form');
Route::post('/email/send', 'SendEmailController@send');

Route::get('/form_upload', 'UploadFileController@index');
Route::post('/upload_file', 'UploadFileController@upload');

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');

Route::middleware([CheckStatus::class])->group(function(){

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
});