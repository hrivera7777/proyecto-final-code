<?php

namespace App\MateriaPrima;

use Illuminate\Database\Eloquent\Model;

class InventarioSuministro extends Model
{
    protected $table = 'inventario_suministro';
    
  
    public function suministro()
    {
        return $this->belongsTo(Sumnistro::class);
    }

    public function ingresarPedido()
    {
        # code...
        return;
    }

    public function retirarSuministro()
    {
        # code...
        return;
    }

    public function notificacionEscases()
    {
        # code...
        return;
    }

    public function ingresarSuministro()
    {
        # code...
        return;
    }

    public function modificarSuministro()
    {
        # code...
        return;
    }

    public function consultarSuministro()
    {
        # code...
        return;
    }


}
