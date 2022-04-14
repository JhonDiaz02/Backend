<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudad')->insert([
            'nombre' => 'Bogotá',
            'departamento_id' => 1
        ]);

        DB::table('ciudad')->insert([
            'nombre' => 'Medellín',
            'departamento_id' => 2
        ]);

        DB::table('ciudad')->insert([
            'nombre' => 'Ibagué',
            'departamento_id' => 3
        ]);


        DB::table('ciudad')->insert([
            'nombre' => 'La plata',
            'departamento_id' => 4
        ]);

        DB::table('ciudad')->insert([
            'nombre' => 'Santa Fe de la Vera Cruz',
            'departamento_id' => 5
        ]);

        DB::table('ciudad')->insert([
            'nombre' => 'Viedma',
            'departamento_id' => 6
        ]);
    }
}
