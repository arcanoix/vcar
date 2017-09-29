<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\Transport;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::latest()->paginate(10);

        return view('maintenances.index', compact('maintenances'));
    }


    public function getCreate()
    {
        $transportSelects = Transport::all();

        return view('maintenances.create', compact('transportSelects'));
    }


    public function postCreate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'last_check' => 'required',
            'last_km' => 'required',
            'next_check' => 'required',
            'next_km' => 'required',
            'transport_id' => 'required'
        ];

        $messages = [
            'name.required' => 'Necesitas seleccionar el mantenimiento',
            'last_check.required' => 'Necesitas ingresar la fecha del mantenimiento',
            'last_km.required' => 'Necesitas ingresar los KM actuales en el mantenimiento',
            'next_check.required' => 'Necesitas ingresar fecha para la siguiente revisión',
            'next_km.required' => 'Necesitas ingresar los KM que necesita el transporte para la siguiente revision',
            'transport_id.required' => 'Necesitas ingresar el transporte',
        ];

        $this->validate($request, $rules, $messages);

        $maintenance = new Maintenance();
        $maintenance->name = $request->input('name');
        $maintenance->last_check = $request->input('last_check');
        $maintenance->last_km = $request->input('last_km');
        $maintenance->next_check = $request->input('next_check');
        $maintenance->next_km = $request->input('next_km');
        $maintenance->observation = $request->input('observation');
        $maintenance->transport_id = $request->input('transport_id');

        $maintenance->save();

        return redirect('/mantenimientos')->with('notification', 'Mantenimiento dado de alta correctamente');
        // return back()->with('notification', ' Mantenimiento dado de alta correctamente');
    }

    public function show($id)
    {
        $maintenance = Maintenance::find($id);

        return view('maintenances.show', compact('maintenance'));
    }


    public function edit($id)
    {
        $maintenance = Maintenance::find($id);
        $transportSelects = Transport::all();

        return view('maintenances.edit', compact('maintenance', 'transportSelects'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'last_check' => 'required',
            'last_km' => 'required',
            'next_check' => 'required',
            'next_km' => 'required',
            'transport_id' => 'required'
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre de del mantenimiento',
            'last_check.required' => 'Necesitas ingresar la fecha del mantenimiento',
            'last_km.required' => 'Necesitas ingresar los KM actuales en el mantenimiento',
            'next_check.required' => 'Necesitas ingresar fecha para la siguiente revisión',
            'next_km.required' => 'Necesitas ingresar los KM que necesita el transporte para la siguiente revision',
            'transport_id.required' => 'Necesitas ingresar el transporte',
        ];

        $this->validate($request, $rules, $messages);

        $maintenance = Maintenance::find($id);
        $maintenance->name = $request->input('name');
        $maintenance->last_check = $request->input('last_check');
        $maintenance->last_km = $request->input('last_km');
        $maintenance->next_check = $request->input('next_check');
        $maintenance->next_km = $request->input('next_km');
        $maintenance->observation = $request->input('observation');
        $maintenance->transport_id = $request->input('transport_id');

        $maintenance->save();

        return redirect('/mantenimientos')->with('notification', 'Mantenimiento actualizado correctamente');
    }


    public function delete($id)
    {
        $maintenance = Maintenance::find($id);
        $maintenance->delete();

        return redirect('/mantenimientos')->with('notification', 'Mantenimiento Eliminado correctamente');
    }

    public function search($dato = "")
    {
        $maintenances = Maintenance::Search($dato)->paginate(30);
        return view('maintenances.search')->with('maintenances', $maintenances);
    }
}
