<?php

namespace Database\Seeders;

use App\Models\Train; //l'ho aggiunto io
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i=0; $i<20; $i++) {

            $train = new Train();

            $train->Azienda = $faker->word(); 
            $train->Stazione_di_partenza = $faker->city(); 
            $train->Stazione_di_arrivo = $faker->city(); 
            $train->Orario_di_partenza = $faker->time("H:i"); 
            $train->Orario_di_arrivo = $faker->time("H:i"); 
            $train->Codice_Treno = $faker->bothify('??#####'); 
            $train->Numero_Carrozze = $faker->numberBetween(1, 30); 
            $train->In_orario = $faker->boolean(); 
            $train->Cancellato = $faker->boolean(); 



            $train->save();
        }
    }
}
