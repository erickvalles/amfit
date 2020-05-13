<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "tipos_usuarios";

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
