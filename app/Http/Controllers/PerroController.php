<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;
use App\User;
use App\Imagen;
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
      $perro->tamaño = $request->tamaño;
      $perro->contacto = $request->contacto;
      $perro->comentarios = $request->comentarios;
      $perro->publicado = false;
      $perro->sexo = $request->sexo;
      //if ($request->file('img')) {
      ////  $ima = $request->file('img');
        //array_pop($ima);
      //  if ($ima) {
        //  $destinationPath = 'perrosimg/';
      //    $filename = array_pop($ima)->getClientOriginalName();
      //    array_pop($ima)->move($destinationPath, $filename);
      //    $perro->img = $filename;
      //  }
    //
    $re = $request->file('img');
    $atr = array_pop($re);
    $perro->img = $atr->getClientOriginalName();
    $perro->save();
    if ($request->hasFile('img')) {
      foreach ($request->file('img') as $image) {
        $img = new Imagen;
        $destinationPath = 'perrosimg/';
        $filename = $image->getClientOriginalName();
        $img->ruta = $filename;
        $img->perro_id = $perro->id;
        if ($img->ruta == $perro->img) {
          $img->delete();
        } else {
          $img->save();
        }

        $image->move( $destinationPath, $filename);
      }
    }



      return redirect('/');
    }


    public function borrar($perro_id){
      $perro = Perro::where('id' , $perro_id)->first();
      $imgs = Imagen::where('perro_id', $perro_id)->get();
      foreach ($imgs as $img) {
        $img->delete();
      }
      $perro->delete();
      return redirect('/');
    }

    public function publicar($perro_id){
      $perro = Perro::where('id', $perro_id)->first();
      $perro->publicado = true;
      $perro->save();

      return redirect('/');
    }



    public function profile($perro_id){
      $perro = Perro::where('id', $perro_id)->first();
      $imgs = Imagen::where('perro_id', $perro_id)->get();
      $perrosT = Perro::where('tamaño', $perro->tamaño)->get();
      return view('perro',['perro' => $perro, 'perrosT' => $perrosT, 'imgs' => $imgs]);
    }

  }
