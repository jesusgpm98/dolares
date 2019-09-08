<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class AdminNoticiaController extends Controller
{
    //

    public function index()
    {
      return view('admin.noticias');
    }

    //obtener todos los registros de noticias para mostrarlos
    public function all()
    {
      $notacias = Notica::all();

      return $noticias;
    }

    //retornar vista de agregar noticia
    public function create(){
      return view('admin.noticia.agregar');
    }

    //funcion para agregar una noticia
    public function store(Request $request)
    {
      $data = $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

      $noticia = Noticia::create([
        'nombre' => $data['nombre'],
        'texto' => $data['descripcion']
      ]);

      return redirect()->route('admin.noticia.edit', ['id' => $noticia->id])->with('status', 'Se ha guardado correctamente');
    }

    public function edit($id){
      $noticia = Noticia::findOrFail($id);

      return view('admin.noticia.edit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
      $data = $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

    $noticia = Noticia::findOrFail($id);
          $noticia->nombre = $data['nombre'];
          $noticia->texto = $data['descripcion'];
          $noticia->save();


      return redirect()->route('admin.noticia.edit', ['id' => $noticia->id])->with('status', 'Se ha guardado correctamente');
    }
}
