<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produccion\ProduccionChocolate;
use App\Personal\Operario;

class ChocolateProducido extends Controller
{
    public function show() {
        return view('chocolateProducido');
    }
    public function verificarCedula(Request $request){
        if (Operario::where('cedula',$request->input('inputCedula'))->exists()){
            return view('ingresoChocolateProd');
        }
        else{
            return view('chocolateProducido');
        }
    }
    public function ingresoChocolateProd(Request $request)
    {
        $produccion = new ProduccionChocolate();

        $produccion->cantidad_chocolate= $request->inputChocolateProd;
        
        
        $date = date('Y-m-d H:i:s');
        
        $produccion->fecha_finalizacion=strval($date);
        
        $produccion->save();
        return view('succesful');
    }
}
