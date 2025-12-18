<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;


class PaisController extends Controller
{

    public function tabla() {
     
        $paises=Pais::all();
        return view("pais.tabla",['paises'=>$paises]);

    }
}
