<?php

namespace App\Http\Controllers;

use App\DeliveryReport;
use Illuminate\Http\Request;
use App\Driver;
use App\User;


class PdfController extends Controller
{
    public function incidentPDF()
    {
        $deliveryReports = DeliveryReport::all();
        // $pdf = PDF::loadView('deliveryreports.incident.index', compact('deliveryReports'));
        $view =  \View::make('deliveryreports.incident.pdf', compact('deliveryReports'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream();
        //return $pdf->download('reporte-incidencias-'.date('Y-m-d').'.pdf');
    }

    public function driver()
    {
        $driver = Driver::all();

        // $pdf = PDF::loadView('deliveryreports.incident.index', compact('deliveryReports'));
        $view =  \View::make('deliveryreports.incident.driver', compact('driver'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream();
        //return $pdf->download('reporte-incidencias-'.date('Y-m-d').'.pdf');
    }

    public function user()
    {
        $user = User::all();
        // $pdf = PDF::loadView('deliveryreports.incident.index', compact('deliveryReports'));
        $view =  \View::make('deliveryreports.incident.user', compact('user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream();
        //return $pdf->download('reporte-incidencias-'.date('Y-m-d').'.pdf');
    }
}
