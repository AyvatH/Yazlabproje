<?php

namespace App\Http\Controllers;

use App\Models\Danisman;
use Illuminate\Http\Request;
use App\Models\Ogrenci;
use App\Models\Proje;
use App\Models\Yonetici;
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

    public function liste2()
    {
        $bilgi2=Proje::get();
        $bilgi="Proje Öneri";
        return view('ogrbasvurular',compact('bilgi2',"bilgi"));
    }
    public function liste3()
    {
        $bilgi2=Proje::join("ogrenciler","ogrenciler.id","projeoneri.num_id")->get(["projeoneri.*","ogrenciler.ad","ogrenciler.soyad","ogrenciler.no"]);

        // $bilgi2=Proje::join("ogrenciler","ogrenciler.id","projeoneri.num_id")
        //              ->join("atama","atama.ogr_id","ogrenciler.id")
        //               ->get(["projeoneri.*","ogrenciler.ad","ogrenciler.soyad","ogrenciler.no","atama.id as atama_id"]);

        // dd($bilgi2);
        $bilgi="Proje Öneri";
        return view('danproje',compact('bilgi2',"bilgi"));
    }
    public function liste4()
    {
        $bilgi2=Ogrenci::join("atama","atama.ogr_id","ogrenciler.id")->
                        join("danisman","danisman.id","atama.dan_id")
                    ->get(["ogrenciler.*","danisman.eposta","danisman.ad","danisman.soyad"]);

        // $bilgi2=Proje::join("ogrenciler","ogrenciler.id","projeoneri.num_id")
        //              ->join("atama","atama.ogr_id","ogrenciler.id")
        //               ->get(["projeoneri.*","ogrenciler.ad","ogrenciler.soyad","ogrenciler.no","atama.id as atama_id"]);
        foreach ($bilgi2 as $name => $title) {
             $title;
        }
      //  dd($title->ad);
        $bilgi="Proje Öneri";
        return view('ogrprofil',compact('bilgi2',"title"));
    }
    public function liste5()
    {
        $bilgi2=Danisman::join("atama","atama.dan_id","danisman.id")->
                        join("ogrenciler","ogrenciler.id","atama.ogr_id")
                    ->get(["danisman.*","ogrenciler.eposta","ogrenciler.ad","ogrenciler.soyad","ogrenciler.no","ogrenciler.sinif"]);

        // $bilgi2=Proje::join("ogrenciler","ogrenciler.id","projeoneri.num_id")
        //              ->join("atama","atama.ogr_id","ogrenciler.id")
        //               ->get(["projeoneri.*","ogrenciler.ad","ogrenciler.soyad","ogrenciler.no","atama.id as atama_id"]);
      //  dd($title->ad);
        $bilgi="Proje Öneri";
        return view('danogrlist',compact('bilgi2'));
    }
    public function liste6()
    {
        $bilgi2=Ogrenci::join("projeoneri","projeoneri.num_id","ogrenciler.id")->get(["ogrenciler.*","projeoneri.durum"]);

        return view('ogrrapor',compact('bilgi2'));
    }
    public function liste7()
    {
        $bilgi2=Ogrenci::join("projeoneri","projeoneri.num_id","ogrenciler.id")->
        join("projerapor","projeoneri.oneri_id","projerapor.proje_id")->get(["ogrenciler.*","projerapor.durum"]);

        return view('ogrtez',compact('bilgi2'));
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
          ]);
          Ogrenci::where('id',$request->id)->update(["ad"=>$request->ad,"soyad"=>$request->soyad,"no"=>$request->no,
          "eposta"=>$request->eposta,
         "sinif"=>$request->sinif,
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
        ]);
        Danisman::where('id',$request->id)->update(["ad"=>$request->ad,"soyad"=>$request->soyad,"sicilno"=>$request->sicilno,
        "eposta"=>$request->eposta,
       "unvan"=>$request->unvan]);
         return redirect()->route('admin.home');

        }
        public function ogrekle(Request $request)
    {
        Ogrenci::create
        (["ad"=>$request->ograd,"soyad"=>$request->ogrsad,"no"=>$request->ogrno,
        "eposta"=>$request->ogrmail,
        "sifre"=>Hash::make($request->ogrsifre),"sinif"=>$request->ogrsinif,
        "bolum"=>$request->ogrbolum,"fak"=>$request->ogrfak,"tel"=>$request->ogrtel]);

        $sifre=$request->ogrsifre;
        $mail=$request->ogrmail;
        Mail::to($mail) -> send(new ContactMail($sifre));

        return redirect('sisogrekle');


    }
    public function danekle(Request $request)
    {
        Danisman::create
        (["ad"=>$request->ad,"soyad"=>$request->soyad,
        "eposta"=>$request->eposta, "sifre"=>Hash::make($request->sifre),
       "unvan"=>$request->unvan, "sicilno"=>$request->sicilno]);

       
       $sifre=$request->sifre;
       $mail=$request->eposta;
       Mail::to($mail) -> send(new ContactMail($sifre));

       return redirect('sisdanekle');


    }

    public function sifredegis(Request $request)
    {
        $sifre=rand(100000,500000);
        $mail=$request->mail;
        Mail::to($mail) -> send(new ContactMail($sifre));

        return redirect('sifre');
    }
    public function ogrprojekle(Request $request)
    {
        Proje::create
        (["baslik"=>$request->baslik,"amac"=>$request->amac,
        "num_id"=>Session()->get("ogr")->id,
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


                    public function yongiris(Request $request)
              {


                  $request->validate([
                      "eposta" => "required",
                      "sifre" => "required"
                  ]);

                  $dataa=Yonetici::where("eposta","=",$request->eposta)->first();
                  // dd($dataa);
                  if($dataa)
                  {
                      if(Hash::check($request->sifre,$dataa->sifre))
                      {
                      Session()->put('yon',$dataa);
                      return redirect(route("sisprofile"));
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

                public function yonanasayfa()
                {



                    return view('sisprofile');

                  }
                  public function yoncikis()
            {


                if(Session::has("yon"))
                {
                    Session::pull("yon");
                    return redirect("admingiris");
                }
              }

}
