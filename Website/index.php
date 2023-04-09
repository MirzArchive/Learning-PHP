<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn-PHP</title>
</head>

<body>
    <!-- <form action="index.php" method="get">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login"><br>
    </form> -->
    <form action="index.php" method="post">
        <label for="x">X:</label>
        <input type="number" name="x" id="x"><br>
        <label for="y">Y:</label>
        <input type="number" name="y" id="y"><br>
        <label for="z">Z:</label>
        <input type="number" name="z" id="z"><br>
        <input type="submit" value="Total"><br>
    </form>
</body>

</html>

<?php
// echo "{$_GET['username']}<br>";
// echo $_GET['password'];

if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])) {
    // echo abs($_POST['x']) . "<br>";
    // echo abs($_POST['y']) . "<br>";
    // echo abs($_POST['z']) . "<br>";

    echo rand($_POST['x'], $_POST['z']);
}
?>