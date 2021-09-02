<?php

namespace App\Personal;

use App\Personal\Empleado;

class Administrador extends Empleado
{
    private function consultarProveedor(int $nit){
        //it will be created in another life
        return $nit;
    }

    public function actualizarProveedor(int $nit)
    {
        # code...
        return $nit;

    }
    
    public function registrarProveedor(int $nit)
    {
        # code...
        return $nit;
    }

    public function conultarRecolector(int $cedula)
    {
        # code...
        return $cedula;
    }

    public function conultarOperario(int $cedula)
    {
        # code...
        return $cedula;
    }

}