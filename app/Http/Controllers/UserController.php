<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        $role = Role::all();

        // dd($users);

        return view('users.index', compact('users', 'role'));
    }

    public function getCreate()
    {
        return view('users.create');
    }

    public function postCreate(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del usuario',
            'email.required' => 'Necesitas ingresar el correo del usuario',
            'password.required' => 'Necesitas ingresar una contraseña valida',
        ];

        $this->validate($request, $rules, $messages);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $user->roles()->attach((2));

        return redirect('/usuarios')->with('notification', 'Cliente registrado correctamente');
    }



    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('client'));
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
        ];

        $messages = [
            'name.required' => 'Necesitas ingresar el nombre del usuario',
            'email.required' => 'Necesitas ingresar el correo del usuario',
            // 'password.required' => 'Necesitas ingresar una contraseña valida',
        ];

        $this->validate($request, $rules, $messages);

        $user = User::find($id);
        $user->roles()->detach();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $role_id = $request->input('role_id');
        $user->roles()->attach(($role_id));

        $user->save();

        return redirect('/usuarios')->with('notification', 'Usuario actualizado correctamente');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/usuarios')->with('notification', 'Usuario eliminado correctamente');
    }
}
