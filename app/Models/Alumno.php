<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

    protected $fillable = [
        'nombre',
        'identificacion',
        'correo'
    ];

    use HasFactory;
    public function curso(){
        return $this->belongsToMany(Curso::class, 'alumno:curso');
    }
    
}
