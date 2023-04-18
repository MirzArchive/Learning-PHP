<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="number">Number:</label><br>
        <input type="text" name="number" id="number"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['number'])) {
        $number = $_POST['number'];

        try {
            echo (isEven($number)) ? 'It\'s an Even number!' : 'It\'s an Odd number!';
        } catch (TypeError $err) {
            echo "WARNING: {$err->getMessage()}";
        }
    }
}

function isEven(int $n) {
    return ($n % 2 === 0) ? true : false;
}
?>