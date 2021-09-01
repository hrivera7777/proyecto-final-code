<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaPrima\InventarioSuministro;

class RetiroInventario extends Controller
{
    public function show() {
        $inventario = InventarioSuministro::all();
        
        return view('retiroInventario',['datosInv',$inventario]);
    }

    public function retirar(Request $request){
        return view();
    }
}
