<?php
$title = 'Includes';
include('./../inc/header.php');
require('./../inc/functions.php');

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

$food_names = pluck($foodss, 'price');

?>

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

<?php include('./../inc/footer.php'); ?>