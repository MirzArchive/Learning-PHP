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
        <label for="phone-number">Phone Number:</label><br>
        <input type="text" name="phone-number" id="phone-number">
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['phone-number'])) {
        $phoneNumber = $_POST['phone-number'];

        try {
            echo testPhoneNumber($phoneNumber);
        } catch (TypeError $err) {
            echo "<br> WARNING! {$err->getMessage()}";
        }
    }
}

function testPhoneNumber(int $phoneNumber)
{
    return "Your phone number is {$phoneNumber}";
}
?>