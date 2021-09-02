<?php

namespace App\Personal;

use App\Personal\Empleado;

class Recolector extends Empleado
{
    protected $activo = true; 

    public function recolectar()
    {
        # code...
        return;
    }

    public function inabilitarRecolectar(int $cedula)
    {
        # code...
        return $cedula;
    }

}