<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //devuelve la vista inicial
    public function index(){
        $productos = \App\Producto::all();
        return view('inicio.main', ['productos' => $productos]);
    }
}
