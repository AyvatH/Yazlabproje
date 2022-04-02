<?php

namespace App\Http\Controllers;

use App\Models\Danisman;
use Illuminate\Http\Request;
use App\Models\Ogrenci;
use App\Models\Proje;
use App\Models\Atama;
use App\Models\Donem;
use App\Models\Yonetici;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Projerapor;
use App\Models\Projetez;

class ProjeVt extends Controller
{

    public function goster()
    {
        return view('adminatama');

    }


    public function atama()
    {
        $bilgi=Ogrenci::get()->toArray();
        $bilgi2=Danisman::get()->toArray();
        $bilgi3=Atama::get()->toArray();
        //  dd(count($bilgi),$bilgi2);
        if(count($bilgi3)==0)
        {
        $b=0;
        if(count($bilgi)!=0 && count($bilgi2)!=0)
        {
        for($a=0;$a<count($bilgi);$a++)
        {
            if(count($bilgi2)==$b)
            $b=0;
            $ogr_id=$bilgi[$a]['id'];
            $dan_id=$bilgi2[$b]['id'];
           Atama::create
            (["ogr_id"=> $ogr_id,"dan_id"=> $dan_id]);

            $b++;

        }
    }
    else
    {
dd("Ögretmen ve Ögrenci sayınız sıfırdan farklı olmalıdır.");
    }}
    else
    {
dd("Atama işlemi yapılmıştır.");}
        return view('adminatama');
    }

    public function liste()
    {
        $bilgi=Ogrenci::get();
        $bilgi2=Danisman::get();
        // dd($bilgi,$bilgi2);
        return view('siskontrol',compact('bilgi','bilgi2'));
    }

    public function liste8()
    {
        $bilgi=Donem::get();
        return view('donemekle',compact('bilgi'));
    }
    public function liste9()
    {
        $bilgi=Donem::get();
        return view('sisogrekle',compact('bilgi'));
    }
    public function liste10()
    {
        $bilgi=Donem::get();
        return view('sisdanekle',compact('bilgi'));
    }


    public function liste2()
    {
        $bilgi2=Proje::get();
        $bilgi="Proje Öneri";
        return view('ogrbasvurular',compact('bilgi2',"bilgi"));
    }
    public function liste3()
    {
        $danid=session()->get('dan')->id;
        $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
        join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
        join("projeoneri","ogrenciler.id","projeoneri.num_id")->
        get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik","projeoneri.durum","projeoneri.amac","projeoneri.materyal",
    "projeoneri.anahtar_kelime",
    "projeoneri.anahtar_kelime2",
    "projeoneri.anahtar_kelime3",
    "projeoneri.anahtar_kelime4",
    "projeoneri.anahtar_kelime5"]);
        // dd($bilgi2);
        return view('danproje',compact('bilgi2'));
    }
    public function liste11()
    {
        $danid=session()->get('dan')->id;
        $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
        join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
        join("projeoneri","ogrenciler.id","projeoneri.num_id")->
        join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
        get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
    ,"pdf_path","pdf2_path","pdf3_path","word_path","word2_path","word3_path","projerapor.durum","projerapor.rapor_id"]);
        // dd($bilgi2);
        return view('danrapor',compact('bilgi2'));
    }
    public function liste12()
    {
        $danid=session()->get('dan')->id;
        $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
        join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
        join("projeoneri","ogrenciler.id","projeoneri.num_id")->
        join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
        join("projetez","projerapor.rapor_id","projetez.rapor_id")->
        get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
                ,"projetez.pdf_path","projetez.word_path","projetez.tez_id","projetez.durum","projerapor.rapor_id"]);
        // dd($bilgi2);
        return view('dantez',compact('bilgi2'));
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
        $danid=session()->get('dan')->id;
        $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
        join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
        get(['ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta"]);
        // dd($bilgi2);
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
      public function icerik($id)
      {

          $veri=$id;
          $dataa=Proje::where("oneri_id",$veri)->first();
// dd($dataa);
          return view('icerik',compact('dataa','veri'));

        }

      public function aktif($id)
      {
        $bilgi=Donem::get();
          $veri=$id;
          $dataa=Donem::whereId($veri)->first();
          Donem::where('id',$veri)->update(["aktif_donem"=>"aktif"]);
          return redirect()->back()->with("bilgi",$bilgi);
        }
        public function projeonay($id)
      {
        $danid=session()->get('dan')->id;
        $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
        join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
        join("projeoneri","ogrenciler.id","projeoneri.num_id")->
        get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik","projeoneri.durum","projeoneri.amac","projeoneri.materyal",
    "projeoneri.anahtar_kelime",
    "projeoneri.anahtar_kelime2",
    "projeoneri.anahtar_kelime3",
    "projeoneri.anahtar_kelime4",
    "projeoneri.anahtar_kelime5"]);
        // dd($bilgi2);
          $veri=$id;
          $dataa=Proje::where("oneri_id",$veri)->first();
          Proje::where('oneri_id',$veri)->update(["durum"=>"kabul"]);
          return redirect()->back()->with("bilgi2",$bilgi2);
        }
        public function tezonay($id)
        {  $danid=session()->get('dan')->id;
            $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
            join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
            join("projeoneri","ogrenciler.id","projeoneri.num_id")->
            join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
            join("projetez","projerapor.rapor_id","projetez.rapor_id")->
            get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
        ,"projetez.pdf_path","projetez.word_path","projetez.tez_id","projetez.durum","projerapor.durum","projerapor.rapor_id"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Projetez::where("tez_id",$veri)->first();
            Projetez::where('tez_id',$veri)->update(["durum"=>"kabul"]);
            return redirect()->back()->with("bilgi2",$bilgi2);
          }
          public function tezred($id)
        {  $danid=session()->get('dan')->id;
            $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
            join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
            join("projeoneri","ogrenciler.id","projeoneri.num_id")->
            join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
            join("projetez","projerapor.rapor_id","projetez.rapor_id")->
            get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
        ,"projetez.pdf_path","projetez.word_path","projetez.tez_id","projetez.durum","projerapor.durum","projerapor.rapor_id"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Projetez::where("tez_id",$veri)->first();
            Projetez::where('tez_id',$veri)->update(["durum"=>"red"]);
            return redirect()->back()->with("bilgi2",$bilgi2);
          }
        public function raporonay($id)
        {
            $danid=session()->get('dan')->id;
            $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
            join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
            join("projeoneri","ogrenciler.id","projeoneri.num_id")->
            join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
            get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
        ,"pdf_path","pdf2_path","pdf3_path","word_path","word2_path","word3_path","projerapor.durum","projerapor.rapor_id"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Projerapor::where("rapor_id",$veri)->first();
            Projerapor::where('rapor_id',$veri)->update(["durum"=>"kabul"]);
            return redirect()->back()->with("bilgi2",$bilgi2);
          }
          public function raporred($id)
        {
            $danid=session()->get('dan')->id;
            $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
            join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
            join("projeoneri","ogrenciler.id","projeoneri.num_id")->
            join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
            get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
        ,"pdf_path","pdf2_path","pdf3_path","word_path","word2_path","word3_path","projerapor.durum","projerapor.rapor_id"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Projerapor::where("rapor_id",$veri)->first();
            Projerapor::where('rapor_id',$veri)->update(["durum"=>"red"]);
            return redirect()->back()->with("bilgi2",$bilgi2);
          }
          public function aciklama2($id)
          {
            $danid=session()->get('dan')->id;
            $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
            join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
            join("projeoneri","ogrenciler.id","projeoneri.num_id")->
            join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
            get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
        ,"pdf_path","pdf2_path","pdf3_path","word_path","word2_path","word3_path","projerapor.durum","projerapor.rapor_id"]);
            // dd($bilgi2);
              $veri=$id;
              $dataa=Projerapor::where("rapor_id",$veri)->first();
              Projerapor::where('rapor_id',$veri)->update(["durum"=>"kabul"]);
              return view('aciklama2',compact('dataa','veri'));
            }
            public function aciklama3($id)
            {
                $danid=session()->get('dan')->id;
                $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
                join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
                join("projeoneri","ogrenciler.id","projeoneri.num_id")->
                join("projerapor","projerapor.proje_id","projeoneri.oneri_id")->
                join("projetez","projerapor.rapor_id","projetez.rapor_id")->
                get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik"
            ,"projetez.pdf_path","projetez.word_path","projetez.tez_id","projetez.durum","projerapor.durum","projerapor.rapor_id"]);
              // dd($bilgi2);
                $veri=$id;
                $dataa=Projetez::where("tez_id",$veri)->first();
                Projetez::where('tez_id',$veri)->update(["durum"=>"kabul"]);
                return view('aciklama3',compact('dataa','veri'));
              }
        public function aciklama($id)
        {
          $danid=session()->get('dan')->id;
          $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
          join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
          join("projeoneri","ogrenciler.id","projeoneri.num_id")->
          get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik","projeoneri.durum","projeoneri.amac","projeoneri.materyal",
      "projeoneri.anahtar_kelime",
      "projeoneri.anahtar_kelime2",
      "projeoneri.anahtar_kelime3",
      "projeoneri.anahtar_kelime4",
      "projeoneri.anahtar_kelime5"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Proje::where("oneri_id",$veri)->first();
            Proje::where('oneri_id',$veri)->update(["durum"=>"kabul"]);
            return view('aciklama',compact('dataa','veri'));
          }
        public function projered($id,Request $request)
        {
          $danid=session()->get('dan')->id;
          $bilgi2=Atama::join("ogrenciler","ogrenciler.id","atama.ogr_id")->
          join("danisman","danisman.id","atama.dan_id")->where("danisman.id",$danid)->
          join("projeoneri","ogrenciler.id","projeoneri.num_id")->
          get(['projeoneri.oneri_id','ogrenciler.ad','ogrenciler.soyad',"ogrenciler.no","ogrenciler.sinif","ogrenciler.eposta","projeoneri.baslik","projeoneri.durum","projeoneri.amac","projeoneri.materyal",
      "projeoneri.anahtar_kelime",
      "projeoneri.anahtar_kelime2",
      "projeoneri.anahtar_kelime3",
      "projeoneri.anahtar_kelime4",
      "projeoneri.anahtar_kelime5"]);
          // dd($bilgi2);
            $veri=$id;
            $dataa=Proje::where("oneri_id",$veri)->first();
            Proje::where('oneri_id',$veri)->update(["aciklama"=>$request->aciklama]);
            return redirect()->back()->with("bilgi2",$bilgi2);
          }

        public function pasif($id)
        {
          $bilgi=Donem::get();
            $veri=$id;
            $dataa=Donem::whereId($veri)->first();
            Donem::where('id',$veri)->update(["aktif_donem"=>"pasif"]);
            return redirect()->back()->with("bilgi",$bilgi);

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
          public function aciklamag(Request $request)
          {
            $request->validate([
                'aciklama'=>"required",

            ]);
            // dd($request->aciklama);
            Proje::where('oneri_id',$request->id)->update(["aciklama"=>$request->aciklama]);
             return redirect()->route('danproje.liste');

            }
            public function aciklamag2(Request $request)
            {
              $request->validate([
                  'aciklama'=>"required",

              ]);
              // dd($request->aciklama);
              Projerapor::where('rapor_id',$request->id)->update(["aciklama"=>$request->aciklama]);
               return redirect()->route('danrapor.liste');

              }
              public function aciklamag3(Request $request)
              {
                $request->validate([
                    'aciklama'=>"required",

                ]);
                // dd($request->aciklama);
                Projetez::where('tez_id',$request->id)->update(["aciklama"=>$request->aciklama]);
                 return redirect()->route('dantez.liste');

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
        "bolum"=>$request->ogrbolum,"fak"=>$request->ogrfak,"tel"=>$request->ogrtel,"donem"=>$request->donem]);

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
       "unvan"=>$request->unvan, "sicilno"=>$request->sicilno,"donem"=>$request->donem]);


       $sifre=$request->sifre;
       $sicilno=$request->sicilno;
       $mail=$request->eposta;
       Mail::to($mail) -> send(new ContactMail($sifre,$sicilno));

       return redirect('sisdanekle');


    }
    public function donemekle(Request $request)
    {
        Donem::create
        (["donem_adi"=>$request->donemadi,"tarih"=>$request->tarih,"aktif_donem"=>"pasif"]);

       return redirect('donemekle');


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
