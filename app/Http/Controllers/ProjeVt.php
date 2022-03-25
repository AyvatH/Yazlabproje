<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogrenci;


class ProjeVt extends Controller
{
    public function liste()
    {
        $bilgi=Ogrenci::get();
        return view('siskontrol',compact('bilgi'));
    }
    public function sil($id)
    {
        $veri=$id;
        Ogrenci::whereId($veri)->delete();

    return redirect('siskontrol');

      }


      public function guncelle($id)
    {

        $veri=$id;
        $dataa=Ogrenci::whereId($veri)->first();

        return view('sisogrgun',compact('dataa','veri'));

      }
      public function guncelled(Request $request)
      {
        $request->validate([
            'ad'=>"required",
            "soyad" => "required",
            "eposta" => "required",
            "no" => "required",
            "sinif" => "required",
            "fak" => "required",
            "bolum" => "required",
            "tel" => "required",
            "sifre" => "required"
        ]);
        Ogrenci::where('id',$request->id)->update(["ad"=>$request->ad,"soyad"=>$request->soyad,"no"=>$request->no,
        "eposta"=>$request->eposta,
        "sifre"=>$request->sifre,"sinif"=>$request->sinif,
        "bolum"=>$request->bolum,"fak"=>$request->fak,"tel"=>$request->tel]);
        /*
            $data=enciler::whereId($veri)->update
          (["ad"=>"berdeuş","soyad"=>"ayvat","no"=>"191",
          "eposta"=>"asd",
          "sifre"=>"sifre","sinif"=>"3",
          "bolum"=>"tek","fak"=>"bil","tel"=>"505"]);
*/
         return redirect()->route('admin.home');

        }
}
