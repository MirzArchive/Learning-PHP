<?php
$title = 'SESSIONS';
require_once('./../Inc/functions.php');
require_once('./../Inc/config.php');

session_start();

if (isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email) {
        $status = 'Please enter a valid email';
    }

    if (strlen($password) < 8) {
        $status = 'A Password should be atleast 8 characters long';
    }

    if (authenticateUser($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('./../admin.php');
        die();
    } else {
        $status = 'The provided credential are invalid';
    }
}


include('./../Inc/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"></h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="from-group">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
    <div class="row">
        <?php
        if (isset($status)) {
            echo $status;
        }
        ?>
    </div>
</div>

<?php include('./../inc/footer.php'); ?>