<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i<50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->world();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '+1 days');
            $newTrain->train_code = $faker->bothify('???-####');
            $newTrain->number_coaches = $faker->randomDigitNotNull();
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
         }
   
       
    }
}
