<?php

$title = 'Function';
$log = '<p>Hello user! here is the output of your php code</p>';

$foods = [
    'Krabby Patty',
    'Shawarma',
    'Carbonara',
    'Lasagna',
    'Ramen'
];

$foodss = [
    ['name' => 'Krabby Patty', 'price' => 6899],
    ['name' => 'Shawarma', 'price' => 867],
    ['name' => 'Carbonara', 'price' => 2588],
    ['name' => 'Lasagna', 'price' => 4273],
    ['name' => 'Ramen', 'price' => 2147]
];

function output($value)
{
    global $log;
    echo $log;
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function pluck($arr, $key) {
    $result = array_map(function($item) use($key){
        return $item[$key];
    }, $arr);

    return $result;
}

$food_names = pluck($foodss, 'price');

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
        <div class="column">
            <?php output($food_names) ?>
        </div>
    </div>
</body>

</html>