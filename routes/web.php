<?php

use App\Models\karyawan;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index']);
Route::get('/karyawan/create', [App\Http\Controllers\KaryawanController::class, 'create']);
Route::post('/karyawan', [App\Http\Controllers\KaryawanController::class, 'store']);
Route::get('/karyawan/{id}/edit', [App\Http\Controllers\KaryawanController::class, 'edit']);
Route::post('/karyawan-update', [App\Http\Controllers\KaryawanController::class, 'update']);
Route::get('/karyawan/{id}/delete', [App\Http\Controllers\KaryawanController::class, 'destroy']);
Route::post('/karyawan-search', [App\Http\Controllers\KaryawanController::class, 'index']);

Route::post('/importexcel',[App\Http\Controllers\KaryawanController::class,'importexcel'])->name('importexcel');

