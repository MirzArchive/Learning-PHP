<?php
require('app/app.php');

$viewBag = [
    'title' => 'Glossary'
];

view('index', getTerms());
?>