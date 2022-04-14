<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert([
            'id' => 1,
            'nombre' => 'Cundinamarca',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Antioquia',
            'pais_id' => 1
        ]);

        DB::table('departamento')->insert([
            'nombre' => 'Tolima',
            'pais_id' => 1
        ]);


        DB::table('departamento')->insert([
            'nombre' => 'Buenos Aires',
            'pais_id' => 2
        ]);
        DB::table('departamento')->insert([
            'nombre' => 'Santa Fe',
            'pais_id' => 2
        ]);
        DB::table('departamento')->insert([
            'nombre' => 'Río Negro',
            'pais_id' => 2
        ]);


        DB::table('departamento')->insert([
            'nombre' => 'Madrid',
            'pais_id' => 3
        ]);
        DB::table('departamento')->insert([
            'nombre' => 'Barcelona',
            'pais_id' => 3
        ]);
        DB::table('departamento')->insert([
            'nombre' => 'Sevilla',
            'pais_id' => 3
        ]);


    }
}
