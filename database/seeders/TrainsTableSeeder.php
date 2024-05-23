<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // we create a new instance of the train object
        $new_train = new Train();
        // we set the values
        $new_train->azienda = 'Trenitalia';
        $new_train->stazione_di_partenza = 'Milano';
        $new_train->stazione_di_arrivo = 'Roma';
        $new_train->orario_di_partenza = '2022-07-01 10:00:00';
        $new_train->orario_di_arrivo = '2022-07-01 12:00:00';
        $new_train->codice_treno = '75299';
        $new_train->numero_carrozze = 15;
        $new_train->in_orario = true;
        $new_train->cancellato = false;
        // we save it into the database
        $new_train->save();
        
    }
}
