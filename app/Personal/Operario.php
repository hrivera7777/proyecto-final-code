<?php

namespace App\Personal;

use App\Personal\Empleado;

class Operario extends Empleado
{
    protected $activo = true;
    
    public function inabilitarOperario(int $cedula)
    {
        # code...
        return $cedula;
    }
    public function consultarEstadoProduccion()
    {
        # code...
        return;
    }
}
