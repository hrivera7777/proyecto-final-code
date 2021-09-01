<?php

namespace App\Produccion;

use Illuminate\Database\Eloquent\Model;

class Chocolate extends Model
{
    protected $table = 'chocolate';

    public function produccion_chocolate()
    {
        return $this->belongsTo(ProduccionChocolate::class);
    }
}
