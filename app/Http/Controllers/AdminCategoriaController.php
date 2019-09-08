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

  public function all(){
    $categorias = Categoria::all();

    return $categorias;
  }

  //agregar categoria
  public function store(Request $request){
    $data = $request->validate([
      'nombreCategoria' => 'required|string',
      'descripcionCategoria' => 'required'
    ]);

    $categoria = Categoria::create([
      'nombre' => $data['nombreCategoria'],
      'descripcion' => $data['descripcionCategoria']
    ]);

    return redirect()->route('admin.categoria.edit', ['id' => $categoria->id])->with('status', 'Se ha guardado correctamente');
  }

  public function edit($id){
    $categoria = Categoria::findOrFail($id);

    return view('admin.categoria.edit', compact('categoria'));
  }

  public function update(Request $request, $id)
  {
    $data = $request->validate([
      'nombreCategoria' => 'required|string',
      'descripcionCategoria' => 'required'
    ]);

    $categoria = Categoria::findOrFail($id);
    $categoria->nombre = $data['nombreCategoria'];
    $categoria->descripcion = $data['descripcionCategoria'];
    $categoria->save();


    return redirect()->route('admin.categoria.edit', ['id' => $categoria->id])->with('status', 'Se ha guardado correctamente');
  }

  public function create()
  {
    return view('admin.categoria.agregar');
  }
}
