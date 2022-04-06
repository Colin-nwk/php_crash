<?php
// Simple Arrays
$numbers = [1, 2, 3, 4];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);

// var_dump($fruits);

// echo $fruits[0];

//Associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'yellow'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#00f',
    'green' => '#0f0'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Collins',
    'last_name' => 'Nwoko',
    'email' => 'collinsnwoko05@gmail.com'
];

// echo $person['first_name'];


$people = [
    [
        'first_name' => 'Collins',
        'last_name' => 'Nwoko',
        'email' => 'collinsnwoko05@gmail.com'
    ],
    [
        'first_name' => 'Chibuke',
        'last_name' => 'Nwoko',
        'email' => 'colin3001@live.com'
    ],
];

// var_dump($people[0]['last_name']);

var_dump(json_encode($people));
