<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        Curso::create([
            'nombre' => 'Juan',
            'fecha_inicio_curso' => '2020/04/06',
            'fecha_final_curso' => '2020/04/06'
        ]);
    }
}
