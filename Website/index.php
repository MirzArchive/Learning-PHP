<?php
// setcookie('favorite-food', 'pizza', time() + (86400 * 2), '/');
// setcookie('favorite-drink', 'lemonade', time() + (86400 * 1), '/');
// setcookie('favorite-dessert', 'ice cream', time() + (86400 * 4), '/');

setcookie('favorite-food', 'pizza', time() - 0, '/');
setcookie('favorite-drink', 'lemonade', time() - 0, '/');
setcookie('favorite-dessert', 'ice cream', time() - 0, '/');

foreach ($_COOKIE as $key => $value) echo "{$key} = {$value} <br>";

if (isset($_COOKIE['favorite-food'])) echo "Your favorite food is {$_COOKIE['favorite-food']}";
else echo 'You have no favorite food';