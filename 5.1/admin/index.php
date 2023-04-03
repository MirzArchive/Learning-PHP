<?php

session_start();
require('../app/app.php');
ensureAuthorization('../login.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Glossary'
];

view('admin/index', getTerms());