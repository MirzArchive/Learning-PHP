<?php
require('app/app.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Glossary'
];

$data = new FileDataProvider(CONFIG['data_file']);

if (isset($_GET['search']) && $_GET['search'] != '') {
    view('search', $data->searchTerms($_GET['search']));
    die();
}

view('index', $data->getTerms());
