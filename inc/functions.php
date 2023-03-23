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
?>