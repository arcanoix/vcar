<?php

namespace App\Http\Controllers;

use App\DeliveryReport;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function incidentPDF()
    {
        $deliveryReports = DeliveryReport::all();
        // $pdf = PDF::loadView('deliveryreports.incident.index', compact('deliveryReports'));
        $view =  \View::make('deliveryreports.incident.pdf', compact('deliveryReports'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');

        return $pdf->download('reporte-incidencias-'.date('Y-m-d').'.pdf');
    }
}
