<?php

use App\Http\Controllers\ProjeVt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

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
})->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
Route::view('ogrgiris','ogrgiris')->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
Route::view('dngiris','dngiris')->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
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

Route::view('admingiris','admingiris')->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
Route::view('siskontrol','siskontrol')->middleware("Yonlogin");
Route::view('sisogrekle','sisogrekle')->middleware("Yonlogin");
Route::view('sisdanekle','sisdanekle')->middleware("Yonlogin");
Route::view('sisprofile','sisprofile')->middleware("Yonlogin");
Route::view('sisdandzn','sisdandzn')->middleware("Yonlogin");




Route::get('/ekle', [ProjeVt::class, 'ekleme']);


Route::get('ograna', [ProjeVt::class, 'ogranasayfa'])->name("ograna")->middleware("Ogrlogin");
Route::get('dananasay', [ProjeVt::class, 'dananasayfa'])->name("dananasay")->middleware("Danlogin");
Route::get('sisprofile', [ProjeVt::class, 'yonanasayfa'])->name("sisprofile")->middleware("Yonlogin");


Route::post('ogrgir',[ProjeVt::class,'ogrgiris'])->name("ogrhome")->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
Route::post('admingiris',[ProjeVt::class,'yongiris'])->name("admingiriss")->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");
Route::post('dngiris',[ProjeVt::class,'dangiris'])->name("danhome")->middleware("Danoturumkontrol","Ogroturumkontrol","Yonoturumkontrol");



Route::get('siskontrol',[ProjeVt::class,'liste'])->name("admin.home");

Route::get('ogrtez',[ProjeVt::class,'liste7'])->name("ogr.tez");

Route::get('ogrrapor',[ProjeVt::class,'liste6'])->name("ogr.rapor");

Route::get('danogrlist',[ProjeVt::class,'liste5'])->name("danogr.liste");
Route::get('ogrprofil',[ProjeVt::class,'liste4'])->name("ogr.profile");
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
Route::get('yoncikis',[ProjeVt::class,'yoncikis']);

Route::get('/listele', [ProjeVt::class, 'listele']);
Route::post('sisdanekle',[ProjeVt::class,'danekle']);
Route::post('sisogrekle',[ProjeVt::class,'ogrekle']);

Route::post('ogrproje',[ProjeVt::class,'ogrprojekle']);

Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'filepdfPost'])->name('file.upload.post');
Route::post('tez-upload', [FileUploadController::class, 'fileUploadTezpost'])->name('tez.upload.post');
Route::post('image-upload', [FileUploadController::class, 'fileUploadPost'])->name('image.upload.post');

Route::get('deneme',function(){
    return "Deneme";
});

Route::get('deneme2',function(){
    return "Deneme2";
});