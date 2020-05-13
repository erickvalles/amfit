<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParteCuerpo extends Model
{
    protected $table = 'partes_cuerpo';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion'
    ];
}
