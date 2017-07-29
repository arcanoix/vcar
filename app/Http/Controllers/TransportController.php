<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::latest()->paginate(10);

        return view('transports.index', [
            'transports' => $transports
        ]);
    }


    public function getCreate()
    {
        return view('transports.create');
    }


    public function postCreate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required'
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del Transporte',
            'brand.required' => 'Necesitas ingresar la marca del Transporte',
            'model.required' => 'Necesitas ingresar el modelo del Transporte',
        ];

        $this->validate($request, $rules, $messages);

        $transport = new Transport();
        $transport->name = $request->input('name');
        $transport->brand = $request->input('brand');
        $transport->model = $request->input('model');

        $transport->save();

        return redirect('/transportes')->with('notification', 'Transporte registrado correctamente');
    }



    public function show(Transport $transport)
    {
        //
    }


    public function edit($id)
    {
        $transport = Transport::find($id);

        return view('transports.edit', [
            'transport' => $transport
        ]);
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del cliente',
        ];

        $this->validate($request, $rules, $messages);

        $transport = Transport::find($id);

        $transport->name = $request->input('name');
        $transport->brand = $request->input('brand');
        $transport->model = $request->input('model');

        $transport->save();

        return redirect('/transportes')->with('notification', 'Transporte actualizado correctamente');
    }


    public function delete($id)
    {
        // delete
         $transport = Transport::find($id);
        $transport->delete();

        return redirect('/transportes')->with('notification', 'Cliente eliminado correctamente');
    }
}
