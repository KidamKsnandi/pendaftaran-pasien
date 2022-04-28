<?php

use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/cek', function() {
    return view('pasien.cek');
});
Route::post('/token', [PasienController::class, 'token']);

Route::get('/gagal', function() {
    return view('pasien.gagal');
});

Route::resource('pasien', PasienController::class);

Route::get('/pendaftaran', [PasienController::class, 'create']);

Route::resource('contact', ContactController::class);

Route::get('/data-dokter', [PasienController::class, 'dokter']);


Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'role:admin']],
    function() {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::get('data-contact', [ContactController::class, 'data']);

        Route::resource('spesialis', SpesialisController::class);

        Route::resource('data-dokter', DokterController::class);

        Route::get('data-pasien', [PasienController::class, 'admin']);
    });


    Route::group(['prefix' => 'dokter', 'middleware' => ['auth', 'role:dokter']],
    function() {
        Route::get('/', function () {
            return view('dokter.index');
        });
        Route::get('/daftar-pasien', [DokterController::class, 'pasien']);
        Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
        Route::post('/pasien/update', [PasienController::class, 'update']);

    });
