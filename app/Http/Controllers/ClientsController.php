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
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del cliente',
        ];

        $this->validate($request, $rules, $messages);

        $client = new Client();
        $client->name = $request->input('name');

        $client->save();

        return redirect('/clientes')->with('notification', 'Cliente registrado correctamente');
    }



    public function show($id)
    {
        //
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

        $client->save();

        return redirect('/clientes')->with('notification', 'Cliente actualizado correctamente');
    }

    public function delete($id)
    {
        // delete
        $client = Client::find($id);
        $client->delete();

        return redirect('/clientes')->with('notification', 'Cliente eliminado correctamente');
    }
}
