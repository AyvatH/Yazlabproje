<?php

namespace App\Http\Controllers;

use App\Models\Danisman;
use Illuminate\Http\Request;
use App\Models\Ogrenci;
use App\Models\Proje;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;





class ProjeVt extends Controller
{



    public function liste()
    {
        $bilgi=Ogrenci::get();
        $bilgi2=Danisman::get();
        return view('siskontrol',compact('bilgi','bilgi2'));
    }
    public function sil($id)
    {
        $veri=$id;
        Ogrenci::whereId($veri)->delete();

    return redirect('siskontrol');

      }
      public function sil2($id)
      {
          $veri=$id;
          Danisman::whereId($veri)->delete();

      return redirect('siskontrol');

        }


      public function guncelle($id)
    {

        $veri=$id;
        $dataa=Ogrenci::whereId($veri)->first();

        return view('sisogrgun',compact('dataa','veri'));

      }
      public function guncelle2($id)
      {

          $veri=$id;
          $dataa=Danisman::whereId($veri)->first();

          return view('sisdandzn',compact('dataa','veri'));

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
          Hash::make($request->sifre),"sinif"=>$request->sinif,
          "bolum"=>$request->bolum,"fak"=>$request->fak,"tel"=>$request->tel]);
           return redirect()->route('admin.home');

          }
      public function guncelled2(Request $request)
      {
        $request->validate([
            'ad'=>"required",
            "soyad" => "required",
            "eposta" => "required",
            "sicilno" => "required",
            "unvan" => "required",
            "sifre" => "required"
        ]);
        Danisman::where('id',$request->id)->update(["ad"=>$request->ad,"soyad"=>$request->soyad,"sicilno"=>$request->sicilno,
        "eposta"=>$request->eposta,
        "sifre"=>Hash::make($request->sifre),"unvan"=>$request->unvan]);
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
    public function danekle(Request $request)
    {
        Danisman::create
        (["ad"=>$request->ad,"soyad"=>$request->soyad,
        "eposta"=>$request->eposta, "sifre"=>Hash::make($request->sifre),
       "unvan"=>$request->unvan, "sicilno"=>$request->sicilno]);

        return redirect('sisdanekle');


    }
    public function ogrprojekle(Request $request)
    {
        Proje::create
        (["baslik"=>$request->baslik,"amac"=>$request->amac,
        "materyal"=>$request->materyal, "durum"=>"Beklemede",
       "anahtar_kelime"=>$request->anahtar1,"anahtar_kelime2"=>$request->anahtar2,"anahtar_kelime3"=>$request->anahtar3,
       "anahtar_kelime4"=>$request->anahtar4,"anahtar_kelime5"=>$request->anahtar5]);

        return redirect('ogrproje');


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

            public function ogrcikis()
            {


                if(Session::has("ogr"))
                {
                    Session::pull("ogr");
                    return redirect("ogrgiris");
                }
              }







              public function dangiris(Request $request)
              {


                  $request->validate([
                      "sicilno" => "required",
                      "sifre" => "required"
                  ]);

                  $dataa=Danisman::where("sicilno","=",$request->sicilno)->first();
                  // dd($dataa);
                  if($dataa)
                  {
                      if(Hash::check($request->sifre,$dataa->sifre))
                      {
                      Session()->put('dan',$dataa);
                      return redirect(route("dananasay"));
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
                public function dananasayfa()
                {



                    return view('dananasay');

                  }
                  public function dancikis()
                  {


                      if(Session::has("dan"))
                      {
                          Session::pull("dan");
                          return redirect("dngiris");
                      }
                    }


}
