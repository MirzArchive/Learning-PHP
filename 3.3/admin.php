<?php
include('./../Inc/functions.php');

session_start();

ensureAuthorization();

echo $_SESSION['email'];
?>