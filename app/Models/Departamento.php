<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $fillable = [
        'nombre',
        'pais_id'
    ];

    public function ciudades(){
        return $this->hasMany(Ciudad::class);
    }

    public function pais(){
        return $this->hasOne(Pais::class,'id', 'pais_id');
    }

}
