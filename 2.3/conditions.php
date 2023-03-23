<?php

// $result = 1 < 3;
// echo $result == false;

$firstName = 'Spongebob';
$lastName = 'Squarepants';

if ($firstName == 'spongebob' || $lastName == 'squarepants') {
    echo 'The first condition is true';
}

else if ($firstName == 'Spongebob' || $lastName == 'Squarepants') {
    echo 'The second condition is true';
}

else {
    echo 'The conditions are false';
}
