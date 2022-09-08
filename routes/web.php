<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\WilayahController;
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

Route::get('/',function(){
    return view ('layouts/home');
});
Route::resource('/pasien',PasienController::class);
Route::resource('/rawat',PerawatanController::class);
Route::resource('/wilayah',WilayahController::class);
Route::resource('/obat',ObatController::class);
Route::resource('/pegawai',PegawaiController::class);



// Route::get('/', function () {
//     return view('welcome');
// });