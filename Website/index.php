<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn-PHP</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="country">Country:</label><br>
        <input type="text" name="country" id="country" placeholder="Country Name">

        <input type="submit" value="Enter">
    </form>
</body>

</html>

<?php
$capitals = [
    'Indonesia' => 'Jakarta',
    'USA' => 'Washington D.C',
    'Japan' => 'Tokyo',
    'China' => 'Beijing',
    'India' => 'New Delhi',
];

if (isset($_POST['country'])) {
    $country = $_POST['country'];
    $capital = $capitals[$country];

    echo "The capital city of {$country} is {$capital}";
}
?>