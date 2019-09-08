<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Rol;

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

    //listar todos los usuarios
    public function all()
    {
      $user = User::all();
      return $user();
    }

    //vista para crear usuarios
    public function create(){
      $rol = Rol::all();

      return view('admin.user.agregar', compact('rol'));
    }

    //agregar usuario al sistema
    public function store(Request $request)
    {
      $data = $request->validate([
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
        'nombre' => $data['nombre'],
        'apellido'  => $data['apellido'],
        'telefono' => $data['telefono'],
        'ci' => $data['ci'],
        'estado' => $data['estado'],
        'pais' => $data['pais'],
        'ubicacion' => $data['ubicacion'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'rol_id' => $data['rol_id']
      ]);

      return redirect()->route('admin.user.edit', ['id' => $user->id])->with('status', 'Se ha guardado el usuario correctamente');
    }

    public function edit($id){
      $user = User::findOrFail($id);
      $id_rol = $user->rol_id;
      $rol = Rol::all();

      return view('admin.user.edit', compact('user', 'rol', 'id_rol'));
    }

    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);

      $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido'  => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'ci' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'pais' => 'required|string|max:255',
        'ubicacion' => 'required|string',
        'email' => 'required|email|unique:users,email,'.$user->id,
        'rol_id' => 'required'
      ]);


        $user->nombre     = $data['nombre'];
        $user->apellido   = $data['apellido'];
        $user->telefono   = $data['telefono'];
        $user->ci         = $data['ci'];
        $user->estado     = $data['estado'];
        $user->pais       = $data['pais'];
        $user->ubicacion  = $data['ubicacion'];
        $user->email      = $data['email'];
        if(!empty($data['password'])){
        $user->password = Hash::make($data['password']);
        }
        $user->rol_id = $data['rol_id'];
        $user->save();

      return redirect()->route('admin.user.edit', ['id' => $user->id])->with('status', 'Se ha guardado el usuario correctamente');
    }
}
