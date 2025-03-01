<?php

use App\Http\Controllers\Authcontroler;
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
    return view('welcome');
});

Route::get('/login', [Authcontroler::class,'index'])->name('login');
Route::post('/login', [Authcontroler::class,'aksilogin'])->name('aksi.login');

Route::get('/registrasi', [Authcontroler::class,'register'])->name('registrasi');
Route::post('/registrasi', [Authcontroler::class,'aksiregister'])->name('aksi.registrasi');

Route::get('/Home', [Authcontroler::class,'home'])->name('Home');
