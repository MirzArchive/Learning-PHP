<?php
require('fileDatabase.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="register.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>

<?php
$db = new FileDatabase('database.json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email'] && !empty($_POST['password']))) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $db->setData($email, $hashedPassword);

        header('Location: login.php');
        die();
    }
}
?>