<?php 
session_start();
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
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $_SESSION['username'] = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['password'] = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    header('Location: index.php');
    die();
}

echo 'Please enter Username and Password';
?>