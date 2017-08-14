<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Driver;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(Ticket $tickets, $driver_id)
    {
        $tickets = Driver::find($driver_id)->tickets;
        $driver = Driver::find($driver_id);
        return view('drivers.tickets.index', [
            'tickets' => $tickets,
            'driver' => $driver
        ]);
    }


    public function getCreate($driver_id)
    {
        $driver  = Driver::find($driver_id);

        return view('drivers.tickets.create', [
            'driver' => $driver
        ]);
    }


    public function postCreate(Request $request, $driver_id)
    {
        $rules = [
            'number' => 'required',
            'date' => 'required',
        ];

        $messages = [
            'number.required' =>'Necesitas ingresar el numero de la multa',
            'date.required' =>'Necesitas ingresar la fecha de la multa',
        ];

        $this->validate($request, $rules, $messages);

        $ticket = new Ticket();
        $driver = Driver::find($driver_id);
        $ticket->driver_id = $driver->id;
        $ticket->number = $request->input('number');
        $ticket->date = $request->input('date');

        $ticket->save();

        return redirect('/choferes/'.$driver->id.'/multas')->with('notification', 'Multa dada de alta correctamente');
    }


    public function show(Ticket $ticket)
    {
        //
    }


    public function edit($id)
    {
        $ticket = Ticket::find($id);

        return view('drivers.tickets.edit', [
            'ticket' => $ticket,
        ]);
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'number' => 'required',
            'date' => 'required',
        ];

        $messages = [
            'number.required' =>'Necesitas ingresar el numero de la multa',
            'date.required' =>'Necesitas ingresar la fecha de la multa',
        ];

        $this->validate($request, $rules, $messages);

        $ticket = Ticket::find($id);

        $ticket->driver_id = $request->input('driver_id');
        $ticket->number = $request->input('number');
        $ticket->date = $request->input('date');

        $ticket->save();

        return redirect()->action('TicketController@index', ['id' => $ticket->driver_id])->with('notification', 'Multa actualizada correctamente');
    }


    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return back()->with('notification', ' Multa eliminada correctamente');
    }
}
