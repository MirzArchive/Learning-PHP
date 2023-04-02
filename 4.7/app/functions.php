<?php
function view($name, $data)
{
    global $viewBag;
    require(APP_DIR . "views/layout.view.php");
}

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function redirect($url)
{
    header("Location: $url");
    die();
}

function isPost()
{
    return ($_SERVER['REQUEST_METHOD'] === 'POST');
}

function sanitize($value) {
    $temp = htmlspecialchars(trim($value), FILTER_UNSAFE_RAW);

    if ($temp === false) return '';

    return $temp;
}
