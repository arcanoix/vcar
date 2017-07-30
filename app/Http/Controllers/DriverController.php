<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::latest()->paginate(10);

        return view('drivers.index', [
            'drivers' => $drivers,
        ]);
    }


    public function getCreate()
    {
        return view('drivers.create');
    }


    public function postCreate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
        ];

        $messages = [
            'name.required' =>'Necesitas ingresar el nombre del chofer',
            'lastname.required' =>'Necesitas ingresar el apellido del chofer',
        ];

        $this->validate($request, $rules, $messages);

        $driver = new Driver();
        $driver->name = $request->input('name');
        $driver->lastname = $request->input('lastname');
        $driver->licence = $request->input('licence');
        $driver->medical_certificate = $request->input('medical_certificate');
        $driver->observation = $request->input('observation');

        $driver->save();

        return back()->with('notification', ' Chofer dado de alta correctamente');
    }


    public function show(Driver $driver)
    {
        //
    }

    public function edit($id)
    {
        $driver = Driver::find($id);

        return view('drivers.edit', [
            'driver' => $driver ,
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
        ];

        $messages = [
            'name.required' =>'Necesitas ingresar el nombre del chofer',
            'lastname.required' =>'Necesitas ingresar el apellido del chofer',
        ];

        $this->validate($request, $rules, $messages);

        $driver = Driver::find($id);
        $driver->name = $request->input('name');
        $driver->lastname = $request->input('lastname');
        $driver->licence = $request->input('licence');
        $driver->medical_certificate = $request->input('medical_certificate');
        $driver->observation = $request->input('observation');

        $driver->save();

        return redirect('/choferes')->with('notification', ' Chofer actualizado correctamente');
        // return back()->with('notification', ' Chofer actualizado correctamente');
    }


    public function delete($id)
    {
        $driver = Driver::find($id);

        $driver->delete();

        return redirect('/choferes')->with('notification', 'Chofer eliminado correctamente');
    }
}
