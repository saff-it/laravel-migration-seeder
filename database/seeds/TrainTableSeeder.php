<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
   
    public function run()
    {
        $trains = [
            [
                'company_name'=> 'Italo',
                'departure_station'=> 'Milano',
                'arrival_station'=> 'Roma',
                'departure_time'=> '12:00',
                'arrival_time'=> '15:00',
                'departure_date'=> '2022/12/22',
                'train_code'=> 'AK154774',
                'coach_number'=> 9,
                'is_on_time'=> true,
                'is_cancelled'=> false,
            ],
            [
                'company_name'=> 'Trnitalia',
                'departure_station'=> 'Parma',
                'arrival_station'=> 'La Spezia',
                'departure_time'=> '10:00',
                'arrival_time'=> '1:00',
                'departure_date'=> '2022/12/22',
                'train_code'=> 'SS154792',
                'coach_number'=> 4,
                'is_on_time'=> true,
                'is_cancelled'=> false,
            ],
            [
                'company_name'=> 'The Train',
                'departure_station'=> 'Barcellona',
                'arrival_station'=> 'Siracusa',
                'departure_time'=> '1:00',
                'arrival_time'=> '19:00',
                'departure_date'=> '2022/12/22',
                'train_code'=> 'WR18515',
                'coach_number'=> 1,
                'is_on_time'=> false,
                'is_cancelled'=> true,
            ],
        ];

        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->company_name = $train['company_name'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->coach_number = $train['coach_number'];
            $newTrain->is_on_time = $train['is_on_time'];
            $newTrain->is_cancelled = $train['is_cancelled'];
            $newTrain->save();

        }
    }
}
