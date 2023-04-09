<?php
$name = "Mirza";

$user = [
    "name" => "Mirza",
    "email" => "fake@email.com",
    "age" => 21,
    "favoriteFood" => "Lasagna"
];

$foodOrder = [
    "name" => "Pizza",
    "amount" => 7,
    "pricePerPiece" => 84700.99
];

echo "Hello {$user['name']}<br>";
echo "You like {$user['favoriteFood']}<br>";
echo "Your age is {$user['age']}<br>";
echo "And your Email is {$user['email']}<br>";
echo "You ordered {$foodOrder['name']}<br>";
echo "With the amount of {$foodOrder['amount']} {$foodOrder['name']}s<br>";
echo "The total price is {$foodOrder['pricePerPiece']} x {$foodOrder['amount']} = $" . 
$foodOrder['pricePerPiece'] * $foodOrder['amount'];
