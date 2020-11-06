<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable = [
        'nombre_autos', 
        'fecha_publicacion',
        'texto_parrafo', 
        'imagen',
        'user_id'
    ];
}
