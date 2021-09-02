<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal\Recolector;
use App\Recoleccion\Recoleccion;

class CantidadesCacao extends Controller
{
    function show(){
        return view('cantidadesCacao');
    }

    public function verificarCedula(Request $request){
        if (Recolector::where('cedula',$request->input('inputCedula'))->exists()){
            return view('ingresoCantidadCacao');
        }
        else{
            return view('cantidadesCacao');
        }
    }
    
    public function ingresoCantidadCacao(Request $request){
        $recoleccion = new Recoleccion();
        $recoleccion->cantidad_recolectada= $request->inputCantidadCacao;
        
        $date = date('Y-m-d H:i:s');

        $recoleccion->fecha_recoleccion =strval($date);
        
        $recoleccion->save();
        return view('succesful');
    }

}
