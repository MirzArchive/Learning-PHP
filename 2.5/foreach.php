<?php

$title = 'foreach loop';

$foods = [
    'Krabby Patty',
    'Shawarma',
    'Carbonara',
    'Lasagna',
    'Ramen'
];

$foodsWithKeys = [
    'burger' => 'Krabby Patty',
    'middle east' => 'Shawarma',
    'italian' => 'Carbonara',
    'authentic' => 'Lasagna',
    'japanese' => 'Ramen'
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="../Assets/CSS/bootstrap.min.css" rel="stylesheet" />
    <link href="../Assets/CSS/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5"></h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <?php
                foreach ($foods as $food) {
                    echo "<tr><td>$food</td></tr>";
                }
                ?>
            </table>
            <table class="table table-striped">
                <?php
                foreach ($foodsWithKeys as $key => $food) {
                    echo "<tr><td>$key</td><td>$food</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>