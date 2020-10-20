<?php

namespace Database\Seeders;

use App\Models\titulo;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;

class tituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=faker::create();
        for ($i=0; $i <= 9 ; $i++) { 
            $titulo = titulo::create([
                'nombre_titulo'=>$faker->jobTitle,
                'institucion'=>$faker->company,
                'fecha_titulado'=>$faker->date,
            ]);
        }
    }
}
