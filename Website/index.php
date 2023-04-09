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
        <label for="quantity">Quantities</label>
        <input type="number" name="quantity" id="quantity"><br>
        <input type="submit" value="Order"><br>
    </form>
</body>

</html>

<?php
// echo "{$_GET['username']}<br>";
// echo $_GET['password'];

if (isset($_POST['quantity'])) {
    echo "You ourder {$_POST['quantity']} x Pizzas <br>";
    echo "The total is $" . $_POST['quantity'] * 128_500;
}
?>