<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ParticipantsTableSeeder extends Seeder {

    public function run()
    {
        for ($i=1; $i <= 50; $i++) { TestDummy::create('participant_female', ['points' => rand(1,100)]); }
        for ($i=1; $i <= 50; $i++) { TestDummy::create('participant_male', ['points' => rand(1,100)]); }
    }

}