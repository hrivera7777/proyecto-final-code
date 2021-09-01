<?php

namespace App\MateriaPrima;

use Illuminate\Database\Eloquent\Model;

class Suministro extends Model
{
    protected $table = 'suministro';
    
    public function inventarioSuministro()
    {
        return $this->hasMany(InventarioSuministro::class);
    }
}
