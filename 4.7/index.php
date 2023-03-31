<?php
require('app/app.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Glossary'
];

if (isset($_GET['search']) && $_GET['search'] != '') {
    view('search', searchTerms($_GET['search']));
    die();
}

view('index', getTerms());
?>