<?php

use App\Http\Controllers\ProjeVt;
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
Route::view('ogrprofil','ogrprofil')->middleware("Ogrlogin");
Route::view('ogrproje','ogrproje')->middleware("Ogrlogin");
Route::view('ogrrapor','ogrrapor')->middleware("Ogrlogin");
Route::view('ogrtez','ogrtez')->middleware("Ogrlogin");
Route::view('ogrbasvurular','ogrbasvurular')->middleware("Ogrlogin");

Route::view('dananasay','dananasay');
Route::view('danbasvurular','danbasvurular')->middleware("Danlogin");
Route::view('danogrlist','danogrlist')->middleware("Danlogin");
Route::view('danproje','danproje')->middleware("Danlogin");
Route::view('danrapor','danrapor')->middleware("Danlogin");
Route::view('dantez','dantez')->middleware("Danlogin");
Route::view('danprofil','danprofil')->middleware("Danlogin");

Route::view('admingiris','admingiris');
Route::view('siskontrol','siskontrol');
Route::view('sisogrekle','sisogrekle');
Route::view('sisdanekle','sisdanekle');
Route::view('sisprofile','sisprofile');
Route::view('sisdandzn','sisdandzn');




Route::get('/ekle', [ProjeVt::class, 'ekleme']);


Route::get('ograna', [ProjeVt::class, 'ogranasayfa'])->name("ograna")->middleware("Ogrlogin");
Route::get('dananasay', [ProjeVt::class, 'dananasayfa'])->name("dananasay")->middleware("Danlogin");


Route::post('ogrgir',[ProjeVt::class,'ogrgiris'])->name("ogrhome")->middleware("Ogroturumkontrol");

Route::post('dngiris',[ProjeVt::class,'dangiris'])->name("danhome")->middleware("Danoturumkontrol");



Route::get('siskontrol',[ProjeVt::class,'liste'])->name("admin.home");
Route::get('ogrbasvurular',[ProjeVt::class,'liste2'])->name("ogr.liste");
Route::get('danproje',[ProjeVt::class,'liste3'])->name("danproje.liste");
Route::post('sisogrgun',[ProjeVt::class,'guncelled'])->name("guncel");
Route::post('sisdandzn',[ProjeVt::class,'guncelled2'])->name("guncel2");

Route::get('onayla/{id}',[ProjeVt::class,'guncelle']);
Route::get('sil/{id}',[ProjeVt::class,'sil']);
Route::get('duzenle/{id}',[ProjeVt::class,'guncelle2']);
Route::get('sil2/{id}',[ProjeVt::class,'sil2']);


Route::get('ogrcikis',[ProjeVt::class,'ogrcikis']);
Route::get('dancikis',[ProjeVt::class,'dancikis']);

Route::get('/listele', [ProjeVt::class, 'listele']);
Route::post('sisdanekle',[ProjeVt::class,'danekle']);
Route::post('sisogrekle',[ProjeVt::class,'ogrekle']);

Route::post('ogrproje',[ProjeVt::class,'ogrprojekle']);
