<?php 
function output($value)
{
    global $log;
    echo $log;
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function pluck($arr, $key)
{
    $result = array_map(function ($item) use ($key) {
        return $item[$key];
    }, $arr);

    return $result;
}

function authenticateUser($email, $password) {
    $validEmail = false;
    $validPassword = false;
    
    if ($email == USER_NAME) {
        $validEmail = true;
    }

    if ($password == PASSWORD) {
        $validPassword = true;
    }

    return $validEmail && $validPassword;
}

function redirect($url) {
    header("Location: $url");
}

function isAuthenticated() {
    return isset($_SESSION['email']);
}

function ensureAuthorization() {
    if (!isAuthenticated()) {
        redirect('sessions.php');
        die();
    }
}
