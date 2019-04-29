<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;

class PerroController extends Controller
{
    public function store(Request $request){
      $validateData = $request->validate([
        'name' => ['required','string','max:30'],
        'raza' => ['required','string','max:30'],
        'tamaño' => ['required','string','max:30'],
        'edad' => ['required','integer','max:10'],
        'contacto' => ['required','text','max:150'],
        'name' => ['required','string','max:30'],
        'img' => ['required','string','max:300'],
        'comentarios' => ['required','string','max:300'],
      ])

      $perro = new Perro;
      $perro->name = $request->name;
      $perro->raza = $request->raza;
      $perro->edad = $request->edad;
      $perro->tamaño = $request->tamaño;
      $perro->contacto = $request->contacto;
      $perro->owner = Auth::user()->name;
      $perro->comentarios = $request->comentarios;
      $perro->save();

      return redirecto(route('/'));

    }
}
