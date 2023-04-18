<?php
$fileName = 'test.txt';

if (file_exists($fileName)) {
    $handle = fopen($fileName, 'r');

    $content = fread($handle, filesize($fileName));
    $content = explode(PHP_EOL, $content);

    foreach($content as $element) echo "Value: {$element} <br>";
}
    