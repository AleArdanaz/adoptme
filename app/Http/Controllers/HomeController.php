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
        $perros = Perro::orderBy('created_at', 'DESC')->paginate();
        return view('welcome',['perros' => $perros]);
    }
}
