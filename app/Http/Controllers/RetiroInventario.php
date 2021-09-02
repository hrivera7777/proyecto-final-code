<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaPrima\InventarioSuministro;
use App\MateriaPrima\Suministro;

class RetiroInventario extends Controller
{
    public function show() {
        $inventario = InventarioSuministro::all();
        $suministrosCompletos = [];

        foreach ($inventario as $inv) {
            
            $suministro =Suministro::find($inv->id_suministro);
            array_push($suministrosCompletos,$suministro);
        }
        
        //dd($inventarioCompleto);           
        return view('retiroInventario',['datosInv'=>$inventario,'datosSumi'=>$suministrosCompletos]);
    }

    public function retirarSuministro(Request $request){
        //dd($request->input('inputCantidades'));
        $inventario = InventarioSuministro::where('id',$request->input('inputIdInven'))->first();
        if ($inventario->cantidades > $request->input('inputCantidades')){
            $inventario->cantidades = $inventario->cantidades - $request->input('inputCantidades');
        }
        
        $inventario->save();

        return view('succesful');
    }
}
