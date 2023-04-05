<?php

function authenticateUser($email, $password)
{
    $validEmail = false;
    $validPassword = false;

    if ($email == CONFIG['users']['email']) {
        $validEmail = true;
    }

    if ($password == CONFIG['users']['password']) {
        $validPassword = true;
    }

    return $validEmail && $validPassword;
}

function isAuthenticated()
{
    return isset($_SESSION['email']);
}

function ensureAuthorization(string $redirectURL)
{
    if (isAuthenticated() === false) {
        redirect($redirectURL);
        die();
    }
}
