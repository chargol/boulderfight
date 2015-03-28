<?php 

$factory('Boulderfight\Participant', 'participant_female', [
	'firstname' => $faker->firstName('female'),
	'lastname' => $faker->lastName,
	'gender' => 'w',
	'birthday' => $faker->dateTimeThisCentury(),
	'points' => rand(1,100)
]);

$factory('Boulderfight\Participant', 'participant_male', [
	'firstname' => $faker->firstName('male'),
	'lastname' => $faker->lastName,
	'gender' => 'm',
	'birthday' => $faker->dateTimeThisCentury(),
	'points' => rand(1,100)
]);