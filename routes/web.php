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
Route::view('ogrprofil','ogrprofil');
Route::view('ogrproje','ogrproje');
Route::view('ogrrapor','ogrrapor');
Route::view('ogrtez','ogrtez');
Route::view('ogrbasvurular','ogrbasvurular');
Route::view('dananasay','dananasay');
Route::view('danbasvurular','danbasvurular');
Route::view('danogrlist','danogrlist');

Route::view('danproje','danproje');
Route::view('danrapor','danrapor');
Route::view('dantez','dantez');


Route::view('danprofil','danprofil');
Route::view('admingiris','admingiris');
Route::view('siskontrol','siskontrol');
Route::view('sisogrekle','sisogrekle');
Route::view('sisdanekle','sisdanekle');
Route::view('sisprofile','sisprofile');




Route::get('/ekle', [ProjeVt::class, 'ekleme']);
Route::get('ograna', [ProjeVt::class, 'ogranasayfa'])->name("ograna")->middleware("Ogrlogin");


Route::post('ogrgir',[ProjeVt::class,'ogrgiris'])->name("ogrhome")->middleware("Ogroturumkontrol");;

Route::get('siskontrol',[ProjeVt::class,'liste'])->name("admin.home");
Route::post('sisogrgun',[ProjeVt::class,'guncelled'])->name("guncel");

Route::get('onayla/{id}',[ProjeVt::class,'guncelle']);
Route::get('sil/{id}',[ProjeVt::class,'sil']);
Route::get('ogrcikis',[ProjeVt::class,'ogrcikis']);

Route::get('/listele', [ProjeVt::class, 'listele']);
Route::post('sisdanekle',[ProjeVt::class,'danekle']);
Route::post('sisogrekle',[ProjeVt::class,'ogrekle']);
