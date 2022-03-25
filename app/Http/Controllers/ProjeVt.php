<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogrenci;
use Illuminate\Support\Facades\Hash;



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
         return redirect()->route('admin.home');

        }
        public function ogrekle(Request $request)
    {
        Ogrenci::create
        (["ad"=>$request->ograd,"soyad"=>$request->ogrsad,"no"=>$request->ogrno,
        "eposta"=>$request->ogrmail,
        "sifre"=>Hash::make($request->ogrsifre),"sinif"=>$request->ogrsinif,
        "bolum"=>$request->ogrbolum,"fak"=>$request->ogrfak,"tel"=>$request->ogrtel]);
        return redirect('sisogrekle');


    }
        public function ogrgiris(Request $request)
        {


            $request->validate([
                "no" => "required",
                "sifre" => "required"
            ]);

            $dataa=Ogrenci::where("no","=",$request->no)->first();
            // dd($dataa);
            if($dataa)
            {
                if(Hash::check($request->sifre,$dataa->sifre))
                {
                Session()->put('ogr',$dataa);
                return redirect(route("ograna"));
                }
                else
            {
                print_r("hata sifre");
                return back()->with("Hata","Yanlış şifre girdiniz!");
            }

            }
            else
            {
                print_r("hata no");
                return back()->with("Hata","Yanlış numara girdiniz!");
            }



          }
          public function ogranasayfa()
          {



              return view('ograna');

            }


}
