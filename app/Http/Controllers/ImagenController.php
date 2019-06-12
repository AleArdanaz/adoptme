<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;
use App\Imagen;

class ImagenController extends Controller
{
  public function store(Request $request){
  if ($request->hasFile('img')) {
        foreach ($request->file('img') as $image) {
              $img = new Imagen;
              $img->perro_id = $perro->id;
              $destinationPath = 'perrosimg/';
              $filename = $image->getClientOriginalName();
              $image->move($destinationPath, $filename);
              $img->ruta = $filename;
              $img->save();
    }
}
}
