<?php

require('../app/app.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Glossary'
];

view('admin/index', getTerms());