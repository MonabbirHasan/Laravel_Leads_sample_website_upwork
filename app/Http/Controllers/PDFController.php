<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request){
        $data=[
            'title'=>'',
            'date'=>date('m/d/y')
        ];
        return $data;
        // return $pdf->downlaod('code.pdf');
    }
}
