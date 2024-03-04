<?php
header('Content-Type: application/json');

$names = [
    'person1' => 'أحمد',
    'person2' => 'فاطمة',
    'person3' => 'محمد',
    'person4' => 'ليلى',
    'person5' => 'علي'
];

echo json_encode($names, JSON_PRETTY_PRINT);
