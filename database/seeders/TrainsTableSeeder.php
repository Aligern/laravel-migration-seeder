<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
# we import the faker library
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) #we call the faker library in the run function
    {
        // $trains = json_decode(file_get_contents(__DIR__ . '/trains.json'), true);
        // dd($trains);
        // foreach ($trains as $train) {
        //     $new_train = new Train();
        //     $new_train->azienda = $train['azienda'];
        //     $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
        //     $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
        //     $new_train->orario_di_partenza = $train['orario_di_partenza'];
        //     $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
        //     $new_train->codice_treno = $train['codice_treno'];
        //     $new_train->numero_carrozze = $train['numero_carrozze'];
        //     $new_train->in_orario = $train['in_orario'];
        //     $new_train->cancellato = $train['cancellato'];
        //     $new_train->save();
        // }

        for ($i = 0; $i < 30; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTime();
            $new_train->orario_di_arrivo = $faker->dateTime();
            $new_train->codice_treno = $faker->ean8();
            $new_train->numero_carrozze = $faker->numberBetween(6, 15);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
