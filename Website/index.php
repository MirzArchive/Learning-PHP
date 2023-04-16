<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn-PHP</title>
</head>

<body>
    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age"><br>
        <input type="submit" name="login" value="Submit"><br>
    </form>
</body>
<?php

if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    if (empty($email)) {
        echo 'Email was not valid';
    } else {
        echo "{$username}<br>{$age}";
    }
}

?>

</html>