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
      'edad' => ['required','integer','max:100'],
      'img' => ['required'],
      'contacto' => ['required','string','max:150'],
      'comentarios' => ['required','string','max:1000'],
      ]);


      $perro = new Perro;
      $perro->user_id = Auth::user()->id;
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

    public function borrar($perro_id){
      $perro = Perro::where('id' , $perro_id)->first();
      if ($perro) {
        if (Auth::user() != $perro->user) {
              return redirect('/');
            }
              else {
                  $perro->delete();
                  return redirect()->back();
      }
    }
     else {
       return "Que haces loquillo?";
    }
    }
  }
