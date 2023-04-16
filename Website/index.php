<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn-PHP</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Sate Ayam">Sate Ayam<br>
        <input type="checkbox" name="foods[]" value="Fried Rice">Fried Rice<br>
        <input type="checkbox" name="foods[]" value="Nasi Uduk">Nasi Uduk<br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['foods'])) {
    $foods = $_POST['foods'];
    foreach ($foods as $food) {
        echo "{$food}<br>";
    }
}
?>