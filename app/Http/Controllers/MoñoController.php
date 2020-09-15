<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoñoController extends Controller
{
    public function index()
    {

        return view('welcome');
        // $name = config('app.name');
        // dump($name);
        // dd("hola");




        // return view('$name');
    }
}
