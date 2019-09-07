<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class AdminCategoriaController extends Controller
{
    //

    //

    public function index()
    {
      return view('admin.categoria.index');
    }
    public function all()
    {
      $categorias = Categoria::all();

      return $categorias;
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

      $categoria = Categoria::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion
      ]);

      return redirect()->route('admin.categoria.edit', ['id' => $categoria->id])->with('status', 'Se ha guardado correctamente');
    }

    public function edit($id){
      $categoria = Categoria::findOrFail($id);

      return view('admin.categoria.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

    $categoria = Categoria::findOrFail($id);
          $categoria->nombre = $request->nombre;
          $categoria->descripcion = $request->descripcion;
          $categoria->save();


      return redirect()->route('admin.categoria.edit', ['id' => $categoria->id])->with('status', 'Se ha guardado correctamente');
    }

    public function create()
    {
      return view('admin.categoria.agregar');
    }
}
