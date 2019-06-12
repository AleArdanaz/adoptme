<?php

namespace App\Http\Controllers;
use App\Imagen;
use App\Perro;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perros = Perro::where('publicado', true)->orderBy('created_at' , 'DESC')->GET();

        return view('home',['perros' => $perros]);
    }

    public function adopcion() {
      return view('adopcion');
    }
}
