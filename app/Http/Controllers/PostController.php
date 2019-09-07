<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    //
    public function getPost(Request $request)
    {
      $post = Post::where('activo', true)->get();
      return $post;
    }

    public function store(Request $request)
    {
      $request->validate([
      'nombre' => 'required|min:8|max:255',
      'descripcion' => 'required',
      'tasa' => 'required',
        'min' => 'required',
        'max' => 'required',
        'user_id' => 'required',
        'categoria_id' => 'required',
      ]);

      $post = Post::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'tasa' => $request->tasa,
        'min' => $request->min,
        'max' => $request->max,
        'user_id' => $request->user_id,
        'categoria_id' => $request->categoria_id,
      ]);


    }

    public function update(Request $request, $id)
    {
      $request->validate([
      'nombre' => 'required|min:8|max:255',
      'descripcion' => 'required',
      'tasa' => 'required',
        'min' => 'required',
        'max' => 'required',
        'user_id' => 'required',
        'categoria_id' => 'required',
      ]);

      $post = Post::findOrFail($id);
        $post->nombre = $request->nombre;
        $post->descripcion = $request->descripcion;
        $post->tasa = $request->tasa;
        $post->min = $request->min;
        $post->max = $request->max;
        $post->user_id = $request->user_id;
        $post->categoria_id = $request->categoria_id;
        $post->save();
    }

    public function inactivo(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->activo = false;
        $post->save();
    }

    public function activo(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->activo = true;
        $post->save();
    }

    


}
