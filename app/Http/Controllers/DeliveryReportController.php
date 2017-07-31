<?php

namespace App\Http\Controllers;

use App\DeliveryReport;
use App\Transport;
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


    public function show(Load $load)
    {
        //
    }


    public function edit(Load $load)
    {
        //
    }


    public function update(Request $request, Load $load)
    {
        //
    }


    public function destroy(Load $load)
    {
        //
    }
}
