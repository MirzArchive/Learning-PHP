<?php
session_start();

if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}

echo "Hello {$_SESSION['username']}! <br> Welcome to the Index Page";
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
    <form action="" method="post">
    <input type="submit" value="Log Out" name="logout">
    </form>
</body>
</html>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    die();
}
?>
