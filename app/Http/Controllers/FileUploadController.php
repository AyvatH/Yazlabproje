<?php

namespace App\Http\Controllers;

use App\Models\Projerapor;
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
            'file' => 'required|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);

    }
    public function fileUploadwordPost(Request $request)
    {
        $request->validate([
            'file' => 'required|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('words'), $fileName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);

    }
    public function filepdfPost(Request $request)
    {
       $no=$request->ogrno;
        $request->validate([
            'file' => 'required|max:2048',
            'file2' => 'required|max:2048',
        ]);

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
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);

    }
}
