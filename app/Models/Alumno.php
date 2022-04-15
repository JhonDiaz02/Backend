<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

    protected $fillable = [
        'ciudad_id',
        'nombre',
        'identificacion',
        'correo'
    ];
    
    public function cursos(){
        return $this->hasMany(AlumnoCurso::class);
    }

    public function ciudadable(){
        return $this->hasOne(Ciudad::class,'id', 'ciudad_id');
    }

    public function alumno(){
        return $this->hasMany(Ciudad::class,'id', 'ciudad_id');
    }
    
}
