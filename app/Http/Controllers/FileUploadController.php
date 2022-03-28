<?php

namespace App\Http\Controllers;

use App\Models\Ogrenci;
use App\Models\Projerapor;
use App\Models\Projetez;
use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|max:2048'],
            ['file.required'=>'Fotoğraf eksik.'

        ]);

        $fileName = time().'.'.$request->file->extension();


            $veri=$request->id;
            $dataa=Ogrenci::whereId($veri)->first();




        $request->file->move(public_path('images'), $fileName);
        Ogrenci::where('id',$request->id)->update(["foto"=>"images/".$fileName]);

        return back()
            ->with('success','Fotoğraf başarıyla yüklendi.')
            ->with('file',$fileName);


    }

    public function guncelle2($id)
    {


        return view('sisdandzn',compact('dataa','veri'));

      }







    public function fileUploadTezPost(Request $request)
    {
        $request->validate([
            'file' => 'required|max:2048',
            'file2' => 'required|max:2048',
        ],
        ['file.required'=>'1.Gönderme Eksik',
        'file2.required'=>'2.Gönderme Eksik',
        ]);

        $fileName = time().'.'.$request->file->extension();
        $fileName2 = time().'.'.$request->file->extension();

        $request->file->move(public_path('pdfs'), $fileName);
        $request->file2->move(public_path('words'), $fileName2);


        Projetez::create
        (["pdf_path"=>"pdfs/".$fileName,"word_path"=>"words/".$fileName2]);

        return back()
            ->with('success','Başarıyla dosyaları gönderdiniz.')
            ->with('file',$fileName);

    }
    public function filepdfPost(Request $request)
    {
       $no=$request->ogrno;
        $request->validate([
            'file' => 'required|max:2048',
            'file2' => 'required|max:2048',
            'file3' => 'required|max:2048',
            'file4' => 'required|max:2048',
            'file5' => 'required|max:2048',
            'file6' => 'required|max:2048',
        ],
    ['file.required'=>'1.Gönderme Eksik',
    'file2.required'=>'2.Gönderme Eksik',
    'file3.required'=>'3.Gönderme Eksik',
    'file4.required'=>'4.Gönderme Eksik',
    'file5.required'=>'5.Gönderme Eksik',
    'file6.required'=>'6.Gönderme Eksik',]);

        $fileName = time().'.'.$request->file->extension();
        $fileName2 = time().'.'.$request->file2->extension();
        $fileName3 = time().'.'.$request->file3->extension();
        $fileName4 = time().'.'.$request->file4->extension();
        $fileName5 = time().'.'.$request->file5->extension();
        $fileName6 = time().'.'.$request->file6->extension();

        $request->file->move(public_path('pdfs'), $fileName);
        $request->file2->move(public_path('words'), $fileName2);
        $request->file3->move(public_path('pdfs'), $fileName3);
        $request->file4->move(public_path('words'), $fileName4);
        $request->file5->move(public_path('pdfs'), $fileName5);
        $request->file6->move(public_path('words'), $fileName6);

        Projerapor::create
        (["pdf_path"=>"pdfs/".$fileName,"word_path"=>"words/".$fileName2,"pdf2_path"=>"pdfs/".$fileName3,"pdf3_path"=>"pdfs/".$fileName5,"word2_path"=>"words/".$fileName4,"word3_path"=>"words/".$fileName6]);




        return back()
            ->with('success','Başarıyla dosyaları gönderdiniz.')
            ->with('file',$fileName);

    }
}
