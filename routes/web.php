<?php

use App\Http\Controllers\Authcontroler;
use App\Http\Controllers\Fromcontroller;
use App\Http\Controllers\Ruangan;
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

Route::post('/login', [Authcontroler::class,'aksilogin'])->name('aksi.login');
Route::get('/login', [Authcontroler::class,'index'])->name('login');
Route::get('/logout', [Authcontroler::class,'logout'])->name('logout');

Route::get('/registrasi', [Authcontroler::class,'register'])->name('registrasi');
Route::post('/registrasi', [Authcontroler::class,'aksiregister'])->name('aksi.registrasi');

Route::middleware(['auth'])->group(function () {
    Route::get('/Home', [Authcontroler::class,'home'])->name('Home');
    // MENU Ews
    Route::get('/ews-view/{id?}',[Fromcontroller::class,'index'])->name('ews.view');
    Route::get('/ews-create',[Fromcontroller::class,'createews'])->name('ews/create');
    Route::post('/aksi-ews',[Fromcontroller::class,'aksiews'])->name('aksi-ews');
    Route::delete('/aksi-hapus',[Fromcontroller::class,'hapus'])->name('aksi-hapus');
    // Ruangan
    Route::get('/V_raungan',[Ruangan::class,'V_ruagan'])->name('V.ruagan');
    Route::get('/create-ruagan',[Ruangan::class,'createruangan'])->name('create-ruangan');
});
