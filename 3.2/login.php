<?php
$title = 'GET Method';
include('./../Inc/header.php');
require('./../Inc/functions.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//     if (!$email) {
//         $status = 'Please enter a valid email';
//     }
// }

if (isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $status = 'Please enter a valid email';
    }

    $password = $_POST['password'];
    if (strlen($password) < 8) {
        $status = 'A Password should be atleast 8 characters long';
    }
}


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