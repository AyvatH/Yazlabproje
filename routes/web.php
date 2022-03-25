<?php

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
    return view('genelgir');
});
Route::view('ogrgiris','ogrgiris');
Route::view('dngiris','dngiris');
Route::view('sifre','sifre');
Route::view('ograna','ograna');
Route::view('ogrprofil','ogrprofil');
Route::view('ogrproje','ogrproje');
Route::view('ogrrapor','ogrrapor');
Route::view('ogrtez','ogrtez');
Route::view('ogrbasvurular','ogrbasvurular');
Route::view('dananasay','dananasay');

Route::view('danogrlist','danogrlist');
Route::view('danprofil','danprofil');
Route::view('danproje','danproje');
Route::view('danrapor','danrapor');
Route::view('dantez','dantez');
Route::view('admingiris','admingiris');
Route::view('siskontrol','siskontrol');
Route::view('siskontrol','siskontrol');
Route::view('sisogrekle','sisogrekle');
Route::view('sisdanekle','sisdanekle');
Route::view('sisprofile','sisprofile');
Route::view('sisogrdzn','sisogrdzn');
Route::view('sisdandzn','sisdandzn');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
