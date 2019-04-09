<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function convenio()
    {
		$pdf = \PDF::loadView('data.docs.partial-anexo4');
		return $pdf->stream();
                
    }

    public function compromisso()
    {
        $pdf = \PDF::loadView('data.docs.partial-template5');
		return $pdf->stream();
    }
}
