<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // no debo olvidar agregarlo al enrutamiento.
    public function tabla() {
        // Laravel, existen dos formas de conectarse a la base de datos
        // Database    
        //$productos=DB::table("productos")->get();
        //$productos=DB::select("select * from productos");
        //return $productos;

        // Eloquent (ORM)
        $productos=Producto::all();
        return view("producto.tabla",['productos'=>$productos]);

    }
}
