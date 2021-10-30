<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
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

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/listguru', function () {
    return view('guru.listguru');
});
Route::get('/addguru',[GuruController::class,'createview'])->name('addguru');
Route::get('/listsiswa',[SiswaController::class,'index'])->name('listsiswa');
Route::get('/overview/attendance/{id}',[AttendanceController::class,'overview'])->name('overview');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::post('/storeuser',[GuruController::class,'store'])->name('storeuser');