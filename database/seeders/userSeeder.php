<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for ($i = 0; $i <= 49; $i++) {
            $user = User::create([
                'nombre' => $faker->name,
                'documento' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'direccion' => $faker->address,
                'profesion' => $faker->randomDigit,
                'telefono' => $faker->PhoneNumber,
                'empresa_anterior' => $faker->company,
                'perfil_laboral' => $faker->text(150),
                'estado' => $faker->numberBetween($min = 0, $max = 1),
                'email' => $faker->email,
                'password' => $faker->password()

            ]);
        }
    }
}
