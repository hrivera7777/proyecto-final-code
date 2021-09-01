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
}
