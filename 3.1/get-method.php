<?php
$title = 'GET Method';
include('./../Inc/header.php');
require('./../Inc/functions.php');

// http://localhost:8888/3.1/get-method.php?productid=value
// $productID = $_GET['productid'];

// http://localhost:8888/3.1/get-method.php?category=value&limit=value
$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

function showOutput($log, $data) {
    echo "<p>$log : $data</p>";
}

if (!$category || !$limit) die();

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="column">
        <form method="$_POST"></form>
        
        <?php 
        showOutput('Showing category', $category);
        showOutput('Limit of', $limit);
        ?>
    </div>
</div>

<?php include('./../inc/footer.php'); ?>