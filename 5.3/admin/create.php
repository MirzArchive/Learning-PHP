<?php

session_start();
require('../app/app.php');
ensureAuthorization('../login.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Create Term'
];

if (isPost()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $summary = sanitize($_POST['summary']);

    if (empty($term) || empty($definition) || empty($summary)) {
        redirect('index.php');
    } else {
        Data::createTerm($term, $definition, $summary);
        redirect('index.php');
    }
}

view('admin/create', '');
