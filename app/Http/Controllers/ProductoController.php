<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // no debo olvidar agregarlo al enrutamiento.
    public function tabla() {
     
        $productos=Producto::all();
        return view("producto.tabla",['productos'=>$productos]);

    }
}
