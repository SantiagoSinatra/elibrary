<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    //devuelve la vista de productos
    public function index(){
        return view('productos.productos');
    }

    public function create(){
        return view('productos.crear');
    }

    public function save(Request $request){
        $rules = [
            'name_prod'=>'required',
            'price'=>'required|numeric',
            'category_id'=>'required|numeric'
        ];

        $messages = [
            'required'=>'Este campo es requerido',
            'numeric'=>'Ingrese solamente numeros'
        ];

        $this->validate($request,$rules,$messages); /* valida la request que le paso con las reglas que le paso */
        $product = new Producto($request->all());
        $product->save();
        return redirect('/productos');

    }
}
