<?php
require('app/app.php');

if (!isset($_GET['term'])) {
    redirect('index.php');
}

// TODO: validate GET request input

$data = getTerm($_GET['term']);

if (!$data) {
    // TODO: Throw an error
    redirect('index.php');
}   

$viewBag = [
    'title' => 'Glossary'
];

view('detail', $data);
