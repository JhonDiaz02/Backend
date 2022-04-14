<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    
    
    public function run()
    {
        DB::table('pais')->insert([
            'nombre' => 'Colombia'
        ]);

        DB::table('pais')->insert([
            'nombre' => 'Argentina'
        ]);

        DB::table('pais')->insert([
            'nombre' => 'España'
        ]);
    }
}
