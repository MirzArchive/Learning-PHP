<?php 
// if (!isset($title)) {
//     $title = 'Please set $title variable in the php file';
// }
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

    <h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $title ?> </h1>
