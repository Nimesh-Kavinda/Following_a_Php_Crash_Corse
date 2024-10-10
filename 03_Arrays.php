<?php
// Simple Arrays

$numbers = [1,2,3,4,5,6];
$fruits = array('apple', 'mango', 'orange');

// var_dump($numbers);

// echo $fruits[0];

// Associative Arrays

$colors = [
    1 => 'red',
    3 => 'blue',
    9 => 'pink'
];

// you can make custom index and assing it to a value

// echo $colors[9];

 $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
 ];

//  echo $hex['red'];

$person = [
    'first_name' => 'Nimesh',
    'last_name' => 'KAvinda',
    'email' => 'nimesh@gmail.com'
];

// echo $person['email'];

// Multi Dimencial Arrays

$people = [
    [
    'first_name' => 'Nimesh',
    'last_name' => 'KAvinda',
    'email' => 'nimesh@gmail.com'
],
[
    'first_name' => 'dimuth',
    'last_name' => 'adithya',
    'email' => 'dimuth@gmail.com'
],
[
    'first_name' => 'dulanka',
    'last_name' => 'nimsara',
    'email' => 'dulanka@gmail.com'
]
];

// echo $people[1]['email']; // Acces to multi dimencial array

// var_dump(json_encode($people));
?>