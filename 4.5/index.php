<?php
require('app/app.php');

$viewBag = [
    'title' => 'Glossary'
];

if (isset($_GET['search'])) {
    view('search', searchTerms($_GET['search']));
    die();
}

view('index', getTerms());
?>