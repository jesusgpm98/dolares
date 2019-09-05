<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
    //

  public function index()
  {
    return view('admin.index');
  }

    public function indexUser()
    {
      return view('admin.user.index');
    }

    public function all()
    {
      $user = User::all();
      return $user();
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido'  => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'ci' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'pais' => 'required|string|max:255',
        'ubicacion' => 'required|string',
        'email' => 'required|string|max:255|email|unique:users',
        'password' => 'required|string|max:255',
        'rol_id' => 'required'
      ]);

      $user = User::create([
        'nombre' => $request->nombre,
        'apellido'  => $request->apellido,
        'telefono' => $request->telefono,
        'ci' => $request->ci,
        'estado' => $request->estado,
        'pais' => $request->pais,
        'ubicacion' => $request->ubicacion,
        'email' => $request->email,
        'password' => $request->password,
        'rol_id' => $request->rol_id
      ]);

      return redirect()->route('admin.user.edit', ['id' => $user->id])->with('status', 'Se ha guardado el usuario correctamente');
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido'  => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'ci' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'pais' => 'required|string|max:255',
        'ubicacion' => 'required|string',
        'email' => 'required|string|max:255|email|unique:users',
        'rol_id' => 'required'
      ]);

      $user = User::findOrFail($id);
        $user->nombre = $request->nombre;
        $user->apellido  = $request->apellido;
        $user->telefono = $request->telefono;
        $user->ci = $request->ci;
        $user->estado = $request->estado;
        $user->pais = $request->pais;
        $user->ubicacion = $request->ubicacion;
        $user->email = $request->email;
        if(!empty($request->password)){
        $user->password = $request->password;
        }
        $user->rol_id = $request->rol_id;
        $user->save();

      return redirect()->route('admin.user.edit', ['id' => $user->id])->with('status', 'Se ha guardado el usuario correctamente');
    }

    public function edit($id)
    {
      $user = User::findOrFail($id);

      return view('admin.user.edit', compact('user'));
    }
}
