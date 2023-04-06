<?php
require('app/app.php');

if (!isset($_GET['id'])) {
    redirect('index.php');
}

$viewBag = [
    'title' => 'The Glossary',
    'heading' => ''
];

$id = sanitize($_GET['id']);

$data = Data::getTerm($id);

if ($data == false) {
    $viewBag['heading'] = 'Status: Not Found';
    view('not_found', $viewBag);
    die();
}

$viewBag['heading'] = 'Detail for ' . $data->term;

view('detail', $data);
