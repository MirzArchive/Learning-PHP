<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Fundamentals: <?= $viewBag['title']; ?></title>
    <link href="../Assets/CSS/bootstrap.min.css" rel="stylesheet" />
    <link href="../Assets/CSS/php-fundamentals.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Fundamentals: <?= $viewBag['title']; ?></a>
        </div>
    </nav>
    <h1 style="text-align: center; margin-top: 30px; font-weight: bold;"> <?= $viewBag['title']; ?> </h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5"></h1>
            </div>
        </div>
        <?php require("$name.view.php") ?>
    </div>
</body>

</html>