<?php
require('app/app.php');

if (!isset($_GET['term'])) {
    redirect('index.php');
}

$viewBag = [
    'title' => 'The Glossary',
    'heading' => ''
];

// TODO: validate GET request input

$data = getTerm($_GET['term']);

if ($data == false) {
    $viewBag['heading'] = 'Status: Not Found';
    view('not_found', $viewBag);
    die();
}

$viewBag['heading'] = 'Detail for ' . $data->term;

view('detail', $data);
