<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\CetakLaporanController;







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

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/Profle', [App\Http\Controllers\PenggajianController::class, 'profile'])->name('profile');


//hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::get('home', function(){
        return 'halaman admin';
    });

    Route::get('profile', function(){
        return 'halaman profile admin';
    });
});

//hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['auth','role:pengguna']], function(){
    Route::get('/', function(){
        return 'halaman pengguna';
    });
    
    Route::get('profile', function(){
        return 'halaman profile pengguna';
    });
});

// Route::get('/profile', [PenggajianController, 'profile'])->name('ProfileKaryawan');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('Pegawai', function(){
        return view('Pegawai.index');
    })->middleware(['role:admin|pengguna']);
    
    Route::get('DataJabatan', function(){
        return view('DataJabatan.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Absen', function(){
        return view('Absen.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Lembur', function(){
        return view('Lembur.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Cuti', function(){
        return view('Cuti.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('Penggajian', function(){
        return view('Penggajian.index');
    })->middleware(['role:admin|pengguna']);

    Route::resource('DataJabatan', JabatanController::class);
    Route::resource('Pegawai', PegawaiController::class);
    Route::resource('Absen', AbsenController::class);
    Route::resource('Lembur', LemburController::class);
    Route::resource('Cuti', CutiController::class);
    Route::resource('Penggajian', PenggajianController::class);
    // Route::resource('laporan', PenggajianController::class);

    // laporan
    Route::get('cetak-laporan', 'App\Http\Controllers\CetakLaporanController@gajilaporan');
    Route::post('cetak-laporan','App\Http\Controllers\CetakLaporanController@cetakgaji');

Route::get('laporan', [PenggajianController::class, 'laporan']);
Route::get('profile', [PegawaiController::class, 'profile']);

Route::get('dashboard', 'App\Http\Controllers\AdminController@dashboard', function () {
        return view('admin.dashboard');
    })->name('DashboardAdmin');

    Route::get('dashboardUser', 'App\Http\Controllers\AdminController@dashboardUser', function () {
        return view('pengguna.dashboard');
    })->name('DashboardUser');

}); 


// Route::get('Profile', 'App\Http\Controllers\ProfileController@index')->name('profile ');
