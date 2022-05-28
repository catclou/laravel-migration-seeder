<?php

use Illuminate\Database\Seeder;

use App\Models\Train;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->id();
        $train->azienda = 'Trenitalia';
        $train->stazione_partenza = 'Bari Centrale';
        $train->stazione_arrivo = 'Milano Centrale';
        $train->orario_partenza = '2022-01-13 08:50:00';
        $train->orario_arrivo = '2022-01-13 14:50:00';
        $train->codice_treno = 'AF158P4F';
        $train->numero_carrozze = 8;
        $train->in_orario = true;
        $train->cancellato = false;
        $train->timestamps();

        $train->save();
    }
}
