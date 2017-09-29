<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        // $clients = Client::all();

        return view('clients.index', [
            'clients' => $clients,
        ]);
    }



    public function getCreate()
    {
        return view('clients.create');
    }

    public function postCreate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cedula' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del cliente',
            'email.required' => 'Necesitas ingresar el correo electrónico del cliente',
            'phone.required' => 'Necesitas ingresar el teléfono del cliente',
            'cedula.required' => 'Necesitas ingresar la cedula del cliente',
            'cedula.numeric' => 'El campo cedula, tendrá que ser solo numeros.',
            'address.required' => 'Necesitas ingresar la direción del cliente',
            'city.required' => 'Necesitas ingresar la cedula del cliente',
            'state.required' => 'Necesitas ingresar la cedula del cliente',
        ];

        $this->validate($request, $rules, $messages);

        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->cedula = $request->input('cedula');
        $client->address = $request->input('address');
        $client->state = $request->input('state');
        $client->city = $request->input('city');

        $client->save();

        activity('Crear Cliente')
          ->performedOn($client)
          ->causedBy(auth()->user())
          ->log(':causer.name ha creado el cliente con nombre :subject.name');

        return redirect('/clientes')->with('notification', 'Cliente registrado correctamente');
    }



    public function show($id)
    {
        $client = Client::find($id);

        return view('clients.show', compact('client'));
    }


    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client,
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

        $client = Client::find($id);

         $client->name = $request->input('name');
         $client->email = $request->input('email');
         $client->phone = $request->input('phone');
         $client->cedula = $request->input('cedula');
         $client->address = $request->input('address');
         $client->state = $request->input('state');
         $client->city = $request->input('city');

        $client->save();

        activity('Modificación de Cliente')
          ->performedOn($client)
          ->causedBy(auth()->user())
          ->log(':causer.name ha modificado el cliente con nombre :subject.name');

        return redirect('/clientes')->with('notification', 'Cliente actualizado correctamente');
    }

    public function delete($id)
    {
        // delete
        $client = Client::find($id);
        $client->delete();

        activity('Cliente Eliminado')
         ->performedOn($client)
         ->causedBy(auth()->user())
         ->log(':causer.name ha eliminado el cliente con nombre :subject.name');

        return redirect('/clientes')->with('notification', 'Cliente eliminado correctamente');
    }

    public function active(Request $request)
    {
        $client = Client::find($request->input('id'));

        $client->active = $request->input('active');

        $client->save();

        return redirect('/clientes')->with('notification', 'Se cambio el Estado del cliente');
    }

    public function search($dato = "")
    {

        $clients = Client::Search($dato)->paginate(30);
        return view('clients.search')->with('clients', $clients);
    }
}
