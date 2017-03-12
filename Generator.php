<?php
use Faker\Factory;

require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "Give me 3 Fake Names: \n";
for ($i=1; $i < 4; $i++) {
  echo $faker->name . "\n";
}
echo "\nAddress: " . $faker->address . "\n";
echo "\nEmail: " . $faker->email . "\n";
echo "\nCreditCardNumber: " . $faker->creditCardNumber . "\n";

echo "\nImage: " . $faker->image($dir = '/tmp', $width = 640, $height = 480);

echo "\nRandom Digit: " . $faker->randomDigit . "\n";
echo "\nRandom Number: " . $faker->randomNumber . "\n";
