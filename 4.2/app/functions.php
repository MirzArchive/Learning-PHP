<?php
function view($name, $data)
{
    global $viewBag;
    require("views/layout.view.php");
}

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
