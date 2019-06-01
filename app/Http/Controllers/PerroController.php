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
      $perro->name = $request->name;
      $perro->raza = $request->raza;
      $perro->edad = $request->edad;
      if ($request->hasFile('img')) {
        $imgs = [];
        foreach ($request->file('img') as $image) {
          $destinationPath = 'perrosimg/';
          $filename = $image->getClientOriginalName();
          $image->move($destinationPath, $filename);
          array_push($imgs,$filename);
        }
        $perro->img = json_encode($imgs);
      }
      $perro->tamaño = $request->tamaño;
      $perro->contacto = $request->contacto;
      $perro->comentarios = $request->comentarios;
      $perro->publicado = false;
      $perro->save();

      return redirect()->back();
    }

    public function borrar($perro_id){
      $perro = Perro::where('id' , $perro_id)->first();
      $perro->delete();
      return redirect('/');
    }

    public function publicar($perro_id){
      $perro = Perro::where('id', $perro_id)->first();
      $perro->publicado = true;
      $perro->save();

      return redirect('/');
    }


  }
