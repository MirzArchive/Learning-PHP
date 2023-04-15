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
        <input type="radio" name="payment-type" id="visa" value="Visa">Visa<br>
        <input type="radio" name="payment-type" id="mastercard" value="Mastercard">Mastercard<br>
        <input type="radio" name="payment-type" id="american-express" value="American Express">American Express<br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['payment-type'])) {
    $paymentType = $_POST['payment-type'];

    switch ($paymentType) {
        case 'Visa':
            echo "You choose {$paymentType}";
            break;
        case 'Mastercard':
            echo "You choose {$paymentType}";
            break;
        case 'American Express':
            echo "You choose {$paymentType}";
            break;
        default:
            echo 'Please select atleast your payment method';
            break;
    }
}

?>