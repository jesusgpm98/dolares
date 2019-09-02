<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class AdminNoticiaController extends Controller
{
    //

    public function index()
    {
      return view('admin.noticias');
    }
    public function all()
    {
      $notacias = Notica::all();

      return $noticias;
    }

    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

      $noticia = Noticia::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion
      ]);

      return redirect()->route('admin.noticia.edit', ['id' => $noticia->id])->with('status', 'Se ha guardado correctamente');
    }

    public function edit($id){
      $noticia = Noticia::findOrFail($id);

      return view('admin.noticia.edit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required'
      ]);

    $noticia = Noticia::findOrFail($id);
          $noticia->nombre = $request->nombre;
          $noticia->descripcion = $request->descripcion;
          $noticia->save();


      return redirect()->route('admin.noticia.edit', ['id' => $noticia->id])->with('status', 'Se ha guardado correctamente');
    }
}
