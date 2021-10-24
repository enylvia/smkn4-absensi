<?php

use App\Http\Controllers\AttendanceController;
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

Route::get('/', function () {
    return view('guru.listguru');
});

Route::get('/listsiswa',[SiswaController::class,'index'])->name('listsiswa');
Route::get('/overview/attendance',[AttendanceController::class,'overview'])->name('overview');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
