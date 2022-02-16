<?php

use App\Http\Controllers\API\JabatanapiController;
use App\Http\Controllers\API\PegawaiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('jabatan', JabatanapiController::class);
Route::resource('pegawai', PegawaiController::class);

