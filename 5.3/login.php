<?php
session_start();
require('app/app.php');

$viewBag = [
    'title' => 'Login',
    'heading' => 'Glossary',
    'status' => ''
];

if (isAuthenticated()) {
    redirect('admin/index.php');
}

if (isPost()) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = sanitize($_POST['password']);

    if ($email === false) {
        $viewBag['status'] = 'Please enter a valid email';
    }

    if (strlen($password) < 8) {
        $viewBag['status'] = 'A Password should be atleast 8 characters long';
    }

    if (authenticateUser($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin/index.php');
    } else {
        $viewBag['status'] = 'The provided credential are invalid';
    }
}


view('login', $viewBag);
