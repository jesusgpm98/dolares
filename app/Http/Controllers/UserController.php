<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    //

    public function updatePassword(Request $request, $id)
    {
      $user = User::findOrFail($id);
      if (Hash::check($request->password, $user->password))
      {
    // The passwords match...
    $user->password = $request->newPassword;
    $user->save();
    $mensaje = 'Se ha guardado correctamente';
  }else{
    $mensaje = 'los password no coinciden';
  }

  return redirect()->route('newPassword')->with('status', $mensaje);


    }
}
