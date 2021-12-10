<?php

namespace App\Http\Controllers;
use App\Models\addquestion;
use Illuminate\Http\Request;
use PDF;

class pdfcontroller extends Controller
{
     public function pdf_view(){
      $question=addquestion::all();
      return view('pdf_view',compact('question'));
    }

    public function pdf_converter(){

        $question=addquestion::all();
       

     
        $pdf_doc = PDF::loadView('pdf_view', compact('question'));
      

        return $pdf_doc->download('exampdf.pdf');
    }
}
