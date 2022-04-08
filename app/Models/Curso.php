<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $fillable = [
        'nombre',
        'fecha_inicio_curso',
        'fecha_final_curso'
    ];
}
