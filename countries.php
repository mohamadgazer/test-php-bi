<?php
header('Content-Type: application/json');

$countries = [
    'country1' => ['name' => 'Country 1', 'population' => 1000000],
    'country2' => ['name' => 'Country 2', 'population' => 2000000],
    'country3' => ['name' => 'Country 3', 'population' => 3000000],
];

echo json_encode($countries, JSON_PRETTY_PRINT);
?>
