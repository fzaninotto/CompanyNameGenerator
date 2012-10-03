<?php

require __DIR__ .'/vendor/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));
$i = 0;
while ($i < 20) {
    $name = $faker->companyName;
    if (!checkdnsrr('www.' . $name . '.com', 'ANY') && !checkdnsrr($name . '.com', 'ANY')) {
        echo "\n", $name;
        $i++;
    } else {
        echo '.';
    }
}
echo "\n";
