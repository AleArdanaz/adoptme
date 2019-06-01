<?php

namespace App\Http\Controllers;
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
        $fotos = array();
        foreach ($perros as $perro) {
          $fotos = json_decode($perro->img,true);
        }
        return view('welcome',['perros' => $perros,'fotos' => $fotos]);
    }
}
