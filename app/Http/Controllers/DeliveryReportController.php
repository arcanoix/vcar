<?php

namespace App\Http\Controllers;

use App\DeliveryReport;
use App\Transport;
use App\Client;
use App\Driver;
use Illuminate\Http\Request;

class DeliveryReportController extends Controller
{
    public function index()
    {
        $deliveryReports = DeliveryReport::all();

        return view('deliveryreports.index', compact('deliveryReports'));
    }


    public function getCreate()
    {
        //
    }


    public function postCreate(Request $request)
    {
        //
    }


    public function show($id)
    {
        $deliveryReport = DeliveryReport::find($id);

        return view('deliveryreports.show', compact('deliveryReport'));
    }


    public function edit()
    {
        //
    }


    public function update(Request $request)
    {
        //
    }


    public function destroy()
    {
        //
    }
}
