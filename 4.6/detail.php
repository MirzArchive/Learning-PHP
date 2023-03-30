<?php
require('app/app.php');

if (!isset($_GET['term'])) {
    redirect('index.php');
}

// TODO: validate GET request input

$data = getTerm($_GET['term']);

if ($data == false) {
    $viewBag['title'] = 'Not Found Page';
    view('not_found', $viewBag);
    die();
}

$viewBag = [
    'title' => 'Detail for ' . $data->term
];

view('detail', $data);
