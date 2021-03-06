<?php

namespace App\Http\Controllers;

use App\Perro;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($user_id){
      $user = User::find($user_id);
      $perros = Perro::where('user_id' , $user_id)->orderBy('created_at', 'DESC')->get();

      return view('profile', compact('user','perros'));

    }

    public function bio(Request $request){
      $user = Auth::user();
      $user->bio = $request->bio;
      $user->save();
      return redirect()->back();
    }

    public function admin(){

      return view('auth/login');
    }
    public function control(){
      $perros = Perro::where('publicado', false)->orderBy('created_at', 'DESC')->get();
      if (Auth::user()) {
        return view('control',['perros' => $perros]);
      } else {
        return redirect('/');
      }
    }

    }
