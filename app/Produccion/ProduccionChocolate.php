<?php

namespace App\Produccion;

use Illuminate\Database\Eloquent\Model;

class ProduccionChocolate extends Model 
{
    protected $table = 'produccion_chocolate';
    

    public function chocolates()
    {
        return $this->hasMany(Chocolate::class);
    }

    public function produccion()
    {
        # code...
        return;
    }

    public function alarma()
    {
        # code...
        return;
    }

    public function finalizarProceso()
    {
        # code...
        return;
    }
}