<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PerroController extends Controller
{
    public function store(Request $request){

    $validateData = $request->validate([
      'name' => ['required','string','max:30'],
      'raza' => ['required','string','max:30'],
      'tamaño' => ['required','string','max:30'],
      'edad' => ['required','integer','max:10'],
      'img' => ['required'],
      'contacto' => ['required','string','max:150'],
      'comentarios' => ['required','string','max:300'],
      ]);


      $perro = new Perro;
      $perro->name = $request->name;
      $perro->raza = $request->raza;
      $perro->edad = $request->edad;
      $image = $request->file('img');
      $image->move('imgs', $image->getClientOriginalName());
      $perro->img = $image->getClientOriginalName();
      $perro->tamaño = $request->tamaño;
      $perro->contacto = $request->contacto;
      $perro->owner = Auth::user()->name;
      $perro->comentarios = $request->comentarios;
      $perro->save();

      return redirect()->back();
    }
}
