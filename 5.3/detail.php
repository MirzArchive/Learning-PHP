<?php
require('app/app.php');

if (!isset($_GET['term'])) {
    redirect('index.php');
}

$viewBag = [
    'title' => 'The Glossary',
    'heading' => ''
];

$term = sanitize($_GET['term']);

$data = Data::getTerm($term);

if ($data == false) {
    $viewBag['heading'] = 'Status: Not Found';
    view('not_found', $viewBag);
    die();
}

$viewBag['heading'] = 'Detail for ' . $data->term;

view('detail', $data);
