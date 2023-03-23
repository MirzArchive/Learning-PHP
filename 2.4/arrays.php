<?php

// Traditional Array
// $foods = array('Shawarma', 'Kebab', 'Fufu', 'Steak');

$foods1 = ['Shawarma', 'Kebab', 'Fufu', 'Steak'];

// echo $foods;
// print_r($foods);

// $index = 3;

// if (isset($foods1[$index])) {
//     echo $foods1[$index];
// } else {
//     echo "array foods of index $index does not exist";
// }

// Associative Array
$foods2 = [
    'breakfast' => 'white rice with well-done egg',
    'lunch' => 'shawarma',
    'dinner' => 'dry-aged steak'
];

if (isset($foods2['beverage'])) {
    echo $foods2['beverage'];
}
else {
    echo "foods item not found";
}
