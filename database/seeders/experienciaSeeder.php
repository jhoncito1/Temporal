<?php

namespace Database\Seeders;

use App\Models\experiencia;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class experienciaSeeder extends Seeder
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
            $experiencia = experiencia::create([
                'empresa'=>$faker->company,
                'actividades'=>$faker->text(20),
                'fecha_ingreso'=>$faker->date,
                'fecha_final'=>$faker->date
            ]);
        }
    }
}
