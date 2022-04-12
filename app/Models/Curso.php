<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $fillable = [
        'nombre',
        'fecha_inicio_curso',
        'fecha_final_curso'
    ];

    use HasFactory;
    public function alumno(){
        return $this->belongsToMany(Alumno::class, 'alumno_curso');
    }
}
