<?php 
session_start();
session_unset();
session_destroy();

require_once('./../Inc/functions.php');

redirect('sessions.php');
?>