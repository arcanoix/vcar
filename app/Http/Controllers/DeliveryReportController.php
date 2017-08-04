<?php

namespace App\Http\Controllers;

use App\DeliveryReport;
use App\Transport;
use App\Client;
use App\Driver;
use PDF;
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
        $clientsSelects = Client::all();
        $transportSelects = Transport::all();
        $driverSelects = Driver::all();
        // $deliveryReportClients = DeliveryReport::all();
        return view('deliveryreports.create', compact('deliveryReportClients', 'clientsSelects', 'transportSelects', 'driverSelects'));
    }



    public function postCreate(Request $request)
    {
        $rules = [
            'client_id' => 'required',
            'departure_date' => 'required',
            'delivery_date' => 'required',
            'destination_state' => 'required',
            'destination_city' => 'required',
            'destination_address' => 'required',
            'load_type' => 'required',
            'condition' => 'required',
            'transport_id' => 'required',
            'driver_id' => 'required',
        ];

        $messages = [
            'client_id.required' => 'Necesitas ingresar el nombre del cliente',
            'departure_date.required' => 'Necesitas ingresar la fecha de salida de la entrega',
            'delivery_date.required' => 'Necesitas ingresar la fecha de llegada de la entrega',
            'destination_state.required' => 'Necesitas ingresar el estado',
            'destination_city.required' => 'Necesitas ingresar la ciudad',
            'destination_address.required' => 'Necesitas ingresar la dirección de entrega',
            'load_type.required' => 'Necesitas ingresar el tiepo de carga',
            'condition.required' => 'Necesitas ingresar la condicion de la carga',
            'transport_id.required' => 'Necesitas ingresar el transporte',
            'driver_id.required' => 'Necesitas ingresar el chofer',
        ];

        $this->validate($request, $rules, $messages);

        $deliveryReport = new DeliveryReport();
        $deliveryReport->client_id = $request->input('client_id');
        $deliveryReport->departure_date = $request->input('departure_date');
        $deliveryReport->delivery_date = $request->input('delivery_date');
        $deliveryReport->destination_state = $request->input('destination_state');
        $deliveryReport->destination_city = $request->input('destination_city');
        $deliveryReport->destination_address = $request->input('destination_address');
        $deliveryReport->load_type = $request->input('load_type');
        $deliveryReport->condition = $request->input('condition');
        $deliveryReport->incident = $request->input('incident');
        $deliveryReport->transport_id = $request->input('transport_id');
        $deliveryReport->driver_id = $request->input('driver_id');

        $deliveryReport->save();

        return back()->with('notification', ' Reporte de Entrega dado de alta correctamente');
    }


    public function show($id)
    {
        $deliveryReport = DeliveryReport::find($id);
        return view('deliveryreports.show', compact('deliveryReport'));
    }


    public function edit($id)
    {
        $deliveryReport = DeliveryReport::find($id);
        $clientsSelects = Client::all();
        $transportSelects = Transport::all();
        $driverSelects = Driver::all();
        return view('deliveryreports.edit', compact('deliveryReport', 'clientsSelects', 'transportSelects', 'driverSelects', 'oldClient'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'client_id' => 'required',
            'departure_date' => 'required',
            'delivery_date' => 'required',
            'destination_state' => 'required',
            'destination_city' => 'required',
            'destination_address' => 'required',
            'load_type' => 'required',
            'condition' => 'required',
            'transport_id' => 'required',
            'driver_id' => 'required',
        ];

        $messages = [
            'client_id.required' => 'Necesitas ingresar el nombre del cliente',
            'departure_date.required' => 'Necesitas ingresar la fecha de salida de la entrega',
            'delivery_date.required' => 'Necesitas ingresar la fecha de llegada de la entrega',
            'destination_state.required' => 'Necesitas ingresar el estado',
            'destination_city.required' => 'Necesitas ingresar la ciudad',
            'destination_address.required' => 'Necesitas ingresar la dirección de entrega',
            'load_type.required' => 'Necesitas ingresar el tiepo de carga',
            'condition.required' => 'Necesitas ingresar la condicion de la carga',
            'transport_id.required' => 'Necesitas ingresar el transporte',
            'driver_id.required' => 'Necesitas ingresar el chofer',
        ];

        $this->validate($request, $rules, $messages);

        $deliveryReport = DeliveryReport::find($id);

        $deliveryReport->client_id = $request->input('client_id');
        $deliveryReport->departure_date = $request->input('departure_date');
        $deliveryReport->delivery_date = $request->input('delivery_date');
        $deliveryReport->destination_state = $request->input('destination_state');
        $deliveryReport->destination_city = $request->input('destination_city');
        $deliveryReport->destination_address = $request->input('destination_address');
        $deliveryReport->load_type = $request->input('load_type');
        $deliveryReport->condition = $request->input('condition');
        $deliveryReport->incident = $request->input('incident');
        $deliveryReport->transport_id = $request->input('transport_id');
        $deliveryReport->driver_id = $request->input('driver_id');

        $deliveryReport->save();

        // return back()->with('notification', ' Reporte de Entrega actualizado correctamente');
        return redirect('/entregas')->with('notification', 'Reporte de Entrega actualizado correctamente');
    }


    public function delete($id)
    {
        $deliveryReport = DeliveryReport::find($id);
        $deliveryReport->delete();

        return redirect('/entregas')->with('notification', 'Reporte de Entrega Eliminado');
    }

    public function incident()
    {
        $deliveryReports = DeliveryReport::all();

        return view('deliveryreports.incident.index', compact('deliveryReports'));
    }

    // public function incidentPDF()
    // {
    //     $deliveryReports = DeliveryReport::all();
    //     $pdf = PDF::loadView('deliveryreports.incident.index', compact('deliveryReports'));
    //
    //     return $pdf->download('invoice.pdf');
    // }
}
