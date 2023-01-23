<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'tipologia' => 'REG',
                'train_number' => '794',
                'destinazione' => 'Ravenna',
                'orarioArrivo' => 14.30,
                'ritardo' => 20,
                'binario' => 5
            ],
            [
                'tipologia' => 'RGV',
                'train_number' => '9816',
                'destinazione' => 'Milano',
                'orarioArrivo' => 16.30,
                'ritardo' => 100,
                'binario' => 2
            ]
        ];


        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->tipologia = $elem['tipologia'];
            $newTrain->train_number = $elem['train_number'];
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->orarioArrivo = $elem['orarioArrivo'];
            $newTrain->ritardo = $elem['ritardo'];
            $newTrain->binario = $elem['binario'];
            $newTrain->save();
        }
    }
}
