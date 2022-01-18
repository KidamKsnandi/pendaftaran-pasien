<?php

use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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

Route::get('/cek', function() {
    return view('pasien.cek');
});
Route::post('/token', [PasienController::class, 'token']);

Route::resource('pasien', PasienController::class);

Route::get('/data-dokter', [PasienController::class, 'dokter']);


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function() {
        Route::get('/', function () {
            return view('admin.index');
        });
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
