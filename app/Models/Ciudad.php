<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';

    protected $fillable = [
        'nombre',
        'departamento_id'
    ];

    public function alumnos(){
        return $this->hasMany(Alumno::class);
    }

    public function ciudad(){
        return $this->hasMany(Ciudad::class,'id', 'departamento_id');
    }

}
